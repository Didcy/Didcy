<?php
 
  declare(strict_types=1);
  
  include_once("connect_server.php");
  
  function Rater() : void{
	  $avg = 3.3/2.0; 
	  switch($_POST["RT"]){
	   case 0:
		  $connect = ConnectServer(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
		
		$incomingRatings = json_decode($_POST["rate"]);
		
		$server_target_db = "create table if not exists rater(
		                      id bigint(50) primary key auto_increment,
							  clickID tinyint not null default 0,
							  previouslyChosenEmojiBeforeCurrent smallint not null default 0,
							  currentlyChosenEmoji int not null default 0,
							  emojiOutCome text not null
		                     );";
		$connect_result = $connect->query($server_target_db);
		if($connect_result === False){
			echo json_encode(array("state"=>2, "error"=>$connect->error, "close"=>$connect->close()));
			return;
		}	  

		$server_target_db = "select * from rater where id='".$incomingRatings->drm."';";
		$connect_result = $connect->query($server_target_db);
		if($connect_result === False){
			echo json_encode(array("state"=>3, "error"=>$connect->error, "close"=>$connect->close()));
			return;
		}	
		
		$ratings = array("ratingsInPercentage" => 0, "ratingsInRealNumber"=>0);
		
	    if($connect_result->num_rows > 0){
            if($connect_result->num_rows < 101){
				$ratings["ratingsInPercentage"]	= number_format($avg)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}else{
				$ratings["ratingsInPercentage"] = number_format(($connect_result->num_rows/30)/2)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}
			$server_target_db = "update rater set id='".$incomingRatings->drm.
			"', clickID='".$incomingRatings->clck."', previouslyChosenEmojiBeforeCurrent='".$incomingRatings->previousEmo."'
			, currentlyChosenEmoji='".$incomingRatings->tmp.
			"', emojiOutCome='".$incomingRatings->emoOutCome."' where id='".$incomingRatings->drm."';";
			
			$connect_result = $connect->query($server_target_db);
			
			if($connect_result === False){
				echo json_encode(array("state"=>4, "error"=>$connect->error, "close"=>$connect->close()));
				return;
			}				
		}
		else{
            if($connect_result->num_rows < 101){
				$ratings["ratingsInPercentage"]	= number_format($avg)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}else{
				$ratings["ratingsInPercentage"] = number_format(($connect_result->num_rows/30)/2)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}
			$server_target_db = "insert into rater values('".
			$incomingRatings->drm."', '".$incomingRatings->clck."', '".$incomingRatings->previousEmo.
			"', '".$incomingRatings->tmp."','".$incomingRatings->emoOutCome."');";
			
			$connect_result = $connect->query($server_target_db);
			
			if($connect_result === False){
				echo json_encode(array("state"=>5, "error"=>$connect->error, "close"=>$connect->close()));
				return;
			}	  

		}
		
        echo json_encode(array("state"=>6,"congrate"=>"Thanks for your ratings.", "ratings"=>$ratings));	
		
	  return;
	 break;
	 case 1: 
		  $connect = ConnectServer(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
		
		//$incomingRatings = json_decode($_POST["rate"]);	  

		$server_target_db = "create table if not exists rater(
		                      id bigint(50) primary key auto_increment,
							  clickID tinyint not null default 0,
							  previouslyChosenEmojiBeforeCurrent smallint not null default 0,
							  currentlyChosenEmoji int not null default 0,
							  emojiOutCome text not null
		                     );";
		$connect_result = $connect->query($server_target_db);
		if($connect_result === False){
			echo json_encode(array("state"=>2, "error"=>$connect->error, "close"=>$connect->close()));
			return;
		}	

		$server_target_db = "select * from rater;";
		$connect_result = $connect->query($server_target_db);
		if($connect_result === False){
			echo json_encode(array("state"=>3, "error"=>$connect->error, "close"=>$connect->close()));
			return;
		}	
		
		$ratings = array("ratingsInPercentage" => 0, "ratingsInRealNumber"=>0, 
		"raters"=>array("bd"=>array("n"=>0, "%"=>0), "vb"=>array("n"=>0, "%"=>0), 
		"gd"=>array("n"=>0, "%"=>0), "vg"=>array("n"=>0, "%"=>0), "et"=>array("n"=>0, "%"=>0)));
		
	    if($connect_result->num_rows > 0){ 
            if($connect_result->num_rows < 101){
				$ratings["ratingsInPercentage"]	= number_format($avg)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}else{
				$ratings["ratingsInPercentage"] = number_format(($connect_result->num_rows/30)/2)."%";
				$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
			}
		   while($row = $connect_result->fetch_assoc()){
			  if($row["currentlyChosenEmoji"] == 0){
				 $ratings["raters"]["bd"]["n"] += 1;
				 $ratings["raters"]["bd"]["%"] += 1;
			  }
			  if($row["currentlyChosenEmoji"] == 1){
				 $ratings["raters"]["vb"]["n"] += 1;
				 $ratings["raters"]["vb"]["%"] += 1;
			  }
			  if($row["currentlyChosenEmoji"] == 2){
				 $ratings["raters"]["gd"]["n"] += 1;
				 $ratings["raters"]["gd"]["%"] += 1;
			  }
			  if($row["currentlyChosenEmoji"] == 3){
				 $ratings["raters"]["vg"]["n"] += 1; 
				 $ratings["raters"]["vg"]["%"] += 1; 
			  }
			  if($row["currentlyChosenEmoji"] == 4){
				 $ratings["raters"]["et"]["n"] += 1;
				 $ratings["raters"]["et"]["%"] += 1;
			  }
		   }			
		}
		else{
			$ratings["ratingsInPercentage"]	= number_format(0)."%";
			$ratings["ratingsInRealNumber"] = $connect_result->num_rows;
		}
		
        echo json_encode(array("state"=>55, "ratings"=>$ratings));	
		
	  return;	 
	 break;
	 default:  
	  return;
  }
}
 
  Rater();

?>