<?php

			$localhost = "localhost";
			$dbuser = "333811";
			$dbpass = "davidansong12345";
			$dbname = "333811";
			
			 $connect = new mysqli($localhost, $dbuser, $dbpass, $dbname);
			 if($connect->connect_error){
				 echo json_encode(array("state"=>0));
				 return;
			 }
			 $server_target_db = "use `333811`;";
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === False){
				 $connect->close();
				 echo json_encode(array("state"=>1));
				 return;
			 }

 $sql = "select * from productservicenames;";
 
 $connect->query($sql);
 
 if($connect_result->num_rows > 0){
	while($row = $connect_result->fetch_assoc()){
	   echo $row["dirId"];
	   echo $row["productservicename"];
	   echo $row["productserviceId"];
	}
 }else{
	echo "non";
 }
 
 $connect->close();
 
?>