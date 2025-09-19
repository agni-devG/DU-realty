<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $phone   = htmlspecialchars($_POST['phone']);
    $email   = htmlspecialchars($_POST['email']);

    $to      = "satya@durealty.in"; // 👈 change this to your email
    $subject = "New Site Visit Lead";
    $message = "Name: $name\nWhatsApp: $phone\nEmail: $email";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "❌ Something went wrong. Please try again later.";
    }
}
?>
