<?php
//print_r(getdate());
//print_r(getdate()["year"].'-'.getdate()["mon"].'-'.getdate()["mday"]);
   //phpinfo();
?>

<?php
/* 							$_database_name = "didcx_fr_usn_fp";
							$account_access_code = "1000000";
							$server_name = "localhost";
							$server_ip = "127.0.0.1";
							$server_username = "root";
							$server_password = "";
							$server_database = $_database_name;
							$server_port = 3306;
									 
							$connector = new mysqli($server_ip, $server_username, $server_password, $server_database, $server_port);
									 
						    $sql = "drop database if exists ".$_database_name.";";
							
							$connector->query($sql);
							
							$connector->close(); */
?>

<?php
/* 							$_database_name = "gaga";
							$account_access_code = "1000000";
							$server_name = "localhost";
							$server_ip = "127.0.0.1";
							$server_username = "root";
							$server_password = "";
							$server_database = $_database_name;
							$server_port = 3306;
									 
							$connector = new mysqli($server_ip, $server_username, $server_password, $server_database, $server_port);
									 
						    $sql = "drop database if exists ".$_database_name.";";
							
							$connector->query($sql);
							
							$connector->close(); */
?>

<?php                       
/* 							$_database_name = "didcx_fr_usn_fp";
							$account_access_code = "1000000";
							$server_name = "localhost";
							$server_ip = "127.0.0.1";
							$server_username = "root";
							$server_password = "";
							$server_database = $_database_name;
							$server_port = 3306;
									 
							$connector = new mysqli($server_ip, $server_username, $server_password, $server_database, $server_port);
									 
							if($connector->connect_error){
								echo 2; //"Connection Error!!!.";
								return;
							}
							
							$_mysql_query = "use ".$_database_name.";";
							$_query_result = $connector->query($_mysql_query);		

							if($_query_result  == false){
								echo 3; //Server not responding!!!.
								return;
								return die("Unable to Initialize Database.");
							} 
							
							$user_name = "David Wizkid";
							
							$_msql_query = "select account_access_code from didcx_fr_usn where user_name = '".$user_name."';";
							$_msql_query = "select account_access_code from didcx_fr_usn;";// where user_name = '".$user_name."';";
							$_msql_query = "select user_name, account_access_code from didcx_fr_usn;";// where user_name = '".$user_name."';";
							$query_response_object = $connector->query($_msql_query);
									 
							if($query_response_object == false){
								$connector->close();
								echo 1; //User not exists;
								return;
							} 
                            echo "Account | UserName<br>";
							if ($query_response_object->num_rows > 0) {
								//output data of each row
								while($row = $query_response_object->fetch_assoc()) {
									$account_access_code = $row["account_access_code"];
									$user_name = $row["user_name"];
									echo $account_access_code.'--';
									echo $account_access_code.'<br/>';
									echo $user_name.'<br/>';
								}
							} else {
								$connector->close();
								echo 1; //"User not exists!!!.";
								return;
							}
							$connector->close();  */
 
?>

<?php                       
/* 							$_database_name = "gaga";
							$account_access_code = "1000000";
							$server_name = "localhost";
							$server_ip = "127.0.0.1";
							$server_username = "root";
							$server_password = "";
							$server_database = $_database_name;
							$server_port = 3306;
									 
							$connector = new mysqli($server_ip, $server_username, $server_password, $server_database, $server_port);
									 
							if($connector->connect_error){
								echo 2; //"Connection Error!!!.";
								return;
							}
							
							$_mysql_query = "use ".$_database_name.";";
							$_query_result = $connector->query($_mysql_query);		

							if($_query_result  == false){
								echo 3; //Server not responding!!!.
								return;
								return die("Unable to Initialize Database.");
							} 
							
							//$user_name = "David Wizkid";
							
							$_msql_query = "select * from gaga;";// where user_name = '".$user_name."';";
							$query_response_object = $connector->query($_msql_query);
									 
							if($query_response_object == false){
								$connector->close();
								echo 1; //User not exists;
								return;
							} 
                            //echo "Account | UserName<br>";
							if ($query_response_object->num_rows > 0) {
								//output data of each row
								while($row = $query_response_object->fetch_assoc()) {
									 echo "<br/>";
									 echo $row["email"];
									 echo "<br/>";
									 echo $row["id"];
									 echo "<br/>";
									 echo $row["dirId"];
									 echo "<br/>";
									 echo $row["imageFileName"];
									 //echo "<br/>";
									 echo $row["firstname"];
									 echo "<br/>";
									 echo $row["middlename"];
									 echo "<br/>";
									 echo $row["lastname"];
								}
							} else {
								$connector->close();
								echo 1; //"User not exists!!!.";
								return;
							}
							$connector->close();  */
 
?>

<?php
   
$localhost = "localhost";
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
							echo json_encode(array("state"=>1));
							return;
						}

					$sql_qeury = "drop table if exists gaga;";
					
					if ($connect->query($sql_qeury) == false) {
					  echo "Server not responding : " . $connect->error;
					  return;
					}
                     
					$connect->close();

?>

<?php
/*   
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "";
					$port = 3306;

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname, $port);
					
					
					
					// Check connection
					if ($conn->connect_error) {
					  return die("Connection failed: " . $conn->connect_error);
					}

					// sql to create database
					$sql = "create database if not exists gaga;";

					if ($conn->query($sql) == false) {
					  echo "Server not responding : " . $conn->error;
					}

					$sql = "use gaga;";

					if ($conn->query($sql) == false) {
					  echo "Server not responding : " . $conn->error;
					}

					$sql_qeury = "drop table if exists gaga;";
					
					if ($conn->query($sql_qeury) == false) {
					  echo "Server not responding : " . $conn->error;
					  return;
					}
                      
					// sql to create table
					$sql_qeury = "create table if not exists gaga(
					   id bigint(50) primary key auto_increment check(id in(0)),
					   email char(255) not null unique check(email = ''),
					   imageFileName varchar(255) null check(imageFileName in('')),
					   dirId char(255) null check(dirId = ''),
					   firstname varchar(255) not null check(firstname in('')),
					   middlename char(255) null,
					   lastname nvarchar(255) not null check(lastname = ''),
					   privateTelOptional varchar(255) unique null,
					   publicTelOptional nvarchar(255) unique null,
					   whatAppNoOptional char(255) unique null,
					   businessEmail nchar(255) unique null,
					   privatePersonalEmailOptional char(255) unique null,
					   facebookHandleOptional varchar(255) unique null,
					   twitterHandleOptional char(255) unique null,
					   instagramHandleOptional varchar(255) unique null,
					   youtubeHandleOptional char(255) unique null,
					   websiteDomainOptional nchar(255) unique null,
					   actorStory text null check(actorStory = ''),
					   countryOfBirth varchar(255) null
					);";
					
					if ($conn->query($sql_qeury) == false) {
					  echo "Server not responding : " . $conn->error;
					  return;
					} */

					// prepare and bind
/* 					$stmt = $conn->prepare("INSERT INTO gaga (id, email) VALUES (?, ?);");
					$stmt->bind_param("is", $id, $email);

					// set parameters and execute
					$user_name= "David Wizkid";
					$account_access_code = "1000000";
					$email = "hades@didcx.com";
					$stmt->execute(); */


/* 					$sql_qeury = "create table if not exists product_service_info(
                       productServiceId bigint primary key auto_increment check(productServiceId = 0),
					   productServiceEmail varchar(255) not null unique check(email in('')),
					   productServiceTelephone char(255) not null unique check(productServiceTelephone in('')),
					   productServiceLocation text not null unique check(productServiceLocation = ''),
					   productServiceApprovedBy text not null unique check(productServiceApprovedBy in('')),
					   productServiceDescription text not null unique check(productServiceDescription = ''),
					   productServiceCommencementDate nchar(255) not null check(productServiceCommencementDate in('')),
					   productServiceElapsingDate char(255) not null check(productServiceElapsingDate = ''),
					   productServiceCommencementTime varchar(255) not null check(productServiceCommencementTime in('')),
					   productServiceElapsingTime nvarchar(255) not null check(productServiceElapsingTime = ''),
					   productServiceRetrievalTableId varchar(255) not null check(productServiceRetrievalTableId in(0)),
					   gagaShipmentDate varchar(255) not null check(gagaShipmentDate in('')),
					   gagaShipmentTime varchar(255) not null check(gagaShipmentTime in('')),
					);";
					
					if ($conn->query($sql_qeury) == false) {
					  echo "Server not responding : " . $conn->error;
					  return;
					} */

					//$stmt->close();
					//$conn->close();  
  
?> 

<?php
 /*  
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "";
					$port = 3000;

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname, $port);
					
					
					
					// Check connection
					if ($conn->connect_error) {
					  return die("Connection failed: " . $conn->connect_error);
					}

					// sql to create table
					$sql = "create database if not exists didcx_fr_usn_fp;";

					if ($conn->query($sql) == false) {
					  echo "Server not responding : " . $conn->error;
					}

					$sql = "use didcx_fr_usn_fp;";

					if ($conn->query($sql) == false) {
					  echo "Server not responding : " . $conn->error;
					}

					$sql_qeury = "drop table if exists didcx_fr_usn;";
					
					if ($conn->query($sql_qeury) == false) {
					  echo "Server not responding : " . $conn->error;
					  return;
					}
                      
					// sql to create table
					$sql_qeury = "create table if not exists didcx_fr_usn(
					   user_name varchar(255) primary key check(user_name in('')),
					   account_access_code char(255) not null unique check(account_access_code = ''),
					   email char(255) not null unique check(email = '')
					);";
					
					if ($conn->query($sql_qeury) == false) {
					  echo "Server not responding : " . $conn->error;
					  return;
					}

					// prepare and bind
					$stmt = $conn->prepare("INSERT INTO didcx_fr_usn (user_name, account_access_code, email) VALUES (?, ?, ?);");
					$stmt->bind_param("sss", $user_name, $account_access_code, $email);

					// set parameters and execute
					$user_name= "David Wizkid";
					$account_access_code = "1000000";
					$email = "hades@didcx.com";
					$stmt->execute();

					$stmt->close();
					$conn->close();   */
  
?> 

<?php
  
/* $str = "Visit' Microsoft!";
$pattern = "/'/i";
echo preg_replace($pattern, "\'", $str); */
  
?>