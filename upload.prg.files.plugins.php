<?php

    if(isset($_POST["submit-files"])){
	
		   $_target_dir = "";
		   if($_POST["specific-dir"] != ""){
			 //$_target_dir = "plugins/".$_POST["specific-dir"];
			 
	         foreach($_FILES["program-files"]["name"] as $programFiles){
				$_target_dir = "plugins/".$_POST["specific-dir"]."/".basename($programFiles["name"]);
				$_fileType = strtolower(pathinfo($_target_dir, PATHINFO_EXTENSION));
				if(move_uploaded_file($_FILES["tmp_name"], $_target_dir) != TRUE){
				   echo "File upload error on ".$programFiles["name"].";";
				   break;
				}
			 }
		   }
		
		return;
	}

?>