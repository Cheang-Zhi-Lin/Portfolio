<?php
$page_title = "Home";
$current_page = "home";
include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="hero-section">
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="small-label">Currently learning web development</p>
                <h1>A Junior Dev's <span>Journey</span></h1>
                <p class="hero-description">
                    I'm a Computer Science student and an aspiring developer. I focus on building websites
                    that look clean, feel modern, and are easy for people to use.
                </p>

                <div class="button-row">
                    <a class="primary-button" href="projects.php">View My Work</a>
                    <a class="secondary-button" href="contact.php">Say Hello</a>
                </div>
            </div>

            <div class="hero-image-card">
                <img src="assets/images/hero-portrait.svg" alt="Illustration of a young developer portrait">
            </div>
        </div>
    </section>

    <section class="toolkit-section">
        <div class="container">
            <div class="section-heading">
                <p class="small-label">Technical toolkit</p>
                <div class="section-heading-row">
                    <h2>Bridging Theory &amp; Practice</h2>
                    <p class="section-note">Academic &amp; practical stack</p>
                </div>
            </div>

            <div class="toolkit-grid">
                <article class="tool-card">
                    <p class="tool-number">01</p>
                    <h3>HTML</h3>
                    <p>Structure</p>
                </article>
                <article class="tool-card">
                    <p class="tool-number">02</p>
                    <h3>CSS</h3>
                    <p>Styling</p>
                </article>
                <article class="tool-card">
                    <p class="tool-number">03</p>
                    <h3>JavaScript</h3>
                    <p>Interactivity</p>
                </article>
                <article class="tool-card">
                    <p class="tool-number">04</p>
                    <h3>PHP</h3>
                    <p>Backend</p>
                </article>
                <article class="tool-card">
                    <p class="tool-number">05</p>
                    <h3>XAMPP</h3>
                    <p>Local server</p>
                </article>
            </div>
        </div>
    </section>

    <section class="learning-section">
        <div class="container">
            <div class="section-heading">
                <h2>Current Learning</h2>
            </div>

            <div class="learning-grid">
                <article class="info-card">
                    <div class="info-icon">CSS</div>
                    <h3>Deepening CSS knowledge</h3>
                    <p>
                        Exploring advanced grid layouts, CSS variables, shadows, spacing systems,
                        and animation techniques to create more polished interfaces.
                    </p>
                </article>

                <article class="info-card">
                    <div class="info-icon">PHP</div>
                    <h3>Mastering PHP with XAMPP</h3>
                    <p>
                        Practicing form handling, validation, and saving data on a local server
                        so I can understand backend fundamentals clearly.
                    </p>
                </article>

                <article class="info-card">
                    <div class="info-icon">JS</div>
                    <h3>Exploring modern JavaScript</h3>
                    <p>
                        Learning arrays, objects, functions, DOM updates, and event handling
                        to make web pages feel more dynamic and interactive.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="callout-section">
        <div class="container">
            <div class="callout-card">
                <div>
                    <h2>Let's build the future together.</h2>
                    <p>
                        I am currently looking for internship opportunities or small projects
                        to grow my skills and contribute to the developer community.
                    </p>
                </div>
                <a class="primary-button" href="contact.php">Get In Touch</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
