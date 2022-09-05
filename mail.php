<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->SMTPSecure = "ssl";

$mail->Host = "smtp.zoho.com";

$mail->Port = 465;

$mail->Username = "info@didcy.com";

$mail->Password = "didcycompany2022";

$mail->From = "info@didcy.com";

$mail->FromName = "Didcy";

$mail->AddAddress($_POST["email"]);

$mail->Subject = "Test with PHPMailer";

$mail->Body = "This is a sample body text!";

$mail->IsHTML (true);

$mail->send();

echo json_encode(array("state"=>1, "message_data"=>'Message has been sent',
"username"=>$_POST["username"], "email"=>$_POST["email"]));

?>