<?php

	    /*if(!file_exists("plugins.update")){
		   $file_handle = fopen("plugins.update", "w");
		   fclose($file_handle);
		}*/
	    
		include("functions.php");
		
        $query = "select dirId from didcywork;";
        
		$dirs = fetchAll($query);
		
        if(count(fetchAll($query)) > 0){		
		
		$pldir = "plu";
		
		$innerDirs = $dirs; //["pl1", "pol", "pr", "prt"];
		
		$go = 0;
		
		$plugs = array();
		$plugsDir = array();
		
		
		
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
		   $go++;
		}
		}
		
	   }

		//echo json_encode(array("plugs"=>$plugs, "plugsDir"=>$plugsDir));
		
		$stream_plugs = array();
		
		$get_name = 0;
		$modal_error = 0;
		
		for($plug0 = 0;$plug0 < count($plugs);$plug0++){
		  for($plug1 = 0;$plug1 < 3;$plug1++){
			 $stream_plugs[$plug0][$plug1] = $plugs[$get_name];
			 $plug1 += 1;
			 
			if(file_exists($plugsDir[$get_name]) == TRUE){
				
			 $plugins_update = fopen("plugins.update", "a");
			 fwrite($plugins_update, $plugsDir[$get_name], strlen($plugsDir[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize($plugsDir[$get_name]) > 0){
			   $file_handle = @fopen($plugsDir[$get_name], "r");
			   $stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugsDir[$get_name]));
			   fclose($file_handle);	 
			 }else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is an program execution error.');
				}
				document.getElementById('".$plugs[$get_name]."').addEventListener('click', plugin_error);
				";			 
			 }
			}else{
				$stream_plugs[$plug0][$plug1] = "'use strict'; 
				function plugin_error(){
					alertBox('Please can\'t find any content in ".$plugs[$get_name]." or there is an program execution error.');
				}
				document.getElementById('logis').addEventListener('click', plugin_error);
				";			 
			}
			
			 $plug1 += 1;
			
			if(file_exists($plugsDir[$get_name].".css") == TRUE){
				
			 $plugins_update = fopen("plugins.update.css", "a");
			 fwrite($plugins_update, $plugsDir[$get_name]."css", strlen($plugsDir[$get_name]));
			 fclose($plugins_update);
			 
			 if(filesize($plugsDir[$get_name].".css") > 0){
				$file_handle = @fopen($plugsDir[$get_name].".css", "r");
				$stream_plugs[$plug0][$plug1] = fread($file_handle, filesize($plugsDir[$get_name].".css"));
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
		
	  }
		
		

?>