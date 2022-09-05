<?php

function CreateDirectories(){
  $_sub_directories_not_exists = array();
  $_sub_directories_exists = array();
  $__index = 0;
  if($_GET["op_id"] == 0 && $_GET["dump_id"] != "" && $_GET["dir_name"] != "" ){
	$sub_dir_aft_dump = "plugins/".$_GET['dump_id'].'/'.$_GET["dir_name"];
    if(!is_dir($sub_dir_aft_dump)){
	  if(mkdir($sub_dir_aft_dump) == TRUE){
		  if($_GET["sub_dir"] != ""){
			if(strlen($_GET["sub_dir"]) > 0){
			  $subDir = $_GET["sub_dir"];
			  $_sub_dir = "";
			  $_commas = 0;
			  for($sub_i = 0;$sub_i <= strlen($_GET["sub_dir"]);$sub_i++){
				if($subDir[0] != ',' && $sub_i != 0 && $sub_i == 
				strlen($_GET["sub_dir"])){
				   $_commas = 0;
				   break;
				}
				if($subDir[0] != ',' && $sub_i != 0 && $subDir[$sub_i] == ','){
				   //$subDir[$sub_i] = '';
				   $__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				   if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == FALSE){
				      $_sub_dir = "";
				      $_commas = -4;					
					  break;
					}
					$_sub_directories_not_exists[$__index] = $_sub_dir;
					$__index++;
				   }else{
				     $_sub_directories_exists[$__index] = $_sub_dir;
					 $__index++;
				   }
				   $_sub_dir = "";
				   $_commas = -2;
				   continue;
				}
				if($subDir[0] == ',' && $sub_i == 0 && $subDir[$sub_i] == ','){
				   $_sub_dir = "";
				   $_commas = -3;
				   break;
				}
				$_sub_dir .= $subDir[$sub_i];
			  }
			  if($_commas == 0){
				$__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == TRUE){
					  $_sub_directories_not_exists[$__index] = $_sub_dir;
						if(count($_sub_directories_not_exists) > 0){
						  foreach($_sub_directories_not_exists as $dir_not_exists){
							 echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
						  }
						}
						if(count($_sub_directories_exists) > 0){
						  foreach($_sub_directories_exists as $dir_exists){
							 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
						  }
						}
					  return;
					}else{
					  print($_sub_dir." @".$sub_dir_aft_dump." was not successful.<br>");
					  return;
					}
				}else{
				   $_sub_directories_exists[$__index] = $_sub_dir;
					if(count($_sub_directories_exists) > 0){
					  foreach($_sub_directories_exists as $dir_exists){
						 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
					  }
					}

				   return;
				}
				$_sub_dir = "";				
			  }else if($_commas == -2){
				if(count($_sub_directories_not_exists) > 0){
				  foreach($_sub_directories_not_exists as $dir_not_exists){
				     echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
				  }
				}
				if(count($_sub_directories_exists) > 0){
				  foreach($_sub_directories_exists as $dir_exists){
				     echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
				  }
				}				 
			  }else if($_commas == -3){
				echo "Please don't begin directory name(s) with a comma(,).";
				return;
			  }else if($_commas == -4){
				print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
				return;
			  }
			}
		  }else{
		   print_r($sub_dir_aft_dump." directory creation was successful");
		  }
		 return;
	  }else{
		 print_r($sub_dir_aft_dump." directory creation was not successful.<br>Please
		 try again later.");
		 return;
	  }
	}else{
		  if($_GET["sub_dir"] != ""){
			if(strlen($_GET["sub_dir"]) > 0){
			  $subDir = $_GET["sub_dir"];
			  $_sub_dir = "";
			  $_commas = 0;
			  for($sub_i = 0;$sub_i <= strlen($_GET["sub_dir"]);$sub_i++){
				if($subDir[0] != ',' && $sub_i != 0 && $sub_i == 
				strlen($_GET["sub_dir"])){
				   $_commas = 0;
				   break;
				}
				if($subDir[0] != ',' && $sub_i != 0 && $subDir[$sub_i] == ','){
				   //$subDir[$sub_i] = '';
				   $__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				   if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == FALSE){
				      $_sub_dir = "";
				      $_commas = -4;					
					  break;
					}
					$_sub_directories_not_exists[$__index] = $_sub_dir;
					$__index++;
				   }else{
				     $_sub_directories_exists[$__index] = $_sub_dir;
					 $__index++;
				   }
				   $_sub_dir = "";
				   $_commas = -2;
				   continue;
				}
				if($subDir[0] == ',' && $sub_i == 0 && $subDir[$sub_i] == ','){
				   $_sub_dir = "";
				   $_commas = -3;
				   break;
				}
				$_sub_dir .= $subDir[$sub_i];
			  }
			  if($_commas == 0){
				$__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == TRUE){
					  $_sub_directories_not_exists[$__index] = $_sub_dir;
					if(count($_sub_directories_not_exists) > 0){
					  foreach($_sub_directories_not_exists as $dir_not_exists){
						 echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
					  }
					}
					if(count($_sub_directories_exists) > 0){
						  foreach($_sub_directories_exists as $dir_exists){
							 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
						  }
					}

					  return;
					}else{
					  print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
					  return;
					}
				}else{
					$_sub_directories_exists[$__index] = $_sub_dir;
					if(count($_sub_directories_exists) > 0){
					  foreach($_sub_directories_exists as $dir_exists){
						 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
					  }
					}
				   return;
				}
				$_sub_dir = "";				
			  }else if($_commas == -2){
				if(count($_sub_directories_not_exists) > 0){
				  foreach($_sub_directories_not_exists as $dir_not_exists){
				     echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
				  }
				}
				if(count($_sub_directories_exists) > 0){
				  foreach($_sub_directories_exists as $dir_exists){
				     echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
				  }
				}				 
			  }else if($_commas == -3){
				echo "Please don't begin directory name(s) with a comma(,).";
				return;
			  }else if($_commas == -4){
				print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
				return;
			  }
			}
		  }else{
		   print_r($sub_dir_aft_dump." directory creation was successful");
		  }
		 return;	
	}	
  }else if($_GET["op_id"] == 1 && $_GET["dump_id"] != "" && $_GET["dir_name"] != ""){
    $sub_dir_aft_dump = "plugins/".$_GET['dump_id'].'/'.$_GET["dir_name"];
	if(is_dir($sub_dir_aft_dump)){
	  if(rmdir($sub_dir_aft_dump) == TRUE){
		 echo "Directory removed successfully";
		 return;
	  }
	  else{
		 echo "Directory removal was unsuccessful";
		 return;		  
	  }
	}else{
		 echo "Directory not exists";
		 return;
	}
  }else if($_GET["op_id"] == 2 && $_GET["dump_id"] != "" && $_GET["dir_name"] != ""){
    $sub_dir_aft_dump = "plugins/".$_GET['dump_id'].'/'.$_GET["dir_name"];
	if(is_dir($sub_dir_aft_dump)){
	   echo "Directory exists";
	   return;
	}else{
	   echo "Directory not exists";
	   return;		
	}
  }else if($_GET["op_id"] == 3 && $_GET["dump_id"] != "" && $_GET["dir_name"] != ""){
    $sub_dir_aft_dump = "plugins/".$_GET['dump_id'].'/'.$_GET["dir_name"];
	if(is_dir($sub_dir_aft_dump)){
		  if($_GET["sub_dir"] != ""){
			if(strlen($_GET["sub_dir"]) > 0){
			  $subDir = $_GET["sub_dir"];
			  $_sub_dir = "";
			  $_commas = 0;
			  for($sub_i = 0;$sub_i <= strlen($_GET["sub_dir"]);$sub_i++){
				if($subDir[0] != ',' && $sub_i != 0 && $sub_i == 
				strlen($_GET["sub_dir"])){
				   $_commas = 0;
				   break;
				}
				if($subDir[0] != ',' && $sub_i != 0 && $subDir[$sub_i] == ','){
				   //$subDir[$sub_i] = '';
				   $__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				   if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == FALSE){
				      $_sub_dir = "";
				      $_commas = -4;					
					  break;
					}
					$_sub_directories_not_exists[$__index] = $_sub_dir;
					$__index++;
				   }else{
				     $_sub_directories_exists[$__index] = $_sub_dir;
					 $__index++;
				   }
				   $_sub_dir = "";
				   $_commas = -2;
				   continue;
				}
				if($subDir[0] == ',' && $sub_i == 0 && $subDir[$sub_i] == ','){
				   $_sub_dir = "";
				   $_commas = -3;
				   break;
				}
				$_sub_dir .= $subDir[$sub_i];
			  }
			  if($_commas == 0){
				$__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == TRUE){
					  $_sub_directories_not_exists[$__index] = $_sub_dir;
						if(count($_sub_directories_not_exists) > 0){
						  foreach($_sub_directories_not_exists as $dir_not_exists){
							 echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
						  }
						}
						if(count($_sub_directories_exists) > 0){
							  foreach($_sub_directories_exists as $dir_exists){
								 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
							  }
						}
					  return;
					}else{
					  print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
					  return;
					}
				}else{
					$_sub_directories_exists[$__index] = $_sub_dir;
					if(count($_sub_directories_exists) > 0){
					  foreach($_sub_directories_exists as $dir_exists){
						 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
					  }
					}
				   return;
				}
				$_sub_dir = "";				
			  }else if($_commas == -2){
				if(count($_sub_directories_not_exists) > 0){
				  foreach($_sub_directories_not_exists as $dir_not_exists){
				     echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
				  }
				}
				if(count($_sub_directories_exists) > 0){
				  foreach($_sub_directories_exists as $dir_exists){
				     echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
				  }
				}				 
			  }else if($_commas == -3){
				echo "Please don't begin directory name(s) with a comma(,).";
				return;
			  }else if($_commas == -4){
				print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
				return;
			  }
			}
		  }else{
		   print_r($sub_dir_aft_dump." directory creation was successful");
		  }
		 return;		
	}else{
	  if(mkdir($sub_dir_aft_dump) == TRUE){
		  if($_GET["sub_dir"] != ""){
			if(strlen($_GET["sub_dir"]) > 0){
			  $subDir = $_GET["sub_dir"];
			  $_sub_dir = "";
			  $_commas = 0;
			  for($sub_i = 0;$sub_i <= strlen($_GET["sub_dir"]);$sub_i++){
				if($subDir[0] != ',' && $sub_i != 0 && $sub_i == 
				strlen($_GET["sub_dir"])){
				   $_commas = 0;
				   break;
				}
				if($subDir[0] != ',' && $sub_i != 0 && $subDir[$sub_i] == ','){
				   //$subDir[$sub_i] = '';
				   $__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				   if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == FALSE){
				      $_sub_dir = "";
				      $_commas = -4;					
					  break;
					}
					$_sub_directories_not_exists[$__index] = $_sub_dir;
					$__index++;
				   }else{
				     $_sub_directories_exists[$__index] = $_sub_dir;
					 $__index++;
				   }
				   $_sub_dir = "";
				   $_commas = -2;
				   continue;
				}
				if($subDir[0] == ',' && $sub_i == 0 && $subDir[$sub_i] == ','){
				   $_sub_dir = "";
				   $_commas = -3;
				   break;
				}
				$_sub_dir .= $subDir[$sub_i];
			  }
			  if($_commas == 0){
				$__sub_dir = $sub_dir_aft_dump.'/'.$_sub_dir;
				if(!is_dir($__sub_dir)){
					if(mkdir($__sub_dir) == TRUE){
					  $_sub_directories_not_exists[$__index] = $_sub_dir;
						if(count($_sub_directories_not_exists) > 0){
						  foreach($_sub_directories_not_exists as $dir_not_exists){
							 echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
						  }
						}
						if(count($_sub_directories_exists) > 0){
							  foreach($_sub_directories_exists as $dir_exists){
								 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
							  }
						}
					  return;
					}else{
					  print($_sub_dir." @".$sub_dir_aft_dump." was not successful.");
					  return;
					}
				}else{
					$_sub_directories_exists[$__index] = $_sub_dir;
					if(count($_sub_directories_exists) > 0){
					  foreach($_sub_directories_exists as $dir_exists){
						 echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
					  }
					}
				   return;
				}
				$_sub_dir = "";				
			  }else if($_commas == -2){
				if(count($_sub_directories_not_exists) > 0){
				  foreach($_sub_directories_not_exists as $dir_not_exists){
				     echo $dir_not_exists." @".$sub_dir_aft_dump." was successful.<br>";
				  }
				}
				if(count($_sub_directories_exists) > 0){
				  foreach($_sub_directories_exists as $dir_exists){
				     echo $dir_exists." @".$sub_dir_aft_dump." already exists.<br>";
				  }
				}				 
			  }else if($_commas == -3){
				echo "Please don't begin directory name(s) with a comma(,).";
				return;
			  }else if($_commas == -4){
				print($_sub_dir." @".$sub_dir_aft_dump." was not successful.<br>");
				return;
			  }
			}
		  }else{
		   print_r($sub_dir_aft_dump." directory creation was successful<br>");
		  }
		 return;
	  }else{
		 print_r($sub_dir_aft_dump." directory creation was not successful. Please
		 try again later.");
		 return;
	  }	   
	}
  }else if($_GET["op_id"] == 4 && $_GET["dump_id"] != "" && $_GET["dir_name"] != ""){
    if(isset($_POST["submit-files"])){
	
		   $_target_dir = "";
		   $index = 0;
		   if($_POST["specific-dir"] != ""){
			 //$_target_dir = "plugins/".$_POST["specific-dir"];
			 $_target_dir_ = "plugins/".$_POST["specific-dir"];
			 if(!is_dir($_target_dir_)){
				if(mkdir($_target_dir_) == FALSE){
				   echo "Directory Error";
				   return;
				}
			 }
			 $files_container = array();
			 
	         foreach($_FILES["program-files"]["name"] as $programFiles){
				$_target_dir = $_target_dir_."/".basename($programFiles);
				$files_container[$index] = basename($programFiles);
				$_fileType = strtolower(pathinfo($_target_dir, PATHINFO_EXTENSION));
				if(file_exists($_target_dir)){
				   unlink($_target_dir);
				}
				if(move_uploaded_file($_FILES["program-files"]["tmp_name"][$index], $_target_dir) != TRUE){
				   echo "File upload error on ".$programFiles.";";
				   break;
				}
				$index++;
			 }
			 
			 $index = 0;
			 foreach($files_container as $files){
				echo $files." was successful.<br>";
			 }
		   }else{
             echo '
			    Please provide target file(s) location.
			 ';
		   }
		
		return;
	}
	echo '
	  <!doctype html>
	  <html>
	  <style>
	   .blck{
		  display: block;
		  margin-top: 1%;
	   }
	   .inl{
		  display: inline;
	   }
	  </style>
	   <body>
	    
		<form action="'.$_SERVER["PHP_SELF"].'?op_id=4&dump_id=0&&dir_name=0" onsubmit="return CheckFields()" method="post" enctype="multipart/form-data">
		 <input type="file" id="program-files" name="program-files[]" multiple>
		 <input class="blck" type="text" id="specific-dir" name="specific-dir" placeholder="Enter your target location">
		 <input class="inl" type="submit" name="submit-files">
		</form>
		
		<script>
		 "use strict";
		 function CheckFields(){
			if(document.getElementById("program-files").files.length <= 0){
			  window.alert("Please select at least a file.");
			  return false;
			}
			if(document.getElementById("specific-dir").value == ""){
		      window.alert("Please provide file(s) target location.");
			  return false;
			}
		 }
		</script>
		
	   </body>
	  </html>
	';
	echo "<br>Default location would be used if no directory path specified.";
	echo "<br>Default location is plugins/dump_id/data";
  }else if($_GET["op_id"] == 5 && $_GET["dump_id"] != "" && $_GET["dir_name"] != "" 
  || $_GET["dir_name"] == ""){
	 $_dir_name = "";
	 if($_GET["dir_name"] != ""){
		$_dir_name = "plugins/".$_GET["dump_id"].'/'.$_GET["dir_name"];
		
		if(is_dir($_dir_name)){
		  $_dirHandle = opendir($_dir_name);
		  $_dirContent = readdir($_dirHandle);
		  $_dirContent = readdir($_dirHandle);
		  
		  $index = 0;
		  
		  $_dirContent = readdir($_dirHandle);
		  
		  while($_dirContent != "" || $_dirContent != false){
			echo $_dirContent."<br>";
			$_dirContent = readdir($_dirHandle);
			$index = 1;
		  }
		  closedir($_dirHandle);
		  
		  if($_dirContent == "" && $index == 0){
			echo "No directory or file entries found";
			return;
		  }
		}
		
	 }
  }
}
CreateDirectories();
?>