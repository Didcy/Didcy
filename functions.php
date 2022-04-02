<?php

    define('DBINFO', 'mysql:host=localhost;dbname=gaga');
    define('DBUSER','root');
    define('DBPASS','');

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function performQueryer($query){
	  try{
        $con = new PDO(DBINFO, DBUSER, DBPASS);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return array("state"=>true, "error"=>"");
        }
	  } catch(PDOException $e) {
		  return array("state"=>false, "error"=>$e->getMessage());
	  }
	  return;
    }

    function JsonDecoder($data){
		return json_decode($data);
	}

?>