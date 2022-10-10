<?php
  function FetchDidcyDevDirs(){
	  $dumpId = "";
	  
	  if($_POST["read_id"] == 0){
	     $dumpId = $_POST["dump_id"];
	  }else{
		 $dumpId = $_POST["dump_id"].$_POST["dir-select"];
	  }
	  
	  if(!is_dir($dumpId)){
		  echo json_encode(array("state"=>0, "dirs"=>0, "dir"=>$dumpId));
		  return;
	  }
	  //Open_dir
	  $dir = array("filenames"=>array(), "filesize"=>array(), "ds"=>array(), 
	  "filelocation"=>array());
	  
	  $dirhandle = opendir($dumpId);
	  $dir["filenames"][0] = readdir($dirhandle);
	  $dir["filesize"][0] = "0KB";
	  $dir["ds"][0] = "D";
	  $dir["filelocation"][0] = ".";
	  
	  $dir["filenames"][1] = readdir($dirhandle);
	  $dir["filesize"][1] = "0KB";
	  $dir["ds"][1] = "D";
	  $dir["filelocation"][1] = "..";
	  
	  $dir["filenames"][2] = readdir($dirhandle);
	  
	  $dirIndex = 2;
	  
	  while($dir["filenames"][$dirIndex] != false){ 
	      if(is_dir($dumpId."/".$dir["filenames"][$dirIndex])){
			  $dir["filesize"][$dirIndex] = number_format(filesize($dumpId."/".$dir["filenames"][$dirIndex]))."KB";
			  $dir["ds"][$dirIndex] = "D";
			  $dir["filelocation"][$dirIndex] = $dumpId."/".$dir["filenames"][$dirIndex];
			  if($dir["filenames"][$dirIndex] == false){
				  break;
			  }
		  }	     
		  if(!is_dir($dumpId."/".$dir["filenames"][$dirIndex])){
			  $dir["filesize"][$dirIndex] = number_format(filesize($dumpId."/".$dir["filenames"][$dirIndex]))."KB";
			  $dir["ds"][$dirIndex] = "F";
			  $dir["filelocation"][$dirIndex] = $dumpId."/".$dir["filenames"][$dirIndex];
			  if($dir["filenames"][$dirIndex] == false){
				  break;
			  }
		  }
			  $dirIndex++;
			  $dir["filenames"][$dirIndex] = readdir($dirhandle);
	  }
	  closedir($dirhandle);
	  
	  echo json_encode(array("state"=>1, "dirs"=>$dir));
	  return;
	  
  }
  FetchDidcyDevDirs();
?>