<?php
//Table structure for table `chat_users`

$localhost = "localhost";
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
	$connect->close();
	echo json_encode(array("state"=>1));
}


$server_target_db = "drop table if exists gaga;";

$connect_result = $connect->query($server_target_db);

if($connect_result === False){
	$connect->close();
	echo json_encode(array("state"=>5));
}

$server_target_db = "drop table if exists productServiceNames;";

$connect_result = $connect->query($server_target_db);

if($connect_result === False){
	$connect->close();
	echo json_encode(array("state"=>6));
}

$connect->close();
 
?>