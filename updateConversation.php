<?php
 
  include ("Chat4.php");
  
  $chat = new Chat("chat");
  
  $newMessageCount = $chat->getMessageCount($_POST["userid"], $_POST["sessionid"]);
  
  $count = $newMessageCount;
  
/*   if($_SESSION["count"] == $newMessageCount){
	$count = 0;
  }else{
    $count = 1;
	$_SESSION["count"] = $newMessageCount;
  } */
  
  echo json_encode(array("count"=>$count));

?>