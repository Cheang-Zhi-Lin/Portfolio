<?php
$page_title = "Projects";
$current_page = "projects";
include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="page-intro-section">
        <div class="container page-intro">
            <p class="small-label">Project archive</p>
            <h1>My Projects</h1>
            <p class="page-intro-text">
                A collection of practice projects where I build layouts and features using
                HTML, CSS, JavaScript, PHP, and XAMPP.
            </p>
        </div>
    </section>

    <section class="projects-section">
        <div class="container">
            <div class="projects-grid">
                <article class="project-card large-project-card">
                    <img src="assets/images/project-dashboard.svg" alt="Dashboard style portfolio project preview">
                    <div class="project-content">
                        <div class="tag-row">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                        </div>
                        <h2>Personal Website</h2>
                        <p>
                            A custom-built digital identity project focused on modern layout design,
                            spacing, and smooth front-end interactions.
                        </p>
                        <a href="index.php">View Live Page</a>
                    </div>
                </article>

                <article class="project-card">
                    <img src="assets/images/project-calculator.svg" alt="Calculator project preview">
                    <div class="project-content">
                        <div class="tag-row">
                            <span>HTML</span>
                            <span>JS</span>
                        </div>
                        <h2>Simple Calculator</h2>
                        <p>
                            A beginner JavaScript practice project that focuses on event listeners
                            and number operations in the browser.
                        </p>
                        <a href="contact.php">Ask About This Project</a>
                    </div>
                </article>

                <article class="project-card">
                    <img src="assets/images/project-contact.svg" alt="Contact form project preview">
                    <div class="project-content">
                        <div class="tag-row">
                            <span>PHP</span>
                            <span>CSS</span>
                        </div>
                        <h2>Contact Form</h2>
                        <p>
                            A server-side contact form project using PHP validation and XAMPP
                            to process messages safely on a local server.
                        </p>
                        <a href="contact.php">Try The Form</a>
                    </div>
                </article>

                <article class="project-card">
                    <img src="assets/images/project-journal.svg" alt="Journal project preview">
                    <div class="project-content">
                        <div class="tag-row">
                            <span>HTML</span>
                            <span>PHP</span>
                        </div>
                        <h2>Learning Journal</h2>
                        <p>
                            A simple website idea for tracking weekly study progress, coding notes,
                            and lessons learned while improving technical skills.
                        </p>
                        <a href="about.php">Read My Journey</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="stack-section">
        <div class="container stack-grid">
            <div>
                <h2>Technical Stack</h2>
                <p>
                    Building strong fundamentals first helps me understand how each part of a website
                    works together before moving into more advanced tools.
                </p>
            </div>

            <div class="stack-badges">
                <div class="stack-badge">HTML5</div>
                <div class="stack-badge">CSS3</div>
                <div class="stack-badge">JavaScript</div>
                <div class="stack-badge">PHP</div>
                <div class="stack-badge">XAMPP</div>
                <div class="stack-badge">MySQL</div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
