<?php
  declare(strict_types=1);
  
  
  function GetAdVids() : void{
	  $body = file_get_contents("php://input");
	  $advs = json_decode($body); 
     switch($advs->SERVICE_TYPE_ID){
	  case 0:
		  //$advFile = $advs->ADVERTS;
		  $advFile = $advs->ADVERTS;
		  $advDir = "adv.videos"."\\";
		  $index = 0;
		  $advFileIndexContainer = array();
		  
		  $advAudios = "./adv.audios";
		  $advAudiosDir = "adv.audios\\";
		  
		  $advVideoFileName = "";
		
		  for($getIndex = 0;$getIndex < count($advFile);$getIndex++){
				 $index = $getIndex;
				 $body = file_get_contents($advFile[$index]);
				 if(strtolower(pathinfo($advs->AD_FN[$index], PATHINFO_EXTENSION)) == "mp3"){
				   if(!is_dir("./adv.audios")){
					  mkdir("./adv.audios");
				   }
				   $advVideoFileName = $advAudiosDir.$advs->AD_FN[$index];
				 }else{
				   if(!is_dir("./adv.videos")){
					 mkdir("./adv.videos");
				   }
				   $advVideoFileName = $advDir.$advs->AD_FN[$index];
				 }
				 file_put_contents($advVideoFileName, $body);
				 //move_uploaded_file($advFile["tmp_name"][$index], $advFiler); 
				 $index_name = "advFile-".number_format($index);
				 $advFileIndexContainer[$index_name] = $advDir.$advs->AD_FN[$index];		  
         }

		
	/* 	  foreach($advFile["name"] as $advEachFile){
			 //$advFiler = $advDir.basename($advEachFile);
			 $body = file_get_contents($advFile["tmp_name"][$index]);
			 $advVideoFileName = $advDir.$advFile["name"][$index];
			 file_put_contents($advVideoFileName, $body);
			 //move_uploaded_file($advFile["tmp_name"][$index], $advFiler); 
			 $index_name = "advFile-".number_format($index);
			 $advFileIndexContainer[$index_name] = $advEachFile;
			 $index++;
		  } */
		  
		  //file_put_contents($_DIDCX_FR_USN_PROFILE_DIR, $image);
		  echo 1;
		  return;
	  break;
	  case 1:
		  //$advFile = $advs->ADVERTS;
		  $advFile = $advs->ADVERTS;
		  $advDir = "adv.images"."\\";
		  $index = 0;
		  $advFileIndexContainer = array();

		  if(!is_dir("./adv.images")){
			mkdir("./adv.images");
		  }
		
		  for($getIndex = 0;$getIndex < count($advFile);$getIndex++){
			 $index = $getIndex;
			 $body = file_get_contents($advFile[$index]);
			 $advVideoFileName = $advDir.$advs->AD_FN[$index];
			 file_put_contents($advVideoFileName, $body);
			 //move_uploaded_file($advFile["tmp_name"][$index], $advFiler); 
			 $index_name = "advFile-".number_format($index);
			 $advFileIndexContainer[$index_name] = $advEachFile;		  
		  }
		
	/* 	  foreach($advFile["name"] as $advEachFile){
			 //$advFiler = $advDir.basename($advEachFile);
			 $body = file_get_contents($advFile["tmp_name"][$index]);
			 $advVideoFileName = $advDir.$advFile["name"][$index];
			 file_put_contents($advVideoFileName, $body);
			 //move_uploaded_file($advFile["tmp_name"][$index], $advFiler); 
			 $index_name = "advFile-".number_format($index);
			 $advFileIndexContainer[$index_name] = $advEachFile;
			 $index++;
		  } */
		  
		  //file_put_contents($_DIDCX_FR_USN_PROFILE_DIR, $image);
		  echo 1;	   
	  break;
	  default: 
	   return;
	}
  }
  
  GetAdVids();
?>
