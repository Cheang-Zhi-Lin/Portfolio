<?php
$page_title = "About";
$current_page = "about";
include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="page-intro-section">
        <div class="container about-hero-grid">
            <div>
                <p class="small-label">Status: initializing journey</p>
                <h1>Every line of code is a <span>new discovery.</span></h1>
                <h2 class="story-title">My Story</h2>
                <p class="page-intro-text">
                    It started with a simple "Hello World" and quickly turned into genuine curiosity.
                    As a Computer Science student, I enjoy learning how websites work and how design,
                    logic, and problem solving all connect together.
                </p>
            </div>

            <div class="about-image-card">
                <img src="assets/images/about-desk.svg" alt="Workspace illustration showing a coding desk">
            </div>
        </div>
    </section>

    <section class="about-details-section">
        <div class="container about-details-grid">
            <article class="wide-info-card">
                <h2>What I'm Learning</h2>
                <div class="learning-skill-grid">
                    <div class="mini-skill-card">
                        <p>Language</p>
                        <h3>HTML / CSS</h3>
                    </div>
                    <div class="mini-skill-card">
                        <p>Logic</p>
                        <h3>JavaScript</h3>
                    </div>
                    <div class="mini-skill-card">
                        <p>Backend</p>
                        <h3>PHP</h3>
                    </div>
                    <div class="mini-skill-card">
                        <p>Server</p>
                        <h3>XAMPP</h3>
                    </div>
                    <div class="mini-skill-card">
                        <p>Database</p>
                        <h3>MySQL</h3>
                    </div>
                </div>
            </article>

            <article class="side-info-card">
                <h2>My Goals</h2>
                <p>
                    My main goal is to become a versatile web developer who can build websites
                    that are both visually appealing and functionally strong.
                </p>
                <ul class="goal-list">
                    <li>Build full-stack proficiency</li>
                    <li>Write cleaner and more readable code</li>
                    <li>Contribute to real projects with confidence</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="beyond-code-section">
        <div class="container beyond-code-card">
            <div class="beyond-code-text">
                <h2>Beyond Code</h2>
                <p>
                    When I'm not studying programming, I enjoy activities that help me recharge,
                    think creatively, and stay curious about the world.
                </p>

                <div class="hobby-badge-row">
                    <span>Reading sci-fi</span>
                    <span>Gaming</span>
                    <span>Crafting coffee</span>
                </div>
            </div>

            <div class="beyond-code-images">
                <img src="assets/images/galaxy.svg" alt="Galaxy themed illustration">
                <img src="assets/images/coffee-book.svg" alt="Book and coffee themed illustration">
            </div>
        </div>
    </section>

    <section class="quote-section">
        <div class="container quote-box">
            <blockquote>"The best way to predict the future is to create it."</blockquote>
            <p>
                I'm always open to talking about technology, learning new skills,
                and collaborating on interesting ideas.
            </p>
            <a class="primary-button" href="contact.php">Let's Connect</a>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
