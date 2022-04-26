<?php

   include("connect_server.php");
 
   function pop($container, $value, $pi){
	$new_container = array();
	$insert = 0;
	foreach($container as $getEach){
		if($getEach != $value){
			$new_container[$insert] = $getEach;
			$insert+=1;
		}
	}
	
	return $new_container;
  }

   function pop2($container, $value, $pi){
	$new_container = array();
	$insert = 0;

    for($i = 0;$i < count($container);$i++){
		if($container[$i] == $value){
		  $i++;
		  continue;
		}
		$new_container[$insert] = $container[$i];
		$insert++;
	}
	
	return $new_container;
  }

  function LiveSearch() : void{
	 if($_POST["live"] == 0){

		     $connect = ConnectServer(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

		 
             $liveSearch = $_POST["liveSearch"];
			 $product_service_names = "productServiceNames";
			 $server_target_db = "select productServiceName, dirId from ".$product_service_names.
			 " where productServiceName like '".$liveSearch."%';";// and id='".$id."';";
			 
			 $connect_result = $connect->query($server_target_db);	

			 $productServiceName = array();
			 $productServiceCompany = array();
			 $productServiceIndex = 0;
             $productServiceFileTypeID = array();
             $productServiceAudioAdImage = array();
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>25, "search_input_error"=>$liveSearch));
				 return;
			 }		 

			 $dirIdContainer = array();
             $indexer = 0;
			 $pi = 0;

			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					$dirIdContainer[$indexer] = $row["dirId"];
					$productServiceName[$indexer] = $row["productServiceName"];
					$indexer++;
				}
			 }else{
				 echo json_encode(array("state"=>3, "search_input_error"=>$liveSearch));
				 return;
			 }
            
            $indexer = 0;

			foreach($dirIdContainer as $dir_id){
			 //if($pi != count($productServiceName)-1){
			 $product_service_info = "product_service_info_".$dir_id;
			 $server_target_db = "select productServiceCompany, 
			 productServiceAudioAdImage from ".$product_service_info.
			 " where productServiceName='".$productServiceName[$pi]."';";// and id='".$id."';";
 
			 $connect_result = $connect->query($server_target_db);

			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $productServiceCompany[$indexer] = $row["productServiceCompany"];
					 $productServiceAudioAdImage[$indexer] = $row["productServiceAudioAdImage"];
					 $indexer += 1;
				}
			 }else{
				 /*echo json_encode(array("state"=>3, "search_input_error"=>$liveSearch));
				 return;*/
				 
				 //$f = array($productServiceName);
				 //$f[1] = count($productServiceName);
				 
				 //$productServiceName = pop2($productServiceName, 
				 //$productServiceName[$pi], $pi);				 
				 
				 //$f[2] = $productServiceName;
				 //$f[3] = count($productServiceName);
				 
				 //echo json_encode($f);
				 //return;
				 
				 //$dirIdContainer = pop($dirIdContainer, 
				 //$dir_id, $pi);
			 }
             $pi += 1;	
			 //}
           }
			 
			 $server_target_db = "select productServiceName, productServiceAudioAdImage from ".$product_service_names.
			 " where productServiceName like '".$liveSearch."%';";// and id='".$id."';";
			 
			 $connect_result = $connect->query($server_target_db);	

			 $productServiceName = array();
			 $productServiceIndex = 0;
             $productServiceFileTypeID = array();
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>25, "search_input_error"=>$liveSearch));
				 return;
			 }	


			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
                     if(strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION)) == "jpg"){
						$productServiceFileTypeID[$productServiceIndex] = 0;
				     }else if(strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION)) == "mp3"){
						$productServiceFileTypeID[$productServiceIndex] = 2;
						$productServiceAudioAdImage[$productServiceIndex] = $row["productServiceAudioAdImage"];
				     }else{
					    $productServiceFileTypeID[$productServiceIndex] = 1;
				     }
					 $productServiceName[$productServiceIndex] = $row["productServiceName"];
                     $productServiceIndex += 1;					 
				}
			 }else{
				 echo json_encode(array("state"=>3, "search_input_error"=>$liveSearch));
				 return;
			 }

           	 if($productServiceIndex != 0){
				echo json_encode(array($productServiceName, $productServiceCompany, $productServiceAudioAdImage, "state"=>33, 
				"fileTypeID"=>$productServiceFileTypeID, "page_type"=>0, "search_input"=>$liveSearch));
                return;				
			 }		  
			 else{
				echo json_encode(array($productServiceName, $productServiceCompany, $productServiceAudioAdImage, "state"=>4, 
				"fileTypeID"=>$productServiceFileTypeID, "page_type"=>0, "search_input"=>$liveSearch));
                return;				    
			 }	
	 }else if($_POST["live"] == 1){
	  if($_POST["liveSearch"] != ""){
		     $connect = ConnectServer(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

			 $id = $_POST["drim"];
             $liveSearch = $_POST["liveSearch"];
			 
			 $server_target_db = "select * from gaga where id='".$id."';";
			 
			 $connect_result = $connect->query($server_target_db);		 
			 $productServiceName = array();
			 $productServiceCompany = array();
			 $productServiceAudioAdImage = array();
			 
			 if($connect_result === FALSE){
				 $connect->close();
				 echo json_encode(array("state"=>2, "search_input_error"=>$liveSearch));
				 return;
			 }	
			 

			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $dirId = $row["dirId"];				 
				}
			 }else{
				 echo json_encode(array("state"=>31, "error"=>$connect->error, 
				 "search_input_error"=>$liveSearch, "id"=>$id));
				 $connect->close();
				 return;
			 }
			 
             $product_service_info = "product_service_info_".$dirId;
			 
			 $server_target_db = "select productServiceCompany, productServiceName, 
			 productServiceAudioAdImage from ".$product_service_info.
			 " where productServiceName like '".$liveSearch."%';";// and id='".$id."';";
			 
			 $connect_result = $connect->query($server_target_db);		 
			 $productServiceIndex = 0;
			 
			 if($connect_result === FALSE){
				 $connect->close();
				 echo json_encode(array("state"=>25, "search_input_error"=>$liveSearch));
				 return;
			 }		 

			 $productServiceFileTypeID = array();

			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
                     if(strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION)) == "jpg"){
						$productServiceFileTypeID[$productServiceIndex] = 0;
				     }else if(strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION)) == "mp3"){
						$productServiceFileTypeID[$productServiceIndex] = 2;
						$productServiceAudioAdImage[$productServiceIndex] = $row["productServiceAudioAdImage"];
				     }else{
					    $productServiceFileTypeID[$productServiceIndex] = 1;
				     }
					 $productServiceName[$productServiceIndex] = $row["productServiceName"];
					 $productServiceCompany[$productServiceIndex] = $row["productServiceCompany"];
                     $productServiceIndex += 1;					 
				}
			 }else{
				 $connect->close();
				 echo json_encode(array("state"=>39, "search_input_error"=>$liveSearch));
				 return;
			 }

           	 if($productServiceIndex != 0){
				$connect->close();
				echo json_encode(array($productServiceName, $productServiceCompany, $productServiceAudioAdImage
				, "state"=>32, 
				"fileTypeID"=>$productServiceFileTypeID, "page_type"=>1, "search_input"=>$liveSearch));
                return;				
			 }		  
			 else{
				$connect->close();
				echo json_encode(array($productServiceName, $productServiceCompany, $productServiceAudioAdImage, 
				"state"=>4, 
				"fileTypeID"=>$productServiceFileTypeID, "page_type"=>1, "search_input"=>$liveSearch));
                return;				    
			 }
			 
	  } 	 	 

	 }else{
		 
	 }
	  return;
  }
 LiveSearch();
?>
