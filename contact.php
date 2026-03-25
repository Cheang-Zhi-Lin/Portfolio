<?php
$page_title = "Contact";
$current_page = "contact";

$form_name = "";
$form_email = "";
$form_message = "";
$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $form_name = trim($_POST["name"] ?? "");
    $form_email = trim($_POST["email"] ?? "");
    $form_message = trim($_POST["message"] ?? "");

    if ($form_name === "" || $form_email === "" || $form_message === "") {
        $error_message = "Please fill in your name, email, and message.";
    } elseif (!filter_var($form_email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid email address.";
    } else {
        $data_folder = __DIR__ . "/data";
        $message_file = $data_folder . "/contact_messages.txt";

        if (!is_dir($data_folder)) {
            mkdir($data_folder, 0777, true);
        }

        $safe_name = strip_tags($form_name);
        $safe_email = strip_tags($form_email);
        $safe_message = strip_tags($form_message);
        $date_time = date("Y-m-d H:i:s");

        $message_text = "Date: " . $date_time . PHP_EOL;
        $message_text .= "Name: " . $safe_name . PHP_EOL;
        $message_text .= "Email: " . $safe_email . PHP_EOL;
        $message_text .= "Message: " . $safe_message . PHP_EOL;
        $message_text .= str_repeat("-", 50) . PHP_EOL;

        file_put_contents($message_file, $message_text, FILE_APPEND);

        $success_message = "Your message was saved successfully. Check data/contact_messages.txt in your project folder.";
        $form_name = "";
        $form_email = "";
        $form_message = "";
    }
}

include __DIR__ . "/includes/header.php";
?>

<main>
    <section class="contact-page-section">
        <div class="container contact-grid">
            <div class="contact-left-panel">
                <p class="small-label">Status: open for collaboration</p>
                <h1>Let's Talk!</h1>
                <p class="contact-intro-text">
                    Have a question or want to talk about coding? I'd love to connect,
                    learn from others, and hear about interesting ideas or projects.
                </p>

                <div class="social-card-row">
                    <a class="social-card" href="https://github.com/Cheang-Zhi-Lin" target="_blank" rel="noreferrer">GitHub</a>
                    <a class="social-card" href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn</a>
                </div>

                <div class="contact-side-image">
                    <img src="assets/images/circuit-board.svg" alt="Circuit board themed illustration">
                </div>
            </div>

            <div class="contact-form-card">
                <?php if ($success_message !== ""): ?>
                    <div class="message-box success-message"><?php echo htmlspecialchars($success_message); ?></div>
                <?php endif; ?>

                <?php if ($error_message !== ""): ?>
                    <div class="message-box error-message"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>

                <form class="contact-form" action="contact.php" method="post" id="contactForm">
                    <div class="two-column-inputs">
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" value="<?php echo htmlspecialchars($form_name); ?>">
                        </div>

                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" value="<?php echo htmlspecialchars($form_email); ?>">
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="8" placeholder="Hi, I'd love to talk about..."><?php echo htmlspecialchars($form_message); ?></textarea>
                    </div>

                    <button class="primary-button full-width-button" type="submit">Send Message</button>
                    <p class="form-note">Messages are saved locally in your XAMPP project folder.</p>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
