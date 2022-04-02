<?php
 
 $receiver = "davidansong213@gmail.com";
 $subject = "Email from Didcy";
 $body = "This email is from Didcy Company LLC - ADVERT MADE SIMPLE";
 $sender = "From:info@didcy.com";
 
 if(mail($receiver, $subject, $body, $sender)){
	 echo "Email was successfully sent to ".$receiver;
 }else{
	 echo "Sorry, email wasn't sent";
 }

?>