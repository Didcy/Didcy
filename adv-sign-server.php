<?php
  
  
  declare(strict_types=1);
  
  define("UID_HASH", "adv-uid.php", false);
  
  require_once("connect_server.php");
  require_once("functions.php");
  require_once(UID_HASH);
  
  function InitializeChat($username, $password, $connect, $id){
	//Table structure for table `chat_users`

/* 	$localhost = "localhost";
	$dbuser = "333811";
	$dbpass = "davidansong12345";
	$dbname = "333811";
				
	$connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
	if($connect->connect_error){
		echo json_encode(array("state"=>0));
	}

	$server_target_db = "use `333811`;";
	$connect_result = $connect->query($server_target_db);

	if($connect_result === False){
		echo json_encode(array("state"=>1, "error"=>$connect->error));
		$connect->close();
	} */

/* 	$server_name = "localhost";
	$server_ip = "127.0.0.1";
	$server_username = "root";
	$server_password = "";
	$server_dbname = "GAGA";
	$server_port = 3306;
						
	$connect = new mysqli($server_name, $server_username, $server_password, $server_dbname, $server_port);
	if($connect->connect_error){
		echo json_encode(array("state"=>0));
		return;
	} 
						 
	$server_target_db = "use gaga;";
	$connect_result = $connect->query($server_target_db);
	if($connect_result === False){
		echo json_encode(array("state"=>1, "error"=>$connect->error, "close"=>$connect->close()));
		return;
	} */

	//$server_target_db = "CREATE DATABASE IF NOT EXISTS `phpzag_demo`;";

	//$connect_result = $connect->query($server_target_db);

	//USE `phpzag_demo`;

	$server_target_db = "CREATE TABLE if not exists `chat_users` (
	  `userid` int(11) PRIMARY KEY AUTO_INCREMENT,
	   id bigint not null,
	  `username` varchar(255) NOT NULL,
	  `password` varchar(255) NOT NULL,
	  `avatar` varchar(255) NOT NULL,
	  `current_session` int(11) NOT NULL,
	  `online` int(11) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

	$connect_result = $connect->query($server_target_db);

	if($connect_result === False){
		return array("state"=>2, "error"=>$connect->error);
	}

	//Dumping data for table `chat_users`

/* 	$server_target_db = "INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
	(1, 'Rose', '123', 'user1.jpg', 3, 1),
	(2, 'Smith', '123', 'user2.jpg', 1, 0),
	(3, 'adam', '123', 'user3.jpg', 1, 1),
	(4, 'Merry', '123', 'user4.jpg', 1, 0),
	(5, 'katrina', '123', 'user5.jpg', 1, 0),
	(6, 'Rhodes', '123', 'user6.jpg', 1, 0);"; */

	$server_target_db = "select * from chat_users where username='Shyly' and password='shyly'";
    
	//(1, 'Shyly', 'shyly', 'user2.jpg', 1, 1),
	
	$connect_result = $connect->query($server_target_db);

	if($connect_result === False){
		return array("state"=>13, "error"=>$connect->error);
	}
	
	
 
    if($connect_result->num_rows > 0){	
		$server_target_db = "INSERT INTO `chat_users` (`id`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
		('".$id."', '".$username."', '".$password."', 'user3.jpg', 1, 1);";
		
		//(1, 'Shyly', 'shyly', 'user2.jpg', 1, 1),
		
		$connect_result = $connect->query($server_target_db);

		if($connect_result === False){
			return array("state"=>3, "error"=>$connect->error);
		}
	
	}else{
		$server_target_db = "INSERT INTO `chat_users` (`id`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
		(1, 'Shyly', 'shyly', 'user2.jpg', 1, 1),
		('".$id."', '".$username."', '".$password."', 'user3.jpg', 1, 1);";
		
		//(1, 'Shyly', 'shyly', 'user2.jpg', 1, 1),
		
		$connect_result = $connect->query($server_target_db);

		if($connect_result === False){
			return array("state"=>3, "error"=>$connect->error);
		}
	}

	//Indexes for table `chat_users`

/* 	$server_target_db = "ALTER TABLE `chat_users`
	  ADD PRIMARY KEY (`userid`);";

	$connect_result = $connect->query($server_target_db); */

	//Table structure for table `chat`
	//
    //chat_".$id."`
	$server_target_db = "CREATE TABLE if not exists `chat` (
	  `chatid` int(11) PRIMARY KEY AUTO_INCREMENT ,
	  `sender_userid` int(11) NOT NULL,
	  `reciever_userid` int(11) NOT NULL,
	  `message` text NOT NULL,
	  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	  `status` int(1) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

	$connect_result = $connect->query($server_target_db);

	if($connect_result === False){
		return array("state"=>4, "error"=>$connect->error);
	}

	//
	// Indexes for table `chat`
	//
	/* $server_target_db = "ALTER TABLE `chat`
	  ADD PRIMARY KEY (`chatid`);";
	  
	$connect_result = $connect->query($server_target_db);  

	if($connect_result === False){
		echo json_encode(array("state"=>5, "error"=>$connect->error));
		$connect->close();
	} */

	//
	// Table structure for table `chat_login_details`
	//

	$server_target_db = "CREATE TABLE if not exists `chat_login_details` (
	  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
	  `userid` int(11) NOT NULL,
	  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	  `is_typing` enum('no','yes') NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

	$connect_result = $connect->query($server_target_db);

	if($connect_result === False){
		return array("state"=>6, "error"=>$connect->error);
	}
	//
	// Indexes for table `chat_login_details`
	//
	/* $server_target_db = "ALTER TABLE `chat_login_details`
	  ADD PRIMARY KEY (`id`);";
	 
	$connect_result = $connect->query($server_target_db); 

	if($connect_result === False){
		echo json_encode(array("state"=>7, "error"=>$connect->error));
		$connect->close();
	} */

	//$connect->close();
	return array("state"=>7);
  }
  
  function InitializeNotificator($id, $connect) : int{
	 //$sql = "create database if not exists notificationsystem";
/* 	 $sql = "use gaga";
	 
	 $connect_result = $connect->query($sql);
	 
	 if($connect_result === FALSE){
		 return -1;
	 }
	 
	 $sql = "use notificationsystem";
	 
	 $connect_result = $connect->query($sql);
	 
	 if($connect_result === FALSE){
		 return -2;
	 } */

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
		 return -5;
	 }

	 
	 $sql = "create table if not exists notifications_".$id." (
					   id bigint primary key auto_increment,
					   sendername varchar(255),
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
		 return -3;
	 }
	 
	 //$connect->close();
	 return 4;
  }
  
  function GetGaGaUserCredentials($SERVER_REQ_TYPE = array("GET", "POST", "HEAD", "FILES", "ENV", "DELETE", "PUT", "OPTION")){
		 switch($SERVER_REQ_TYPE){
			 case "POST":
			 case "post":
			 case 0:
			 {
			  switch($_POST["signID"]){
			   case 0:
			    if(count($_COOKIE) > 0){
				 if(!empty($_COOKIE["GAGA_RELATIONS"])){
				  if(isset($_POST["signupbtn"])){
				    if($_POST["username"] != ""){
						if($_POST["email"] == ""){
							echo json_encode(array("state"=>7));
							return;
						}
/* 						$encodedData = UID(0, json_decode($_POST["uid"]), json_decode($_POST["psk"]), 0);
						
						$decodedData = $encodedData;
						
						if($decodedData[3] == -2){
							
						}else{					
							$_POST["password"] = $decodedData[2];
							$_POST["repeatPassword"] = $decodedData[2];
							
							if($decodedData[3] == false){
								echo json_encode(array("state"=>12));
								return;
							}
						 */	
							if($_POST["password"] == ""){
								echo json_encode(array("state"=>21));
								return;
							}
							if($_POST["repeatPassword"] == ""){
								echo json_encode(array("state"=>22));
								return;							
							}
						//}
						if($_POST["selectedAdIndustry"] == ""){
							echo json_encode(array("state"=>23));
							return;							
						}
/* 			$localhost = "localhost";
			$dbuser = "333811";
			$dbpass = "davidansong12345";
			$dbname = "333811";
			
			 $connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
			 if($connect->connect_error){
				 echo json_encode(array("state"=>0));
				 return;
			 }
			 $server_target_db = "use `333811`;";
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === False){
				 $connect->close();
				 echo json_encode(array("state"=>1));
				 return;
			 } */

			   	     $connect = connectserver(0);

					 if($connect["state"] != 500006){
						echo json_encode($connect);
						return;
					 }
					 
					 $connect = $connect["connect"];



					// sql to create table
					/*$sql_qeury = "create table if not exists gaga(
					   id bigint(50) primary key,
					   email varchar(25) not null unique check(email = ''),
					   imageFileName varchar(255) null check(imageFileName in('')),
					   dirId varchar(30) null check(dirId = ''),
					   firstname varchar(20) not null check(firstname in('')),
					   middlename varchar(20) null,
					   lastname varchar(20) not null check(lastname = ''),
					   privateTelOptional varchar(20) unique null,
					   publicTelOptional varchar(20) unique null,
					   whatAppNoOptional varchar(20) unique null,
					   businessEmail varchar(20) unique null,
					   privatePersonalEmailOptional varchar(20) unique null,
					   facebookHandleOptional varchar(20) unique null,
					   twitterHandleOptional varchar(20) unique null,
					   instagramHandleOptional varchar(20) unique null,
					   youtubeHandleOptional varchar(20) unique null,
					   websiteDomainOptional varchar(20) unique null,
					   actorStory text null check(actorStory = ''),
					   countryOfBirth varchar(30) null
                                          );";*/

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

						$user_name = $_POST["username"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$repeatPassword = $_POST["repeatPassword"];
                                                $adFee = $_POST["adFee"];
						$selectedAdIndustry = $_POST["selectedAdIndustry"];
						$companiesOnly = $_POST["companiesOnly"];// != "")?"1":"0";
						
						$server_target_db = "select * from gaga where email='".$email."' and password='".
						md5(trim($password))."' and repeatPassword='".md5(trim($repeatPassword))."'
						 and adInterest='".$selectedAdIndustry."';";

						$connect_result = $connect->query($server_target_db);
/* 						if($connect_result != False){
							echo json_encode(array("state"=>2));
							return;
						} */			
					    if ($connect_result->num_rows > 0) {
						    // output data of each row
						    while($row = $connect_result->fetch_assoc()) {
							  echo json_encode(array("state"=>2));
						      $connect->close(); 
                              return;						   
						   }
					    }
						
						$random_generator = $_POST["RRND"];
						$id = $random_generator;
						$dirId = '';

						/*$server_target_db = "insert into gaga
						values('".$id."','".$email."','gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 
                                                'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 
                                                'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."'
                                                , 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."', 'gaga_garbage_".$id."'
                                                , 'gaga_garbage_".$id."', 'gaga_garbage_".$id."');";*/

						/*$server_target_db = "insert into gaga
						values('".$id."','".$email."','', '', '', '', 
                                                '', '', 
                                                '', '', '', '', ''
                                                , '', '', '', ''
                                                , '', '');";*/

/* 						$server_target_db = "insert into gaga(id, email, password, repeatPassword, adInterest, adFee, 
						companiesOnly, firstname, middlename, lastname, username) 
						values('".$id."','".$email."','".md5(trim($password))."','".md5(trim($repeatPassword))."','".$selectedAdIndustry.
						"','".$adFee."','".$companiesOnly."', 'null', 'null', 'null', '".$user_name."');"; */

/* 						$server_target_db = "insert into gaga(id, email, password, repeatPassword, adInterest,  
						adFee, companiesOnly, firstname, middlename, lastname, username, 
						profession, privateTelOptional, publicTelOptional, whatAppNoOptional,
						businessEmail, privatePersonalEmailOptional, facebookHandleOptional, 
						twitterHandleOptional, instagramHandleOptional, youtubeHandleOptional, 
						websiteDomainOptional, actorStory,
						institutionName, ein, tin, activity, countryOfBirth, location, 
						companyStory,  countryOfRegistration, companyRegistrationDate) 
						values('".$id."','".$email."','".md5(trim($password))."','".md5(trim($repeatPassword))."','".$selectedAdIndustry.
						"','".$adFee."', '".$companiesOnly."', '', '', '', '".$user_name.
						"', '', '', '', '', '', ''
						, '', '', '', '', '', ''
						, '', '', '', '', '', ''
						, '', '', '');"; */

					$server_target_db = "insert into gaga(id, email, password, repeatPassword, adInterest,  
						adFee, companiesOnly, username) 
						values('".$id."','".$email."','".md5(trim($password))."','".md5(trim($repeatPassword))."','".$selectedAdIndustry.
						"','".$adFee."', '".$companiesOnly."', '".$user_name.
						"');";


						/*$connect_result = $connect->query($server_target_db);
						if($connect_result === False){
							echo json_encode(array("state"=>32, "error"=>$connect->error));
							return;
						}*/
						$connect_result = $connect->query($server_target_db);

						if($connect_result === False){
							echo json_encode(array("state"=>3, "error"=>$connect->error));
							return;
						}
						if(InitializeNotificator($id, $connect) != 4){
							echo json_encode(array("state"=>303333, "error"=>$connect->error));
							$connect->close();
							return;							
						}
						
						$chatState = InitializeChat($user_name, $password, $connect, $id);
						
						if($chatState["state"] != 7){
							echo json_encode(array("state"=>303334, "error"=>$connect->error));
							$connect->close();
							return;								   
						}
						
					    echo json_encode(array("cookie_id"=>$id, "companiesOnly"=>$companiesOnly,
						"state"=>4, "adInterest"=>$selectedAdIndustry));
						$connect->close();
						//$connect->close();
						return;
					}else{
						echo json_encode(array("state"=>20));
						return;
					}
				  }else{
					  echo json_encode(array("state"=>6));
					  return;
				  }
				 }else{
					echo json_encode(array("state"=>5));
					return;					 
				 }
				}else{
					echo json_encode(array("state"=>5));
					return;
				}
				case 1:
				 $table = "gaga";
				 $query = "SHOW TABLES LIKE '".$table."'";
				 if(count(fetchAll($query)) == 0){
					echo json_encode(array("state"=>11));
					return;     
				 }  
			    if(count($_COOKIE) > 0){
				 if(!empty($_COOKIE["GAGA_RELATIONS"])){
				  if(isset($_POST["signinbtn"])){
				    if($_POST["email"] != ""){
				
/* 						$encodedData = UID(0, json_decode($_POST["uid"]), json_decode($_POST["psk"]), 1);
						
						$decodedData = $encodedData;
						
						$_POST["password"] = $decodedData[2];
						$_POST["repeatPassword"] = $decodedData[2];
                        
						if($decodedData[3] == false){
							echo json_encode(array("state"=>12));
							return;
						}
 
						 */
						if($_POST["password"] == ""){
							echo json_encode(array("state"=>21));
							return;
						}
						if($_POST["repeatPassword"] == ""){
							echo json_encode(array("state"=>22));
							return;							
						}
/* 			$localhost = "localhost";
			$dbuser = "333811";
			$dbpass = "davidansong12345";
			$dbname = "333811";
			
			 $connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
			 if($connect->connect_error){
				 echo json_encode(array("state"=>0));
				 return;
			 }
			 $server_target_db = "use `333811`;";
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === False){
				 $connect->close();
				 echo json_encode(array("state"=>1));
				 return;
			 } */
					     $connect = connectserver(0);

						 if($connect["state"] != 500006){
							echo json_encode($connect);
							return;
						 }
						 
						 $connect = $connect["connect"];


						$email = $_POST["email"];
						$password = $_POST["password"];
						$repeatPassword = $_POST["repeatPassword"];
						
						$server_target_db = "select * from gaga where email='".$email."' and password='".
						md5(trim($password))."' and repeatPassword='".md5(trim($repeatPassword))."';";

						$connect_result = $connect->query($server_target_db);
						if($connect_result == False){
							echo json_encode(array("state"=>21));
							return;
						}	
						$id = "";
						$adInterest = "";
					    if ($connect_result->num_rows > 0) {
						    // output data of each row
						    while($row = $connect_result->fetch_assoc()) {
							  $id = $row["id"];
							  $companiesOnly = $row["companiesOnly"];
							  $adInterest = $row["adInterest"];
						   }
					    }
						if($id != ""){	
					      echo json_encode(array("cookie_id"=>$id, "companiesOnly"=>$companiesOnly,
						  "state"=>8, "adInterest"=>$adInterest));
						}else{
						  echo json_encode(array("state"=>11));
						}
						$connect->close();
						return;
					}else{
						echo json_encode(array("state"=>7, "state_type"=>"email"));
						return;
					}
				  }else{
					  echo json_encode(array("state"=>6, "state_type"=>"signinbtn"));
					  return;
				  }
				 }else{
					echo json_encode(array("state"=>5, "state_type"=>"ck"));
					return;					 
				 }
				}else{
					echo json_encode(array("state"=>8, "state_type"=>"ck>0"));
					return;
				}						
				break;
				case 2:
				{
				//setcookie("GAGA_RELATIONS", "r99303922022");
			    if(count($_COOKIE) > 0){
				 if(!empty($_COOKIE["GAGA_RELATIONS"])){
				  if($_POST["imageId"] != ""){
/* 			$localhost = "localhost";
			$dbuser = "333811";
			$dbpass = "davidansong12345";
			$dbname = "333811";
			
			 $connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
			 if($connect->connect_error){
				 echo json_encode(array("state"=>0));
				 return;
			 }
			 $server_target_db = "use `333811`;";
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === False){
				 $connect->close();
				 echo json_encode(array("state"=>1));
				 return;
			 } */

					     $connect = connectserver(0);

						 if($connect["state"] != 500006){
							echo json_encode($connect);
							return;
						 }
						 
						 $connect = $connect["connect"];


						$imageId = $_POST["imageId"];
						$server_target_db = "select * from gaga where id='".$imageId."';";
						$connect_result = $connect->query($server_target_db);
						if($connect_result == False){
							echo json_encode(array("state"=>210));
							return;
						}	
						$id = "";
						$imageFileName = "";
					    if ($connect_result->num_rows > 0) {
						    // output data of each row
						    while($row = $connect_result->fetch_assoc()) {
							  $imageFileName = $row["imageFileName"];
							  $id = $row["id"];
						   }
					    }	

		                         $imageGarbage = "gaga_garbage_".$id; //$imageFileName == $imageGarbage || 
		 
		                         if($imageFileName == "" || $imageFileName == null || $imageFileName == "null"){
                                    	        echo json_encode(array("src"=>"", "cookie_id"=>$id, "state"=>9));
						$connect->close();
						return;					 
                                         }
								 if(file_exists("adv.actors.profiles/".$imageFileName) == TRUE){
                                    	        echo json_encode(array("src"=>$imageFileName, "cookie_id"=>$id, "state"=>9));
								 }else if(file_exists("adv.company.profiles/".$imageFileName) == TRUE){
									 echo json_encode(array("src"=>$imageFileName, "cookie_id"=>$id, "state"=>9));
								 }else{
									 echo json_encode(array("src"=>"", "cookie_id"=>$id, "state"=>9));
								 }
						$connect->close();
						return;
				  }else{
					  print_r(10);
					  return;
				  }				 
				  }else{
					echo json_encode(array("state"=>5));
					return;					 
				 }
				}else{
					echo json_encode(array("state"=>6));
					return;
				}	 
				}
				break;
				default:  
				 return;
			  }
			 }
			  break;
			 case "GET":
			 case "get":
			 case 1:
			   
			 break;
			 default: 
			  return;
		 }	  
  }
   
  GetGaGaUserCredentials($_SERVER["REQUEST_METHOD"]);
?>