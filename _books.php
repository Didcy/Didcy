<?php
//SESSION_START();
include("smile.php");

function ValidateLogsDidcyWork(){
 $loginError = '';
 $_SESSION['username_didcybooks'] = "";
 $_SESSION['userid_didcybooks'] = "";
 $didcybooksTable = "";
 $index = 0;
 
 $table = "didcybooks";
 $query = "SHOW TABLES LIKE '".$table."'";
 if(count(fetchAll($query)) == 0){
    $loginError = "User not exists";
	$didcyworkBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "didcybooksBoard"=>$didcyworkBoarder));
    return;     
 }  
  
 if($_POST["drim"] == ""){
   $query = "select * from didcywork where username='".$_POST['username-didcywork']."' and password='".md5(trim($_POST['pwd-didcywork']))."';";
   if(count(fetchAll($query)) != 0){
     $didcyworkTable = "didcywork";//_".fetchAll($query)[$index]["id"];
   }else{
    $loginError = "Invalid username or password!";
	$didcyworkBoarder = "";
	echo json_encode(array("session"=>$loginError, "state"=>506, "didcyworkBoard"=>$didcyworkBoarder));
    return;   		
   }
 }else{
   $didcyworkTable = "didcywork";//_".$_POST["drim"]; 
 }
 if (!empty($_POST['username-didcywork']) && !empty($_POST['pwd-didcywork'])) {
    $didcywork = new Smile($didcyworkTable);
	$user = $didcywork->ifExistsUsers($_POST['username-didcywork'], $_POST['pwd-didcywork']);
	$didcyworkBoarder = "";
	if(!empty($user)) {
		$_SESSION['username_didcywork'] = $user[0]['username'];
		$_SESSION['userid_didcywork'] = $user[0]['id'];
		$__49393_492_Page_acc_usr = $user[0]['dirId'];
		$didcywork->UpdateUserOnlineStatus($user[0]['id'], 1);
		$lastInsertId = $didcywork->insertUserLoginInfos($user[0]['id']);
		$_SESSION['login_details_id_didcywork'] = $lastInsertId;
		
		//$htmlFileHandle = fopen("
		$didcyworkBoarder = FetchLoggedDidcywork($didcyworkTable);
		echo json_encode(array("session_id_didcywork"=>$_SESSION['login_details_id_didcywork'], "state"=>200, "DidcyWorkBoard"=>
		$didcyworkBoarder["didcyworkBoard"], "didcyworkUserIDs"=> $didcyworkBoarder["didcyworkUserIDs"], "user_same_id_didcywork"=>$didcyworkBoarder["user_same_id_didcywork"], 
		"from_user_id_didcywork"=>$user[0]['id'], "__49393_492_Page_acc_usr"=>
		$__49393_492_Page_acc_usr));
	} else {
		$loginError = "Invalid username or password!";
		$didcyworkBoarder = "";
		echo json_encode(array("session_didcywork"=>$loginError, "state"=>506, "DidcyWorkBoard"=>$didcyworkBoarder, 
		"from_user_id_didcywork"=>""));
	}
 }  
}

ValidateLogsDidcyWork();

?>