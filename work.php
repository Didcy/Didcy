<?php

  declare(strict_types=1);
  
  include("functions.php");
  
  function CreateApplicant(){
	
	$query = "use gaga";
	$performQueryerProfile = performQueryer($query);
	if($performQueryerProfile["state"] != true){
	   return array("state"=>102, "error"=>$performQueryerProfile["error"]);
	}
	
	$query = "Create table if not exists DidcyWork(
	          id bigint primary key auto_increment,
			  firstname varchar(255) character set utf8 collate utf8_bin not null,
			  lastname nvarchar(255) not null,
			  country nchar(255) not null,
			  telephoneNo char(255) not null,
			  cardName text not null,
			  cardID bigint not null unique,
			  bankACNo char(255) null default '',
			  mobileMoneyNumber char(255) null default '',
			  primarySkills varchar(255) not null,
			  secondarySkills nvarchar(255) null default '',
			  programRevenue nchar(255) null default '',
			  programTraction char(255) null default '',
			  programValues char(255) null default '',
			  profile text not null,
			  email text not null,
			  githubName varchar(255) not null,
			  password text not null,
			  livePhotoName char(255) not null,
			  livePhotoID varchar(255) not null,
			  utime time default CURRENT_TIME,
			  udate date default CURRENT_DATE,
			  utimestamp timestamp default CURRENT_TIMESTAMP
	)";
	
	// ENGINE=InnoDB DEFAULT CHARSET=latin1;
	
	$performQueryerProfile = performQueryer($query);
	if($performQueryerProfile["state"] != true){
	   return array("state"=>103, "error"=>$performQueryerProfile["error"]);
	}
	
	$partnerSet = json_decode($_POST["partner-set"]);
	

	$pattern = "/'/i";
						 
	$programValues = preg_replace($pattern, "\'", $partnerSet[10]);
	$profile = preg_replace($pattern, "\'", $partnerSet[11]);

	//return array("state"=>106, "error"=>$partnerSet[5]);
	
	$query = "select * from didcyWork where email='".$partnerSet[13]."';";
	
	$performQueryerProfile = fetchAll($query);
	if(count($performQueryerProfile) > 0){
	   return array("state"=>104, "error"=>"");
	}	

	$query = "insert into didcyWork(firstname, lastname, country, telephoneNo,
	cardName, cardID, bankACNo, mobileMoneyNumber, primarySkills, 
	secondarySkills, programRevenue, programTraction, programValues,
	profile, email, githubName, password, livePhotoName, livePhotoID) values('".$partnerSet[0]."', '".$partnerSet[1]."', 
	'".$partnerSet[2]."', '".$partnerSet[3]."', '".$_POST["file-id"]."', '".$_POST["file-id"]."', 
	'".$partnerSet[4]."', '".$partnerSet[5]."', '".$partnerSet[6]."', '".
	 $partnerSet[7]."', '".$partnerSet[8]."', '".$partnerSet[9]."', 
	 '".$programValues."', '".$profile."', '".$partnerSet[12]."', '".$partnerSet[13]."', 
	  '".md5(trim($partnerSet[14]))."', '".$_POST["file-id"]."', '".$_POST["file-id"]."');";
	 
	$performQueryerProfile = performQueryer($query);
	if($performQueryerProfile["state"] != true){
	   return array("state"=>105, "error"=>$performQueryerProfile["error"]);
	}
	
	return array("state"=>106, "error"=>"");
  }
  
  function GetPartnerImage(){
	$dir = "./work-application.live/";
	$dir2 = "./work-application.idc/";
	
	if(!is_dir("./work-application.live")){
	  mkdir("work-application.live");
	}
	if(!is_dir("./work-application.idc")){
	  mkdir("work-application.idc");
	}
	
	$applicant = CreateApplicant();
	
	if($applicant["state"] != 106){
		echo json_encode($applicant);
		return;
	}
	
	$filename = $dir.basename($_FILES["partner"]["name"]);
	$filename2 = $dir2.basename($_FILES["partner-id"]["name"]);
	$imagType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
	$imagType2 = strtolower(pathinfo($filename2, PATHINFO_EXTENSION));
	$imageSize = getimagesize($_FILES["partner"]["tmp_name"]);
	$imageSize2 = getimagesize($_FILES["partner-id"]["tmp_name"]);
	
    move_uploaded_file($_FILES["partner"]["tmp_name"], $filename);
    move_uploaded_file($_FILES["partner-id"]["tmp_name"], $filename2);
	
	rename($filename, $dir.$_POST["file-id"].".png");
	rename($filename2, $dir2.($_POST["file-id"]+1).".png");
	
	echo json_encode(array("name-1"=>$filename,"name-2"=>$filename2, "state"=>200));
  }
  
  GetPartnerImage();

?>