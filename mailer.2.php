<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

function SendMail(){
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP(true);                                            //Send using SMTP
		$mail->Host       = 'smtp.zoho.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'info@didcy.com';                     //SMTP username
		$mail->Password   = 'didcycompany2022';                               //SMTP password
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
		//$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($_POST["email"], 'Thanks for subscribing to Didcy Newsletters');
		$mail->addAddress($_POST["email"], $_POST["username"]);     //Add a recipient
		$mail->addAddress($_POST["email"]);               //Name is optional
		$mail->addReplyTo('info@didcy.com', 'Thanks for subscribing to Didcy Newsletters');
		$mail->addCC('info@didcy.com'); //cc@example.com
		$mail->addBCC('info@didcy.com'); //bcc@example.com

		//Attachments
		$mail->addAttachment('didcx.gaga.com.design.png');         //Add attachments
		$mail->addAttachment('didcy.png', 'didcy.png');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Thanks for subscribing to Didcy Newsletters';
		$mail->Body    = 'Didcy Newletter subscription was successfully initiated. Thanks for subscribing. 
		You have being offered three months free books to read on our platform. Enjoy your read.<b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo json_encode(array("state"=>1, "message_data"=>'Message has been sent',
		"username"=>$_POST["username"], "email"=>$_POST["email"]));
	} catch (Exception $e) {
		echo json_encode(array("state"=>2, "message_data"=>
		"Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
		"username"=>$_POST["username"], "email"=>$_POST["email"]));
	}
 return;
}
