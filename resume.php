<?php
$page_title = "Resume";
$current_page = "";
include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="page-intro-section">
        <div class="container resume-card">
            <div class="resume-heading">
                <p class="small-label">Simple resume page</p>
                <h1>Junior Developer Resume</h1>
                <p class="page-intro-text">
                    This is a beginner-friendly resume page. Later, you can replace this text
                    with your real education, experience, and technical projects.
                </p>
            </div>

            <div class="resume-grid">
                <div>
                    <h2>Profile</h2>
                    <p>
                        Computer Science student with a growing interest in front-end and back-end
                        development. Enjoys learning by building projects and improving step by step.
                    </p>
                </div>

                <div>
                    <h2>Skills</h2>
                    <ul class="simple-list">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>XAMPP</li>
                        <li>MySQL basics</li>
                    </ul>
                </div>

                <div>
                    <h2>Education</h2>
                    <p>Computer Science student</p>
                    <p>Add your university name and study year here.</p>
                </div>

                <div>
                    <h2>Goals</h2>
                    <p>
                        Looking for opportunities to grow through internships, practice projects,
                        and real-world teamwork.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
