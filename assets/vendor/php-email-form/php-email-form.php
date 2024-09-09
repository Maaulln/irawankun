<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'vivo38550@gmail.com';
    $subject = 'New message from ' . $_POST['fullname'];
    $message = $_POST['message'];
    $headers = 'From: ' . $_POST['email'];

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil dikirim!";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>