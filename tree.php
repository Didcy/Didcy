<?php
  
 function GetImage(){ 
	  switch($_POST["image-sid"]){
	   case 0:
		  echo json_encode(array("src"=>array(
		  "http://www.localhost/adv.videos/qwe.mp4", 
		  "http://www.localhost/adv.videos/bla.mp4", 
		  "http://www.localhost/adv.videos/df.mp4"), 
		  "length"=>3));
	  break;
	  case 1: 
	  {
		 if(!is_dir("imager")){
			mkdir("imager");
		 }
		 
		 //$dir = "imager/".basename($_FILES["image"]["name"]).".png";
		 
		 $genContainer = json_decode($_POST["gen-container"]);
		 
		 foreach($genContainer as $i){
			  $dir = "imager/".basename($_FILES[$i]["name"]).".png";
			 if(move_uploaded_file($_FILES[$i]["tmp_name"], $dir)){
				 
			 }
		 }
		 echo json_encode(array("gen-container"=>$genContainer));
	  }
	  break;
	  default: 
	   return;
	 }
 }
 
 GetImage();
?>