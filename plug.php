<?php

  include("functions.php");

  function CreateUsrDirs($upd){
	$plugDir = "plugins";
	$usr_plugins_dir = $plugDir."/".$upd;
	$usr_plugins_dir_program = $plugDir."/".$upd."/program";
	$usr_plugins_dir_css = $plugDir."/".$upd."/css";
	$usr_plugins_dir_server = $plugDir."/".$upd."/server";
	$usr_plugins_dir_html = $plugDir."/".$upd."/html";
	$usr_plugins_dir_images = $plugDir."/".$upd."/images";
	$usr_plugins_dir_media = $plugDir."/".$upd."/media";
	$usr_plugins_dir_media_mp3 = $plugDir."/".$upd."/media/"."mp3";
	$usr_plugins_dir_media_mp4 = $plugDir."/".$upd."/media/"."mp4";
	
	if(!is_dir($plugDir)){
	   mkdir($plugDir, 0777, true);
	}
	
	if(!is_dir($usr_plugins_dir)){
	   mkdir($usr_plugins_dir, 0777, true);
	}
    
	//-----------------------------
	
	if(!is_dir($usr_plugins_dir_program)){
	   mkdir($usr_plugins_dir_program, 0777, true);
	}
	
	if(!is_dir($usr_plugins_dir_css)){
	   mkdir($usr_plugins_dir_css, 0777, true);
	}
	
	if(!is_dir($usr_plugins_dir_server)){
	   mkdir($usr_plugins_dir_server, 0777, true);
	}

	if(!is_dir($usr_plugins_dir_html)){
	   mkdir($usr_plugins_dir_html, 0777, true);
	}

	if(!is_dir($usr_plugins_dir_images)){
	   mkdir($usr_plugins_dir_images, 0777, true);
	}
	
	if(!is_dir($usr_plugins_dir_media)){
	   mkdir($usr_plugins_dir_media, 0777, true);
	}

	if(!is_dir($usr_plugins_dir_media_mp3)){
	   mkdir($usr_plugins_dir_media_mp3, 0777, true);
	}
	
	if(!is_dir($usr_plugins_dir_media_mp4)){
	   mkdir($usr_plugins_dir_media_mp4, 0777, true);
	}
	
	return array(
		"plugins"=>$plugDir,
		"plugins_dir", $usr_plugins_dir,
		"plugins_dir_program"=>$usr_plugins_dir_program,
		"plugins_dir_css"=>$usr_plugins_dir_css,
		"plugins_dir_server"=>$usr_plugins_dir_server,
		"plugins_dir_html"=>$usr_plugins_dir_html,
		"plugins_dir_images"=>$usr_plugins_dir_images,
		"plugins_dir_media"=>$usr_plugins_dir_media,
		"plugins_dir_media_mp3" => $usr_plugins_dir_media_mp3,
	    "plugins_dir_media_mp4" => $usr_plugins_dir_media_mp4
	);
  }
  
  function IterateHTMLFLDs($pluginsNumbericFLDs = array()){
	  $fileContent = "";
	  foreach($pluginsNumbericFLDs as $pluginsNFLDS){
		if(is_dir("plugins/".$pluginsNFLDS[0])){
			$HTMLFLD = "plugins/".$pluginsNFLDS[0]."/html";
			$file_handle = opendir($HTMLFLD);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			while($file_content != false){
				if($file_content == false){
					break;
				}
				$HTMLCONENT = IterateCSSFiles("plugins/".$pluginsNFLDS[0]."/html/".$file_content);
				$fileContent .= $HTMLCONENT;
				$file_content = readdir($file_handle);
			}
			closedir($file_handle);
		}
	  }
	  return $fileContent;
  }  
  
  function IterateHTMLONLY($pluginsNumbericFLDs = array(), $count = 0, $filename = "", $filename2 = ""){
	  $fileContent = "";
	  $pluginsNFLDS = $pluginsNumbericFLDs;
	  $file_read = 0;
	  if(file_exists($filename2)){
		  $HTMLCONENT = IterateHTMLFiles($filename2);
		  $fileContent .= $HTMLCONENT;
		  //return $HTMLCONENT;
	  }
		if(is_dir($pluginsNFLDS)){
			$HTMLFLD = $pluginsNFLDS."/html";
			$file_handle = opendir($HTMLFLD);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			while($file_content != false){
				if($file_content == false){
					break;
				}
				if($pluginsNFLDS."/html/".$file_content != $filename){ //html
				  if($pluginsNFLDS."/html/".$file_content != $filename2){
					$HTMLCONENT = IterateHTMLFiles($pluginsNFLDS."/html/".$file_content);
					$fileContent .= $HTMLCONENT;
					$file_read = 1;
				  }
				}				
				
				if($pluginsNFLDS."/html/".$file_content != $filename2){ //htm
				  if($pluginsNFLDS."/html/".$file_content != $filename){ 
				   if($file_read == 1){
					$HTMLCONENT = IterateHTMLFiles($pluginsNFLDS."/html/".$file_content);
					$fileContent .= $HTMLCONENT;
					$file_read = 0;
				   }
				  }
				}
				$file_content = readdir($file_handle);
			}
			closedir($file_handle);
		}
	  return $fileContent;
  } 
  
  function IterateHTMLFiles($html_files){
	  if(file_exists($html_files)){
		  if(filesize($html_files) > 0){
			  $file_handle = @fopen($html_files, "r");
			  $file_content = fread($file_handle, filesize($html_files));
			  fclose($file_handle);
			  return $file_content;
	      }
	  }
  }
  
  function IterateCSSFiles($css_files){
	  if(file_exists($css_files)){
		  if(filesize($css_files) > 0){
			  $file_handle = @fopen($css_files, "r");
			  $file_content = fread($file_handle, filesize($css_files));
			  fclose($file_handle);
			  return $file_content;	
          }		  
	  }
  }
  
  function IterateCSSONLY($pluginsNumbericFLDs = array(), $count = 0, $filename){
	  $fileContent = "";
	  $pluginsNFLDS = $pluginsNumbericFLDs;
		if(is_dir($pluginsNFLDS)){
			$CSSFLD = $pluginsNFLDS."/css";
			$file_handle = opendir($CSSFLD);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			while($file_content != false){
				if($file_content == false){
					break;
				}
				if($pluginsNFLDS."/css/".$file_content != $filename){
					$CSSCONENT = IterateCSSFiles($pluginsNFLDS."/css/".$file_content);
					$fileContent .= $CSSCONENT;
				}
				$file_content = readdir($file_handle);
			}
			closedir($file_handle);
		}  
		return $fileContent;
  }
  
  function IterateCSSFLDs($pluginsNumbericFLDs = array()){
	  $fileContent = "";
	  foreach($pluginsNumbericFLDs as $pluginsNFLDS){
		if(is_dir("plugins/".$pluginsNFLDS[0])){
			$CSSFLD = "plugins/".$pluginsNFLDS[0]."/css";
			$file_handle = opendir($CSSFLD);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			$file_content = readdir($file_handle);
			while($file_content != false){
				if($file_content == false){
					break;
				}
				$CSSCONENT = IterateCSSFiles("plugins/".$pluginsNFLDS[0]."/css/".$file_content);
				$fileContent .= $CSSCONENT;
				$file_content = readdir($file_handle);
			}
			closedir($file_handle);
		}
	  }
	  return $fileContent;
  }
 
  function Plug($plugID){
	$upd = "";
	
	if($_POST["upd"] != ""){
	  $upd = CreateUsrDirs($_POST["upd"]);
	}
	
	switch($plugID){
	 case 0:
	    /*if(!file_exists("plugins.update")){
		   $file_handle = fopen("plugins.update", "w");
		   fclose($file_handle);
		}*/
	 
		$dirHandle = opendir($plugDir);   
		
		$dir_index = 0;
		
		$pluginsContainer = array();
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		$dir_index += 1;
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		$dir_index += 1;
		
		$dir_index = 0;
		
		$pluginsContainer = array();
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		while($pluginsContainer[$dir_index] != false){
		   if($pluginsContainer[$dir_index] == false){
			  $pluginsContainer[$dir_index] = "";
			  break;
		   }
		   $dir_index += 1;
		   $pluginsContainer[$dir_index] = readdir($dirHandle);
		   //$dir_index += 1;
		}
		
		closedir($dirHandle);
		
		$plugs = array();
		
		for($plug = 0;$plug < count($pluginsContainer);$plug++){
		   if($pluginsContainer[$plug] == false){
			  break;
		   }
		   $plugs[$plug] = $pluginsContainer[$plug];
		}
		
		$stream_plugs = array();
		
		/*if(count($plugs) <= 0){
		   echo json_encode(array("pluginsContainer"=>$stream_plugs, "state"=>100));
		   return;
		}*/
		
		$get_name = 0;
		$modal_error = 0;
		
		for($plug0 = 0;$plug0 < count($plugs);$plug0++){
		  for($plug1 = 0;$plug1 < 3;$plug1++){
			 $stream_plugs[$plug0][$plug1] = $plugs[$get_name];
			 $plug1 += 1;
			 
			if(file_exists("plugins/".$plugs[$get_name]) == TRUE){
				
			 $plugins_update = fopen("plugins.update", "a");
			 fwrite($plugins_update, $plugs[$get_name]."\n\r", strlen($plugs[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize("plugins/".$plugs[$get_name]) > 0){
			   $file_handle = @fopen("plugins/".$plugs[$get_name], "r");
			   $stream_plugs[$plug0][$plug1] = fread($file_handle, filesize("plugins/".$plugs[$get_name]));
			   fclose($file_handle);	 
			 }else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is a program execution error.');
				}
				document.getElementById('".$plugs[$get_name]."').addEventListener('click', plugin_error);
				";			 
			 }
			}else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is a program execution error.');
				}
				document.getElementById('logis').addEventListener('click', plugin_error);
				";			 
			}
			
			 $plug1 += 1;
			
			if(file_exists($plugs[$get_name].".css") == TRUE){
				
			 $plugins_update = fopen("plugins.update.css", "a");
			 fwrite($plugins_update, $plugs[$get_name].".css\n\r", strlen($plugs[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize($plugs[$get_name].".css") > 0){
				$file_handle = @fopen($plugs[$get_name].".css", "r");
				$stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugs[$get_name].".css"));
				fclose($file_handle);
			 }else{
				$stream_plugs[$plug0][$plug1] = ".modal-".$plugs[$get_name]."-error-".$modal_error."{}";
				$modal_error += 1;
			 }
			}else{
				$stream_plugs[$plug0][$plug1] = ".modal-".$plugs[$get_name]."-error-".$modal_error."{}";
				$modal_error += 1;
			}
		  }	
		  $get_name += 1; 
		}	
		
		echo json_encode(array("pluginsContainer"=>$stream_plugs, "state"=>200));
		return;
   break;
   case 1:
   {
	  $pluginsOnFileTypes = array();
	  $fileErrors = array();
	  $file_count = 0;
	  $classLop = 0;
	  $_files_uploaded_if_type = 0;
	  $_files_uploaded_if_no_type = 0;
	  $_files_uploaded_if_not_css_type = 0;	
	  
	  if($_POST["class-id"] == 0){
		foreach($_FILES["program-files"]["name"] as $devProgramFiles){
		  $pluginTarget = $upd["plugins_dir_program"]."/".basename($devProgramFiles);
		  $imgType = strtolower(pathinfo($pluginTarget, PATHINFO_EXTENSION));
		  if($imgType != ""){
			$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
			$_files_uploaded_if_type++;
		  }else{
			if(file_exists($pluginTarget) == TRUE){
			   unlink($pluginTarget);
			}
			if(move_uploaded_file($_FILES["program-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
			  $file_count++;
			}else{
			  $fileErrors[$classLop] = $devProgramFiles;
			  $file_count++;
			}
		  }
		  $classLop++;
		}
	  }
	  else if($_POST["class-id"] == 1){
		foreach($_FILES["css-files"]["name"] as $devProgramFiles){
		  $pluginTarget = $upd["plugins_dir_css"]."/".basename($devProgramFiles);
		  $imgType = strtolower(pathinfo($pluginTarget, PATHINFO_EXTENSION));
		  if($imgType == ""){
			$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
			$_files_uploaded_if_no_type++;
		  }else{
			if($imgType == "css"){
				if(file_exists($pluginTarget) == TRUE){
				   unlink($pluginTarget);
				}
				if(move_uploaded_file($_FILES["css-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
				  $file_count++;
				}else{
				  $fileErrors[$classLop] = $devProgramFiles;
				  $file_count++;
				}
			}else{
				$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
				$_files_uploaded_if_no_type++;
				$_files_uploaded_if_not_css_type++;				
			}
		  }
		  $classLop++;
		}		  
	  }
	  else if($_POST["class-id"] == 2){
		foreach($_FILES["program-files"]["name"] as $devProgramFiles){
		  $pluginTarget = $upd["plugins_dir_program"]."/".basename($devProgramFiles);
		  $imgType = strtolower(pathinfo($pluginTarget, PATHINFO_EXTENSION));
		  if($imgType != ""){
			$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
			$_files_uploaded_if_type++;
		  }else{
			if(file_exists($pluginTarget) == TRUE){
			   unlink($pluginTarget);
			}
			if(move_uploaded_file($_FILES["program-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
			  $file_count++;
			}else{
			  $fileErrors[$classLop] = $devProgramFiles;
			  $file_count++;
			}
		  }
		  $classLop++;
		}
		$classLop = 0;
		foreach($_FILES["css-files"]["name"] as $devProgramFiles){
		  $pluginTarget = $upd["plugins_dir_css"]."/".basename($devProgramFiles);
		  $imgType = strtolower(pathinfo($pluginTarget, PATHINFO_EXTENSION));
		  if($imgType == ""){
			$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
			$_files_uploaded_if_no_type++;
		  }else{
			if($imgType == "css"){
				if(file_exists($pluginTarget) == TRUE){
				   unlink($pluginTarget);
				}
				if(move_uploaded_file($_FILES["css-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
				  $file_count++;
				}else{
				  $fileErrors[$classLop] = $devProgramFiles;
				  $file_count++;
				}
			}else{
				$pluginsOnFileTypes[$classLop] = basename($devProgramFiles);
				$_files_uploaded_if_not_css_type++;	
				$_files_uploaded_if_no_type++;
			}
		  }
		  $classLop++;
		}			
	  }
	  echo json_encode(array("pluginsOnFileTypes"=>$pluginsOnFileTypes, 
	  "fileErrors"=>$fileErrors, "class-id"=>$_POST["class-id"], 
	  "files_uploaded_if_type"=>$_files_uploaded_if_type, 
	  "files_uploaded_if_no_type"=>$_files_uploaded_if_no_type, 
	  "files_uploaded_if_not_css_type"=>$_files_uploaded_if_not_css_type, "state"=>200));
	  return;
   }
   break;
   case 2:
   {
	  $pluginsOnFileTypes = array();
	  $pluginsOnFiles = array();
	  $fileErrors = array();
	  $file_count = 0;
	  $classLop = 0;
	  $fileOnFiles = 0;
	  $_files_uploaded_if_type = 0;
	  $_files_uploaded_if_no_type = 0;
	  $_files_uploaded_if_not_css_type = 0;	
	  $_files_uploaded_if_type_not_php = 0;	
	  
	  $plugDir = "plugins.srv";
	  
	  if(!is_dir($plugDir)){
		 mkdir($plugDir, 0777, true); 
	  }
	  
	  if($_POST["class-id"] == 3){
		foreach($_FILES["server-files"]["name"] as $devProgramServerFiles){
		  $pluginTarget = $upd["plugins_dir_server"]."/".basename($devProgramServerFiles);
		  $imgType = strtolower(pathinfo($pluginTarget, PATHINFO_EXTENSION));
		  if($imgType == ""){
			$pluginsOnFileTypes[$classLop] = basename($devProgramServerFiles);
			$_files_uploaded_if_no_type++;
		  }else{
			if($imgType != "php"){
			  $pluginsOnFileTypes[$classLop] = basename($devProgramServerFiles);
			  $_files_uploaded_if_type_not_php++;
			  $_files_uploaded_if_no_type++;
			}else{
				if(file_exists($pluginTarget) == TRUE){
				   unlink($pluginTarget);
				}
				if(move_uploaded_file($_FILES["server-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
				  $file_count++;
				  $pluginsOnFiles[$fileOnFiles] = basename($devProgramServerFiles);
				  $fileOnFiles++;
				}else{
				  $fileErrors[$classLop] = $devProgramServerFiles;
				  $file_count++;
				}
			}
		  }
		  $classLop++;
		}
	  }	 
	  echo json_encode(array("pluginsOnFileTypes"=>$pluginsOnFileTypes, 
	  "fileErrors"=>$fileErrors, "class-id"=>$_POST["class-id"], 
	  "files_uploaded_if_type"=>$_files_uploaded_if_type, 
	  "files_uploaded_if_no_type"=>$_files_uploaded_if_no_type, 
	  "files_uploaded_if_not_css_type"=>$_files_uploaded_if_not_css_type, 
	  "files_uploaded_if_type_not_php"=>$_files_uploaded_if_type_not_php,
	  "file_count"=>$file_count, "pluginsOnFiles"=>$pluginsOnFiles,
	  "state"=>200));
	  return;	  
   }
   break;
   case 3:
		 $table = "didcywork";
		 $query = "SHOW TABLES LIKE '".$table."'";
		 $stream_plugs = array();
		 $plugContent = [];
		 if(count(fetchAll($query)) == 0){
			echo json_encode(array("pluginsContainer"=>$stream_plugs, "state"=>200));	
			return;
		 }          
        $query = "select dirId from didcywork;";
        
		$dirs = fetchAll($query);
		
        if(count(fetchAll($query)) > 0){		
		
		$pldir = "plugins";
		
		$innerDirs = $dirs; //["pl1", "pol", "pr", "prt"];
		
		$go = 0;
		
		$plugs = array();
		$plugsDir = array();
		$plugsCSSDir = array();
		$plugsServerDir = array();
		$plugsHtmlDir = array();
		$plugsImagesDir = array();
		$plugsMediaDir = array();
		
		if(!is_dir($pldir)){
		  echo json_encode(array("pluginsContainer"=>$stream_plugs, "state"=>200));	
		  return;
		}
		
	   foreach($innerDirs as $dir){
		$plugDir = $pldir."/".$dir[0];
		if(is_dir($plugDir)){
		$dirHandle = opendir($plugDir."/program");   
		
		$dir_index = 0;
		
		$pluginsContainer = array();
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		$dir_index += 1;
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		$dir_index += 1;
		
		$dir_index = 0;
		
		$pluginsContainer = array();
		
		$pluginsContainer[$dir_index] = readdir($dirHandle);
		
		while($pluginsContainer[$dir_index] != false){
		   if($pluginsContainer[$dir_index] == false){
			  $pluginsContainer[$dir_index] = "";
			  break;
		   }
		   $dir_index += 1;
		   $pluginsContainer[$dir_index] = readdir($dirHandle);
		   //$dir_index += 1;
		}
		
		closedir($dirHandle);
		
	
		//$plugs = array();
		
		for($plug = 0;$plug < count($pluginsContainer);$plug++){
		   if($pluginsContainer[$plug] == false){
			  break;
		   }
		   $plugs[$go] = $pluginsContainer[$plug];
		   $plugsDir[$go] = $plugDir."/program/".$pluginsContainer[$plug];
		   $plugsCSSDir[$go] = $plugDir."/css/".$pluginsContainer[$plug];
		   $plugsHtmlDir[$go] = $plugDir."/html/".$pluginsContainer[$plug];
		   $plugsImagesDir[$go] = $plugDir."/images/".$pluginsContainer[$plug];
		   $plugContent[$go] = $plugDir;
		   $go++;
		}
		}
		
	   }

		//echo json_encode(array("plugs"=>$plugs, "plugsDir"=>$plugsDir));
		
		$stream_plugs = array();
		
		$get_name = 0;
		$modal_error = 0;
		$html_error = 0;
		$htmlCat = "";
		$HTML_IR = "";
		$CSS_IR = "";
		$ICONIC = 0;
		
		for($plug0 = 0;$plug0 < count($plugs);$plug0++){
		  for($plug1 = 0;$plug1 < 4;$plug1++){
			 $stream_plugs[$plug0][$plug1] = $plugs[$get_name];
			 $plug1 += 1;
			 
			if(file_exists($plugsDir[$get_name]) == TRUE){
				
			 $plugins_update = fopen("plugins.update", "a");
			 fwrite($plugins_update, $plugs[$get_name]."\n\r", strlen($plugsDir[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize($plugsDir[$get_name]) > 0){
			   $file_handle = @fopen($plugsDir[$get_name], "r");
			   $stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugsDir[$get_name]));
			   fclose($file_handle);	 
			 }else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is a program execution error.');
				}
				document.getElementById('".$plugs[$get_name]."').addEventListener('click', plugin_error);
				";			 
			 }
			}else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is a program execution error.');
				}
				document.getElementById('logis').addEventListener('click', plugin_error);
				";			 
			}
			
			 $plug1 += 1;
			
			if(file_exists($plugsCSSDir[$get_name].".css") == TRUE){
		
			 $plugins_update = @fopen("plugins.update.css", "a");
			 fwrite($plugins_update, $plugs[$get_name].".css\n\r", strlen($plugsCSSDir[$get_name].".css"));
			 fclose($plugins_update);
			 
			 if(filesize($plugsCSSDir[$get_name].".css") > 0){
				$file_handle = @fopen($plugsCSSDir[$get_name].".css", "r");
				$stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugsCSSDir[$get_name].".css"));
				fclose($file_handle);
				$CSS_IR = IterateCSSONLY($plugContent[$get_name], $get_name, $plugsCSSDir[$get_name].".css");
				
				if($CSS_IR != ""){
					$stream_plugs[$plug0][$plug1] .= $CSS_IR;
				}
			 }else{
				$stream_plugs[$plug0][$plug1] = ".modal-".$plugs[$get_name]."-error-".$modal_error."{}";
				$modal_error += 1;
			 }
			}else{
				$CSS_IR = IterateCSSONLY($plugContent[$get_name], $get_name, $plugsCSSDir[$get_name].".css");
				
				if($CSS_IR != ""){
					$stream_plugs[$plug0][$plug1] = $CSS_IR;
				}else{
				    $stream_plugs[$plug0][$plug1] = ".modal-".$plugs[$get_name]."-error-".$modal_error."{}";
				}
				$modal_error += 1;
			}

		$plug1 += 1;
		
		if(file_exists($plugsImagesDir[$get_name].".png") == TRUE){
			 if($ICONIC != 1){
				 if(filesize($plugsImagesDir[$get_name].".png") > 0){
					 $plugins_update = @fopen("plugins.update.images", "a");
					 fwrite($plugins_update, $plugs[$get_name].".png\n\r", strlen($plugsCSSDir[$get_name].".png"));
					 fclose($plugins_update);
					$stream_plugs[$plug0][$plug1] = $plugsImagesDir[$get_name].".png";
					$ICONIC++;
				 }else{
					    $ICONIC++;
						$stream_plugs[$plug0][$plug1] = "NO_ICON_SIZE";	
				 }
			 }			
		}
		else if(file_exists($plugsImagesDir[$get_name].".jpg") == TRUE){
			 if($ICONIC != 1){
				 if(filesize($plugsImagesDir[$get_name].".jpg") > 0){
					 $plugins_update = @fopen("plugins.update.images", "a");
					 fwrite($plugins_update, $plugs[$get_name].".jpg\n\r", strlen($plugsCSSDir[$get_name].".jpg"));
					 fclose($plugins_update);
					$stream_plugs[$plug0][$plug1] = $plugsImagesDir[$get_name].".jpg";
					$ICONIC++;
				 }else{
					    $ICONIC++;
						$stream_plugs[$plug0][$plug1] = "NO_ICON_SIZE";	
				 }
			 }			
		}		
		else if(file_exists($plugsImagesDir[$get_name].".ico") == TRUE){
			 if($ICONIC != 1){
				 if(filesize($plugsImagesDir[$get_name].".ico") > 0){
					 $plugins_update = @fopen("plugins.update.images", "a");
					 fwrite($plugins_update, $plugs[$get_name].".ico\n\r", strlen($plugsCSSDir[$get_name].".ico"));
					 fclose($plugins_update);
					$stream_plugs[$plug0][$plug1] = $plugsImagesDir[$get_name].".ico";
					$ICONIC++;
				 }else{
					    $ICONIC++;
						$stream_plugs[$plug0][$plug1] = "NO_ICON_SIZE";	
				 }
			 }			
		}else{
			    $ICONIC++;
			    $stream_plugs[$plug0][$plug1] = "NO_ICON";	
		}
		
						
			 $plug1 += 1;
			
			if(file_exists($plugsHtmlDir[$get_name].".html") == TRUE){
				
			 $plugins_update = fopen("plugins.update.htmlx", "a");
			 fwrite($plugins_update, $plugs[$get_name].".html\n\r", strlen($plugsHtmlDir[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize($plugsHtmlDir[$get_name].".html") > 0){
				$file_handle = @fopen($plugsHtmlDir[$get_name].".html", "r");
				$stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugsHtmlDir[$get_name].".html"));
				fclose($file_handle);
				
				//IterateHTMLFLDs($dirs);
				$HTML_IR = IterateHTMLONLY($plugContent[$get_name], $get_name, $plugsHtmlDir[$get_name].".html", 
				$plugsHtmlDir[$get_name].".htm");
				
				if($HTML_IR != ""){
					$stream_plugs[$plug0][$plug1] .= $HTML_IR;
				}
			 }else{
				$stream_plugs[$plug0][$plug1] = '<div class="no-html-content-found '.$plugs[$get_name].'" id="'.$plugs[$get_name].'">NO_HTML_FILE_FOUND</div>';
				$HTML_IR = IterateHTMLONLY($plugContent[$get_name], $get_name, $plugsHtmlDir[$get_name].".html", 
				$plugsHtmlDir[$get_name].".htm");
				
				if($HTML_IR != ""){
					$stream_plugs[$plug0][$plug1] .= $HTML_IR;
				}
				//$stream_plugs[$plug0][$plug1] = "NO_HTML_FILE_FOUND";
				$html_error += 1;
			 }
			}else{
			
			
			$HTML_IR = "";//IterateHTMLFLDs($dirs);
			$HTML_IR = IterateHTMLONLY($plugContent[$get_name], $get_name, $plugsHtmlDir[$get_name].".html", 
			$plugsHtmlDir[$get_name].".htm");
			
			if($HTML_IR != ""){
				$stream_plugs[$plug0][$plug1] = $HTML_IR;
			}else{	
				$stream_plugs[$plug0][$plug1] = '<div class="no-html-found '.$plugs[$get_name].'" id="'.$plugs[$get_name].'">NO_HTML_FILE_FOUND</div>';
			}
 			//$stream_plugs[$plug0][$plug1] = "_NO_HTML_FILE_FOUND_";
				$html_error += 1;
			}				
			
            $htmlCat .= $stream_plugs[$plug0][$plug1];	
		  }	
		  $get_name += 1; 
		}	
	
		echo json_encode(array("pluginsContainer"=>$stream_plugs, "htmlCat"=>$htmlCat, "state"=>200));		
		
	  }
		
   break;
   case 4:
   {
	  $pluginsOnFileTypes = array();
	  $pluginsOnFiles = array();
	  $fileErrors = array();
	  $file_count = 0;
	  $file_count_success = 0;
	  $file_count_error = 0;
	  $classLop = 0;
	  $_files_uploaded_if_type = 0;
	  $_files_uploaded_if_no_type = 0;
	  $_files_uploaded_if_not_css_type = 0;
	  $_files_uploaded_if_type_not_php = 0;
	  $_files_uploaded_if_type_not_html = 0;
	  $_files_uploaded_if_type_not_images = 0;
	  $_files_uploaded_if_not_required_type = 0;	
	  
	  $fileTypes = array("css"=>0, "php"=>0, "program"=>0, "mp3"=>0, "mp4"=>0, "html"=>0, "images"=>0,
	  "no_req"=>0, "data"=>0);
	 
		foreach($_FILES["program-files"]["name"] as $devFiles){
			
		  $file_extension = basename($devFiles);
		  $imgType = strtolower(pathinfo($file_extension, PATHINFO_EXTENSION));
		  
		  $required_type = 0;
		  
		  if($imgType == "css"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["css"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_css"]."/".basename($devFiles);
		  }
		  else if($imgType == "php"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["php"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_server"]."/".basename($devFiles);
		  }	
		  else if($imgType == ""){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["program"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_program"]."/".basename($devFiles);
		  }	
		  else if($imgType == "mp3"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["mp3"]++;
			$required_type = 1;
		    $pluginTarget = $upd["plugins_dir_media_mp3"]."/".basename($devFiles);
		  }
		  else if($imgType == "mp4"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["mp4"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_media_mp4"]."/".basename($devFiles);
		  }		  
		  else if($imgType == "htm" || $imgType == "html" || $imgType == "xhtml"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["html"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_html"]."/".basename($devFiles);
		  }
		  else if($imgType == "png" || $imgType == "jpg" || $imgType == "ico"){
			$pluginsOnFileTypes[$classLop] = basename($devFiles);
			$_files_uploaded_if_type++;
			$fileTypes["images"]++;
			$required_type = 1;
			$pluginTarget = $upd["plugins_dir_images"]."/".basename($devFiles);
		  }	
		  else{
            $fileTypes["no_req"]++;
			$required_type = 0;
		  }
		  if($required_type == 1){
			if(file_exists($pluginTarget) == TRUE){
			   unlink($pluginTarget);
			}
			if(move_uploaded_file($_FILES["program-files"]["tmp_name"][$classLop], $pluginTarget) == TRUE){
			  $file_count_success++;
			}else{
			  $fileErrors[$classLop] = $devFiles;
			  $file_count_error++;
			}			  
			$required_type = 0;
		  }
		  $classLop++;
		}
		
		 $index = 0;
		 $pluginsOnFileTypes2 = array();
		
		 if(count($pluginsOnFileTypes) > 0){
		    foreach($pluginsOnFileTypes as $loopPlugins){
			  $pluginsOnFileTypes2[$index] = $loopPlugins;
			  $index++;
		    }
		 }
		 
		 $pluginsOnFileTypes = $pluginsOnFileTypes2;
		 $index = 0;
		
		  echo json_encode(array(
		  "file_types"=>$fileTypes, "pluginsOnFileTypes"=>$pluginsOnFileTypes, 
		  "fileErrors"=>$fileErrors, "class-id"=>$_POST["class-id"], 
		  "files_uploaded_if_type"=>$_files_uploaded_if_type, 
		  "files_uploaded_if_no_type"=>$_files_uploaded_if_no_type, 
		  "files_uploaded_if_not_css_type"=>$_files_uploaded_if_not_css_type, 
		  "files_uploaded_if_type_not_php"=>$_files_uploaded_if_type_not_php,
		  "files_uploaded_if_type_not_html"=>$_files_uploaded_if_type_not_html,
		  "files_uploaded_if_type_not_html"=>$_files_uploaded_if_type_not_images,
		  "file_count_success"=>$file_count_success, 
		  "file_count_error"=>$file_count_error, "pluginsOnFiles"=>$pluginsOnFiles,
		  "state"=>200));
   }
   break;
   case 5:
   {
	   $linkMainDir = "plugins/".$_POST["upd"]."/__didcer_link";
	   if(!is_dir($linkMainDir)){
		   mkdir($linkMainDir);
	   }
	   $_link_count = 0;
	   $_link_error = 0;
	   $linkLoop = 0;
	   foreach($_FILES["linking-files"]["name"] as $devLinkFiles){
		   $linkFile = $linkMainDir."/".basename($devLinkFiles);
		   if(move_uploaded_file($_FILES["linking-files"]["tmp_name"][$linkLoop], $linkFile)){
			   $_link_count++;
		   }else{
			   $_link_error++;
		   }
		   $linkLoop++;
	   }
	   if($_POST["devLinkFilesLength"] == $_link_count){
		   echo json_encode(array("state"=>1, "link_count"=>$_link_count, "link_error"=>$_link_error));
		   return;		   
	   }else{
		   print(json_encode(array("state"=>0, "link_count"=>$_link_count, "link_error"=>$_link_error)));
		   return;
	   }
   }
   break;
   default: 
     return;
  }
}

 Plug($_POST["plug-id"]);
?>