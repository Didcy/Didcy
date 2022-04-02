<?php

 include("ChatDidcy.php");

  $chat = new Chat();
  echo json_encode(array("conversation"=>$chat->getUserChat($_POST["sessionid"], $_POST["userid"])));

?>