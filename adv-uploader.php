<?php
 
 declare(strict_types=1);
 
 include_once("connect_server.php"); 
 include_once("functions.php"); 

 function GetAdvFile4Uploader($server_proto = array("GET", "POST", "PUT", "HEAD", "TARGET", "OPTION", "DELETE", "ENV", "FILES")) : void{	 
	switch($_POST["fetch"]){
	  case "UPLOAD":
	  case "upload":
	  case 0:
		 $advFile = $_FILES["adv"];
		 $advDir = "adv.videos"."\\";
		 $advFiler = $advDir.basename($advFile["name"]);
		 move_uploaded_file($_FILES["adv"]["tmp_name"], $advFiler); 
		 echo json_encode(array("advFile"=>$advFiler, "state"=>true));
		 return;
	  break;
	  case "UPLOADS":
	  case "uploads":
	  case 1:
         //echo $_FILES["uploads"]["name"][1];
		if($_POST["drim"] != ""){
		  if($_POST["dirId"] != ""){

             $connect = connectserver(0);
			 
			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }

			 $connect = $connect["connect"];

			 $id = $_POST["drim"];
			 $dirId = $_POST["dirId"];
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
/* 			 $server_target_db = "Drop table if exists productServiceNames;";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }		 */	 
			 
			 $imageFileName = "";
			 $sender_name = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $id = $row["id"];						   
					 $dirId2 = $row["dirId"];	
					 $sender_name = $row["username"];
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }

			 $productErrorContainer = array();
			 $productIndex = 0;
             
			 $ps = json_decode($_POST["PS"]);
			 
			 $genCons = "NO_VID";
			 $genContainer = array();
			 $realArrangementContainer = array();
			 
			 $fgenContainer = array();
			 $tmp_gen_container = array();
			 
			 $gen_indexxer = 0;
			 
			 $dir = "";
			 
			$blobRelations = array(); 
			 
			if($_POST["gen-container"] != ""){
			 $genContainer = json_decode($_POST["gen-container"]);
			 $realArrangementContainer = json_decode($_POST["real-arrangement-container"]);
			 
			 //$blobGenNames = json_decode($_POST["blob-gen-names"]);
			 
			 $fgenContainer = $genContainer;
			 
			 $blobCall = 0;
			 
			 foreach($realArrangementContainer as $virtualFiles){
				$blobRelations[$virtualFiles] = $genContainer[$blobCall];
				$blobCall++;
			 }
			 
			 //echo json_encode(array("rl"=>, ""=>));
			 
			 $blobCall = 0;
			 $videoExists = 0;
			 
			 /*for($main = 0;$main < count($genContainer);$main++){
				 for($check = 0;$check < $_POST["ttl-file-length"];$check++){
					if($_FILES["uploads"]["name"][$check] == $realArrangementContainer[$main]){
						//$videoExists++;
						//$tmp_gen_container[$gen_indexxer] = $genContainer[$videoExists-$check];
						$foundName = $realArrangementContainer[$main];
						
						$tmp_gen_container[$gen_indexxer] = $blobRelations[$foundName];
						
						$gen_indexxer++;
					}else{
						$videoExists++;
					}
				 }
			 }*/
			}
			
			/*echo json_encode(array("g"=>$genContainer, "rel"=>$realArrangementContainer,
			"tmp"=>$tmp_gen_container, "gi"=>$gen_indexxer, 
			"bn"=>$blobRelations));
			return;*/
			
			 $gen_indexxer = 0;
			 
			 $genContainer = $tmp_gen_container;
			 
			 /*echo json_encode(array("fgen"=>$fgenContainer, "sgen"=>$genContainer, 
			 "real"=>$realArrangementContainer));
			 return;*/
			 
			 $ps_index = 0;
			 //$ps[0][$ps_index]->location
			 $ps_error = 0;
			 $ps_number = 0;
			 
			 if($_POST["GAGA_CMPO"] == "1"){
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->description == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 114;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 115;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 116;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 117;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 118;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }
			 }else if($_POST["GAGA_CMPO"] == "2"){
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->description == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 114;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 115;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 116;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 117;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 118;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }
			 }else{//"file_name"=>$advEach
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }				 
			 }
			 
			 if($ps_error == 1){
				 echo json_encode(array("ps_number"=>$ps_number, "ps_error"=> $ps_error,
				 "state"=>$state));
				 return;
			 }

                         //$productId = $_POST["RRND"];

			 /*$productServiceInfoDataSet = array(
					   $_POST["productServiceEmail"], $_POST["productServiceTelephone"], 
					   $_POST["productServiceLocation"], $_POST["productServiceApprovedBy"], 
					   $_POST["productServiceDescription"], $_POST["productServiceCommencementDate"], 
					   $_POST["productServiceElapsingDate"], $_POST["productServiceCommencementTime"]
					   , $_POST["productServiceElapsingTime"], ""
					   , $_POST["gagaShipmentDate"], $_POST["gagaShipmentTime"],
					   $_POST["productServiceCountry"], $_POST["productServiceCompany"]
			 );*/
			 $CHECK = 0;
			 $uploadOk = 0;
			 $fileReport = null;
			 $retrieveAudioAdImagesUsingCount = 0;
			 $AudioAdImageName = "";
			 $AudioAdImageNameID = "";
			 $AudioAdImageNameContainer = array();
			 $AudioAdImageNameContainer2 = array();
			 $dir = "";

			 $VideoAdImageName = ""; 
			 $VideoAdImageNameContainer = array();
			 $VideoAdImageNameContainer2 = array();
			 $retrieveVideoAdImagesUsingCount = 0;
			 $retrieveVideoAdImagesUsingCount_0 = 0;
			 
			 if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){
				 $server_target_db = "update gaga set dirId='".$dirId."' where id='".$id."';";
				 $connect_result = $connect->query($server_target_db);		 
				 if($connect_result === FALSE){
					 //$connect->close()
					 echo json_encode(array("state"=>3, "error"=>$connect->error, 
					 "close"=>$connect->close()));
					 return;
				 }  
				    
		 $server_target_db = "create table if not exists productServiceNames(
				      dirId varchar(30) null,
					  productServiceId bigint primary key auto_increment, 
					  productServiceName text not null,
					  productServiceCompany char(50) not null,
					  productServiceAudioAdImage text null,
					  productServiceVideoAdImage text not null, 
					  productServicePrivacy text not null
				 );";
				 $connect_result = $connect->query($server_target_db);		 
				 if($connect_result === FALSE){
					 //$connect->close();	
					 echo json_encode(array("state"=>31, "error"=>$connect->error,
					 "close"=>$connect->close()));
					 return;
				 }  									   				 
				 
					$productServiceInfoDataSet[9] = $dirId;
                                        $product_service_info = "product_service_info_".$dirId;
					$server_target_db = "create table if not exists ".$product_service_info."(
                       productServiceId bigint(50) primary key auto_increment,
					   productServiceEmail varchar(20) not null,
					   productServiceTelephone char(20) not null,
					   productServiceLocation text not null,
					   productServiceApprovedBy text not null,
					   productServiceDescription text not null,
					   productServiceCommencementDate nchar(10) not null,
					   productServiceElapsingDate char(10) not null,
					   productServiceCommencementTime varchar(10) not null,
					   productServiceElapsingTime nvarchar(10) not null,
					   productServiceRetrievalTableId varchar(30) not null,
					   productServiceName text not null,
					   gagaShipmentDate varchar(10) not null,
					   gagaShipmentTime varchar(10) not null,
					   productServiceCountry char(20) not null,
                       productServiceCompany char(50) not null,
					   productServiceAudioAdImage text null, 
					   productServiceVideoAdImage text not null, 
					   productServicePrivacy text not null
                       );";
                     $connect_result = $connect->query($server_target_db);
					if($connect_result === FALSE){
						 $connect->close();	
						 echo json_encode(array("state"=>4));
						 return;
					}  
 
				 foreach($_FILES["uploads"]["name"] as $advEachFile){
					
					 $videoFileType = strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION));
				     
					 $uploadOk = 0;
					 $check = getimagesize($_FILES["uploads"]["tmp_name"][$ps_index]);
				     
					 /*if($check === false) {
						echo json_encode(array("file_error"=>"File is an image - ",
						"mime"=>$check["mime"], "state"=>3))
					    $uploadOk = 0;
						break;
					 }*/
					 
					 if($videoFileType != "mp4" && $videoFileType != "avi" && 
					  $videoFileType != "ogg" && $videoFileType != "mkv"){
					    if($videoFileType != "mp3"){
							$uploadOk = 0;
							$fileReport = array("file_error"=>"File is not an video - ", "file_name"=>$advEachFile,
							"mime"=>$check["mime"], "ps_number"=>$ps_index, "state"=>1230710);
							break;
						}
					 }					
                     
					 if($videoFileType == "mp4"){
						$fileTypes[$ps_index] = 1;
					    //$genCons = $genContainer[$retrieveVideoAdImagesUsingCount_0];
					    $genCons = $blobRelations[$advEachFile];
					    //$dir = basename($_FILES[$genCons]["name"]).".png";
					    $dir = basename($_FILES[$genCons]["name"]).".png";

						$retrieveVideoAdImagesUsingCount_0++;

						if($retrieveVideoAdImagesUsingCount < $_POST["video-image-container-length"]){							
							$VideoAdImageName = $_FILES[$genCons]["name"]; 
							
							$VideoAdImageNameContainer[$retrieveVideoAdImagesUsingCount] = 
							$_FILES[$genCons]["tmp_name"];
							
							$VideoAdImageNameContainer2[$retrieveVideoAdImagesUsingCount] = 
							$VideoAdImageName;
							
							$retrieveVideoAdImagesUsingCount++;
						}

					 }else if($videoFileType == "mp3"){
						$fileTypes[$ps_index] = 0; 
 						/*if($ps[0][$ps_index]->audioAdImage == "undefined"){
						  $ps[0][$ps_index]->audioAdImage = "NULL";
						}else{
						  $audioAdImage = file_get_contents($ps[0][$ps_index]->audioInfos[0]);
						  if(strtolower(pathinfo($audioAdImage, PATHINFO_EXTENSION)) != "jpg"){
							echo json_encode(array("state"=>405, "audioAdImage"=>$audioAdImage, 
							"audioAdImageName"=>$audioAdImage));
							return;
						  }
						}*/
						if($_POST["audio-image-container-length"] > 0){
							if($_POST["audio-in"] == 1){
							  if($_POST["audio-type-count"] > 0){
							   if($_POST["audio-count"] > 0){
								$audioImageContainer = json_decode($_POST["audio-image-container"]);
                                
/* 								echo json_encode(array(
								"audioImC"=> $audioImageContainer, "audioImCL"=> $_POST["audio-image-container-length"], 
								"audio-in"=> $_POST["audio-in"], "audio-type-c"=>$_POST["audio-type-count"], 
								"audio-count"=>$_POST["audio-count"], 
								"f0"=>$_FILES["audio-image-file-0"], 
								"f1"=>$_FILES["audio-image-file-1"],
								"f2"=>$_FILES["audio-image-file-2"]));
								
								return; */
								
								if($retrieveAudioAdImagesUsingCount < $_POST["audio-image-container-length"]){
								   $AudioAdImageNameID = "audio-image-file-".number_format($retrieveAudioAdImagesUsingCount); 
								   $AudioAdImageName = $_FILES[$AudioAdImageNameID]["name"]; 
								   $AudioAdImageNameContainer[$retrieveAudioAdImagesUsingCount] = 
								   $_FILES[$AudioAdImageNameID]["tmp_name"];
								   $AudioAdImageNameContainer2[$retrieveAudioAdImagesUsingCount] = 
								   $AudioAdImageName;
								   $retrieveAudioAdImagesUsingCount++;
								   $dir = "";
								}
								
							   }
							  }
							}
						}else{
							$AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
						}
					 }
					 //echo json_encode(array("state"=>400));
					 //return;
					 // Check file size
					 if ($_FILES["uploads"]["size"][$ps_index] > 211111115353811) {
					   $fileReport = array("file_error"=>"Sorry, your file is too large.",
					   "file_name"=>$advEachFile, "size"=>$_FILES["uploads"]["size"][$ps_index], "mime"=>$check["mime"], "ps_number"=>$ps_index, 
					   "state"=>1230712);
					   $uploadOk = 0;
					   break;
					 }
					 //$_POST["RRND"];//
                     //$productId = $productId = $ps[0][$ps_index]->psid;//number_format(rand(0,  59968585)*time());
					 
					 $ps[0][$ps_index]->psid = $ps[0][$ps_index]->psid+$ps_index;

					 $pattern = "/'/i";
						 
					 $ps[0][$ps_index]->description = preg_replace($pattern, "\'", $ps[0][$ps_index]->description);
					 					  
					 $server_target_db = "insert into productServiceNames values('".
					 $dirId."', '".$ps[0][$ps_index]->psid."', '".$advEachFile."'
					 , '".$ps[0][$ps_index]->company."', '".$AudioAdImageName."', 
					 '".$dir."', '".$ps[0][$ps_index]->privacy."');";
					 $connect_result = $connect->query($server_target_db);		 
					 if($connect_result === FALSE){
						 //$connect->close();	
						 echo json_encode(array("state"=>3, "error"=>$connect->error,
						 "close"=>$connect->close()));
						 return;
					 }
					 
					//$dir = "imager/".basename($_FILES["image"]["name"]).".png";
		 
					 $server_target_db = "insert into ".$product_service_info.
					 "()"."values('".$ps[0][$ps_index]->psid."', '".$ps[0][$ps_index]->email."', '".$ps[0][$ps_index]->telephone
					 ."', '".$ps[0][$ps_index]->location."', '".$ps[0][$ps_index]->approvedBy
					 ."', '".$ps[0][$ps_index]->description."', '".$ps[0][$ps_index]->commencementDate
					 ."', '".$ps[0][$ps_index]->elapsingDate."', '".$ps[0][$ps_index]->commencementTime
					 ."', '".$ps[0][$ps_index]->elapsingTime."', '".$dirId
					 ."', '".$advEachFile."', '".$ps[0][$ps_index]->shipmentDate
					 ."', '".$ps[0][$ps_index]->shipmentTime."', '".$ps[0][$ps_index]->country."
					 ', '".$ps[0][$ps_index]->company."', '".$AudioAdImageName."', 
					 '".$dir."', '".$ps[0][$ps_index]->privacy."');"; //, 'AUDIO_IMAGE_NOT_FOUND
              
					 $connect_result = $connect->query($server_target_db);		
					 $CHECK = 1;
					 if($connect_result === FALSE){
						 //$connect->close();	
						 echo json_encode(array("state"=>8, "error"=>$connect->error,
						 "close"=>$connect->close()));
						 return;
					 }  
					 //sleep(2);
                                          $ps_index += 1;
				 }				 				 
				 
				 if($fileReport != null){
					echo json_encode($fileReport);
					return;
				 }
				 
				 if(!is_dir("adv-accounts/".$dirId)){
					mkdir("adv-accounts/".$dirId, 0777, true);
				 }		
                $dirId2 = $dirId;				 
			 }else{
				$productErrorContainer = array();
				$productServiceInfoDataSet[9] = $dirId2;
				$product_service_info = "product_service_info_".$dirId2;
				foreach($_FILES["uploads"]["name"] as $advEachFile){

					 $videoFileType = strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION));
				     
					 $uploadOk = 0;
					 $check = getimagesize($_FILES["uploads"]["tmp_name"][$ps_index]);
				     
					 /*if($check === false) {
						echo json_encode(array("file_error"=>"File is an image - ",
						"mime"=>$check["mime"], "state"=>3))
					    $uploadOk = 0;
						break;
					 }*/
					 
					 if($videoFileType != "mp4" && $videoFileType != "avi" && 
					  $videoFileType != "ogg" && $videoFileType != "mkv" && $videoFileType == "webm"){
					   if($videoFileType == "mp3" || $videoFileType == "jpg" || $videoFileType == "png" ){
						$uploadOk = 0;
						$fileReport = array("file_error"=>"File is not a video - ",
						"file_name"=>$advEachFile,
						"mime"=>$check["mime"], "ps_number"=>$ps_index, "state"=>1230710);
						break;
					   }
					 }

					 if($videoFileType == "mp4" || $videoFileType == "webm"){
						$fileTypes[$ps_index] = 1;
					    //$genCons = $genContainer[$retrieveVideoAdImagesUsingCount_0];
					    $genCons = $blobRelations[$advEachFile];
					    //$dir = basename($_FILES[$genCons]["name"]).".png";
					    $dir = basename($_FILES[$genCons]["name"]).".png";
	                    
						$retrieveVideoAdImagesUsingCount_0++;
						
						if($retrieveVideoAdImagesUsingCount < $_POST["video-image-container-length"]){							
							$VideoAdImageName = $_FILES[$genCons]["name"]; 
							
							$VideoAdImageNameContainer[$retrieveVideoAdImagesUsingCount] = 
							$_FILES[$genCons]["tmp_name"];
							
							$VideoAdImageNameContainer2[$retrieveVideoAdImagesUsingCount] = 
							$VideoAdImageName;
							
							$retrieveVideoAdImagesUsingCount++;
						}
					 }else if($videoFileType == "mp3"){
						$fileTypes[$ps_index] = 0; 
 						/*if($ps[0][$ps_index]->audioAdImage == "undefined"){
						  $ps[0][$ps_index]->audioAdImage = "NULL";
						}else{
						  //$audioAdImage = file_get_contents($ps[0][$ps_index]->audioInfos[0]);//"./bs/".$ps[0][$ps_index]->audioInfos[0]);
						  $audioAdImage = $ps[0][$ps_index]->audioAdImage;
						  if(strtolower(pathinfo($ps[0][$ps_index]->audioInfos[0], PATHINFO_EXTENSION)) == "mp3"){
							echo json_encode(array("state"=>405, "audioAdImage"=>$audioAdImage, 
							"audioAdImageName"=>$audioAdImage));
							return;
						  }
						}*/
						if($_POST["audio-image-container-length"] > 0){
							if($_POST["audio-in"] == 1){
							  if($_POST["audio-type-count"] > 0){
							   if($_POST["audio-count"] > 0){
								$audioImageContainer = json_decode($_POST["audio-image-container"]);
                                
								/*echo json_encode(array(
								"audioImC"=> $audioImageContainer, "audioImCL"=> $_POST["audio-image-container-length"], 
								"audio-in"=> $_POST["audio-in"], "audio-type-c"=>$_POST["audio-type-count"], 
								"audio-count"=>$_POST["audio-count"]));
								/*"f0"=>$_FILES["audio-image-file-0"], 
								"f1"=>$_FILES["audio-image-file-1"],
								"f2"=>$_FILES["audio-image-file-2"]));*/
								
								if($retrieveAudioAdImagesUsingCount < $_POST["audio-image-container-length"]){
								   $AudioAdImageNameID = "audio-image-file-".number_format($retrieveAudioAdImagesUsingCount); 
								   $AudioAdImageName = $_FILES[$AudioAdImageNameID]["name"]; 
								   $AudioAdImageNameContainer[$retrieveAudioAdImagesUsingCount] = 
								   $_FILES[$AudioAdImageNameID]["tmp_name"];
								   $AudioAdImageNameContainer2[$retrieveAudioAdImagesUsingCount] = 
								   $AudioAdImageName;								   
								   $retrieveAudioAdImagesUsingCount++;
								   $dir = "";
								}
								
							   }
							  }
							}
						}else{
							$AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
						}
					 }
					 //echo json_encode(array("state"=>400));
					 //return;			 

					 // Check file size
					 if ($_FILES["uploads"]["size"][$ps_index] > 2111115353811) {
					   $fileReport = array("file_error"=>"Sorry, your file is too large.",
					   "file_name"=>$advEachFile,
					   "size"=>($_FILES["uploads"]["size"][$ps_index]/1000000), "mime"=>$check["mime"], "ps_number"=>$ps_index, 
					   "state"=>1230712);
					   $uploadOk = 0;
					   break;
					 }					
					
					$server_target_db = "select productServiceRetrievalTableId from ".$product_service_info.
					" where productServiceName='".$advEachFile."';";
					$connect_result = $connect->query($server_target_db);
				    //echo $dirId2."[]".$advEachFile;
					//echo $product_service_info;
					if($connect_result === FALSE){
                         echo json_encode(array("state"=>36, "error"=>$connect->error,
						 "close"=>$connect->close()));
						 return;						
					}

					 if ($connect_result->num_rows > 0) {
                         echo json_encode(array("state"=>37, "error"=>$connect->error));
						 return;
					 }else{
						 $productId = didcx_random_number_generator(0, 228828281919191);//number_format(rand(0,  59968585)*time());
						 
						 $ps[0][$ps_index]->psid = $ps[0][$ps_index]->psid+$ps_index;
						 
						 $pattern = "/'/i";
						 
						 $ps[0][$ps_index]->description = preg_replace($pattern, "\'", $ps[0][$ps_index]->description);
							 
						 $server_target_db = "insert into productServiceNames values('".
						 $dirId2."', '".$ps[0][$ps_index]->psid."', '".$advEachFile."'
						 , '".$ps[0][$ps_index]->company."', '".$AudioAdImageName."', 
						 '".$dir."', '".$ps[0][$ps_index]->privacy."');";
						 
						 $connect_result = $connect->query($server_target_db);
						  //echo 23;
						 if($connect_result === FALSE){
							 //$connect->close();	
							 echo json_encode(array("state"=>35, "error"=>$connect->error,
							 "close"=>$connect->close()));
							 return;
						 }
						 
						 
					 $server_target_db = "insert into ".$product_service_info.
					 "()"."values('".$ps[0][$ps_index]->psid."', '".$ps[0][$ps_index]->email."', '".$ps[0][$ps_index]->telephone
					 ."', '".$ps[0][$ps_index]->location."', '".$ps[0][$ps_index]->approvedBy
					 ."', '".$ps[0][$ps_index]->description."', '".$ps[0][$ps_index]->commencementDate
					 ."', '".$ps[0][$ps_index]->elapsingDate."', '".$ps[0][$ps_index]->commencementTime
					 ."', '".$ps[0][$ps_index]->elapsingTime."', '".$dirId
					 ."', '".$advEachFile."', '".$ps[0][$ps_index]->shipmentDate
					 ."', '".$ps[0][$ps_index]->shipmentTime."', '".$ps[0][$ps_index]->country."
					 ', '".$ps[0][$ps_index]->company."', '".$AudioAdImageName."', 
					 '".$dir."', '".$ps[0][$ps_index]->privacy."');"; //, 'AUDIO_IMAGE_NOT_FOUND
                     
					 $connect_result = $connect->query($server_target_db);
					 
							$CHECK = 2;
							if($connect_result === FALSE){
								$productErrorContainer[$productIndex] = $advEachFile;
								$productIndex += 1;
							}
                             sleep(2);
							 $ps_index += 1;
  				        
					}					
				}				 
			 }          

            //echo json_encode($AudioAdImageNameContainer);
			//return;			
			
			if($fileReport != null){
				echo json_encode($fileReport);
				return;
			} 
			
 
			if(!is_dir("adv-accounts/".$dirId2)){
			    mkdir("adv-accounts/".$dirId2, 0777, true);
			}
            
			 		 
		     //$connect->close();		
			 
			 $advFile = $_FILES["uploads"];
			 $advDirAccount = "adv-accounts";
			 $advDir = $advDirAccount."\\".$dirId2;
			 $advDirAudios = $advDirAccount."\\".$dirId2.".audios";
			 $advDirAudiosAdImage = $advDirAccount."\\".$dirId2.".audios.img";
			 $advDir2 = $advDir."\\";
			 $advDir2Audios = $advDirAudios."\\";
		     $index = 0;
			 $advFileIndexContainer = array();
			 
			 $advFileDir4DB = "adv-accounts/".$dirId2.".audios/";
			 $advFileDir5DB = "adv-accounts/".$dirId2.".audios.img/";
			 $advFileDir4DB2 = "adv-accounts/".$dirId2."/";
			 $advFile4DB = "";
			 
			 $advDir4VideoAds = $advDirAccount."/".$dirId2.".video.img";
			 $advDir4VideoAds2 = $advDirAccount."/".$dirId2.".video.img/";

			 foreach($advFile["name"] as $advEachFile){
			   $advFileIndexContainer[$index] = $advEachFile;
			   $index++;
			 }
				/*echo json_encode(array("AudioAdImageNameContainer"=>$AudioAdImageNameContainer, 
					"AudioAdImageNameContainer2"=>$AudioAdImageNameContainer2,
					"VideoAdImageNameContainer"=>$VideoAdImageNameContainer,
					"VideoAdImageNameContainer2"=>$VideoAdImageNameContainer2));
					return;
					*/
				$curl = curl_init();
                
				

				curl_setopt_array($curl, array(
					CURLOPT_URL => "http://127.0.0.1/default.adv.uploads.php",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
					CURLOPT_POSTFIELDS => json_encode(array("ADVERTS"=> $_FILES["uploads"]["tmp_name"], "AD_FN"=>$advFileIndexContainer, 
					"SERVICE_TYPE_ID"=>"0", "DIR_1"=>$advDir, "DIR_2"=>$advDir2, "fileLength"=>$ps[1], 
					"AudioAdImageNameContainer"=>$AudioAdImageNameContainer, 
					"AudioAdImageNameContainer2"=>$AudioAdImageNameContainer2,
					"VideoAdImageNameContainer"=>$VideoAdImageNameContainer,
					"VideoAdImageNameContainer2"=>$VideoAdImageNameContainer2
					)),
					CURLOPT_HTTPHEADER => array(
						"cache-control: no-cache",
						"content-type: false",
						),
					)
				);
				
				$response = curl_exec($curl);
				$err = curl_error($curl);
				$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
				curl_close($curl);

				if ($err) {
					echo $err;
					return;
					//return array($httpcode,$err);
				} else {
					//echo $response;
					//echo $httpcode;
					//return array($httpcode,json_decode($response));
				}
				


			 $index = 0;
			 $advFileIndexContainer = array();
			 
			 $ps_new = $ps;
			 $ps_pi = $ps;

             $advFiler = "";
             $advFile4VAdsImages = "";
			 $retrieveAudioAdImagesUsingCount = 0;
			 $gen_indx = 0;
 			 
			 foreach($advFile["name"] as $advEachFile){
			   if(strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION)) == "mp3"){
				 if(!is_dir($advDirAudios)){
					 mkdir($advDirAudios, 0777, true);
				 }
				 if(!is_dir($advDirAudiosAdImage)){
					 mkdir($advDirAudiosAdImage, 0777, true);
				 }
			      $advFiler = $advDir2Audios.basename($advEachFile);
				  $advFile4DB = $advFileDir4DB.basename($advEachFile);
				  $AudioAdImageNameID = "audio-image-file-".number_format($retrieveAudioAdImagesUsingCount); 
				  $AudioAdImageName = $advFileDir5DB.basename($_FILES[$AudioAdImageNameID]["name"]);
				  move_uploaded_file($_FILES[$AudioAdImageNameID]["tmp_name"], $AudioAdImageName); 
				  $retrieveAudioAdImagesUsingCount++;
				  $genCons = "NO_VID";
			   }else{
				 if(!is_dir($advDir)){
					 mkdir($advDir, 0777, true);
				 }
				 if(!is_dir($advDir4VideoAds)){
					mkdir($advDir4VideoAds, 0777, true);
				 }
				  $advFiler = $advDir2.basename($advEachFile);
				  $advFile4DB = $advFileDir4DB2.basename($advEachFile);
				  //-----video ads images -----
				  //$genCons = $genContainer[$gen_indx];
				  $genCons = $blobRelations[$advEachFile];
				  $advFile4VAdsImages = $advDir4VideoAds2.basename($_FILES[$genCons]["name"]).".png";
				  	
				  move_uploaded_file($_FILES[$genCons]["tmp_name"], $advFile4VAdsImages);
				  $gen_indx++;
			   }
			   move_uploaded_file($_FILES["uploads"]["tmp_name"][$index], $advFiler); 
			   $index_name = "advFile-".number_format($index);
			   $advFileIndexContainer[$index_name] = $advEachFile;
			   $index++;
			 }
			 
			 $state = 0;
			 
			 if($productIndex != 0){
				 $advFileIndexContainer["productErrorContainer"] = $productErrorContainer;
				 $advFileIndexContainer["state"] = 50;
				 $advFileIndexContainer["CHECK"] = $CHECK;
				 $state = 50;
			 }
			 else{
				 $advFileIndexContainer["check"] = $CHECK;
                 $advFileIndexContainer["state"] = 100;
				 $state = 100;
			 }
			 $index_id = 0;//didcx_random_number_generator(1, 23930399);
			 $pindex_id = 0;
			 $retrieveAudioAdImagesUsingCount = 0;
			 $gen_indx = 0;
			 
			 if($advFileIndexContainer["state"] == 100){
				  $id = didcx_random_number_generator(1, 23930399);
				  $message = "No data";
				  //$index_id = $id;
				  foreach($advFile["name"] as $advEachFile){
					   if(strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION)) == "mp3"){
						 if(!is_dir($advDirAudios)){
							 mkdir($advDirAudios, 0777, true);
						 }
						  $advFiler = $advDir2Audios.basename($advEachFile);
						  $advFile4DB = $advFileDir4DB.basename($advEachFile);
						  $AudioAdImageNameID = "audio-image-file-".number_format($retrieveAudioAdImagesUsingCount); 
						  $AudioAdImageName = $advFileDir5DB.basename($_FILES[$AudioAdImageNameID]["name"]);
						  move_uploaded_file($_FILES[$AudioAdImageNameID]["tmp_name"], $AudioAdImageName); 
						  $retrieveAudioAdImagesUsingCount++;
						  $genCons = "NO_VID";
					   }else{
						 if(!is_dir($advDir)){
							 mkdir($advDir, 0777, true);
						 }
						 if(!is_dir($advDir4VideoAds)){
							mkdir($advDir4VideoAds, 0777, true);
						 }
						  $advFiler = $advDir2.basename($advEachFile);
						  $advFile4DB = $advFileDir4DB2.basename($advEachFile);
						  $AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
						  //-----video ads images -----
						  //$genCons = $genContainer[$gen_indx];
						  $genCons = $blobRelations[$advEachFile];
						  $advFile4VAdsImages = $advDir4VideoAds2.basename($_FILES[$genCons]["name"]).".png";
							
						  //move_uploaded_file($_FILES[$genCons]["tmp_name"], $advFile4VAdsImages);
						  $gen_indx++;
					   }
					   
					   $ps[0][$index_id]->psid = $ps[0][$index_id]->psid+$index_id;
					   
					   $server_target_db ="INSERT INTO notifications_".$_POST["drim"]."(id, sendername, name, type, message, 
					   status, date, filename, fileId, audioAdImage, videoAdImage, privacy) 
					   VALUES ('".$ps[0][$index_id]->psid."', '".$sender_name."', '', 'comment', '$message', 'read', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', '".$AudioAdImageName."', 
					   '".$genCons."', '".$ps[0][$index_id]->privacy."')";                   
                       
					   //$id += 1;
					   
					   $connect_result = $connect->query($server_target_db);
					   
					  if($connect_result === FALSE){
						echo json_encode(array("state"=>506, "error"=>$connect->error,
						"close"=>$connect->close()));
						return;						
					  }
                      
					   $ps_pi[0][$pindex_id]->psid = $ps_pi[0][$pindex_id]->psid+$pindex_id;
					   $server_target_db ="INSERT INTO notifications (
					   senderId, sendername, id, name, type, message, 
					   status, date, filename, fileId, audioAdImage, videoAdImage, privacy) 
					   VALUES ('".$_POST["drim"]."', '".$sender_name."', '".$ps_pi[0][$pindex_id]->psid."', '', 'comment', '$message', 'unread', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', '".$AudioAdImageName."', 
					   '".$genCons."', '".$ps[0][$index_id]->privacy."');";                   
                       
					   //$id += 1;
					   
					   $connect_result = $connect->query($server_target_db);
					   
					  if($connect_result === FALSE){
						echo json_encode(array("state"=>566, "error"=>$connect->error,
						"close"=>$connect->close()));
						return;						
					  }					  

					  $index_id++;
					  $pindex_id++;
				  }
                  $index_id2 = 0;
				  $server_target_db = "select id from  gaga where id !='".$_POST["drim"]."';";
				  $connect_result = $connect->query($server_target_db);

				  if($connect_result === FALSE){
                    echo json_encode(array("state"=>506, "error"=>$connect->error,
					"close"=>$connect->close()));
					return;						
				  } 
				  
				  $retrieveAudioAdImagesUsingCount = 0;
 
				  if ($connect_result->num_rows > 0) {
                     while($row = $connect_result->fetch_assoc()){
					  //$id = $index_id;
					  $index_id2 = 0;
					  foreach($advFile["name"] as $advEachFile){
					   if(strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION)) == "mp3"){
						 if(!is_dir($advDirAudios)){
							 mkdir($advDirAudios, 0777, true);
						 }
						  $advFiler = $advDir2Audios.basename($advEachFile);
						  $advFile4DB = $advFileDir4DB.basename($advEachFile);
						  $AudioAdImageNameID = "audio-image-file-".number_format($retrieveAudioAdImagesUsingCount); 
						  $AudioAdImageName = $advFileDir5DB.basename($_FILES[$AudioAdImageNameID]["name"]);
						  move_uploaded_file($_FILES[$AudioAdImageNameID]["tmp_name"], $AudioAdImageName); 
						  $retrieveAudioAdImagesUsingCount++;
						  $genCons = "NO_VID";
					   }else{
						 if(!is_dir($advDir)){
							 mkdir($advDir, 0777, true);
						 }
						 if(!is_dir($advDir4VideoAds)){
							mkdir($advDir4VideoAds, 0777, true);
						 }

						  $advFiler = $advDir2.basename($advEachFile);
						  $advFile4DB = $advFileDir4DB2.basename($advEachFile);

						  //-----video ads images -----
						  //$genCons = $genContainer[$gen_indx];
						  $genCons = $blobRelations[$advEachFile];
						  $advFile4VAdsImages = $advDir4VideoAds2.basename($_FILES[$genCons]["name"]).".png";
						  
						  //move_uploaded_file($_FILES[$genCons]["tmp_name"], $advFile4VAdsImages);
						  $gen_indx++;						  
					   }
					   
					   $ps_new[0][$index_id2]->psid = $ps_new[0][$index_id2]->psid+$index_id2;
					   
					   $server_target_db ="INSERT INTO notifications_".$row["id"]."(id, sendername, name, type, message, 
					   status, date, filename, fileId, audioAdImage, videoAdImage, privacy) 
					   VALUES ('".$ps_new[0][$index_id2]->psid."', '".$sender_name."', '', 'comment', '$message', 'unread', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', '".$AudioAdImageName."', 
					   '".$genCons."', '".$ps[0][$index_id2]->privacy."')";  
					   
					  $connect_result2 = $connect->query($server_target_db);

					  if($connect_result2 === FALSE){
						$advFileIndexContainer["state"] = 516;
						$advFileIndexContainer["error"] = $connect->error;
						$advFileIndexContainer["close"] = $connect->close();
						
						echo json_encode(array("advFilesIndexContainer"=>
						$advFileIndexContainer, 
						"state"=>516));
						return;						
					  } 
                       $index_id2++;					   
					  }					 
					 }
				  }else{
					    
						$query = "update badgeclick set click=0  
						where id != '".$_POST["drim"]."';";
						
						$performQueryer = performQueryer($query);
						if($performQueryer["state"] != true){
							$advFileIndexContainer["state"] = 516;
							$advFileIndexContainer["error"] = $performQueryerProfile["error"];
							$advFileIndexContainer["close"] = $connect->close();
							
							echo json_encode(array("advFilesIndexContainer"=>
							$advFileIndexContainer, 
							"state"=>516));
							return;		
						}
					  
						$advFileIndexContainer["state"] = 596;
						$advFileIndexContainer["error"] = $connect->error;
						$advFileIndexContainer["close"] = $connect->close();
						
						echo json_encode(array("advFilesIndexContainer"=>
						$advFileIndexContainer, 
						"state"=>596));
					return;				  
				  }
			 }
			 
			/* "fl"=>$ps[1], "fn"=>$_FILES["uploads"]["tmp_name"], 
				"err"=>$err, "res"=>$response*/
				
			 echo json_encode(array("advFilesIndexContainer"=>$advFileIndexContainer, 
			 "state"=>$state));
			 return;
		  }
		}
	  break;
	  case "FETCH":
	  case "fetch":
	  case 2:
	   { 
	      if($_POST["drim"] != ""){
					
             $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

			 $id = $_POST["drim"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $id = $row["id"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2;
			  if(!is_dir($gagaUserAccountVideos)){
				  echo json_encode(array("stata"=>550));
				  return;
			  }
			  //$file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		}
/* 		}else{
			 $file_dir_handle = opendir("./adv.videos"); //opendir("./didcx.facial.biometrics");
		} */

             $productServiceCompany = array();
             $productServiceVideoAdImage = array();
             $product_service_info = "product_service_info_".$dirId2;
			 
			 $server_target_db = "select productServiceCompany, productServiceName, 
			 productServiceVideoAdImage from ".$product_service_info.";";// and id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
	
			 $dir_index = 0;
			 
			 $_array_4_files = array();
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$id = $row["id"];	
					 $fileType = strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION));
					 if($fileType == "mp4" || $fileType == "webm" ){
					 $productServiceCompany[$dir_index] = $row["productServiceCompany"];
					 $productServiceVideoAdImage[$dir_index] = "adv.videos.img/".$row["productServiceVideoAdImage"];
					 $_array_4_files[$dir_index] = "adv.videos/".$row["productServiceName"];
					 $dir_index += 1;
					}
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
		
		  /*$dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  $_array_4_files = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "localhost/advert.llc/http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.videos/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }*/
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany, "productServiceVideoAdImage"=>
		  $productServiceVideoAdImage, "productServiceAudioAdImage"=>array(),
		  "state"=>601, "fileType"=> ""));
		  return;
		}else{
		
		  if(!is_dir("./adv.videos")){
			echo json_encode(array("state"=>554));
			return;			  
		  }
		
		  $file_dir_handle = @opendir("./adv.videos"); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();

          $connect = connectserver(0);

		  if($connect["state"] != 500006){
			echo json_encode($connect);
			return;
		  }
			 
		  $connect = $connect["connect"];
		  
          $productServiceVideoAdImage = array();
          $productservicenames = "productservicenames";

					$table = "productServiceNames";
					$query = $connect->query("SHOW TABLES LIKE '".$table."'");
					
					if($query == false){
					 echo json_encode(array("state"=>1));
					 return;				  
					}
					
				
					if($query->num_rows == 0 || $query->num_rows != 1){
					 echo json_encode(array("state"=>554));
					 return;				
					}
			 
		  $server_target_db = "select productServiceCompany, productServiceName, 
		  productServiceVideoAdImage from productservicenames;";// and id='".$id."';";
		  $connect_result = $connect->query($server_target_db);		 
			 
		  if($connect_result === FALSE){
			echo json_encode(array("state"=>2));
			return;
		  }

			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$id = $row["id"];	
                     $fileType = strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION));					 
					 if($fileType == "mp4" || $fileType == "webm"){
						 $productServiceCompany[$dir_index] = $row["productServiceCompany"];
						 $productServiceVideoAdImage[$dir_index] = "adv.videos.img/".$row["productServiceVideoAdImage"];
						 $_array_4_files[$dir_index] = "adv.videos/".$row["productServiceName"];
						 $dir_index += 1;
					}
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  $dir_index = 0;
		  
		  /*foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 //$_array_4_files[number_format($dir_index)] = "adv.videos.img/".$_array_4_json[$dir_index_str];//.'",';
				 $_array_4_files[number_format($dir_index)] = "adv.videos/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }*/
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany,
		  "productServiceVideoAdImage"=>$productServiceVideoAdImage, "state"=>601, "fileType"=> ""));
		  return;
		}
	   }
	  break;
	  case "FETCH":
	  case "fetch":
	  case 3:
	   { 
	      $accountName = "utv";
		  $account_dir = "./utv-adv-videos";
		  $file_dir_handle = opendir($account_dir); //opendir("./didcx.facial.biometrics");
		  
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo 0;
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 $_advEvent_links = '"'.$dir_index_str. '" : "'. "adv-accounts/".$accountName."/utv-adv-videos/".$_array_4_json[$dir_index_str].'",';
				 echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}";
		  return;
	   }
	  break;
	  case "&FETCH":
	  case "&fetch":
	  case 4:
	   { 
		  $file_dir_handle = opendir("./adv.actors.profiles"); //opendir("./didcx.facial.biometrics");
		  
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo 0;
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  
		  //echo "<br>";
		  //echo "\n";

		  $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
		
		  $array_files = array();
		  $firstname = "";
		  $lastname = "";
		  $name = "";
		  $array_name_index = array();
		  $externalInfos = array("profession"=>array(), "actorStory"=>array()
		  , "email"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
		  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
		  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(),
		  "adInterest"=>array(), "adFee"=>array(),
		  "username"=>array());//,array(),array(),array(),array(),array(),array(),);
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $server_target_db = "select * from gaga where imageFileName='".$_server_response_index."';";
				 $connect_result = $connect->query($server_target_db);		 
                 
				 if($connect_result === FALSE){
					$array_files[number_format($dir_index)] = "[NAME : PRIVATE]";
					$array_name_index[number_format($dir_index)] = "adv.actors.profiles/".$_server_response_index;
					
				 }else{				 
					 if ($connect_result->num_rows > 0) {
						// output data of each row
						 while($row = $connect_result->fetch_assoc()) {
							 $firstname = $row["firstname"];						   
							 $lastname = $row["lastname"];	
							 $middlename = $row["middlename"];	
							 $profession = $row["profession"];	
							 $actorStory = $row["actorStory"];	
							 $email = $row["email"];	
							 $publicTelOptional = $row["publicTelOptional"];	
							 $whatAppNoOptional = $row["whatAppNoOptional"];	
							 $facebookHandleOptional = $row["facebookHandleOptional"];	
							 $twitterHandleOptional = $row["twitterHandleOptional"];	
							 $instagramHandleOptional = $row["instagramHandleOptional"];	
							 $websiteDomainOptional = $row["websiteDomainOptional"];	
							 $adFee = $row["adFee"];	
							 if($row["adInterest"] == "All"){
							    $adInterest = $row["adInterest"]." Industrial Ads";	
							 }else{
								$adInterest = $row["adInterest"]." Ads";
							 }
							 $username = $row["username"];
							 
							 $array_files[number_format($dir_index)] = $firstname." ".$lastname;
							 
							 $externalInfos["profession"][$dir_index] = $profession;
							 $externalInfos["actorStory"][$dir_index] = $actorStory;
							 $externalInfos["email"][$dir_index] = $email;
							 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
							 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
							 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
							 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
							 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
							 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;
							 $externalInfos["adInterest"][$dir_index] = $adInterest;
							 $externalInfos["adFee"][$dir_index] = $adFee;
							 $externalInfos["username"][$dir_index] = $username;	
							 
							 $array_name_index[number_format($dir_index)] = "adv.actors.profiles/".$_server_response_index;
						}
					 }else{
						 $array_files[number_format($dir_index)] = "Jane Doe";
		                 $array_name_index[number_format($dir_index)] = "adv.actors.profiles/".$_server_response_index;
					 }	  
				 }
			  }
			  $dir_index += 1;
		  }
		  
		  $connect->close();
		  
		  //$dir_index = 0;

		  //$array_name_index = array();
/* 		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '"  "'. "http://www.localhost/advert.llc/adv.actors.profiles/".$_array_4_json[$dir_index_str];//.'",';
				 $array_name_index[number_format($dir_index)] = "http://www.localhost/advert.llc/adv.actors.profiles/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
		  $dir_index_str = number_format($dir_index);
		  //echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  //echo "}";
		  $array_name_index[$dir_index_str] = '.'; */
		  echo json_encode(array("names"=>$array_files, "files"=>$array_name_index, "externalInfos"=>$externalInfos, "state"=>600));
		  return;
	   }
	  break;
	  case "#FETCH":
	  case "#fetch":	  
	  case 5:
	  {

		  $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
		 $id = $_POST["imageId"];
		 $server_target_db = "select * from gaga where id='".$id."';";
		 $connect_result = $connect->query($server_target_db);		 
		 
		 if($connect_result === FALSE){
			 echo json_encode(array("state"=>2));
			 $connect->close();
			 return;
		 }

		 
		 $imageFileName = "";
		 $firstname = "";
		 $middlename = "";
		 $lastname = "";
		 
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			 while($row = $connect_result->fetch_assoc()) {
				 $imageFileName = $row["imageFileName"];						   
				 $firstname = $row["firstname"];						   
				 $middlename = $row["middlename"];						   
				 $lastname = $row["lastname"];						   
            }
		 }
		 
                 $imageGarbage = "gaga_garbage_".$id;
	  
		 if($_POST["firstname"] == ""){
 			   if($imageFileName != "" || $imageFileName != null || $imageFileName != "null"){
			     if($firstname == "null"){
					   echo json_encode(array("state"=>200));
					   return;					   
				 }
			   }else if($imageFileName == "" || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>200));
					   return;						 
			   }
		 }

	     if($_POST["lastname"] == ""){
				 
			   if($imageFileName != '' || $imageFileName != null || $imageFileName != "null"){
				   if($lastname == "null"){
					   echo json_encode(array("state"=>202));
					   return;					   
				   }
			   }else if($imageFileName == "" || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>202));
					   return;						 
			   }			   
		 }
		 
		 if(!is_dir("adv.actors.profiles")){
			mkdir("adv.actors.profiles", 0777, true);
		 }
		 //sleep(1);
		 $advFile = $_FILES["uploadz"];
		 $advDir = "./adv.actors.profiles/";
		 $filename = basename($advFile["name"]);
		 $advFiler = $advDir.$filename;
		 

		 $firstname = $_POST["firstname"];
		 $middlename = $_POST["middlename"];
		 $lastname = $_POST["lastname"];
                 $profession = $_POST["profession"];
		 $dirId = "gaga_garbage_".$id;
		 $privateTelOptional = $_POST["privateTelOptional"];
		 $publicTelOptional = $_POST["publicTelOptional"];
		 $whatAppNoOptional = $_POST["whatAppNoOptional"];
		 $businessEmail = $_POST["businessEmail"];
		 $privatePersonalEmailOptional = $_POST["privatePersonalEmailOptional"];
		 $facebookHandleOptional = $_POST["facebookHandleOptional"];
		 $twitterHandleOptional = $_POST["twitterHandleOptional"];
		 $instagramHandleOptional = $_POST["instagramHandleOptional"];
		 $youtubeHandleOptional = $_POST["youtubeHandleOptional"];
		 $websiteDomainOptional = $_POST["websiteDomainOptional"];
		 $countryOfBirth = $_POST["countryOfBirth"];
		 $actoryStory = $_POST["actorStory"];
		 $imageGarbage = "gaga_garbage_".$id; //$imageFileName == $imageGarbage || 

		$pattern = "/'/i";
		$actoryStory = preg_replace($pattern, "\'", $actoryStory);
		 
		 if($imageFileName == "" || $imageFileName == null || $imageFileName == "null"){
			 if($firstname == "" && $lastname == ""){
			   $server_target_db = "update gaga set imageFileName='".$filename."' where id='".$id."';";		 
			 }else{
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', firstname='".$firstname."', middlename='".$middlename."', lastname='".$lastname.
			   "', profession='".$profession."', actorStory='".$actoryStory."', privateTelOptional='".
			   $privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".
			   $youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   countryOfBirth='".$countryOfBirth."' where id='".$id."';";
			 }
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === FALSE){
				 //$slas = "\'";
				 echo json_encode(array("state"=>3, "error"=>$connect->error));
				 //echo $slas;
				 $connect->close();
				 return;
			 }		 		 
			 
			 $connect->close();
		
			 chmod($_FILES["uploadz"]["tmp_name"], 0777);
			 move_uploaded_file($_FILES["uploadz"]["tmp_name"], $advFiler); 
			 
			 //sleep(1);
			 
			 //unlink("adv.actors.profiles/".$imageFileName);
			 
			 //sleep(1);
			 
			 echo json_encode(array("src"=>$advFiler, "imageId"=>$id, "state"=>4));
			 return;				 
		 }
	     else if(unlink("adv.actors.profiles/".$imageFileName) == true){
			 if($firstname == "" && $lastname == ""){
			   //$server_target_db = "update gaga set imageFileName='".$filename.
			   //"', actorStory='".$actoryStory."' where id='".$id."';";	 
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', firstname ='".$firstname."', middlename='".$middlename."', lastname='".$lastname.
			   "', profession='".$profession."', actorStory='".$actoryStory."', privateTelOptional='".$privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".$youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   countryOfBirth='".$countryOfBirth."' where id='".$id."';";		   
			 }else if($firstname != "" && $lastname == ""){
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', firstname ='".$firstname."', middlename='".$middlename."', lastname='".$lastname.
			   "', profession='".$profession."', actorStory='".$actoryStory."', privateTelOptional='".$privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".$youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   countryOfBirth='".$countryOfBirth."' where id='".$id."';";
			 }else if($firstname == "" && $lastname != ""){
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', firstname ='".$firstname."', middlename='".$middlename."', lastname='".$lastname.
			   "', profession='".$profession."', actorStory='".$actoryStory."', privateTelOptional='".$privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".$youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   countryOfBirth='".$countryOfBirth."' where id='".$id."';";
			 }
			 else{
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', firstname ='".$firstname."', middlename='".$middlename."', lastname='".$lastname.
			   "', profession='".$profession."', actorStory='".$actoryStory."', privateTelOptional='".$privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".$youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   countryOfBirth='".$countryOfBirth."' where id='".$id."';";
			 }
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>3));
				 return;
			 }		 
			 
			 $connect->close();

		
                         chmod($_FILES["uploadz"]["tmp_name"], 0777);

                         /*$connection = ftp_connect($localhost);
                         $login = ftp_login($connection, $dbuser, $dbpass);
                         if (!$connection || !$login) { die('Ftp not connected.'); }
                         $copied = ftp_put($connection, $advFiler, $_FILES["uploadz"]["tmp_name"], FTP_BINARY);*/
			 
			 move_uploaded_file($_FILES["uploadz"]["tmp_name"], $advFiler); 
			 
			 //sleep(1);
			 
			 //unlink("adv.actors.profiles/".$imageFileName);
			 
			 //sleep(1);
			 if(file_exists($advFiler) == true){
			    echo json_encode(array("src"=>$advFiler, "state"=>4));
                         }
			 return;		
         }			 
		 else{
			 
		 }
	  }
	  break;
	  case 6: 
	  case "#fetch":
	  case "#FETCH":
	  {
		   if($_POST["ImageFileName"] != ""){
			 $imageFileName = $_POST["ImageFileName"];
			 
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

			 //$id = $_POST["imageId"];
			 //$server_target_db = "select actorStory from gaga where imageFileName='".$imageFileName."';";
			 $server_target_db = "select * from gaga where imageFileName='".$imageFileName."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 $actorStory = "";
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }

			 $firstname = "";						   
			 $lastname = "";
			 $middlename = "";
			 $actorStory = "";
			 $name = "";
             $dir_index = 0;
			  $externalInfos = array("profession"=>array(), "actorStory"=>array()
			  , "email"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
			  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
			  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(), 
			  "adInterest"=>array(), "adFee"=>array(),
			  "username"=>array());//,array(),array(),array(),array(),array(),array(),);
			  
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$actorStory = $row["actorStory"];						   
					 $firstname = $row["firstname"];						   
					 $lastname = $row["lastname"];						   
					 $middlename = $row["middlename"];						   
					 $profession = $row["profession"];	
					 $actorStory = $row["actorStory"];	
					 $email = $row["email"];	
					 $publicTelOptional = $row["publicTelOptional"];	
					 $whatAppNoOptional = $row["whatAppNoOptional"];	
					 $facebookHandleOptional = $row["facebookHandleOptional"];	
					 $twitterHandleOptional = $row["twitterHandleOptional"];	
				     $instagramHandleOptional = $row["instagramHandleOptional"];	
					 $websiteDomainOptional = $row["websiteDomainOptional"];
					 $adFee = $row["adFee"];
					 if($row["adInterest"] == "All"){
					    $adInterest = $row["adInterest"]." Industrial Ads";
					 }else{
						$adInterest = $row["adInterest"]." Ads";
					 }
					 $username = $row["username"];
					 
					 $externalInfos["profession"][$dir_index] = $profession;
					 $externalInfos["actorStory"][$dir_index] = $actorStory;
					 $externalInfos["email"][$dir_index] = $email;
					 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
					 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
					 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
					 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
					 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
					 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;					 
					 $externalInfos["adInterest"][$dir_index] = $adInterest;					 
					 $externalInfos["adFee"][$dir_index] = $adFee;					 
					 $externalInfos["username"][$dir_index] = $username;					 
				     $dir_index += 1;
				}
			 }
			 
			 $connect->close();
             
/* 			 if($actorStory != ""){
				 echo json_encode(array("actoryStory"=>$actoryStory, "state"=>6));
			 } */
             
			 $name = $firstname." ".$middlename." ".$lastname;
			 if($name != "  "){
				 echo json_encode(array("name"=>$name, "actorStory"=>$actorStory, "externalInfos"=>$externalInfos,
				 "state"=>6));
			 }else{
				 echo json_encode(array("name"=>$name, "actorStory"=>$actorStory, "externalInfos"=>$externalInfos
				 ,"state"=>7));
			 }
            			 
		   }
	  }
	  break;
	  case 7: 
	   { 
	      if($_POST["imageId"] != ""){
			
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

			 $imageId = $_POST["imageId"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where imageFileName='".$imageId."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $imageFileName = $row["imageFileName"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
/* 		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2;
			  $file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		} */
			
		  $file_dir_handle = opendir("./adv.videos"); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.videos/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", "productServiceCompany"=>$productServiceCompany, "state"=>7));
		  return;
		}
	   }	    
	  break;
	  case 8: 
	   { 
	      if($_POST["imageId"] != ""){

		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			 $imageId = $_POST["imageId"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where imageFileName='".$imageId."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 $dirId2 = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $imageFileName = $row["imageFileName"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
/* 		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2;
			  $file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		} */
          
		  //echo $dirId2;
		  
		  $dirImageRecord = "";
		  $dirImageRecord = "./adv-accounts/".$dirId2."-img-rcs";
		  
		  if(!is_dir($dirImageRecord)){
			 echo json_encode(array("state"=>8));
			 return;
		  }
		  
		  $file_dir_handle = opendir($dirImageRecord); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = $dirImageRecord."/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", "productServiceCompany"=>$productServiceCompany, "state"=>7));
		  return;
		}
	   }	  
	  break;
	  case 9:
		if($_POST["drim"] != ""){
		  if($_POST["dirId"] != ""){
 
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			 $id = $_POST["drim"];
			 $dirId = $_POST["dirId"];
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 $sender_name = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $id = $row["id"];						   
					 $dirId2 = $row["dirId"];			
					 $sender_name = $row["username"];
				}
			 }else{
				 echo json_encode(array("state"=>3, "id"=>$id));
				 return;
			 }

			 $productErrorContainer = array();
			 $productIndex = 0;
             
			 $ps = json_decode($_POST["PS"]);
			 $ps_index = 0;
			 //$ps[0][$ps_index]->location
			 $ps_error = 0;
			 $ps_number = 0;
			 
			 if($_POST["GAGA_CMPO"] == "1"){
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->description == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 114;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 115;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 116;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 117;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 118;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }
			 }else if($_POST["GAGA_CMPO"] == "2"){
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->description == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 114;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 115;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 116;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->commencementTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 117;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->elapsingTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 118;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }
			 }else{//"file_name"=>$advEach
			   for($gagaCompanyCheckCount = 0;$gagaCompanyCheckCount < $ps[1];$gagaCompanyCheckCount++){
				  if($ps[0][$gagaCompanyCheckCount]->email == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 110;			
					  $ps_error = 1;
					  break;
				  }
				  if($ps[0][$gagaCompanyCheckCount]->telephone == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 111;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->location == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 112;	
					  $ps_error = 1;
					  $connect->close();
					  break;	
				  }
				  if($ps[0][$gagaCompanyCheckCount]->approvedBy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 113;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentDate == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 119;	
					  $ps_error = 1;
					  $connect->close();
					  break;						  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->shipmentTime == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 120;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->country == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 121;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->company == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 122;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
				  if($ps[0][$gagaCompanyCheckCount]->privacy == ""){
					  $ps_number = $gagaCompanyCheckCount;
                      $state = 123;	
					  $ps_error = 1;
					  $connect->close();
					  break;					  
				  }
			   }				 
			 }
			 
			 if($ps_error == 1){
				 echo json_encode(array("ps_number"=>$ps_number, "ps_error"=> $ps_error,
				 "state"=>$state));
				 return;
			 }
			 
/* 			 echo $ps[0][2]->country;
			 echo $ps[1];

			 
			 return; */
			 
/* 			 $productServiceInfoDataSet = array(
					   $_POST["productServiceEmail"], $_POST["productServiceTelephone"], 
					   $_POST["productServiceLocation"], $_POST["productServiceApprovedBy"], 
					   $_POST["productServiceDescription"], $_POST["productServiceCommencementDate"], 
					   $_POST["productServiceElapsingDate"], $_POST["productServiceCommencementTime"]
					   , $_POST["productServiceElapsingTime"], ""
					   , $_POST["gagaShipmentDate"], $_POST["gagaShipmentTime"],
					   $_POST["productServiceCountry"], $_POST["productServiceCompany"]
			 ); */
			 
			 
			 $CHECK = 0;
			 $fileReport = null;
			 $productServiceAudioAdImage = array();
			 $AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
			 
			 if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){
				 $server_target_db = "update gaga set dirId='".$dirId."' where id='".$id."';";
				 $connect_result = $connect->query($server_target_db);		 
				 if($connect_result === FALSE){
					 $connect->close();	
					 echo json_encode(array("state"=>3));
					 return;
				 }  
				    //check(productServiceId in(0)),
				 $server_target_db = "create table if not exists productServiceNames(
				      dirId varchar(30) null,
					  productServiceId bigint primary key auto_increment, 
					  productServiceName text not null,
					  productServiceCompany char(50) not null,
					   productServiceAudioAdImage text null, 
					  productServicePrivacy text not null
				 );";
				 
				 echo 
				 
				 $connect_result = $connect->query($server_target_db);		 
				 if($connect_result === FALSE){
					 $connect->close();	
					 echo json_encode(array("state"=>31));
					 return;
				 }  									   				 
				 
					//$productServiceInfoDataSet[9] = $dirId;
                    $product_service_info = "product_service_info_".$dirId;
					$server_target_db = "create table if not exists ".$product_service_info."(
                       productServiceId bigint(50) primary key auto_increment,
					   productServiceEmail varchar(20) not null,
					   productServiceTelephone char(20) not null,
					   productServiceLocation text not null,
					   productServiceApprovedBy text not null,
					   productServiceDescription text not null,
					   productServiceCommencementDate nchar(10) not null,
					   productServiceElapsingDate char(10) not null,
					   productServiceCommencementTime varchar(10) not null,
					   productServiceElapsingTime nvarchar(10) not null,
					   productServiceRetrievalTableId varchar(30) not null,
					   productServiceName text not null,
					   gagaShipmentDate varchar(10) not null,
					   gagaShipmentTime varchar(10) not null,
					   productServiceCountry char(20) not null,
                       productServiceCompany char(50) not null,
					   productServiceAudioAdImage text null, 
				 	   productServicePrivacy text not null
                                         );";
                    $connect_result = $connect->query($server_target_db);
					if($connect_result === FALSE){
						 $connect->close();	
						 echo json_encode(array("state"=>4));
						 return;
					}  
                
				foreach($_FILES["uploadz-ad-image-records"]["name"] as $advEachFile){
					 $imageFileType = strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION));
				     
					 $uploadOk = 0;
					 $check = getimagesize($_FILES["uploadz-ad-image-records"]["tmp_name"][$ps_index]);
				     
					 /*if($check === false) {
						echo json_encode(array("file_error"=>"File is an image - ",
						"mime"=>$check["mime"], "state"=>3))
					    $uploadOk = 0;
						break;
					 }*/
					 
					 if($imageFileType != "jpg" && $imageFileType != "png" && 
					  $imageFileType != "jpeg" && $imageFileType != "gif"){
						$uploadOk = 0;
						$fileReport = array("file_error"=>"File is not an image - ",
						"file_name"=>$advEachFile, "mime"=>$check["mime"], "ps_number"=>$ps_index, "state"=>1230711);
						break;
					 }
					 
                     //$productId = $_POST["RRND"];
                     $productId = didcx_random_number_generator(0, 228828281919191);//rand(0, 44999403)*time();
					 
					 //echo $advEachFile;
					 //return;
					 
					 $ps[0][$ps_index]->psid = $ps[0][$ps_index]->psid+$ps_index;

						 $pattern = "/'/i";
						 
						 $ps[0][$ps_index]->description = preg_replace($pattern, "\'", $ps[0][$ps_index]->description);
						 
					 
					 $server_target_db = "insert into productServiceNames values('".$dirId."', '".$ps[0][$ps_index]->psid."', '".$advEachFile."'
					 , '".$ps[0][$ps_index]->company."', '', 
					 '', '".$ps[0][$ps_index]->privacy."');";
					 
					 $connect_result = $connect->query($server_target_db);
					 
					 if($connect_result === FALSE){
						 //$connect->close();	
						 echo json_encode(array("state"=>3, "error"=>$connect->error, 
						 "file"=>$advEachFile,
						 "close"=>$connect->close()));
						 return;
					 }

/* 					 $server_target_db = "insert into ".$product_service_info.
					 " values('".number_format($productId)."', '".$productServiceInfoDataSet[0]."', '".$productServiceInfoDataSet[1]
					 ."', '".$productServiceInfoDataSet[2]."', '".$productServiceInfoDataSet[3]
					 ."', '".$productServiceInfoDataSet[4]."', '".$productServiceInfoDataSet[5]
					 ."', '".$productServiceInfoDataSet[6]."', '".$productServiceInfoDataSet[7]
					 ."', '".$productServiceInfoDataSet[8]."', '".$productServiceInfoDataSet[9]
					 ."', '".$advEachFile."', '".$productServiceInfoDataSet[10]
					 ."', '".$productServiceInfoDataSet[11]."', '".$productServiceInfoDataSet[12]."
					 ', '".$productServiceInfoDataSet[13]."');"; */ 

					 $server_target_db = "insert into ".$product_service_info.
					 " values('".$ps[0][$ps_index]->psid."', '".$ps[0][$ps_index]->email."', '".$ps[0][$ps_index]->telephone
					 ."', '".$ps[0][$ps_index]->location."', '".$ps[0][$ps_index]->approvedBy
					 ."', '".$ps[0][$ps_index]->description."', '".$ps[0][$ps_index]->commencementDate
					 ."', '".$ps[0][$ps_index]->elapsingDate."', '".$ps[0][$ps_index]->commencementTime
					 ."', '".$ps[0][$ps_index]->elapsingTime."', '".$dirId
					 ."', '".$advEachFile."', '".$ps[0][$ps_index]->shipmentDate
					 ."', '".$ps[0][$ps_index]->shipmentTime."', '".$ps[0][$ps_index]->country."
					 ', '".$ps[0][$ps_index]->company."'
					 , '".$ps[0][$ps_index]->privacy."');"; 
					 
					 $connect_result = $connect->query($server_target_db);		
					 $CHECK = 1;
					 if($connect_result === FALSE){
						 $connect->close();	
						 echo json_encode(array("state"=>8));
						 return;
					 }  
					 sleep(2);
					 $ps_index += 1;
				}				 				 
				 
				 if($fileReport != null){
					echo json_encode($fileReport);
					return;
				 }
				 
				 if(!is_dir("adv-accounts/".$dirId)){
					mkdir("adv-accounts/".$dirId);
				 }		
                $dirId2 = $dirId;				 
			 }else{
				$productErrorContainer = array();
				$productServiceInfoDataSet[9] = $dirId2;
				$product_service_info = "product_service_info_".$dirId2;
				foreach($_FILES["uploadz-ad-image-records"]["name"] as $advEachFile){
					
					 $imageFileType = strtolower(pathinfo($advEachFile, PATHINFO_EXTENSION));
				     
					 $uploadOk = 0;
					 $check = getimagesize($_FILES["uploadz-ad-image-records"]["tmp_name"][$ps_index]);
				     
					 /*if($check === false) {
						echo json_encode(array("file_error"=>"File is an image - ",
						"mime"=>$check["mime"], "state"=>3))
					    $uploadOk = 0;
						break;
					 }*/
					 
					 if($imageFileType != "jpg" && $imageFileType != "png" && 
					  $imageFileType != "jpeg" && $imageFileType != "gif"){
						$uploadOk = 0;
						$fileReport = array("file_error"=>"File is not an image - ",
						"file_name"=>$advEachFile, "mime"=>($check != false)?$check["mime"]:false, "type"=>$imageFileType, "ps_number"=>$ps_index, "state"=>1230711);
						break;
					 }						
					
					$server_target_db = "select productServiceRetrievalTableId from ".$product_service_info.
					" where productServiceName='".$advEachFile."';";
					$connect_result = $connect->query($server_target_db);
				    //echo $dirId2."[]".$advEachFile;
					//echo $product_service_info;
					if($connect_result === FALSE){
                         echo json_encode(array("state"=>36));
						 return;						
					}
 
					 if ($connect_result->num_rows > 0) {
                         echo json_encode(array("state"=>37));
						 return;
					 }else{
						 //$productId = $_POST["RRND"];
						 $productId = didcx_random_number_generator(0, 228828281919191);//rand(0, 44999403)*time();
						 
						 $ps[0][$ps_index]->psid = $ps[0][$ps_index]->psid+$ps_index;

						 $pattern = "/'/i";
						 
						 $ps[0][$ps_index]->description = preg_replace($pattern, "\'", $ps[0][$ps_index]->description);
						 
						 
						 $server_target_db = "insert into productServiceNames
						 values('".$dirId."', '".$ps[0][$ps_index]->psid."', '".$advEachFile."'
					 , '".$ps[0][$ps_index]->company."', '', 
					 '', '".$ps[0][$ps_index]->privacy."');";
						 
						 $connect_result = $connect->query($server_target_db);
						  //echo 23;
						 if($connect_result === FALSE){
							 echo json_encode(array("state"=>35, "error"=>$connect->error, 
							 "file"=>$advEachFile, "close"=>$connect->close()));
							 return;
						 }
						 
/* 							 $server_target_db = "insert into ".$product_service_info.
							 " values('".number_format($productId)."', '".$productServiceInfoDataSet[0]."', '".$productServiceInfoDataSet[1]
							 ."', '".$productServiceInfoDataSet[2]."', '".$productServiceInfoDataSet[3]
							 ."', '".$productServiceInfoDataSet[4]."', '".$productServiceInfoDataSet[5]
							 ."', '".$productServiceInfoDataSet[6]."', '".$productServiceInfoDataSet[7]
							 ."', '".$productServiceInfoDataSet[8]."', '".$productServiceInfoDataSet[9]
							 ."', '".$advEachFile."', '".$productServiceInfoDataSet[10]
							 ."', '".$productServiceInfoDataSet[11]."', '".$productServiceInfoDataSet[12]."
							 ', '".$productServiceInfoDataSet[13]."');";  */
							 
							 $server_target_db = "insert into ".$product_service_info.
					 "()"."values('".$ps[0][$ps_index]->psid."', '".$ps[0][$ps_index]->email."', '".$ps[0][$ps_index]->telephone
					 ."', '".$ps[0][$ps_index]->location."', '".$ps[0][$ps_index]->approvedBy
					 ."', '".$ps[0][$ps_index]->description."', '".$ps[0][$ps_index]->commencementDate
					 ."', '".$ps[0][$ps_index]->elapsingDate."', '".$ps[0][$ps_index]->commencementTime
					 ."', '".$ps[0][$ps_index]->elapsingTime."', '".$dirId
					 ."', '".$advEachFile."', '".$ps[0][$ps_index]->shipmentDate
					 ."', '".$ps[0][$ps_index]->shipmentTime."', '".$ps[0][$ps_index]->country."
					 ', '".$ps[0][$ps_index]->company."', '', 
					 '', '".$ps[0][$ps_index]->privacy."');"; //, 'AUDIO_IMAGE_NOT_FOUND 							 
							 
							$connect_result = $connect->query($server_target_db);	
							$CHECK = 2;
							if($connect_result === FALSE){
								$productErrorContainer[$productIndex] = $advEachFile;
								$productIndex += 1;
							}
							//sleep(2);
  				            $ps_index += 1;
					}					
				}				 
			 }           
 
			if($fileReport != null){
					echo json_encode($fileReport);
					return;
	        }

 
			if(!is_dir("adv-accounts/".$dirId2)){
			    mkdir("adv-accounts/".$dirId2);
			}
            
			 		 
		     //$connect->close();		
			 
			 $advFile = $_FILES["uploadz-ad-image-records"];
			 $advDirAccount = "adv-accounts";
			 $advDir = $advDirAccount."\\".$dirId2."-img-rcs";
			 $advDir2 = $advDir."\\";
		     $index = 0;
			 $advFileIndexContainer = array();
			 
			 $advFileDir4DB = "adv-accounts/".$dirId2."-img-rcs/";
			 $advFileDir4DB2 = "adv-accounts/".$dirId2."/";
			 $advFile4DB = "";			 

			 foreach($advFile["name"] as $advEachFile){
			   $advFileIndexContainer[$index] = $advEachFile;
			   $index++;
			 }
			
				$curl = curl_init();
				

				curl_setopt_array($curl, array(
					CURLOPT_URL => "http://127.0.0.1/default.adv.uploads.php",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
					CURLOPT_POSTFIELDS => json_encode(array("ADVERTS"=> $_FILES["uploadz-ad-image-records"]["tmp_name"], "AD_FN"=>$advFileIndexContainer, 
					"SERVICE_TYPE_ID"=>"1", "DIR_1"=>$advDir, "DIR_2"=>$advDir2)),
					CURLOPT_HTTPHEADER => array(
						"cache-control: no-cache",
						"content-type: false",
						),
					)
				);

				$response = curl_exec($curl);
				$err = curl_error($curl);
				$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
				curl_close($curl);

				if ($err) {
					echo $err;
					return;
					//return array($httpcode,$err);
				} else {
					//echo $response;
					//echo $httpcode;
					//return array($httpcode,json_decode($response));
				}	

			 
				 if(!is_dir($advDir)){
					 mkdir($advDir);
				 }

			 $index = 0;
			 $advFileIndexContainer = array();
			 
			 $ps_new = $ps;
			 $ps_pi = $ps;

             $advFiler = "";
 
			 $AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
			 
			 foreach($advFile["name"] as $advEachFile){
			   $advFiler = $advDir2.basename($advEachFile);
			   move_uploaded_file($_FILES["uploadz-ad-image-records"]["tmp_name"][$index], $advFiler); 
			   $index_name = "advFile-".number_format($index);
			   $advFileIndexContainer[$index_name] = $advEachFile;
			   $index++;
			 }
			 
			 if($productIndex != 0){
				 $advFileIndexContainer["productErrorContainer"] = $productErrorContainer;
				 $advFileIndexContainer["state"] = 50;
				 $advFileIndexContainer["CHECK"] = $CHECK;
			 }
			 else{
				 $advFileIndexContainer["check"] = $CHECK;
                 $advFileIndexContainer["state"] = 1000;
			 }


			 $index_id = 0;//didcx_random_number_generator(1, 23930399);
			 $pindex_id = 0;
			 
			 if($advFileIndexContainer["state"] == 1000){
				  $id = didcx_random_number_generator(1, 23930399);
				  $message = "No data";
				  //$index_id = $id;
				  foreach($advFile["name"] as $advEachFile){
 
					   $advFiler = $advDir2.basename($advEachFile);
					   $advFile4DB = $advFileDir4DB.basename($advEachFile);
					   
					   $ps[0][$index_id]->psid = $ps[0][$index_id]->psid+$index_id;
					   
					   $server_target_db ="INSERT INTO notifications_".$_POST["drim"]."(id, sendername, name, type, message, 
					   status, date, filename, fileId, audioAdImage, privacy) 
					   VALUES ('".$ps[0][$index_id]->psid."', '".$sender_name."', '', 'comment', '$message', 'read', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', 
					   '', '".$ps[0][$index_id]->privacy."')";                   
                       
					   //$id += 1;
					   
					   $connect_result = $connect->query($server_target_db);
					   
					  if($connect_result === FALSE){
						echo json_encode(array("state"=>506, "error"=>$connect->error,
						"close"=>$connect->close()));
						return;						
					  }
                      
					   $ps_pi[0][$pindex_id]->psid = $ps_pi[0][$pindex_id]->psid+$pindex_id;
					   $server_target_db ="INSERT INTO notifications (
					   senderId, sendername, id, name, type, message, 
					   status, date, filename, fileId, audioAdImage, videoAdImage, privacy) 
					   VALUES ('".$_POST["drim"]."', '".$sender_name."', '".$ps_pi[0][$pindex_id]->psid."', '', 'comment', '$message', 'unread', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', '".$AudioAdImageName."', 
					   '".$genCons."', '".$ps[0][$index_id]->privacy."');";                    
                       
					   //$id += 1;
					   
					   $connect_result = $connect->query($server_target_db);
					   
					  if($connect_result === FALSE){
						echo json_encode(array("state"=>566, "error"=>$connect->error,
						"close"=>$connect->close()));
						return;						
					  }					  

					  $index_id++;
					  $pindex_id++;
				  }
                  $index_id2 = 0;
				  $server_target_db = "select id from  gaga where id !='".$_POST["drim"]."';";
				  $connect_result = $connect->query($server_target_db);

				  if($connect_result === FALSE){
                    echo json_encode(array("state"=>506, "error"=>$connect->error,
					"close"=>$connect->close()));
					return;						
				  } 
				  
				  $AudioAdImageName = "AUDIO_IMAGE_NOT_FOUND";
 
				  if ($connect_result->num_rows > 0) {
                     while($row = $connect_result->fetch_assoc()){
					  //$id = $index_id;
					  $index_id2 = 0;
					  foreach($advFile["name"] as $advEachFile){
  
					   $advFiler = $advDir2.basename($advEachFile);
					   $advFile4DB = $advFileDir4DB.basename($advEachFile);
					   
					   $ps_new[0][$index_id2]->psid = $ps_new[0][$index_id2]->psid+$index_id2;
					   
					   $server_target_db ="INSERT INTO notifications_".$row["id"]."(id, sendername, name, type, message, 
					   status, date, filename, fileId, audioAdImage, privacy) 
					   VALUES ('".$ps_new[0][$index_id2]->psid."', '".$sender_name."', '', 'comment', '$message', 'unread', 
					   CURRENT_TIMESTAMP, '".$advFile4DB."', '".$advEachFile."', 
					    '', '".$ps_new[0][$index_id2]->privacy."')";  
					   
					  $connect_result2 = $connect->query($server_target_db);

					  if($connect_result2 === FALSE){
						echo json_encode(array("state"=>516, "error"=>$connect->error,
						"close"=>$connect->close()));
						return;						
					  } 
                       $index_id2++;					   
					  }					 
					 }
				  }else{
                    echo json_encode(array("state"=>596, "error"=>$connect->error));
					return;				  
				  }
			 }
			 
			/* "fl"=>$ps[1], "fn"=>$_FILES["uploads"]["tmp_name"], 
				"err"=>$err, "res"=>$response*/
				
			 echo json_encode($advFileIndexContainer);
			 return;

		  }
        }		  
	  break;
	  case 10:
	   { 
	      if($_POST["drim"] != ""){

		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			 $id = $_POST["drim"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $id = $row["id"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2."-img-rcs";
			  if(!is_dir($gagaUserAccountVideos)){
				echo json_encode(array("state"=>403));
				return;
			  }
			  $file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		}
/* 		}else{
			 $file_dir_handle = opendir("./adv.videos"); //opendir("./didcx.facial.biometrics");
		} */

             $productServiceCompany = array();
             $product_service_info = "product_service_info_".$dirId2;
			 
			 $server_target_db = "select productServiceCompany from ".$product_service_info.";";// and id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
	
			 $dir_index = 0;
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$id = $row["id"];						   
					 $productServiceCompany[$dir_index] = $row["productServiceCompany"];			
					 $dir_index += 1;
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
		
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  $_array_4_files = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "localhost/advert.llc/http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.images/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany, 
		  "state"=>601, "fileType"=> ""));
		  return;
		}else{
	      
		  if(!is_dir("./adv.images")){
			 echo json_encode(array("state"=>403));
			 return;
		  }
		  
		  $file_dir_handle = opendir("./adv.images"); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.images/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany, "state"=>601, "fileType"=> ""));
		  return;
		}
	   }
	  break;
	  case 11:
	  {
		
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];


						 
		 $id = $_POST["imageId"];
		 $server_target_db = "select * from gaga where id='".$id."';";
		 $connect_result = $connect->query($server_target_db);		 
		 
		 if($connect_result === FALSE){
			 echo json_encode(array("state"=>2));
			 $connect->close();
			 return;
		 }

		 
		 $imageFileName = "";
		 $institutionName = "";
		 $ein = "";
		 $tin = "";
		 $activity = "";
		 $publicTelOptional = "";
		 $businessEmail = "";
		 $companyStory = "";
		 $location = "";
		 $countryOfRegistration = "";
		 $companyRegistrationDate = "";
		 
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			 while($row = $connect_result->fetch_assoc()) {
				 $imageFileName = $row["imageFileName"];						   
				 $institutionName = $row["institutionName"];						   
				 $ein = $row["ein"];						   
				 $tin = $row["tin"];						   
				 $activity = $row["activity"];						   
				 $publicTelOptional = $row["publicTelOptional"];	
				 $businessEmail = $row["businessEmail"];
				 $companyStory = $row["companyStory"];
				 $location = $row["location"];
				 $countryOfRegistration = $row["countryOfRegistration"];
				 $companyRegistrationDate = $row["companyRegistrationDate"];				 
            }
		 }
		 	  
		 if($_POST["institutionName"] == ""){
 			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
			     if($institutionName == ""){
					   echo json_encode(array("state"=>2000));
					   return;					   
				 }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2000));
					   return;						 
			   }
		 }

	     if($_POST["ein"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($ein == ""){
					   echo json_encode(array("state"=>2001));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2001));
					   return;						 
			   }			   
		 }

	     if($_POST["tin"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($tin == ""){
					   echo json_encode(array("state"=>2002));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2002));
					   return;						 
			   }			   
		 }

	     if($_POST["activity"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($activity == ""){
					   echo json_encode(array("state"=>2003));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2003));
					   return;						 
			   }			   
		 }

	     if($_POST["publicTelOptional"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($publicTelOptional == ""){
					   echo json_encode(array("state"=>2004));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2004));
					   return;						 
			   }			   
		 }

	     if($_POST["businessEmail"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($businessEmail == ""){
					   echo json_encode(array("state"=>2009));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2009));
					   return;						 
			   }			   
		 }

	     if($_POST["companyStory"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($companyStory == ""){
					   echo json_encode(array("state"=>2005));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2005));
					   return;						 
			   }			   
		 }

	     if($_POST["location"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($location == ""){
					   echo json_encode(array("state"=>2006));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2006));
					   return;						 
			   }			   
		 }

	     if($_POST["countryOfRegistration"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($countryOfRegistration == ""){
					   echo json_encode(array("state"=>2007));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2007));
					   return;						 
			   }			   
		 }

	     if($_POST["companyRegistrationDate"] == ""){
				 
			   if($imageFileName != ""){// || $imageFileName != null || $imageFileName != "null"){
				   if($companyRegistrationDate == ""){
					   echo json_encode(array("state"=>2008));
					   return;					   
				   }
			   }else if($imageFileName == ""){// || $imageFileName == null || $imageFileName == "null"){
					   echo json_encode(array("state"=>2008));
					   return;						 
			   }			   
		 }
		 
		 if(!is_dir("adv.company.profiles")){
			mkdir("adv.company.profiles");
		 }
		 //sleep(1);
		 $advFile = $_FILES["uploadz"];
		 $advDir = "adv.company.profiles"."//";
		 $filename = basename($advFile["name"]);
		 $advFiler = $advDir.$filename;
		 
/* 		 $server_name = "localhost";
		 $server_ip = "127.0.0.1";
		 $server_username = "root";
		 $server_password = "";
		 $server_dbname = "GAGA";
		 $server_port = 3306;
		
		 $connect = new mysqli($server_name, $server_username, $server_password, $server_dbname, $server_port);
		 if($connect->connect_error){
			 echo json_encode(array("state"=>0));
			 return;
		 }
		 $server_target_db = "use gaga;";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
			 echo json_encode(array("state"=>1));
			 return;
		 }
		 $id = $_POST["imageId"];
		 $server_target_db = "select * from gaga where id='".$id."';";
		 $connect_result = $connect->query($server_target_db);		 
		 
		 if($connect_result === FALSE){
			 echo json_encode(array("state"=>2));
			 return;
		 }
		 
		 $imageFileName = "";
		 
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			 while($row = $connect_result->fetch_assoc()) {
				 $imageFileName = $row["imageFileName"];						   
            }
		 } */
		 $institutionName = $_POST["institutionName"];
		 $ein = $_POST["ein"];
		 $tin = $_POST["tin"];
		 $activity = $_POST["activity"];
		 $dirId = "gaga_garbage_".$id;
		 $privateTelOptional = $_POST["privateTelOptional"];
		 $publicTelOptional = $_POST["publicTelOptional"];
		 $whatAppNoOptional = $_POST["whatAppNoOptional"];
		 $businessEmail = $_POST["businessEmail"];
		 $privatePersonalEmailOptional = $_POST["privatePersonalEmailOptional"];
		 $facebookHandleOptional = $_POST["facebookHandleOptional"];
		 $twitterHandleOptional = $_POST["twitterHandleOptional"];
		 $instagramHandleOptional = $_POST["instagramHandleOptional"];
		 $youtubeHandleOptional = $_POST["youtubeHandleOptional"];
		 $websiteDomainOptional = $_POST["websiteDomainOptional"];
		 $companyStory = $_POST["companyStory"];
		 $location = $_POST["location"];
		 $countryOfRegistration = $_POST["countryOfRegistration"];	
		 $companyRegistrationDate = $_POST["companyRegistrationDate"];	
		 
		$pattern = "/'/i";
		$companyStory = preg_replace($pattern, "\'", $companyStory);
		 
		 if($imageFileName == "" || $imageFileName == null || $imageFileName == "null"){
			 if($institutionName == "" && $ein == "" && $tin == "" && 
			 $activity == "" && $companyStory == "" && $location == "" &&
			 $countryOfRegistration == "" && $companyRegistrationDate == ""){
			   //$server_target_db = "update gaga set imageFileName='".$filename."' where id='".$id."';";		 
			   echo json_encode(array("logo_error"=>5004));
			   return;
			 }else{
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', institutionName='".$institutionName."', ein='".$ein."', tin='".$tin.
			   "', activity='".$activity."', companyStory='".$companyStory."', privateTelOptional='".
			   $privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".
			   $youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   location='".$location."', countryOfRegistration='".$countryOfRegistration."', companyRegistrationDate='".
			   $companyRegistrationDate."' where id='".$id."';";
			 }
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === FALSE){
				 //$slas = "\'";
				 echo json_encode(array("state"=>3, "error"=>$connect->error));
				 //echo $slas;
				 $connect->close();
				 return;
			 }		 
			 
			 $connect->close();
		     
			 //chmod("adv.company.profiles", 0777);
			 //chmod($_FILES["uploadz"]["tmp_name"], 0777);
			 
			 move_uploaded_file($_FILES["uploadz"]["tmp_name"], $advFiler); 
			 
			 //sleep(1);
			 
			 //unlink("adv.actors.profiles/".$imageFileName);
			 
			 //sleep(1);
			 
			 echo json_encode(array("src"=>$advFiler, "state"=>4));
			 return;				 
		 }
	     else if(unlink("adv.company.profiles/".$imageFileName) == true){
			 if($institutionName == "" && $ein == "" && $tin == "" && 
			    $activity == "" && $companyStory == "" && $location == "" &&
			    $countryOfRegistration == "" && $companyRegistrationDate == ""){
                echo json_encode(array());
			 	return;
			 }
			 else{
			   $server_target_db = "update gaga set imageFileName='".$filename.
			   "', institutionName='".$institutionName."', ein='".$ein."', tin='".$tin.
			   "', activity='".$activity."', companyStory='".$companyStory."', privateTelOptional='".
			   $privateTelOptional."',
     		   publicTelOptional='".$publicTelOptional."', whatAppNoOptional='".$whatAppNoOptional."',
			   businessEmail='".$businessEmail."', privatePersonalEmailOptional='".
 			   $privatePersonalEmailOptional."', twitterHandleOptional='".$twitterHandleOptional."',
			   instagramHandleOptional='".$instagramHandleOptional."',youtubeHandleOptional='".
			   $youtubeHandleOptional."', facebookHandleOptional='".$facebookHandleOptional."', 
			   websiteDomainOptional='".$websiteDomainOptional."', 
			   location='".$location."', countryOfRegistration='".$countryOfRegistration."', companyRegistrationDate='".
			   $companyRegistrationDate."' where id='".$id."';";
			 }
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>3));
				 return;
			 }		 
			 
			 $connect->close();
		     
			 //chmod("adv.company.profiles", 0777);
			 //chmod($_FILES["uploadz"]["tmp_name"], 0777);
			 
			 move_uploaded_file($_FILES["uploadz"]["tmp_name"], $advFiler); 
			 
			 //sleep(1);
			 
			 //unlink("adv.actors.profiles/".$imageFileName);
			 
			 //sleep(1);
			 
			 echo json_encode(array("src"=>$advFiler, "state"=>4));
			 return;		
         }			 
		 else{
			 
		 }
	  }  
	  break;
	  case 12:
	   { 
		  $file_dir_handle = opendir("./adv.company.profiles");
		  
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;

		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>404));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];


		  $array_files = array();
		  $institutionName = "";
		  $name = "";
		  $array_name_index = array();
		  $externalInfos = array("activity"=>array(), "companyStory"=>array()
		  , "businessEmail"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
		  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
		  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(),
		  "adInterest"=>array(), "adFee"=>array(),
		  "username"=>array(), "location"=>array(), 
		  "countryOfRegistration"=>array(), 
		  "companyRegistrationDate"=>array());
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){

			  }else{
				 $server_target_db = "select * from gaga where imageFileName='".$_server_response_index."';";
				 $connect_result = $connect->query($server_target_db);		 
                 
				 if($connect_result === FALSE){
					$array_files[number_format($dir_index)] = "[NAME : PRIVATE]";
					$array_name_index[number_format($dir_index)] = "adv.company.profiles/".$_server_response_index;
					
				 }else{				 
					 if ($connect_result->num_rows > 0) {
						// output data of each row
						 while($row = $connect_result->fetch_assoc()) {
							 $institutionName = $row["institutionName"];						   
							 $activity = $row["activity"];	
							 $companyStory = $row["companyStory"];	
							 $businessEmail = $row["businessEmail"];	
							 $publicTelOptional = $row["publicTelOptional"];	
							 $whatAppNoOptional = $row["whatAppNoOptional"];	
							 $facebookHandleOptional = $row["facebookHandleOptional"];	
							 $twitterHandleOptional = $row["twitterHandleOptional"];	
							 $instagramHandleOptional = $row["instagramHandleOptional"];	
							 $websiteDomainOptional = $row["websiteDomainOptional"];	
							 $adFee = $row["adFee"];		
							 $location = $row["location"];
							 $countryOfRegistration = $row["countryOfRegistration"];	
							 $companyRegistrationDate = $row["companyRegistrationDate"];		
							
							 if($row["adInterest"] == "All"){
							    $adInterest = $row["adInterest"]." Industrial Ads";	
							 }else{
								$adInterest = $row["adInterest"]." Ads";
							 }
							 $username = $row["username"];
							 
							 $array_files[number_format($dir_index)] = $institutionName;
							 
							 $externalInfos["activity"][$dir_index] = $activity;
							 $externalInfos["companyStory"][$dir_index] = $companyStory;
							 $externalInfos["businessEmail"][$dir_index] = $businessEmail;
							 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
							 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
							 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
							 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
							 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
							 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;
							 $externalInfos["adInterest"][$dir_index] = $adInterest;
							 $externalInfos["adFee"][$dir_index] = $adFee;
							 $externalInfos["location"][$dir_index] = $location;	
							 $externalInfos["countryOfRegistration"][$dir_index] = $countryOfRegistration;
							 $externalInfos["companyRegistrationDate"][$dir_index] = $companyRegistrationDate;
							 
							 $array_name_index[number_format($dir_index)] = "adv.company.profiles/".$_server_response_index;
						}
					 }else{
						 $array_files[number_format($dir_index)] = "[NAME: PRIVATE]";
		                 $array_name_index[number_format($dir_index)] = "adv.company.profiles/".$_server_response_index;
					 }	  
				 }
			  }
			  $dir_index += 1;
		  }
		  
		  $connect->close();
		  
		  echo json_encode(array("names"=>$array_files, "files"=>$array_name_index, "externalInfos"=>$externalInfos, "state"=>600));
		  return;
	   }
	  break;
	  case 13: 
	  case "#fetch":
	  case "#FETCH":
	  {
		   if($_POST["ImageFileName"] != ""){
			 $imageFileName = $_POST["ImageFileName"];
			
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];


			 //$id = $_POST["imageId"];
			 //$server_target_db = "select actorStory from gaga where imageFileName='".$imageFileName."';";
			 $server_target_db = "select * from gaga where imageFileName='".$imageFileName."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 $actorStory = "";
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }

			  $array_files = array();
			  $institutionName = "";
			  $companyStory = "";
			  $name = "";
			  $array_name_index = array();
			  
			  $dir_index = 0;
			  
			  $externalInfos = array("activity"=>array(), "companyStory"=>array()
			  , "businessEmail"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
			  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
			  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(),
			  "adInterest"=>array(), "adFee"=>array(),
			  "username"=>array(), "location"=>array(), 
			  "countryOfRegistration"=>array(), 
			  "companyRegistrationDate"=>array());
			  
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$actorStory = $row["actorStory"];						   
							 $institutionName = $row["institutionName"];						   
							 $activity = $row["activity"];	
							 $companyStory = $row["companyStory"];	
							 $businessEmail = $row["businessEmail"];	
							 $publicTelOptional = $row["publicTelOptional"];	
							 $whatAppNoOptional = $row["whatAppNoOptional"];	
							 $facebookHandleOptional = $row["facebookHandleOptional"];	
							 $twitterHandleOptional = $row["twitterHandleOptional"];	
							 $instagramHandleOptional = $row["instagramHandleOptional"];	
							 $websiteDomainOptional = $row["websiteDomainOptional"];	
							 $adFee = $row["adFee"];		
							 $location = $row["location"];
							 $countryOfRegistration = $row["countryOfRegistration"];	
							 $companyRegistrationDate = $row["companyRegistrationDate"];	
					 if($row["adInterest"] == "All"){
					    $adInterest = $row["adInterest"]." Industrial Ads";
					 }else{
						$adInterest = $row["adInterest"]." Ads";
					 }
					 $username = $row["username"];
					 
							 $array_files[number_format($dir_index)] = $institutionName;
							 
							 $externalInfos["activity"][$dir_index] = $activity;
							 $externalInfos["companyStory"][$dir_index] = $companyStory;
							 $externalInfos["businessEmail"][$dir_index] = $businessEmail;
							 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
							 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
							 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
							 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
							 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
							 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;
							 $externalInfos["adInterest"][$dir_index] = $adInterest;
							 $externalInfos["adFee"][$dir_index] = $adFee;
							 $externalInfos["location"][$dir_index] = $location;	
							 $externalInfos["countryOfRegistration"][$dir_index] = $countryOfRegistration;
							 $externalInfos["companyRegistrationDate"][$dir_index] = $companyRegistrationDate;				 
				     $dir_index += 1;
				}
			 }
			 
			 $connect->close();
             
/* 			 if($actorStory != ""){
				 echo json_encode(array("actoryStory"=>$actoryStory, "state"=>6));
			 } */
             
			 $name = $institutionName;
			 if($name != "  "){
				 echo json_encode(array("name"=>$name, "companyStory"=>$companyStory, "externalInfos"=>$externalInfos,
				 "state"=>6));
			 }else{
				 echo json_encode(array("name"=>$name, "companyStory"=>$companyStory, "externalInfos"=>$externalInfos
				 ,"state"=>7));
			 }
            			 
		   }
	  }
	  break;
	  case 14: 
	  case "+fetch":
	  case "+FETCH":
	  {
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];


			 
			 $server_target_db = "select username from gaga where id='".$_POST["drim"]."';";
			 $connect_result = $connect->query($server_target_db);
			 if($connect_result === False){
				 echo json_encode(array("state"=>2));
				 return;
			 }		  

			 if($connect_result->num_rows > 0){
				 while($row = $connect_result->fetch_assoc()){
					 $username = $row["username"];
				 }
			 }else{
				 echo json_encode(array("state"=>404));
			 }
			 
			 echo json_encode(array("username"=>$username, "state"=>200));
			 return;
			
	  }
	  break;
	  case 15: 
	  case "+fetch":
	  case "+FETCH":
	  {
		 $graphics = array("ads"=>array("video_ads"=>array("psid"=>array(),
		 "psn"=>array()), "static_ads"=>array("psid"=>array(),
		 "psn"=>array())), 
		 "profiles"=>array("actors&groups"=>array(), "companies"=>array()));

         $index = 0;
         $index2 = 0;
		 
		$connect = connectserver(0);
                         
		 $server_target_db = "select * from productServiceNames;";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
		    echo json_encode(array("state"=> 2, "error"=>$connect->error));
			$connect->close();
			return;
		 }
											
		 $id = "";
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			while($row = $connect_result->fetch_assoc()) {
				 if($row["productServiceName"] == "null" || $row["productServiceName"] == null){
					 break;
				 }
				 $FileType = strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION));
							 
				 $uploadOk = 0;
							 
				 if($FileType == "jpg" || $FileType == "png" || 
					$FileType == "jpeg" || $FileType == "gif"){
					$uploadOk = 0;
					
					$graphics["ads"]["static_ads"]["psid"][$index] = $row["productServiceId"];
					$graphics["ads"]["static_ads"]["psn"][$index] = "adv.images/".$row["productServiceName"];     
					$index++;
				}else{
					$graphics["ads"]["video_ads"]["psid"][$index2] = $row["productServiceId"];
					$graphics["ads"]["video_ads"]["psn"][$index2] = "adv.videos/".$row["productServiceName"];     
                    $index2++;										
				}  
			}
		 }else{
		    echo json_encode(array("state"=> -2, "error"=>$connect->error));
			$connect->close();
			return;
		 }		 

		 $server_target_db = "select * from gaga;";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
		    echo json_encode(array("state"=> 3, "error"=>$connect->error));
			$connect->close();
			return;
		 }
		 
		 $index = 0;
		 $index2 = 0;
		 $dir_index = 0;

		  $externalInfos = array("activity"=>array(), "companyStory"=>array()
		  , "businessEmail"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
		  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
		  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(),
		  "adInterest"=>array(), "adFee"=>array(),
		  "username"=>array(), "location"=>array(), 
		  "countryOfRegistration"=>array(), 
		  "companyRegistrationDate"=>array());
		  
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			while($row = $connect_result->fetch_assoc()) {		 
				 $uploadOk = 0;
							 
				 if($row["companiesOnly"] == "0" || $row["companiesOnly"] == 0){
					$uploadOk = 0;
					if($row["imageFileName"] != ""){
					  $graphics["profiles"]["actors&groups"][$index] = "adv.actors.profiles/".$row["imageFileName"];
					  $index++;
		    		}
				}else{
					if($row["imageFileName"] != ""){
					   $graphics["profiles"]["companies"][$index2] = "adv.companies.profiles/".$row["imageFileName"];  
							 $institutionName = $row["institutionName"];						   
							 $activity = $row["activity"];	
							 $companyStory = $row["companyStory"];	
							 $businessEmail = $row["businessEmail"];	
							 $publicTelOptional = $row["publicTelOptional"];	
							 $whatAppNoOptional = $row["whatAppNoOptional"];	
							 $facebookHandleOptional = $row["facebookHandleOptional"];	
							 $twitterHandleOptional = $row["twitterHandleOptional"];	
							 $instagramHandleOptional = $row["instagramHandleOptional"];	
							 $websiteDomainOptional = $row["websiteDomainOptional"];	
							 $adFee = $row["adFee"];		
							 $location = $row["location"];
							 $countryOfRegistration = $row["countryOfRegistration"];	
							 $companyRegistrationDate = $row["companyRegistrationDate"];		
							
							 if($row["adInterest"] == "All"){
							    $adInterest = $row["adInterest"]." Industrial Ads";	
							 }else{
								$adInterest = $row["adInterest"]." Ads";
							 }
							 $username = $row["username"];
							 
							 $array_files[number_format($dir_index)] = $institutionName;
							 
							 $externalInfos["activity"][$dir_index] = $activity;
							 $externalInfos["companyStory"][$dir_index] = $companyStory;
							 $externalInfos["businessEmail"][$dir_index] = $businessEmail;
							 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
							 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
							 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
							 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
							 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
							 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;
							 $externalInfos["adInterest"][$dir_index] = $adInterest;
							 $externalInfos["adFee"][$dir_index] = $adFee;
							 $externalInfos["location"][$dir_index] = $location;	
							 $externalInfos["countryOfRegistration"][$dir_index] = $countryOfRegistration;
							 $externalInfos["companyRegistrationDate"][$dir_index] = $companyRegistrationDate;
					   $dir_index += 1;
				       $index2++;
					}					
				}  
			}
		 }else{
		    echo json_encode(array("state"=> -4, "error"=>$connect->error));
			$connect->close();
			return;
		 }		 		 
         
		 $graphics["externalInfos"] = $externalInfos;
		 
		 echo json_encode($graphics);
		 return;
		 
	  }
	  break;
	  case 16: 
	  case "+fetch":
	  case "+FETCH":
	  {
		 if($_POST["drim"] == ""){
			 echo json_encode(array("state"=>506));
			 return;
		 }
		 $graphics = array("ads"=>
			 array(
				 "video_ads"=>array("psid"=>array(), "psn"=>array()), 
				 "static_ads"=>array("psid"=>array(), "psn"=>array())
			 ), 
			 "profiles"=>array("actors&groups"=>array(), "companies"=>array()), 
			 "externalInfos"=>""
		 );

         $index = 0;
         $index2 = 0;
		 
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];

		 
		 $server_target_db = "select dirId from gaga where id='".$_POST["drim"]."';";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
		    echo json_encode(array("state"=> 220, "error"=>$connect->error));
			$connect->close();
			return;
		 }		 

         if($connect_result->num_rows <= 0){
		    echo json_encode(array("state"=> 221, "error"=>$connect->error));
			$connect->close();
			return;	//"drim"=>$_POST["drim"]		 
		 }else if($connect_result->num_rows > 1){
		    echo json_encode(array("state"=> 222, "error"=>$connect->error));
			$connect->close();
			return;			 
		 }else{
			$dirId = $connect_result->fetch_assoc()["dirId"];
			if($dirId == ""){
				echo json_encode(array("state"=> 223, "error"=>$connect->error));
				$connect->close();
				return;					
			}
			if($dirId == "null"){
				echo json_encode(array("state"=> 224, "error"=>$connect->error));
				$connect->close();
				return;					
			}
			if($dirId == null){
				echo json_encode(array("state"=> 225, "error"=>$connect->error));
				$connect->close();
				return;					
			}
		 }
						 
		 $server_target_db = "select * from productServiceNames where dirId='".$dirId."'";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
		    echo json_encode(array("state"=> 2, "error"=>$connect->error));
			$connect->close();
			return;
		 }
											
		 $id = "";
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			while($row = $connect_result->fetch_assoc()) {
				 if($row["productServiceName"] == "null" || $row["productServiceName"] == null){
					 break;
				 }
				 $FileType = strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION));
							 
				 $uploadOk = 0;
							 
				 if($FileType == "jpg" || $FileType == "png" || 
					$FileType == "jpeg" || $FileType == "gif"){
					$uploadOk = 0;
					
					$graphics["ads"]["static_ads"]["psid"][$index] = $row["productServiceId"];
					$graphics["ads"]["static_ads"]["psn"][$index] = "adv.images/".$row["productServiceName"];     
					
                    $index++;
				}else{
					$graphics["ads"]["video_ads"]["psid"][$index2] = $row["productServiceId"];
					$graphics["ads"]["video_ads"]["psn"][$index2] = "adv.videos/".$row["productServiceName"];     
					$index2++;					
				}  
			}
		 }else{
		    echo json_encode(array("state"=> -2, "error"=>$connect->error));
			$connect->close();
			return;
		 }		 

		 $server_target_db = "select * from gaga where id='".$_POST["drim"]."';";
		 $connect_result = $connect->query($server_target_db);
		 if($connect_result === False){
		    echo json_encode(array("state"=> 3, "error"=>$connect->error));
			$connect->close();
			return;
		 }
		 
		 $index = 0;
		 $index2 = 0;
		 $dir_index = 0;

		  $externalInfos = array("activity"=>array(), "companyStory"=>array()
		  , "businessEmail"=>array(), "publicTelOptional"=>array(), "whatAppNoOptional"=>array()
		  , "facebookHandleOptional"=>array(), "twitterHandleOptional"=>array(), 
		  "instagramHandleOptional"=>array(), "websiteDomainOptional"=>array(),
		  "adInterest"=>array(), "adFee"=>array(),
		  "username"=>array(), "location"=>array(), 
		  "countryOfRegistration"=>array(), 
		  "companyRegistrationDate"=>array());
		 
		 if ($connect_result->num_rows > 0) {
			// output data of each row
			while($row = $connect_result->fetch_assoc()) {		 
				 $uploadOk = 0;
							 
				 if($row["companiesOnly"] == "0" || $row["companiesOnly"] == 0){
					$uploadOk = 0;
					if($row["imageFileName"] != ""){
					  $graphics["profiles"]["actors&groups"][$index] = "adv.actors.profiles/".$row["imageFileName"];
					  $index++;
		    		}
				}else{
					if($row["imageFileName"] != ""){
					   $graphics["profiles"]["companies"][$index2] = "adv.companies.profiles/".$row["imageFileName"];  
							 $institutionName = $row["institutionName"];						   
							 $activity = $row["activity"];	
							 $companyStory = $row["companyStory"];	
							 $businessEmail = $row["businessEmail"];	
							 $publicTelOptional = $row["publicTelOptional"];	
							 $whatAppNoOptional = $row["whatAppNoOptional"];	
							 $facebookHandleOptional = $row["facebookHandleOptional"];	
							 $twitterHandleOptional = $row["twitterHandleOptional"];	
							 $instagramHandleOptional = $row["instagramHandleOptional"];	
							 $websiteDomainOptional = $row["websiteDomainOptional"];	
							 $adFee = $row["adFee"];		
							 $location = $row["location"];
							 $countryOfRegistration = $row["countryOfRegistration"];	
							 $companyRegistrationDate = $row["companyRegistrationDate"];		
							
							 if($row["adInterest"] == "All"){
							    $adInterest = $row["adInterest"]." Industrial Ads";	
							 }else{
								$adInterest = $row["adInterest"]." Ads";
							 }
							 $username = $row["username"];
							 
							 $array_files[number_format($dir_index)] = $institutionName;
							 
							 $externalInfos["activity"][$dir_index] = $activity;
							 $externalInfos["companyStory"][$dir_index] = $companyStory;
							 $externalInfos["businessEmail"][$dir_index] = $businessEmail;
							 $externalInfos["publicTelOptional"][$dir_index] = $publicTelOptional;
							 $externalInfos["whatAppNoOptional"][$dir_index] = $whatAppNoOptional;
							 $externalInfos["facebookHandleOptional"][$dir_index] = $facebookHandleOptional;
							 $externalInfos["twitterHandleOptional"][$dir_index] = $twitterHandleOptional;
							 $externalInfos["instagramHandleOptional"][$dir_index] = $instagramHandleOptional;
							 $externalInfos["websiteDomainOptional"][$dir_index] = $websiteDomainOptional;
							 $externalInfos["adInterest"][$dir_index] = $adInterest;
							 $externalInfos["adFee"][$dir_index] = $adFee;
							 $externalInfos["location"][$dir_index] = $location;	
							 $externalInfos["countryOfRegistration"][$dir_index] = $countryOfRegistration;
							 $externalInfos["companyRegistrationDate"][$dir_index] = $companyRegistrationDate;
					   $dir_index += 1;
					   $index2++;
					}					
				}  
			}
		 }else{
		    echo json_encode(array("state"=> -4, "error"=>$connect->error));
			$connect->close();
			return;
		 }		 		 
         
		 $graphics["externalInfos"] = $externalInfos;
		 echo json_encode($graphics);
		 return;
		 
	  }
	  break;
	  case 17: 
	  case "+fetch":
	  case "+FETCH":
	  {
		  
		 $state = CheckTablesExistence("gaga");
		 if($state["state"] == false){
			echo json_encode(array("state"=>5));
			return;				
		 } 		 
		 
		 $state = CheckTablesExistence("productServiceNames");
		 if($state["state"] == false){
			echo json_encode(array("state"=>5));
			return;		
		 } 
		 
	    if($_POST["drim"] != ""){
			 
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];


			 $id = $_POST["drim"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			        $server_target_db =  "";
						if($_POST["ad-type-id"] == 0){
						  $server_target_db = "select dirId from gaga where adInterest='Tech' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 1){
						  $server_target_db = "select dirId from gaga where adInterest='Electronic' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 2){
						  $server_target_db = "select dirId from gaga where adInterest='Mechanic' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 3){
						  $server_target_db = "select dirId from gaga where adInterest='Health' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 4){
						  //$server_target_db = "select dirId from gaga where adInterest='Agriculture';";
						  $server_target_db = "select dirId from gaga where adInterest='Food' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 5){
						  $server_target_db = "select dirId from gaga where adInterest='All' and id='".$_POST["drim"]."';";
                        }else if($_POST["ad-type-id"] == 6){
						  $server_target_db = "select dirId from gaga where adInterest='Entertainment' and id='".$_POST["drim"]."';";
						}else if($_POST["ad-type-id"] == 7){
						  $server_target_db = "select dirId from gaga where adInterest='Education' and id='".$_POST["drim"]."';";
						}else if($_POST["ad-type-id"] == 8){
						  $server_target_db = "select dirId from gaga where adInterest='Resort' and id='".$_POST["drim"]."';";
						}else if($_POST["ad-type-id"] == 9){
						  $server_target_db = "select dirId from gaga where adInterest='RealEstates' and id='".$_POST["drim"]."';";
						}else if($_POST["ad-type-id"] == 10){
						  $server_target_db = "select dirId from gaga where adInterest='Agriculture' and id='".$_POST["drim"]."';";
						}
						
						$connect_result = $connect->query($server_target_db);
						 if($connect_result === False){
							 echo json_encode(array("state"=>1));
							 return;
						 }			
                        
						$industrialIDs = array();
						$indx = 0;
						$_array_4_files = array();
						$fileType = array();
						
						$productServiceCompany = array();
						$productServiceAudioAdImage = array();
						$productServiceVideoAdImage = array();
				
                if($connect_result->num_rows > 0){				
					//if($connect_result->fetch_assoc()["dirId"] != ""){				
						if($connect_result->num_rows > 0){
						   while($row = $connect_result->fetch_assoc()){
							$industrialIDs[$indx] = $row["dirId"];
							$indx++;
						   }
						}
                        
						$indx = 0;
						//$indx90 = 0;
						
						$industrialID = array();
						
						for($removeNulls = 0;$removeNulls < count($industrialIDs);$removeNulls++){
						   if($industrialIDs[$removeNulls] != null){
						      $industrialID[$indx] = $industrialIDs[$removeNulls];
							  $indx++;
						   }
						}
						
						
						$industrialIDs = $industrialID;
				        $indx = 0;
						
						if(count($industrialIDs) == 0){
						  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
						  "productServiceCompany"=>$productServiceCompany, 
						  "productServiceAudioAdImage"=>$productServiceAudioAdImage, 
						  "productServiceVideoAdImage"=>$productServiceVideoAdImage, "state"=>4, "fileType"=>$fileType,
						  "adID"=>$_POST["ad-type-id"]));	
						  return;
						}
						
						
						if($industrialIDs[$indx] != ""){
							if(count($industrialIDs) > 0){					
								for($getIds = 0;$getIds < count($industrialIDs);$getIds++){
									$server_target_db = "select productServiceName, productServiceCompany, 
									productServiceAudioAdImage, productServiceVideoAdImage from product_service_info_".
									$industrialIDs[$getIds].";";
									
									$connect_nresult = $connect->query($server_target_db);
									if($connect_nresult->num_rows > 0){
										while($rown = $connect_nresult->fetch_assoc()){
										  $file_type = strtolower(pathinfo($rown["productServiceName"], PATHINFO_EXTENSION));
										  if($_POST["ad-display-type-id"] == 1){
											  if($file_type == "mp4" ||  $file_type == "webm" || $file_type == "avi" ||
										      $file_type == "ogg" || $file_type == "mkv"){
												$_array_4_files[$indx] = "adv.videos/".$rown["productServiceName"];
												$productServiceCompany[$indx] = $rown["productServiceCompany"];
												$productServiceVideoAdImage[$indx] = "adv.videos.img/".$rown["productServiceVideoAdImage"];
												$fileType[$indx] = 1;
												$indx++;
											  }
										  }else if($_POST["ad-display-type-id"] == 2){
											  if($file_type == "mp3"){
												$_array_4_files[$indx] = "adv.audios/".$rown["productServiceName"];
												$productServiceCompany[$indx] = $rown["productServiceCompany"];
												$productServiceAudioAdImage[$indx] = $rown["productServiceAudioAdImage"];
												$fileType[$indx] = 2;
												$indx++;
											  }
										  }
										  else{
											  if($file_type == "jpg" || $file_type == "png" ||
											   $file_type == "svg" || $file_type == "gif"){
												$_array_4_files[$indx] = "adv.images/".$rown["productServiceName"];
												$productServiceCompany[$indx] = $rown["productServiceCompany"];
												$fileType[$indx] = 0;
												$indx++;
											  }
										  }
										  //$indx++;
										}
									}
								}
							}
						}
		 
		            //}
				}else{
					echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
					"productServiceCompany"=>$productServiceCompany, "productServiceAudioAdImage"=>$productServiceAudioAdImage, 
					"productServiceVideoAdImage"=>$productServiceVideoAdImage, 
					"state"=>4, "fileType"=>$fileType,
					"adID"=>$_POST["ad-type-id"], "ids"=>$industrialIDs, "uid"=>$id));
					return;
				}
					
		  //$_array_4_files = $industrialIDs
	  
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany
		  , "productServiceAudioAdImage"=>$productServiceAudioAdImage, 
		  "productServiceVideoAdImage"=>$productServiceVideoAdImage, "state"=>601, "fileType"=>$fileType,
		  "adID"=>$_POST["ad-type-id"], "ids"=>$industrialIDs, "uid"=>$id));
		  return;
		}else{
		  
						 $connect = connectserver(0);

						 if($connect["state"] != 500006){
							echo json_encode($connect);
							return;
						 }
						 
						 $connect = $connect["connect"];
                        
						if($_POST["ad-type-id"] == 0){
						  $server_target_db = "select dirId from gaga where adInterest='Tech';";
                        }else if($_POST["ad-type-id"] == 1){
						  $server_target_db = "select dirId from gaga where adInterest='Electronic';";
                        }else if($_POST["ad-type-id"] == 2){
						  $server_target_db = "select dirId from gaga where adInterest='Mechanic';";
                        }else if($_POST["ad-type-id"] == 3){
						  $server_target_db = "select dirId from gaga where adInterest='Health';";
                        }else if($_POST["ad-type-id"] == 4){
						  //$server_target_db = "select dirId from gaga where adInterest='Agriculture';";
						  $server_target_db = "select dirId from gaga where adInterest='Food';";
                        }else if($_POST["ad-type-id"] == 5){
						  $server_target_db = "select dirId from gaga where adInterest='All';";
                        }else if($_POST["ad-type-id"] == 6){
						  $server_target_db = "select dirId from gaga where adInterest='Entertainment';";
						}else if($_POST["ad-type-id"] == 7){
						  $server_target_db = "select dirId from gaga where adInterest='Education';";
						}else if($_POST["ad-type-id"] == 8){
						  $server_target_db = "select dirId from gaga where adInterest='Resort';";
						}else if($_POST["ad-type-id"] == 9){
						  $server_target_db = "select dirId from gaga where adInterest='RealEstates';";
						}else if($_POST["ad-type-id"] == 10){
						  $server_target_db = "select dirId from gaga where adInterest='Agriculture';";
						}
						
						$connect_result = $connect->query($server_target_db);
						 if($connect_result === False){
							 echo json_encode(array("state"=>1));
							 return;
						 }			
                        
						$industrialIDs = array();
						$indx = 0;
						$_array_4_files = array();
						$fileType = array();
						
						$productServiceCompany = array();
						$productServiceAudioAdImage = array();
						$productServiceVideoAdImage = array();
				
                if($connect_result->num_rows > 0){				
					//if($connect_result->fetch_assoc()["dirId"] != ""){				
						if($connect_result->num_rows > 0){
						   while($row = $connect_result->fetch_assoc()){
							$industrialIDs[$indx] = $row["dirId"];
							$indx++;
						   }
						}
                        
						$indx = 0;
						//$indx90 = 0;
						
						$industrialID = array();
						
						for($removeNulls = 0;$removeNulls < count($industrialIDs);$removeNulls++){
						   if($industrialIDs[$removeNulls] != null){
						      $industrialID[$indx] = $industrialIDs[$removeNulls];
							  $indx++;
						   }
						}
						
						
						$industrialIDs = $industrialID;
				        $indx = 0;
						
						if(count($industrialIDs) == 0){
						  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
						  "productServiceCompany"=>$productServiceCompany, "productServiceAudioAdImage"=>
						  $productServiceAudioAdImage, "state"=>601, 
						  "productServiceVideoAdImage"=>$productServiceVideoAdImage, 
						  "fileType"=>$fileType,
						  "adID"=>$_POST["ad-type-id"]));	
						  return;
						}
						
						
						if($industrialIDs[$indx] != ""){
							if(count($industrialIDs) > 0){					
								for($getIds = 0;$getIds < count($industrialIDs);$getIds++){
									$server_target_db = "select productServiceName, productServiceCompany, productServiceAudioAdImage, 
									productServiceVideoAdImage from product_service_info_".
									$industrialIDs[$getIds].";";
									
									$connect_nresult = $connect->query($server_target_db);
									if($connect_nresult->num_rows > 0){
										while($rown = $connect_nresult->fetch_assoc()){
										  $file_type = strtolower(pathinfo($rown["productServiceName"], PATHINFO_EXTENSION));
										  if($_POST["ad-display-type-id"] == 1){
											  if($file_type == "mp4" ||  $file_type == "webm" && $file_type != "avi" && 
										      $file_type != "ogg" && $file_type != "mkv"){
												$_array_4_files[$indx] = "adv.videos/".$rown["productServiceName"];
												$productServiceVideoAdImage[$indx] = "adv.videos.img/".$rown["productServiceVideoAdImage"];
												$productServiceCompany[$indx] = $rown["productServiceCompany"];
												$fileType[$indx] = 1;
												$indx++;
											  }
										  }else if($_POST["ad-display-type-id"] == 2){
											  if($file_type == "mp3"){
												$_array_4_files[$indx] = "adv.audios/".$rown["productServiceName"];
												$productServiceAudioAdImage[$indx] = $rown["productServiceAudioAdImage"];//"adv.audios.img/".
												$productServiceCompany[$indx] = $rown["productServiceCompany"];//"adv.audios.img/".
												$fileType[$indx] = 2;
												$indx++;
											  }
										  }
										  else{
											  if($file_type == "jpg"){
												$_array_4_files[$indx] = "adv.images/".$rown["productServiceName"];	
												$productServiceCompany[$indx] = $rown["productServiceCompany"];
												$fileType[$indx] = 0;
												$indx++;
											  }
											   /*&& $file_type == "png" &&
											   $file_type == "svg" && $file_type == "gif"*/
										  }
										  //$indx++;
										}
									}
								}
							}
						}
		 
		            //}
				}
					
		  //$_array_4_files = $industrialIDs
	  
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany,
		  "productServiceVideoAdImage"=>$productServiceVideoAdImage,
		  "productServiceAudioAdImage"=>$productServiceAudioAdImage, "state"=>601, "fileType"=>$fileType,
		  "adID"=>$_POST["ad-type-id"], "ids"=>$industrialIDs));
		  return;
		}		  
	  }
	  break;
	  case "FETCH":
	  case "fetch":
	  case 18:
	   { 
	      if($_POST["drim"] != ""){
             
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			 $id = $_POST["drim"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $id = $row["id"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2.".audios";
			  if(!is_dir($gagaUserAccountVideos)){
				 echo json_encode(array("state"=>551));
				 return;
			  }
			  //$file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		}
/* 		}else{
			 $file_dir_handle = opendir("./adv.videos"); //opendir("./didcx.facial.biometrics");
		} */

             $productServiceCompany = array();
             $productServiceAudioAdImage = array();
             $product_service_info = "product_service_info_".$dirId2;
			 
			 $server_target_db = "select productServiceCompany, productServiceName, 
			 productServiceAudioAdImage from ".$product_service_info.";";// and id='".$id."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
	
			 $dir_index = 0;
			 
			 $_array_4_files = array();
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 //$id = $row["id"];						   
					if(strtolower(pathinfo($row["productServiceName"], PATHINFO_EXTENSION)) != "mp4"){
					 $_array_4_files[$dir_index] = "adv.audios/".$row["productServiceName"];			
					 $productServiceAudioAdImage[$dir_index] = $row["productServiceAudioAdImage"];			
					 $productServiceCompany[$dir_index] = $row["productServiceCompany"];			
					 $dir_index += 1;
					}
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
		 
		 /*
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  $_array_4_files = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "localhost/advert.llc/http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.audios/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }*/
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", "productServiceCompany"=>$productServiceCompany, 
		  "productServiceAudioAdImage"=>$productServiceAudioAdImage, "state"=>601, "fileType"=> ""));
		  return;
		}else{
		   
          if(!is_dir("./adv.audios")){
			echo json_encode(array("state"=>551));
			return;
		  }
		
		  $file_dir_handle = opendir("./adv.audios"); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		     $productServiceCompany = array();
		     $productServiceAudioAdImage = array();

		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
			 
			 $dir_index22 = 0;
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = "adv.audios/".$_array_4_json[$dir_index_str];//.'",';

					$table = "productServiceNames";
					$query = $connect->query("SHOW TABLES LIKE '".$table."'");
					
					if($query == false){
					 echo json_encode(array("state"=>1));
					 return;				  
					}
					
				
					if($query->num_rows == 0 || $query->num_rows != 1){
					 echo json_encode(array("state"=>550));
					 return;				
					}
				 
				 $server_target_db = "select productServiceAudioAdImage, 
				 productServiceCompany from productServiceNames where productServiceName='".$_array_4_json[$dir_index_str]."';";
				 
				 $connect_result = $connect->query($server_target_db);		 
				 
				 if($connect_result === FALSE){
					 echo json_encode(array("state"=>2));
					 return;
				 }
				 
				 if ($connect_result->num_rows > 0) {
					// output data of each row
					 while($row = $connect_result->fetch_assoc()) {			   
						if(strtolower(pathinfo($_array_4_json[$dir_index_str], PATHINFO_EXTENSION)) != "mp4"){			
						 $productServiceAudioAdImage[$dir_index22] = $row["productServiceAudioAdImage"];
						 $productServiceCompany[$dir_index22] = $row["productServiceCompany"];
						 $dir_index22++;
						}
					}
				 }else{
					 echo json_encode(array("state"=>3));
					 return;
				 }
				 
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", 
		  "productServiceCompany"=>$productServiceCompany, 
		  "productServiceAudioAdImage"=>$productServiceAudioAdImage, "state"=>601, "fileType"=> ""));
		  return;
		}
	   }
	  break;
	  case 19: 
	   { 
	      if($_POST["imageId"] != ""){
            
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			 $imageId = $_POST["imageId"];
			 $dirId = "";
			 $dirId2 = "";
			 $server_target_db = "select * from gaga where imageFileName='".$imageId."';";
			 $connect_result = $connect->query($server_target_db);		 
			 
			 if($connect_result === FALSE){
				 echo json_encode(array("state"=>2));
				 return;
			 }
			 
			 $imageFileName = "";
			 $dirId2 = "";
			 
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $imageFileName = $row["imageFileName"];						   
					 $dirId2 = $row["dirId"];						   
				}
			 }else{
				 echo json_encode(array("state"=>3));
				 return;
			 }
            
        //if($_POST["dId"] == ""){			
/* 		if($dirId2 == null || $dirId2 == "null" || $dirId2 == ''){ 
		        $connect->close();				  
				echo json_encode(array("state"=>4));
				return;
		}
		 else{
			  $gagaUserAccountVideos = "adv-accounts\\".$dirId2;
			  $file_dir_handle = opendir($gagaUserAccountVideos); //opendir("./didcx.facial.biometrics");
		} */
          
		  //echo $dirId2;
		  
		  $dirAudioRecord = "";
		  $dirAudioRecord = "./adv-accounts/".$dirId2.".audios";
		  
		  if(!is_dir($dirAudioRecord)){
			 echo json_encode(array("state"=>9));
			 return;
		  }
		  
		  $file_dir_handle = opendir($dirAudioRecord); //opendir("./didcx.facial.biometrics");	
			
		  $dir_index = 0;
		  
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  $dir_contents[$dir_index] = readdir($file_dir_handle);
		  $dir_index += 1;
		  
		  $productServiceCompany = array();
		  
		  while($dir_contents[$dir_index-1] != ""){
			  if($dir_contents[$dir_index-1] == ""){
				  $dir_contents[$dir_index-1] = "";
				  break;
			  }
			  $dir_contents[$dir_index] = readdir($file_dir_handle);
			  //echo $dir_contents[$dir_index]."<br/>";
			  $dir_index += 1;
		  }
		  
		  closedir($file_dir_handle);
		 
		  $dir_contents[0] = "";
		  $dir_contents[1] = "";
		  
		  if($dir_contents[2] == ""){
			  echo json_encode(array("state"=>5));
			  return;
		  }
		  
		  $dir_index = 0;
		  $dir_index_str = "";
		  
		  $_array_4_json = array();
		  
		  //echo '{';
		  //echo "<br>";
		  //echo "\n";
		  
		  foreach($dir_contents as $_server_response_index){
			  if($_server_response_index == ""){
				  //echo "0";
				  //return;
			  }else{
				 $dir_index_str = number_format($dir_index);
				 $_array_4_json[$dir_index_str] = $_server_response_index;
				 //echo $_server_response_index."<br/>";
				 //$_user_facial_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/didcx.facial.biometrics/". $_array_4_json[$dir_index_str].'",';
				 //$_advEvent_links = '"'.$dir_index_str. '" : "'. "http://www.localhost/advert.llc/adv.videos/".$_array_4_json[$dir_index_str].'",';
				 $_array_4_files[number_format($dir_index)] = $dirAudioRecord."/".$_array_4_json[$dir_index_str];//.'",';
				 //echo $_advEvent_links; //."\n";//;//."<br>";
				 $dir_index += 1;
			  }
		  }
/* 		  $dir_index_str = number_format($dir_index);
		  echo '"'.$dir_index_str. '" : "'. '.'.'"';//."\n"; //"<br>";
		  echo "}"; */
		  echo json_encode(array("files"=>$_array_4_files, "externalInfos"=>"", "productServiceCompany"=>$productServiceCompany, "state"=>7));
		  return;
		}
	   }	  
	  break;
	  case 20: 
	  {
		if($_POST["imageId"] != ""){
			
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			$id = $_POST["imageId"];		  

			$server_target_db = "select * from gaga where id='".$id."';";
			$connect_result = $connect->query($server_target_db);
			if($connect_result === False){
				echo json_encode(array("state"=>1, "close"=>$connect->close()));
				return;
			}	
			
			$profileInfos = array();
			$profileDataSet = array("firstname", "middlename", 
			"lastname", "username", "profession", "privateTelOptional", 
			"publicTelOptional", "whatAppNoOptional", "businessEmail"
			, "privatePersonalEmailOptional"
			, "facebookHandleOptional", "twitterHandleOptional"
			, "instagramHandleOptional"
			, "youtubeHandleOptional", "websiteDomainOptional"
			, "actorStory", "countryOfBirth");
			
			$profCount = 0;
			
			if($connect_result->num_rows > 0){
			  while($row = $connect_result->fetch_assoc()){
				$profileInfos = $row;
				$profCount++;
			  }
			}else{
			  echo json_encode(array("state"=>5, "close"=>$connect->close()));
			  return;
			}
			
/* 			echo json_encode(array("state"=>4949, "pro"=>$profileInfos["firstname"]));
		    return; */

	      	$pattern = "/'/i";
			
			if($_POST["firstname"] == ""){$_POST["firstname"] = $profileInfos["firstname"];}
			if($_POST["middlename"] == ""){$_POST["middlename"] = $profileInfos["middlename"];}
			if($_POST["lastname"] == ""){$_POST["lastname"] = $profileInfos["lastname"];}
			if($_POST["profession"] == ""){$_POST["profession"] = $profileInfos["profession"];}
			if($_POST["privateTelOptional"] == ""){$_POST["privateTelOptional"] = $profileInfos["privateTelOptional"];}
			if($_POST["publicTelOptional"] == ""){$_POST["publicTelOptional"] = $profileInfos["publicTelOptional"];}
			if($_POST["whatAppNoOptional"] == ""){$_POST["whatAppNoOptional"] = $profileInfos["whatAppNoOptional"];}
			if($_POST["businessEmail"] == ""){$_POST["businessEmail"] = $profileInfos["businessEmail"];}
			if($_POST["privatePersonalEmailOptional"] == ""){$_POST["privatePersonalEmailOptional"] = $profileInfos["privatePersonalEmailOptional"];}
			if($_POST["facebookHandleOptional"] == ""){$_POST["facebookHandleOptional"] = $profileInfos["facebookHandleOptional"];}
			if($_POST["instagramHandleOptional"] == ""){$_POST["instagramHandleOptional"] = $profileInfos["instagramHandleOptional"];}
			if($_POST["youtubeHandleOptional"] == ""){$_POST["youtubeHandleOptional"] = $profileInfos["youtubeHandleOptional"];}
			if($_POST["websiteDomainOptional"] == ""){$_POST["websiteDomainOptional"] = $profileInfos["websiteDomainOptional"];}
			if($_POST["actorStory"] == ""){$_POST["actorStory"] = $profileInfos["actorStory"];}
			if($_POST["countryOfBirth"] == ""){$_POST["countryOfBirth"] = $profileInfos["countryOfBirth"];}
            
			if($_POST["actorStory"] != "" || $_POST["actorStory"] != null 
			|| $_POST["actorStory"] != "null" || $_POST["actorStory"] != "NULL"){
              $_POST["actorStory"] = preg_replace($pattern, "\'", $_POST["actorStory"]);	
			}

			$server_target_db = "update gaga set firstname='".$_POST["firstname"].
			"', middlename='".$_POST["middlename"]."', lastname='".$_POST["lastname"]."',
			 profession='".$_POST["profession"].
			"', privateTelOptional='".$_POST["privateTelOptional"]."',
			publicTelOptional='".$_POST["publicTelOptional"].
			"', whatAppNoOptional='".$_POST["whatAppNoOptional"].
			"', businessEmail='".$_POST["businessEmail"]."',
			privatePersonalEmailOptional='".$_POST["privatePersonalEmailOptional"].
			"', facebookHandleOptional='".$_POST["facebookHandleOptional"]."',
			instagramHandleOptional='".$_POST["instagramHandleOptional"].
			"', youtubeHandleOptional='".$_POST["youtubeHandleOptional"]."', 
			websiteDomainOptional='".$_POST["websiteDomainOptional"].
			"', actorStory='".$_POST["actorStory"].
			"', countryOfBirth='".$_POST["countryOfBirth"]."' where id='".$id."';";
			
			$connect_result = $connect->query($server_target_db);
			if($connect_result === False){
				echo json_encode(array("state"=>3, "close"=>$connect->close()));
				return;
			}			 
			
			echo json_encode(array("state"=>4, "close"=>$connect->close()));
			return;
		}
	  }
	  break;
	  case 21: 
	  {
		if($_POST["imageId"] != ""){
			
		     $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];



			$id = $_POST["imageId"];		  

			$server_target_db = "select * from gaga where id='".$id."';";
			$connect_result = $connect->query($server_target_db);
			if($connect_result === False){
				echo json_encode(array("state"=>1, "close"=>$connect->close()));
				return;
			}	
			
			$profileInfos = array();
			$profileDataSet = array("institutionName", "ein", "tin", "activity",
			 "privateTelOptional", "publicTelOptional", "whatAppNoOptional",
			  "businessEmail", "privatePersonalEmailOptional", "facebookHandleOptional",
			   "twitterHandleOptional", "instagramHandleOptional", "youtubeHandleOptional",
			    "websiteDomainOptional", "companyStory", "location",
				 "countryOfRegistration",  "companyRegistrationDate");
			
			$profCount = 0;
			
			if($connect_result->num_rows > 0){
			  while($row = $connect_result->fetch_assoc()){
				$profileInfos = $row;
				$profCount++;
			  }
			}else{
			  echo json_encode(array("state"=>5, "close"=>$connect->close()));
			  return;
			}
			
/* 			echo json_encode(array("state"=>4949, "pro"=>$profileInfos["firstname"]));
		    return; */

	      	$pattern = "/'/i";
			
            if($_POST["institutionName"] == ""){$_POST["institutionName"] = $profileInfos["institutionName"];}
            if($_POST["ein"] == ""){$_POST["ein"] = $profileInfos["ein"];}
            if($_POST["tin"] == ""){$_POST["tin"] = $profileInfos["tin"];}
            if($_POST["activity"] == ""){$_POST["activity"] = $profileInfos["activity"];}
            if($_POST["privateTelOptional"] == ""){$_POST["privateTelOptional"] = $profileInfos["privateTelOptional"];}
            if($_POST["publicTelOptional"] == ""){$_POST["publicTelOptional"] = $profileInfos["publicTelOptional"];}
            if($_POST["whatAppNoOptional"] == ""){$_POST["whatAppNoOptional"] = $profileInfos["whatAppNoOptional"];}
            if($_POST["businessEmail"] == ""){$_POST["businessEmail"] = $profileInfos["businessEmail"];}
            if($_POST["privatePersonalEmailOptional"] == ""){$_POST["privatePersonalEmailOptional"] = $profileInfos["privatePersonalEmailOptional"];}
            if($_POST["facebookHandleOptional"] == ""){$_POST["facebookHandleOptional"] = $profileInfos["facebookHandleOptional"];}
            if($_POST["twitterHandleOptional"] == ""){$_POST["twitterHandleOptional"] = $profileInfos["twitterHandleOptional"];}
            if($_POST["instagramHandleOptional"] == ""){$_POST["instagramHandleOptional"] = $profileInfos["instagramHandleOptional"];}
            if($_POST["youtubeHandleOptional"] == ""){$_POST["youtubeHandleOptional"] = $profileInfos["youtubeHandleOptional"];}
            if($_POST["websiteDomainOptional"] == ""){$_POST["websiteDomainOptional"] = $profileInfos["websiteDomainOptional"];}
            if($_POST["companyStory"] == ""){$_POST["companyStory"] = $profileInfos["companyStory"];}
            if($_POST["location"] == ""){$_POST["location"] = $profileInfos["location"];}
            if($_POST["companyRegistrationDate"] == ""){$_POST["companyRegistrationDate"] = $profileInfos["companyRegistrationDate"];}
			
			if($_POST["companyStory"] != "" || $_POST["companyStory"] != null 
			|| $_POST["companyStory"] != "null" || $_POST["companyStory"] != "NULL"){
              $_POST["companyStory"] = preg_replace($pattern, "\'", $_POST["companyStory"]);	
			}

			$server_target_db = "update gaga set institutionName='".$_POST["institutionName"]."', 
			ein='".$_POST["ein"]."', tin='".$_POST["tin"]."', activity='".$_POST["activity"]."', 
			privateTelOptional='".$_POST["privateTelOptional"]."', 
			publicTelOptional='".$_POST["publicTelOptional"]."', 
			whatAppNoOptional='".$_POST["whatAppNoOptional"]."', businessEmail='".$_POST["businessEmail"]."', 
			privatePersonalEmailOptional='".$_POST["privatePersonalEmailOptional"]."', facebookHandleOptional
			='".$_POST["facebookHandleOptional"]."', twitterHandleOptional='".$_POST["twitterHandleOptional"]."', 
			instagramHandleOptional='".$_POST["instagramHandleOptional"].
			"', youtubeHandleOptional='".$_POST["youtubeHandleOptional"]."', 
			websiteDomainOptional='".$_POST["websiteDomainOptional"].
			"', companyStory='".$_POST["companyStory"]."', 
			location='".$_POST["location"]."', companyRegistrationDate='".$_POST["companyRegistrationDate"]."'
			where id='".$id."';";
			
			$connect_result = $connect->query($server_target_db);
			if($connect_result === False){
				echo json_encode(array("state"=>3, "close"=>$connect->close()));
				return;
			}			 
			
			echo json_encode(array("state"=>4, "close"=>$connect->close()));
			return;
		}
	  }	  
	  break;
	  default: 
	    return;
	}
 }
  
  GetAdvFile4Uploader($_SERVER["REQUEST_METHOD"]);
?>	