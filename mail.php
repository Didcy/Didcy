<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

include("functions.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
function Mailer(){
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

$mailerState = CacheMail($_POST["email"], "DidcyMailer", $_POST["username"]);

if($mailerState["state"] == 0){
	echo json_encode(array("state"=>-2000, "message_data"=>'Server Error', "username"=>$_POST["username"], "email"=>$_POST["email"]));
	return;
}
else if($mailerState["state"] == 1){
	echo json_encode(array("state"=>-2001, "message_data"=>'Service Error', "username"=>$_POST["username"], "email"=>$_POST["email"]));
	return;
}
else if($mailerState["state"] == 2){
	echo json_encode(array("state"=>-2002, "message_data"=>'Message has been sent', "username"=>$_POST["username"], "email"=>$_POST["email"]));
	return;
}
else if($mailerState["state"] == 3){
	echo json_encode(array("state"=>-2003, "message_data"=>'Message has been sent', "username"=>$_POST["username"], "email"=>$_POST["email"]));
	return;
}
else{
	echo json_encode(array("state"=>-2004, "message_data"=>'Server Error', "username"=>$_POST["username"], "email"=>$_POST["email"]));
	return;
}

echo json_encode(array("state"=>1, "message_data"=>'Message has been sent',
"username"=>$_POST["username"], "email"=>$_POST["email"]));
return;
}

function CacheMail($mailer = null, $tablename = [], $username = ""){
	$query = "show tables like '".$tablename."';";
	if(count(fetchAll($query)) == 0){
		$query = "create table if not exists ".$tablename."(
		       mailerID bigint(50) primary key auto_increment, 
			   senderID bigint(50) unique not null, 
			   reciepient varchar(255) not null unique, 
			   sender char(255) not null, 
			   username nvarchar(255) not null,
			   operation_time time not null, 
			   operation_date date not null, 
			   operation_datetime dateitme not null,
			   operation_timestamp timestamp not null
		);";
		if(performQuery($query) == false){
			return array("state"=>0);
		}
		$query = "insert into ".$tablename."(senderID, reciepient, sender, username, operation_time, operation_date, 
		operation_datetime, operation_timestamp) values('".$senderID."', '".$mailer."', '".$sender."', '".$username."',  
		CURRENT_TIME, CURRENT_DATE, CURRENT_DATETIME, CURRENT_TIMESTAMP);";
		if(performQuery($query) == false){
			return array("state"=>1);
		}else{
			return array("state"=>2);
		}
	}
	$query = "select * from ".$tablename." where reciepient='".$mailer."' and sender='".$sender."';";
	if(count(fetchAll($query)) > 0){
		return array("state"=>3);
	}
		$query = "insert into ".$tablename."(senderID, reciepient, sender, username, operation_time, operation_date, 
		operation_datetime, operation_timestamp) values('".$senderID."', '".$mailer."', '".$sender."', '".$username."',  
		CURRENT_TIME, CURRENT_DATE, CURRENT_DATETIME, CURRENT_TIMESTAMP);";
		if(performQuery($query) == false){
			return array("state"=>1);
		}else{
			return array("state"=>2);
		}
	}
}

Mailer();

?>