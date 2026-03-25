const menuButton = document.getElementById("menuButton");
const siteNavigation = document.getElementById("siteNavigation");
const navigationLinks = document.querySelectorAll("#siteNavigation a");

// This part opens and closes the mobile menu.
if (menuButton && siteNavigation) {
    menuButton.setAttribute("aria-expanded", "false");

    menuButton.addEventListener("click", function () {
        const isMenuOpen = siteNavigation.classList.toggle("open-menu");
        menuButton.setAttribute("aria-expanded", String(isMenuOpen));
    });

    navigationLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            if (window.innerWidth <= 700) {
                siteNavigation.classList.remove("open-menu");
                menuButton.setAttribute("aria-expanded", "false");
            }
        });
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 700) {
            siteNavigation.classList.remove("open-menu");
            menuButton.setAttribute("aria-expanded", "false");
        }
    });
}

// This adds the current year into the footer automatically.
const footerYear = document.getElementById("footerYear");

if (footerYear) {
    footerYear.textContent = new Date().getFullYear();
}

// These are the elements that will animate when they scroll into view.
const scrollAnimationItems = document.querySelectorAll(
    ".hero-text, .hero-image-card, .page-intro, .tool-card, .info-card, .callout-card, .project-card, .wide-info-card, .side-info-card, .mini-skill-card, .about-image-card, .contact-left-panel, .contact-form-card, .beyond-code-text, .beyond-code-images, .quote-box, .resume-card"
);

// This observer watches the screen and checks when an element becomes visible.
const scrollAnimationObserver = new IntersectionObserver(
    function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("show-scroll-animation");
                scrollAnimationObserver.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.2
    }
);

scrollAnimationItems.forEach(function (item, index) {
    item.classList.add("scroll-animation");

    // We alternate directions to make the page feel more alive.
    if (index % 2 === 0) {
        item.classList.add("scroll-from-left");
    } else {
        item.classList.add("scroll-from-right");
    }

    // This creates a small delay so cards do not appear all at once.
    const delayNumber = (index % 4) * 0.12;
    item.style.setProperty("--scroll-delay", delayNumber + "s");

    scrollAnimationObserver.observe(item);
});

// Replace these two placeholder values with your real Supabase details.
const supabaseProjectUrl = "PASTE_YOUR_SUPABASE_PROJECT_URL_HERE";
const supabaseAnonKey = "PASTE_YOUR_SUPABASE_ANON_PUBLIC_KEY_HERE";
const supabaseTableName = "contact_messages";

const contactForm = document.getElementById("contactForm");
const contactSuccessMessage = document.getElementById("contactSuccessMessage");
const contactErrorMessage = document.getElementById("contactErrorMessage");
const contactSubmitButton = document.getElementById("contactSubmitButton");

function hideContactMessages() {
    if (contactSuccessMessage) {
        contactSuccessMessage.hidden = true;
    }

    if (contactErrorMessage) {
        contactErrorMessage.hidden = true;
    }
}

function showContactError(messageText) {
    if (contactErrorMessage) {
        contactErrorMessage.textContent = messageText;
        contactErrorMessage.hidden = false;
    }
}

function showContactSuccess(messageText) {
    if (contactSuccessMessage) {
        contactSuccessMessage.textContent = messageText;
        contactSuccessMessage.hidden = false;
    }
}

// This checks the form and sends the data to Supabase.
if (contactForm) {
    contactForm.addEventListener("submit", async function (event) {
        event.preventDefault();
        hideContactMessages();

        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const messageInput = document.getElementById("message");

        const nameValue = nameInput.value.trim();
        const emailValue = emailInput.value.trim();
        const messageValue = messageInput.value.trim();

        if (nameValue === "" || emailValue === "" || messageValue === "") {
            showContactError("Please fill in all fields before sending your message.");
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(emailValue)) {
            showContactError("Please enter a valid email address.");
            return;
        }

        if (
            supabaseProjectUrl === "PASTE_YOUR_SUPABASE_PROJECT_URL_HERE" ||
            supabaseAnonKey === "PASTE_YOUR_SUPABASE_ANON_PUBLIC_KEY_HERE"
        ) {
            showContactError("Please add your real Supabase Project URL and anon public key inside scripts/script.js before using the contact form.");
            return;
        }

        if (contactSubmitButton) {
            contactSubmitButton.disabled = true;
            contactSubmitButton.textContent = "Sending...";
        }

        const requestUrl = supabaseProjectUrl + "/rest/v1/" + supabaseTableName;
        const requestBody = {
            name: nameValue,
            email: emailValue,
            message: messageValue
        };

        try {
            const response = await fetch(requestUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    apikey: supabaseAnonKey,
                    Authorization: "Bearer " + supabaseAnonKey,
                    Prefer: "return=minimal"
                },
                body: JSON.stringify(requestBody)
            });

            if (!response.ok) {
                throw new Error("Supabase insert failed.");
            }

            contactForm.reset();
            showContactSuccess("Your message was sent successfully and saved in Supabase.");
        } catch (error) {
            showContactError("Something went wrong while sending your message. Please check your Supabase URL, anon public key, and insert policy.");
        } finally {
            if (contactSubmitButton) {
                contactSubmitButton.disabled = false;
                contactSubmitButton.textContent = "Send Message";
            }
        }
    });
}
