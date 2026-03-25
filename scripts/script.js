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

const contactForm = document.getElementById("contactForm");
const contactSuccessMessage = document.getElementById("contactSuccessMessage");

// This checks the form before it is submitted.
if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const messageInput = document.getElementById("message");

        const nameValue = nameInput.value.trim();
        const emailValue = emailInput.value.trim();
        const messageValue = messageInput.value.trim();

        if (nameValue === "" || emailValue === "" || messageValue === "") {
            alert("Please fill in all fields before sending your message.");
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(emailValue)) {
            alert("Please enter a valid email address.");
            return;
        }

        const contactEmail = contactForm.dataset.contactEmail;
        const emailSubject = encodeURIComponent("Portfolio Website Contact from " + nameValue);
        const emailBody = encodeURIComponent(
            "Name: " + nameValue + "\n" +
            "Email: " + emailValue + "\n\n" +
            "Message:\n" + messageValue
        );

        if (contactSuccessMessage) {
            contactSuccessMessage.hidden = false;
        }

        window.location.href = "mailto:" + contactEmail + "?subject=" + emailSubject + "&body=" + emailBody;
    });
}
