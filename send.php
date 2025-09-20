<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'config.php'; // Make sure this path is correct

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get form inputs safely
    $name  = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = GMAIL_USER;           // from config.php
        $mail->Password   = GMAIL_APP_PASSWORD;;   // from config.php
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom(GMAIL_USER, 'Website Lead');
        $mail->addAddress(GMAIL_USER);  // Receive leads here
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'New Site Visit Lead';
        $mail->Body    = "Name: $name\nWhatsApp: $phone\nEmail: $email";

        // Send email
        $mail->send();

        // Redirect to thank you page
        header("Location: thankyou.html");
        exit;

    } catch (Exception $e) {
        // Show PHPMailer error
        echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>