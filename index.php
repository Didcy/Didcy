<?php
/* $loginError = '';
if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
	include ('chat/Chat.php');
	$chat = new Chat();
	$user = $chat->loginUsers($_POST['username'], $_POST['pwd']);
	if(!empty($user)) {
		$_SESSION['username'] = $user[0]['username'];
		$_SESSION['userid'] = $user[0]['userid'];
		$chat->updateUserOnline($user[0]['userid'], 1);
		$lastInsertId = $chat->insertUserLoginDetails($user[0]['userid']);
		$_SESSION['login_details_id'] = $lastInsertId;
		header("Location:chat/chat.htm");
	} else {
		$loginError = "Invalid username or password!";
	}
} */

?>

<?php

  require("connect_server.php");
  
  function createNotification(){
		  $connect = ConnectServer(1);

			 if($connect["state"] != 500006){
				 return $connect;
			 }
			 
			 $connect = $connect["connect"];

	 $sql = "create table if not exists notifications (
	                   senderId bigint not null,
					   sendername varchar(255),
					   id bigint primary key auto_increment,
					   name varchar(255), 
					   type char(20), 
					   message text, 
					   status nvarchar(255), 
					   date nchar(255),
					   filename text,
					   fileId text);";
	 
	 $connect_result = $connect->query($sql);

	 if($connect_result === FALSE){
		 $connect->close();
		 return array("state"=>-5);
	 }

	 $sql = "create table if not exists badgeClickHome(
				 click smallint not null default 1
			 );";
	 
	 $connect_result = $connect->query($sql);

	 if($connect_result === FALSE){
		 $connect->close();
		 return array("state"=>-6);
	 }
	 
	 $sql = "create table if not exists badgeClick(
	             id bigint primary key,
				 click smallint not null default 1
			 );";
	 
	 $connect_result = $connect->query($sql);	 

	 if($connect_result === FALSE){
		 $connect->close();
		 return array("state"=>-7);
	 }

	 $connect->close();
	 return array("state"=>5);
  }
  
  function createDidcyPrivacy($timeId, $timeIP, $iP, $clientIP){
				     $connect = ConnectServer(1);

					 if($connect["state"] != 500006){
						 return $connect;
					 }
					 
					 $connect = $connect["connect"];



/* 					$server_target_db = "drop table if exists didcyPrivacy;";
					
					$connect_result = $connect->query($server_target_db);
					if ($connect_result === False) {
					  return array("state"=>3, "error"=>$connect->error, "close"=>$connect->close());
					} */
					
					
					// sql to create table
					$server_target_db = "create table if not exists didcyPrivacy(
                         timeId bigint not null,
                         timeIP bigint not null,
						 iP varchar(100) not null,
						 clientIP varchar(100) not null
					);";
					
					$connect_result = $connect->query($server_target_db);
					if ($connect_result === False) {
					  return array("state"=>3, "error"=>$connect->error, "close"=>$connect->close());
					}
						
						$server_target_db = "select * from didcyPrivacy where clientIP='".$clientIP."';";//md5(trim($password))."';";
						
						$connect_result = $connect->query($server_target_db);
			            
						$fr4 = "";
						
					    if ($connect_result->num_rows > 0) {
						  $server_target_db = "update didcyPrivacy set timeId='".$timeId."', timeIP='".$timeIP."', iP='".$iP."', clientIP='".$clientIP."' where clientIP='".$clientIP."';";
						  $fr4 = 40;
					    }else{
						  $server_target_db = "insert into didcyPrivacy(timeId, 
							timeIP, iP, clientIP) 
							values('".$timeId."', '".$timeIP."', '".$iP."', '".$clientIP."');";
							$fr4 = 4;
						}


						$connect_result = $connect->query($server_target_db);
						if($connect_result === False){
							return array("state"=>$fr4, "error"=>$connect->error, "close"=>$connect->close());
						}	  
						
						return  array("state"=>5, "error"=>$connect->error, "close"=>$connect->close());
  }
  
  
  
  
 
  if(isset($_COOKIE) == FALSE){
      session_destroy();
	  echo "Cookie not enabled";
  }else{ 

      if(empty($_COOKIE) != TRUE && count($_COOKIE) > 5){
		  if(empty($_COOKIE["GAGA_RESPONSE"]) != true || $_COOKIE["GAGA_RESPONSE"] != ""){
	         $cookie_id = $_COOKIE["GAGA_RESPONSE"];
	         $link = "adv-main.php?drim=".$cookie_id;
			 echo "<script type='text/javascript'>
					  'use strict';
				      window.location.replace('".$link."');
				   </script>";
		     //echo $cookie_id;
			 return;
		  }else{
			  setcookie("GAGA_RELATIONS", "r99303922022");
			  include("index/index.php");
          }
      }else{
		  session_start();
		  $ip_address = $_SERVER['REMOTE_ADDR'];
		  
		  $ipaddress = "";
		  $timeId = 0;
		  $timeIP = 0;
		  $ClientIP = "";
		  
		  if($ip_address == "::1"){
			  $ipaddress = ip2long("127.0.0.1");
			  $timeId = time()+rand(1, 233921233);
			  $timeIP = $ipaddress+$timeId;
			  $ClientIP = "127.0.0.1";
		  }else{
			  $ipaddress = ip2long($ip_address);
			  $timeId = time()+rand(1, 233921233);
			  $timeIP = $ipaddress+$timeId;
			  $ClientIP = $ip_address;
		  }
		  
		  $didcyError = createDidcyPrivacy($timeId, $timeIP, $ipaddress, $ClientIP);
		  
		  if($didcyError["state"] == 0){
			  echo "Timestamp error 0 ".$didcyError["error"];
			  return;
		  }else if($didcyError["state"] == 1){
			  echo "Timestamp error 1 ".$didcyError["error"];
			  return;
		  }else if($didcyError["state"] == 2){
			  echo "Timestamp error 2 ".$didcyError["error"];
			  return;
		  }else if($didcyError["state"] == 3){
			  echo "Timestamp error 3 ";
			  return;
		  }else if($didcyError["state"] == 4){
			  echo "Timestamp error 4 ".$didcyError["error"];
			  return;
		  }else if($didcyError["state"] == 40){
			  echo "Timestamp error 40 ".$didcyError["error"];
			  return;
		  }else{}
		  
		  $notification = createNotification();
		  
		  if($notification["state"] == -5){
			  echo "Server Error 59";
			  return;
		  }
		  
		  //echo $ipaddress;
		  //return;
		  setcookie("GAGA_RELATIONS", "r99303922022");
		  setcookie("TTLIP", $timeIP);
		  include("index/index.php");
      }
  }

?>