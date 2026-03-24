<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!$email) {
        die("Invalid email format.");
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hanahmendoza78@gmail.com';
        $mail->Password   = 'kktmzcwisfldqmqc'; // replace this
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // IMPORTANT FIX 👇
        $mail->setFrom('hanahmendoza78@gmail.com', 'Portfolio Contact');
        $mail->addAddress('hanahmendoza78@gmail.com'); 
        $mail->addReplyTo($email, $name);

        // EMAIL CONTENT
        $mail->isHTML(true);
        $mail->Subject = "New Message from Portfolio";
        $mail->Body = "
            <h3>New Message</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();

        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php';
              </script>";

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>