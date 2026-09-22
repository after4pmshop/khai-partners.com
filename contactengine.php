<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST["Name"] ?? ""));
    $city    = htmlspecialchars(trim($_POST["City"] ?? ""));
    $email   = filter_var(trim($_POST["Email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["Message"] ?? ""));

    // Email tujuan
    $to = "lawyer@khai-partners.com";

    // Subject email
    $subject = "New Consultation Request from " . $name;

    // Isi email
    $body = "You have received a new consultation request.\n\n";

    $body .= "Name: " . $name . "\n";
    $body .= "City: " . $city . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n";
    $body .= $message . "\n";

    // Header
    $headers  = "From: Website KHAI & Partners <lawyer@khai-partners.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {

        echo "<script>
                alert('Thank you. Your message has been sent successfully.');
                window.location.href='../contact-page.html';
              </script>";

    } else {

        echo "<script>
                alert('Sorry, your message could not be sent. Please try again.');
                window.history.back();
              </script>";
    }

} else {

    header("Location: ../contact-page.html");
    exit;

}
?>