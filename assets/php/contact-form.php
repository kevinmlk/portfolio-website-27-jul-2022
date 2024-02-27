<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isMail();                                            //Send using PHP mail
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-auth.mailprotect.be';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@kevinmalekera.be';                     //SMTP username
    // $mail->Password   = 'midehcagzbvksqmk';                               //SMTP password
    $mail->Password   = 'grs8bn326A465z3AZ9O8';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info@kevinmalekera.be', 'Kevin Malekera');

    //DKIM record
    $mail->DKIM_domain = 'kevinmalekera.be';
    $mail->DKIM_private = PHPMailer/dkim/DKIMKey.txt;           // Make sure to protect the key from being publicly accessible!
    $mail->DKIM_selector = '1656531378.kevinmalekera';
    $mail->DKIM_identity = $email;

    //Content
    $mail->isHTML(true);
    $mail->CharSet = "text/html; charset=UTF-8;";
    $mail->Subject = $_POST['topic'];
    $mail->Body    = str_replace("\n", "<br/>", $_POST['message']);
    $mail->AltBody = $_POST['message'];

    //Sending the mail (and a message to the page)
    $mail->send();
    $message = 'Your message has been sent.';
    echo "<script>alert('$message');\nwindow.location.replace('https://kevinmalekera.be/contact.html');</script>";
} catch (Exception $e) {
    $message = "Your message could not be sent.";            //"Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>alert('$message');\nwindow.location.replace('https://kevinmalekera.be/contact.html');</script>";
}
exit();
?>