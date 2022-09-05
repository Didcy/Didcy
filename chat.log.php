<?php
//SESSION_START();
include("functions.php");
include("chat.log.retrieval.php");

function ValidateLogs(){
 $loginError = '';
 $_SESSION['username'] = "";
 $_SESSION['userid'] = "";
 $chatTable = "";
 $index = 0;
 $state = CheckTablesExistence("gaga");
 if($state["state"] == false){
    $loginError = "Invalid username or password!";
	$chatBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder));
    return;	
 }
 $state = CheckTablesExistence("chat_users");
 if($state["state"] == false){
    $loginError = "Invalid username or password!";
	$chatBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder));
    return;	
 }
 
 if($_POST["drim"] == ""){
   $query = "select * from chat_users where username='".$_POST['username']."' and password='".$_POST['pwd']."';";
   if(count(fetchAll($query)) != 0){
     $chatTable = "chat";//_".fetchAll($query)[$index]["id"];
   }else{
    $loginError = "Invalid username or password!";
	$chatBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder));
    return;   		
   }
 }else{
   $chatTable = "chat";//_".$_POST["drim"]; 
 }
 if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
	include ('Chat4.php');
    $chat = new Chat($chatTable);
	$user = $chat->loginUsers($_POST['username'], $_POST['pwd']);
	$chatBoarder = "";
	if(!empty($user)) {
		$_SESSION['username'] = $user[0]['username'];
		$_SESSION['userid'] = $user[0]['userid'];
		$chat->updateUserOnline($user[0]['userid'], 1);
		$lastInsertId = $chat->insertUserLoginDetails($user[0]['userid']);
		$_SESSION['login_details_id'] = $lastInsertId;
		
		//$htmlFileHandle = fopen("
		$chatBoarder = FetchLoggedChat($chatTable);
		echo json_encode(array("session"=>$_SESSION['login_details_id'], "state"=>200, "chatBoard"=>
		$chatBoarder["chatBoard"], "chatUserIDs"=> $chatBoarder["chatUserIDs"], "chatMessages"=>
		$chatBoarder["chatMessages"], "user_same_id"=>$chatBoarder["user_same_id"], 
		"from_user_id"=>$user[0]['userid']));
	} else {
		$loginError = "Invalid username or password!";
		$chatBoarder = "";
		echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder, 
		"from_user_id"=>""));
	}
 }  
}

ValidateLogs();

?>