<?php 
SESSION_START();
include ('ChatDidcy.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['userid'], 0);
$_SESSION['username'] = "";
$_SESSION['userid']  = "";
$_SESSION['login_details_id']= "";
header("Location:loginDidcy.php");
?>






