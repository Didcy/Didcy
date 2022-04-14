<?php
  
  require_once("connect_server.php");
  
  function matchf($password){
					     $connect = ConnectServer(0);

						 if($connect["state"] != 500006){
							echo json_encode($connect);
							return;
						 }
						 
						 $connect = $connect["connect"];
                         
						 $server_target_db = "select * from gaga where password='".$password."';";
						 $connect_result = $connect->query($server_target_db);
						 if($connect_result === False){
							 return 2;
						 }
						
						//echo $password;
						
						$id = "";
					    if ($connect_result->num_rows > 0) {
						    // output data of each row
						    while($row = $connect_result->fetch_assoc()) {
							  $id = $row["id"];
							  $companiesOnly = $row["companiesOnly"];
						   }
					    }else{
							return -2;
						}

                        return 3;						
  }
  
  function DidcyPrivacy($timeIP, $clientIP){
						 $server_name = "localhost";
						 $server_ip = "127.0.0.1";
						 $server_username = "root";
						 $server_password = "";
						 $server_dbname = "GAGA";
						 $server_port = 3306;
						
						 $connect = new mysqli($server_name, $server_username, $server_password, $server_dbname, $server_port);
						 if($connect->connect_error){
							 return json_encode(array("state"=>0));
						 }
						 $server_target_db = "use gaga;";
						 $connect_result = $connect->query($server_target_db);
						 if($connect_result === False){
							 return json_encode(array("state"=>0));
						 }
				


					$server_target_db = "create table if not exists gaga(
					   id bigint(50) primary key auto_increment,
					   email varchar(30) not null unique,
					   password text not null,
					   repeatPassword varchar(50) not null,
					   adInterest char(50) not null,
                       adFee bigint(50) not null,
					   companiesOnly char(2) null,
					   imageFileName varchar(255) null,
					   dirId varchar(30) null unique,
					   firstname varchar(20) not null default '',
					   middlename varchar(20) null,
					   lastname varchar(20) not null default '',
					   username nvarchar(255) not null default '',
					   profession nvarchar(255) null default '',
					   privateTelOptional varchar(20) null,
					   publicTelOptional varchar(20) null,
					   whatAppNoOptional varchar(20) null,
					   businessEmail varchar(20) null,
					   privatePersonalEmailOptional varchar(20) null,
					   facebookHandleOptional varchar(20) null,
					   twitterHandleOptional varchar(20) null,
					   instagramHandleOptional varchar(20) null,
					   youtubeHandleOptional varchar(20) null,
					   websiteDomainOptional varchar(20) null,
					   actorStory text null,
					   institutionName varchar(100) null,
					   ein varchar(30) null,
					   tin varchar(30) not null,
					   activity varchar(30) not null,
					   countryOfBirth varchar(30) null,
					   location varchar(100) null,
					   companyStory text null,
					   countryOfRegistration varchar(30) null,
					   companyRegistrationDate varchar(30) null					   
					  );";
					
					
					$connect_result = $connect->query($server_target_db);
					if ($connect_result === False) {
					  echo json_encode(array("state"=>12, "error"=>$connect->error));
					  return;
					}

					    if($clientIP == "::1"){
                          $clientIP = "127.0.0.1";
					    }			

                        if($clientIP == "127.0.0.1"){
						   $clientIP = "127.0.0.1";
						}						
					
						$server_target_db = "select * from didcyPrivacy where clientIP='".$clientIP."';";
						
						$connect_result = $connect->query($server_target_db);
						if($connect_result === False){
							return 2;
						}	
						
						//echo $password;
						
						$id = "";
					    if ($connect_result->num_rows > 0) {
						    // output data of each row
						    while($row = $connect_result->fetch_assoc()) {
							  $timeIP = $row["timeIP"];
						   }
					    }else{
							return -2;
						}

                        return $timeIP;		
  }
  
  
  function UID($count = 0, $uid = 0, $pssk = 0, $signID = 0){
	  
	  //$uid = $_POST["uid"];
	  //$pskk = $_POST["psk"];
	  
/* 	  $uuid = json_decode($uid);
	  $psk = json_decode($pssk); */

	  $uuid = $uid;
	  $psk = $pssk;
	  
	  $chars = "";
	  
	  $timeIP = DidcyPrivacy("", $_SERVER["REMOTE_ADDR"]);
	  
	  $numbers = array();
	  $i = 0;
	  
	  $char = "";

	  $text = "";
	  
 	  for($j = 0;$j < count($uuid);$j++){
		$char = $uuid[$j][0][0];
		for($k = 0;$k < count($char);$k++){
			$chars .= $char[$k];	
		}
		$text .= $chars.',';
		$numbers[$j] = $chars;
		$chars = "";
	  } 
	  
	  $nam = "";
	  $nams = [];
	  $chas = '';
	  
	  //return array($numbers);
	  
	  
	  for($inumber = 0;$inumber < count($numbers);$inumber++){
		  $chas = $numbers[$inumber];
		for($k = 0;$k < strlen($chas);$k++){
	       if($chas[$k] == '@'){
			   break;
		   }
			$nam .= hexdec(bin2hex($chas[$k]));
			
		}
		$nams[$inumber] = $nam; 
		$nam = "";
	  }
	  $benams = $nams;
	  
	  //return array($benams);
	  //return array($timeIP);
	  
	  for($iu = 0;$iu < count($nams);$iu++){
		$nams[$iu] = ($nams[$iu]-$timeIP);
		$nams[$iu] = ($nams[$iu]-2147483647);
		$nams[$iu] = (int)(($nams[$iu]-$psk[0]));
		$nams[$iu] = ($nams[$iu]-$psk[1]);
		$nams[$iu] = dechex($nams[$iu]);
		$nams[$iu] = hex2bin($nams[$iu]);		 
	  }
	  
	  $cat = "";
	  
	  //return array($nams);
	  
	  for($new = 0;$new < count($nams);$new++){
		  $cat .= $nams[$new];
	  }
	  
	  $rat = "";
	  
	  $boot = matchf($cat);
	  
	  if($boot == 3){
		  $rat = true;
		  return array($numbers, $nams, $cat, $rat);
	  }
	  else if($boot == 2 || $boot == -2){
		  if($signID == 0){
			$rat = 10;
		    return array($numbers, $nams, $cat, $rat);
		  }else{
			$rat = 11;
		    return array($numbers, $nams, $cat, $rat);			  
		  }
	  }
	  else{
		  $rat = false;
		  //if($count != 20){
			//  $count++;
			//  return UID($count, $uid, $pssk);
		  //}
		  return array($numbers, $nams, $cat, $rat);
		  
	  }
	 
	  
	  function recur($number = [], $y = 0, $psk = []){
		  if($y < count($number)){
			  $char = $number[$y];
			  $chars = ((($char-2147483647)-$psk[0])-$psk[1]);
			  $number[$y] = $chars-2;
			  $y++;
			  return recur($number, $y, $psk);
		  }
		  echo json_encode(((($number))));
		  return $number;
	  }

      $insert = array();

	  return; 
  }
 
?>