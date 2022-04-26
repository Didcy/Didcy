<?php
 include("functions.php");
 
 class Smile{
	private $WorkTable = "DidcyWork";
	private $OnlineStatusTable = "DidcyWorkState";
	private $WorkLoginDetailsTable = "DidcyWorkLogin";
    private $host  = 'localhost';
    private $user  = 'root'; //"333811"
    private $password   = ""; 
    private $database  = "gaga";
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	public function ifExistsUsers($username, $password){
		$sqlQuery = "select * from ".$this->WorkTable." where username='".$username."' and 
		password='".md5(trim($password))."';";
		$user = "";
		if(count(fetchAll($sqlQuery)) > 0){
		   $user = fetchAll($sqlQuery);
		}
		return $user;
	}
	public function UpdateUserOnlineStatus($userid, $online){
		$sqlUserUpdate = "
			UPDATE ".$this->OnlineStatusTable." 
			SET online = '".$online."' 
			WHERE id = '".$userid."'";			
		mysqli_query($this->dbConnect, $sqlUserUpdate);			
	}
	public function CreateLogTables(){

		$sqlInsert = "CREATE TABLE if not exists `".$this->WorkLoginDetailsTable."` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  `is_typing` enum('no','yes') NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

		mysqli_query($this->dbConnect, $sqlInsert);

		$server_target_db = "CREATE TABLE if not exists `".$this->OnlineStatusTable."` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `username` varchar(255) NOT NULL,
		  `password` varchar(255) NOT NULL,
		  `avatar` varchar(255) NOT NULL,
		  `current_session` int(11) NOT NULL,
		  `online` int(11) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		
		mysqli_query($this->dbConnect, $sqlInsert);
	}
	public function insertUserLoginInfos($userId) {

		$sqlInsert = "
			INSERT INTO ".$this->WorkLoginDetailsTable."(id) 
			VALUES ('".$userId."')";
		mysqli_query($this->dbConnect, $sqlInsert);
		$lastInsertId = mysqli_insert_id($this->dbConnect);
        return $lastInsertId;		
	}	
 }
 
 function FetchLoggedDidcywork($WorkTable){
	    $didcyworkBoard = "";
		$didcyworkUserIDs = "";
		$user_same_id = "";

	    $didcyworkUserIDs = array("session_id_didcywork"=>$_SESSION["userid_didcywork"], "username_didcywork"=>array(), "id"=>array(),
	    "avatar"=>array());		
			
		return array("didcyworkBoard"=>$didcyworkBoard, "didcyworkUserIDs"=>$didcyworkUserIDs,
		"user_same_id_didcywork"=>$user_same_id);	
 }

?>