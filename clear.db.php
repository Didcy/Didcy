<?php
//Table structure for table `chat_users`

$localhost = "localhost";
$dbuser = "1145003";
$dbpass = "didcycompany2022";
$dbname = "1145003";
			
$connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
if($connect->connect_error){
	echo json_encode(array("state"=>0));
}

$server_target_db = "use `1145003`;";
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

$server_target_db = "drop table if exists notifications;";

$connect_result = $connect->query($server_target_db);

if($connect_result === False){
	$connect->close();
	echo json_encode(array("state"=>7));
}

$connect->close();
 
?>