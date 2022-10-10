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
  require("functions.php");
  
  function createNotification(){
		  $connect = connectserver(0);

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
					   fileId text,
					   audioAdImage text null, 
					   videoAdImage text null, 
					   privacy text null);";
	 
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
  
function CreateCryptoTable($tablename, $remote_ip, $hostname, $ttip):int{
	
	$query = "create table if not exists ".$tablename."(
	   host_id bigint(50) PRIMARY KEY auto_increment,
	   remote_ip varchar(55) not null, 
	   hostname char(50) not null, 
	   ttip bigint(20) not null, 
	   ctime time not null,
	   cdate date not null, 
	   cdatetime datetime not null,
	   ctimestamp timestamp not null
	);";
	
	if(performQuery($query) == false){
		return 0;
	}

	$query = "create table if not exists crypto_verse(
	   host_id bigint(50) PRIMARY KEY auto_increment,
	   remote_ip varchar(55) not null, 
	   hostname char(50) not null, 
	   ttip bigint(20) not null, 
	   ctime time not null,
	   cdate date not null, 
	   cdatetime datetime not null,
	   ctimestamp timestamp not null
	);";
	
	if(performQuery($query) == false){
		return -4;
	}
	
	$query = "select * from ".$tablename." where remote_ip='".$remote_ip."';";
	
	if(count(fetchAll($query)) > 0){
		$query = "update ".$tablename." set ttip='".$ttip."', hostname='".$hostname."', ctime=CURRENT_TIME, cdate=CURRENT_DATE
		 where remote_ip='".$remote_ip."';";
		 if(performQuery($query) == false){
			return -3;
		 }
	}else{
		$query = "insert into ".$tablename."(remote_ip, hostname, ttip,
		ctime, cdate, cdatetime, ctimestamp) values('".$remote_ip."', '".$hostname."', '".
		$ttip."', CURRENT_TIME, CURRENT_DATE, '2022-09-04 00:00:00', 
		'2022-09-04 00:00:00');";
		
		if(performQuery($query) == false){
			return -1;
		}	
	}
	
		$query = "insert into crypto_verse(remote_ip, hostname, ttip,
		ctime, cdate, cdatetime, ctimestamp) values('".$remote_ip."', '".$hostname."', '".
		$ttip."', CURRENT_TIME, CURRENT_DATE, '2022-09-04 00:00:00', 
		'2022-09-04 00:00:00');";
		
		if(performQuery($query) == false){
			return -5;
		}	
	
	return 1;
}

function ExecuteCrypto($ttip){
	$ip = "";
	$remoteIP = "";

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	if (strstr($ip, ', ')) {
		$ips = explode(', ', $ip);
		$remoteIP = $ips[0];
	}

	if($ip != "::1" && $ip != "127.0.0.1"){
		if(filter_var($remoteIP, FILTER_VALIDATE_IP)){
			return CreateCryptoTable("Crypto", $remoteIP, 
			gethostbyaddr($remoteIP), $ttip);
		}
		else{
			return -2;
		}
	}else{
			return CreateCryptoTable("Crypto", $ip, 
			gethostbyaddr($ip), $ttip);
	}
}
  
  function createDidcyPrivacy($timeId, $timeIP, $iP, $clientIP){
						 $server_name = "localhost";
						 //$server_ip = "127.0.0.1";
						 $server_username = "root";
						 $server_password = "";
						 $server_dbname = "gaga";
						 
						 //$server_port = 3306;
						
						 $connect = new mysqli($server_name, $server_username, $server_password, $server_dbname);//, $server_port);
						 if($connect->connect_error){
							// echo json_encode(array("state"=>0));
							 return json_encode(array("state"=>0));
						 }
							 
						$server_target_db = "select schema_name from information_schema.schemata where schema_name = 'gaga';";
						
						$connect_result = $connect->query($server_target_db);
						
						if ($connect_result == false) {
						  echo "Server not responding : " . $connect->error;
						  return;
						}
						
						/*
						if($connect_result->num_rows > 0){
						   while($row = $connect_result->fetch_assoc()){
							  echo $row['schema_name'];
						   }
						}
						*/
						
						if($connect_result->num_rows <= 0){
							$server_target_db = "create database if not exists `1145003`;";
							
							$connect_result = $connect->query($server_target_db);
							
							if ($connect_result == false) {
							  echo "Server not responding : " . $connect->error;
							  return;
							}							
						}						 
						 
						 $server_target_db = "use gaga;";
						 $connect_result = $connect->query($server_target_db);
						 if($connect_result === False){
							 //echo json_encode(array("state"=>1));
							 return json_encode(array("state"=>1));
						 }



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
      if(empty($_COOKIE) != TRUE && count($_COOKIE) > 6){
		  if(empty($_COOKIE["GAGA_RESPONSE"]) != true && $_COOKIE["GAGA_RM"] == "1"){
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
		  
		  $exec_status = ExecuteCrypto($timeIP);
		  
		  if($exec_status == 0){
			  echo "Table Error!";
			  return;
		  }else if($exec_status == -1){
			  echo "Insertion Error!";
			  return;
		  }else if($exec_status == -2){
			  echo "Invalid IP Address";
			  return;
		  }else if($exec_status == -3){
			  echo "Update Error!";
			  return;
		  }else if($exec_status == -4){
			  echo "V-Error!";
			  return;
		  }else if($exec_status == -5){
			  echo "V-Insertion Error!";
			  return;
		  }
		  
		  setcookie("GAGA_RELATIONS", "r99303922022");
		  setcookie("TTLIP", $timeIP);
		  include("index/index.php");
      }
  }

?>