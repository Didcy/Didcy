<?php
  include("functions.php");
  
  
  function FetchNotifications(){
	   switch($_POST["notification"]){
	    case 0:
			$query = "SELECT * from `notifications_".$_POST["drim"]."` where `status` = 'unread' order by `date` DESC";
			
			$notificationBell = array("notice"=>0, "state"=>0, "click"=>0, "sender"=>array(), "filename"=>array(), 
			"fileId"=>array(), "readfilename"=>array(), "readfileId"=>array(),
			"file_type_1"=>array(), "file_type_2"=>array(), "senderId"=>array(), 
			"number_of_files"=>array(), "numberOfUnReadFiles"=>0,  "numberOfReadFiles"=>0);
			
			$senderIndex = 0;
			$index = 0;
			
			if(count(fetchAll($query))>0){
				$notificationBell["notice"] = count(fetchAll($query));
				$notificationBell["state"] = 2;
				
				$fetchCount = count(fetchAll($query));
				$index = 0;
				
				$notificationBell["numberOfUnReadFiles"] = $fetchCount;
				
				while($fetchCount > 0){
					//$senderIndex = $index;
					$notificationBell["filename"][$index] = fetchAll($query)[$index]["filename"];
					$notificationBell["fileId"][$index] = fetchAll($query)[$index]["fileId"];
                    $notificationBell["sender"][$index] = fetchAll($query)[$index]["sendername"];
					$file_type = 
					strtolower(pathinfo(fetchAll($query)[$index]["filename"], PATHINFO_EXTENSION));
					if($file_type == "mp4"){
					   $notificationBell["file_type_1"][$index] = 1;
					}else if($file_type == "jpg" || $file_type == "png"){
					   $notificationBell["file_type_1"][$index] = 0;
					}else{
					   $notificationBell["file_type_1"][$index] = 2;
					}
					$index++;
					$fetchCount--;
				}
			}else{
				$notificationBell["notice"] = 0;
				$notificationBell["state"] = 1;
				$notificationBell["numberOfUnReadFiles"] = 0;
			}  
			
			$senderIndex = $index;
			
			$query = "SELECT * from badgeClick where id='".$_POST["drim"]."';";
			
			if(count(fetchAll($query)) > 0){
			   $fetch = fetchAll($query);
			   $notificationBell["click"] = $fetch[0]["click"];
			}

/* 			$query = "SELECT * from `notifications_".$_POST["drim"]."` where `status` = 'read' order by `date` DESC";
			
			if(count(fetchAll($query)) > 0){
			   $fetchCount = count(fetchAll($query));
			   $fetch = fetchAll($query);
			   while($fetchCount > 0){
				   $notificationBell["sender"] = $fetch[$index_f]["sendername"];
				   $index_f++;
				   $fetchCount--;
			   }
			} */

			$query = "SELECT * from `notifications_".$_POST["drim"]."` where `status` = 'read' order by `date` DESC";
			
			if(count(fetchAll($query))>0){
				$fetchCount = count(fetchAll($query));
				$index = 0;
				//--$senderIndex;
				
				$notificationBell["numberOfReadFiles"] = $fetchCount;
				
				while($fetchCount > 0){
					$notificationBell["readfilename"][$index] = fetchAll($query)[$index]["filename"];
					$notificationBell["readfileId"][$index] = fetchAll($query)[$index]["fileId"];
					$notificationBell["sender"][$senderIndex] = fetchAll($query)[$index]["sendername"];
					$file_type = 
					strtolower(pathinfo(fetchAll($query)[$index]["filename"], PATHINFO_EXTENSION));
					if($file_type == "mp4"){
					   $notificationBell["file_type_2"][$index] = 1;
					}else if($file_type == "jpg" || $file_type == "png"){
					   $notificationBell["file_type_2"][$index] = 0;
					}else{
					   $notificationBell["file_type_2"][$index] = 2;
					}
					$index++;
					$senderIndex++;
					$fetchCount--;
				}			  
			}else{
				$notificationBell["numberOfReadFiles"] = 0;
			}
			
			echo json_encode($notificationBell);
			
			return;
	    break;
	    case 1:
			$query ="UPDATE notifications_".$_POST["drim"]." SET status = 'read' WHERE fileId = '".
			$_POST["fileId"]."';";
			if(performQuery($query)){
				echo json_encode(array("state"=>2));
				return;
			}else{
				echo json_encode(array("state"=>1));
				return;				
			}
	    break;
	    case 2:
			
			$query = "SELECT * from `notifications` where `status` = 'unread' order by `date` DESC";
			
			$notificationBell = array("notice"=>0, "state"=>0, "click"=>0, "sender"=>array(), "filename"=>array(), 
			"fileId"=>array(), "readfilename"=>array(), "readfileId"=>array(),
			"file_type_1"=>array(), "file_type_2"=>array(), "senderId"=>array());
			
			$senderIndex = 0;
			
			$fetch = fetchAll($query);
			
			if(count(fetchAll($query))>0){
				$notificationBell["notice"] = count(fetchAll($query));
				$notificationBell["state"] = 2;
				
				$fetchCount = count(fetchAll($query));
				$index = 0;
				
				$notificationBell["numberOfUnReadFiles"] = $fetchCount;
				
				while($fetchCount > 0){
					$senderIndex = $index;
					$notificationBell["filename"][$index] = $fetch[$index]["filename"];
					$notificationBell["fileId"][$index] = $fetch[$index]["fileId"];
					$notificationBell["senderId"][$index] = $fetch[$index]["senderId"];
					$notificationBell["sender"][$index] = $fetch[$index]["sendername"];
					$file_type = 
					strtolower(pathinfo(fetchAll($query)[$index]["filename"], PATHINFO_EXTENSION));
					if($file_type == "mp4"){
					   $notificationBell["file_type_1"][$index] = 1;
					}else if($file_type == "jpg" || $file_type == "png"){
					   $notificationBell["file_type_1"][$index] = 0;
					}else{
					   $notificationBell["file_type_1"][$index] = 2;
					}
					$index++;
					$fetchCount--;
				}
			}else{
				$notificationBell["notice"] = 0;
				$notificationBell["state"] = 1;
				$notificationBell["numberOfUnReadFiles"] = 0;
			}  
			
			$senderIndex = $index;
			
			
			$query = "SELECT * from badgeClickHome;";
			
			if(count(fetchAll($query)) > 0){
			   $fetch = fetchAll($query);
			   $notificationBell["click"] = $fetch[0]["click"];
			}

/* 			   for(var $senderCount = 0;$senderCount < count($notificationBell["senderId"]);$senderCount++){
					$query = "SELECT * from gaga where id='".$notificationBell["senderId"][
					$senderCount]."';";				
					if(count(fetchAll($query)) > 0){
					   $fetch = fetchAll($query);
			           $notificationBell["sender"] = $fetch[$senderCount]["username"];
					}
			   } */
			   
/* 			$query = "SELECT * from notifications;";
			
			if(count(fetchAll($query)) > 0){
			   $fetch = fetchAll($query);

				$fetchCount = count(fetchAll($query));
				$index = 0;
				
				while($fetchCount > 0){
					$notificationBell["sender"][$index] = $fetch[$index]["sendername"];
					$index++;
					$fetchCount--;
				}			   
			   
			   //$notificationBell["sender"] = $fetch[0]["username"];
			} */



			$query = "SELECT * from `notifications` where `status` = 'read' order by `date` DESC";
			
			$fetch = fetchAll($query);
			
			if(count(fetchAll($query))>0){
				$fetchCount = count(fetchAll($query));
				$index = 0;
				//$senderIndex += 1;
				$notificationBell["numberOfReadFiles"] = $fetchCount;
				while($fetchCount > 0){
					$notificationBell["readfilename"][$index] = $fetch[$index]["filename"];
					$notificationBell["readfileId"][$index] = $fetch[$index]["fileId"];
					$notificationBell["sender"][$senderIndex] = $fetch[$index]["sendername"];
					$file_type = 
					strtolower(pathinfo(fetchAll($query)[$index]["filename"], PATHINFO_EXTENSION));
					if($file_type == "mp4"){
					   $notificationBell["file_type_2"][$index] = 1;
					}else if($file_type == "jpg" || $file_type == "png"){
					   $notificationBell["file_type_2"][$index] = 0;
					}else{
					   $notificationBell["file_type_2"][$index] = 2;
					}
					$index++;
					$senderIndex++;
					$fetchCount--;
				}			  
			}else{
				$notificationBell["numberOfReadFiles"] = 0;
			}
			
			echo json_encode($notificationBell);
			
			return;
	    break;
	    case 3:
			$query ="UPDATE notifications SET status = 'read' WHERE fileId = '".
			$_POST["fileId"]."';";
			if(performQuery($query)){
				echo json_encode(array("state"=>2));
				return;
			}else{
				echo json_encode(array("state"=>1));
				return;				
			}
	    break;
		default: 
		 return;
    }
  }
  
  FetchNotifications();
 
?>