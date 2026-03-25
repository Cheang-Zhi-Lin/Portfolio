<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title ?? "Portfolio"); ?> | Junior Dev</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-row">
            <a class="site-logo" href="index.php">Junior Dev</a>

            <button class="menu-button" id="menuButton" type="button" aria-label="Open navigation">
                Menu
            </button>

            <nav class="site-navigation" id="siteNavigation">
                <a class="<?php echo ($current_page === 'home') ? 'active-link' : ''; ?>" href="index.php">Home</a>
                <a class="<?php echo ($current_page === 'projects') ? 'active-link' : ''; ?>" href="projects.php">Projects</a>
                <a class="<?php echo ($current_page === 'about') ? 'active-link' : ''; ?>" href="about.php">About</a>
                <a class="<?php echo ($current_page === 'contact') ? 'active-link' : ''; ?>" href="contact.php">Contact</a>
            </nav>

            <a class="resume-button" href="resume.php">Resume</a>
        </div>
    </header>
