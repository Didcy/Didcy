<?php

 include("Chat4.php");

  $chat = new Chat();
  echo json_encode(array("status"=>$chat->getUnreadMessageCount($_POST['from_user_id'], $_POST['to_user_id'])));

?>