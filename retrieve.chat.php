<?php
 include("functions.php");
 include("Chat4.php");
  
 $chatTable = "";
 $index = 0;
 if($_POST["drim"] == ""){
   $query = "select * from chat_users where userid='".$_POST["sessionid"]."';";
   if(count(fetchAll($query)) != 0){
     $chatTable = "chat";//_".fetchAll($query)[$index]["id"];
   }else{
    $loginError = "Invalid User ID!";
	$chatBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder));
    return;   		
   }
 }else{
   $chatTable = "chat";//_".$_POST["drim"]; 
 }
  $chat = new Chat($chatTable);
  echo json_encode(array("conversation"=>$chat->getUserChat($_POST["userid"], $_POST["sessionid"])));

?>