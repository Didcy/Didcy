<?php
session_start();
include ('functions.php');
include ('Chat4.php');

function ChatServer(){
$table = "chat_users";
$query = "SHOW TABLES LIKE '".$table."'";
$chatUsers = "";
if(count(fetchAll($query)) == 0){
	$data = array(
		"profileHTML" => $chatUsers
	);
	echo json_encode($data);
    return;	
}  

$_SESSION["userid"] = $_POST["from_user_id"];
$chatTable = "";
$chatTable = "";
$index = 0;
$query = "select * from chat_users where userid='".$_POST["from_user_id"]."';";
$chatTable = "chat";//_".fetchAll($query)[$index]["id"];
$chat = new Chat($chatTable);
if($_POST['action'] == 'update_user_list') {
	$chatUsers = $chat->chatUsers($_SESSION['userid']);
	$data = array(
		"profileHTML" => $chatUsers
	);
	echo json_encode($data);	
}
if($_POST['action'] == 'insert_chat') {
	$pattern = "/'/i";
	$chat_message = preg_replace($pattern, "\'", $_POST['chat_message']);	  
	$chat->insertChat($_POST['to_user_id'], $_SESSION['userid'], $chat_message);
}
if($_POST['action'] == 'show_chat') {
	$chat->showUserChat($_SESSION['userid'], $_POST['to_user_id']);
}
if($_POST['action'] == 'update_user_chat') {
	$conversation = $chat->getUserChat($_SESSION['userid'], $_POST['to_user_id']);
	$data = array(
		"conversation" => $conversation			
	);
	echo json_encode($data);
}
if($_POST['action'] == 'update_unread_message') {
	$count = $chat->getUnreadMessageCount($_POST['to_user_id'], $_SESSION['userid']);
	$data = array(
		"count" => $count			
	);
	echo json_encode($data);
}
if($_POST['action'] == 'update_typing_status') {
	$chat->updateTypingStatus($_POST["is_type"], $_SESSION["login_details_id"]);
}
if($_POST['action'] == 'show_typing_status') {
	$message = $chat->fetchIsTypeStatus($_POST['to_user_id']);
	$data = array(
		"message" => $message			
	);
	echo json_encode($data);
}
}
ChatServer();
?>