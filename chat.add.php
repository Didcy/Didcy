<?php
 include("../functions.php");
 include("chat.log.retrieval.php");

 if(!empty($_POST['member-name']) && !empty($_POST['member-id'])){
   $query = "select * from gaga where username='".$_POST['member-name']."' and id='".$_POST['member-id']."';";
   
   if(count(fetchAll($query)) != 0){
     $chatTable = "chat_".fetchAll($query)[$index]["id"];
	 $query = "INSERT INTO `chat_users` (`id`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
	('".fetchAll($query)[$index]["id"]"', '".fetchAll($query)[$index]["username"].
	"', '".fetchAll($query)[$index]["id"]["password"]."', 'user2.jpg', '".fetchAll($query)[$index]["id"]."', 0);";
    if(count(fetchAll($query)) != 0){
		$chatBoarder = FetchLoggedChat($chatTable);
		echo json_encode(array("session"=>fetchAll($query)[$index]["id"], "state"=>200, "chatBoard"=>
		$chatBoarder["chatBoard"], "chatUserIDs"=> $chatBoarder["chatUserIDs"], "chatMessages"=>
		$chatBoarder["chatMessages"], "user_same_id"=>$chatBoarder["user_same_id"]));
		return;
	}
   }else{
    $loginError = "Invalid username or password!";
	$chatBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "chatBoard"=>$chatBoarder));
    return;   		
   }
   
 }else{
   $chatTable = "chat_".$_POST["drim"]; 
 } 

?>