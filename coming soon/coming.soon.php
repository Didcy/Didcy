<?php

	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	/*use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require '../vendor/autoload.php';*/
	require '../functions.php';

 
 
 function NLO_STREAM($nlo){
   $nloStream = json_decode($_POST["nloStream"]);
   $nlo_data = array("u"=>"", "e"=>"", "s"=>"", "c"=>"", "state"=>0, "nlo"=>0);
   $nlo_data["u"] = $nloStream[0]->u;
   switch($nlo){
	case 0:
	    $nlo_data["state"] = 5500;
	break;
	case 1: 
		$nlo_data["e"] = $nloStream[0]->e;
		$nlo_data["state"] = 5501;
	break;
	case 2: 
		$nlo_data["s"] = $nloStream[0]->s;	
		$nlo_data["state"] = 5502;
	break;
	case 3: 
		$nlo_data["c"] = $nloStream[0]->c;
        $nlo_data["state"] = 5503;		
	break;
	case 4: 
	    $nlo_data["e"] = $nloStream[0]->e;
		$nlo_data["s"] = $nloStream[0]->s;
		$nlo_data["c"] = $nloStream[0]->c;
		$nlo_data["state"] = 5504;
	break;
	default: 
	 return;
   }
   $nlo_data["nlo"] = $nlo;
   $randomize = $_POST["randomize"];
   $noteMessage = CreateNote($nlo, $nlo_data, $randomize);
   
   if($noteMessage["state"] == 105){
	  echo json_encode(array("nlo_data"=>$nlo_data, "state"=>105));
   }else if($noteMessage["state"] == 106){
	   echo json_encode(array("nlo_data"=>$nlo_data, "state"=>106));
   }else if($noteMessage["state"] == 107){   
	   //SendMail($nlo, $nlo_data, $randomize);
	   echo json_encode(array("nlo_data"=>$nlo_data, "state"=>107));
   }else{
	   echo json_encode(array("nlo_data"=>$nlo_data, "state"=>404));
   }	
   return;
 }
 
 function CreateNote($nlo, $nlo_data, $randomize){
	 $table = "subscriptions";
	 $query = "SHOW TABLES LIKE '".$table."'";
	 $performQueryerProfile = null;
	 if(count(fetchAll($query)) == 0){

		$query = "create table if not exists ".$table."(
				  note_id varchar(255) not null,
				  username char(100) not null,
				  email char(100) not null,
				  sms varchar(20),
				  caller char(20),
				  incoming_id smallint not null
		);";
		
		$performQueryerProfile = performQueryer($query);
		if($performQueryerProfile["state"] != true){
		   return array("state"=>105, "error"=>$performQueryerProfile["error"]);
		}  
		 
		$query = "insert into ".$table."(note_id, username, email, sms, caller, incoming_id) 
		values('".$randomize."', '".$nlo_data["u"]."', '".$nlo_data["e"]."', '".$nlo_data["s"]."'
		, '".$nlo_data["c"]."', '".$nlo."');";
		
		$performQueryerProfile = performQueryer($query);
		if($performQueryerProfile["state"] != true){
		   return array("state"=>106, "error"=>$performQueryerProfile["error"]);
		}    
	 }else{
		 $state = 0;
		if($nlo == 1){
			$query = "select * from ".$table." where username='".$nlo_data["u"]."' and  
			email='".$nlo_data["e"]."' and incoming_id='".$nlo."';";
			$state = $nlo;
		}else if($nlo == 2){
			$query = "select * from ".$table." where username='".$nlo_data["u"]."'and  
			sms='".$nlo_data["s"]."' and incoming_id='".$nlo."';";
			$state = $nlo;		
		}else if($nlo == 3){
			$query = "select * from ".$table." where username='".$nlo_data["u"]."' and   
			caller='".$nlo_data["c"]."' and incoming_id='".$nlo."';";
			$state = $nlo;			
		}else if($nlo == 4){
			$query = "select * from ".$table." where username='".$nlo_data["u"]."' and  
			email='".$nlo_data["e"]."' and  sms='".$nlo_data["s"]."' and  caller='".$nlo_data["c"]."'
			 and incoming_id='".$nlo."';";
			$state = $nlo;			
		}
		
		if(count(fetchAll($query)) != 0){
		  return array("state"=>-404, "error"=>"");
		}
		 
		$query = "insert into ".$table."(note_id, username, email, sms, caller, incoming_id) 
		values('".$randomize."', '".$nlo_data["u"]."', '".$nlo_data["e"]."', '".$nlo_data["s"]."'
		, '".$nlo_data["c"]."', '".$nlo."');";
		
		$performQueryerProfile = performQueryer($query);
		if($performQueryerProfile["state"] != true){
		   return array("state"=>106, "error"=>$performQueryerProfile["error"]);
		}   
        
		if($nlo == 1){
		   SendMail($nlo, $nlo_data);
		}else if($nlo == 2){}	
		}else if($nlo == 3){}	
		}else if($nlo == 4){}	
	 }
	 return array("state"=>107, "error"=>$performQueryerProfile["error"]);
 }
 
 
function SendMail($nlo, $nlo_data){
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP(true);                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'info@didcy.com';                     //SMTP username
		$mail->Password   = 'didcycompany2022';                               //SMTP password
		//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
		//$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('info@didcy.com', 'Didcy');
		
		if($nlo == 0){
			
		}else if($nlo == 1){
		  $mail->addAddress($nlo_data["e"], $nlo_data["u"]);     //Add a recipient
		  $mail->addAddress($nlo_data["e"]);               //Name is optional			
		}else if($nlo == 2){
		  $mail->addAddress($nlo_data["s"], $nlo_data["u"]);     //Add a recipient
		  $mail->addAddress($nlo_data["s"]);               //Name is optional			
		}else if($nlo == 3){
		  $mail->addAddress($nlo_data["c"], $nlo_data["u"]);     //Add a recipient
		  $mail->addAddress($nlo_data["c"]);               //Name is optional			
		}else{
			
		}
		
		$mail->addReplyTo('info@didcy.com', 'Didcy Information');
		$mail->addCC('info@didcy.com'); //cc@example.com
		$mail->addBCC('info@.com'); //bcc@example.com

		//Attachments
		$mail->addAttachment('didcx.gaga.com.design.png');         //Add attachments
		$mail->addAttachment('didcy.png', 'didcy.png');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Didcy Launch Subscription';
		$mail->Body    = "We value your request to be the first and not the last.
		                  We'll notify you as soon as it's ready for use.
						  Thank you.";
						  
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo json_encode(array("state"=>1, "message_data"=>'Message has been sent',
		"username"=>$_POST["username"], "email"=>$_POST["email"]));
	} catch (Exception $e) {
		echo json_encode(array("state"=>2, "message_data"=>
		"Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
		"username"=>$_POST["username"], "email"=>$_POST["email"]));
	}
} 
 
 NLO_STREAM($_POST["nlo"]);
?>