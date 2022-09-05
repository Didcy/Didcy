<?php
declare(strict_types=1);

include("connect_server.php");

function DescribeProductService() : void{
		  $connect = connectserver(0);

			 if($connect["state"] != 500006){
				echo json_encode($connect);
				return;
			 }
			 
			 $connect = $connect["connect"];
			 
			 $company = $_POST["company"];

             $id = $_POST["drim"];
			 $server_target_db = "select dirId from gaga where id='".$id."';";
			 $connect_result = $connect->query($server_target_db);
			 
			 if($connect_result === False){
				 echo json_encode(array("state"=>11, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id));
				 return;
			 }
             
			 $dirId = "";
			 if ($connect_result->num_rows > 0) {
				// output data of each row
				 while($row = $connect_result->fetch_assoc()) {
					 $dirId = $row["dirId"];				 
				}
			 }else{
				 echo json_encode(array("state"=>3, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id));
				 return;
			 }
             
			 $company = $_POST["company"];
			 $productServiceInfoID = "product_service_info_".$dirId;
			 
			 if($_POST["describe"] == 1){
				 $server_target_db = "select productServiceDescription from ".$productServiceInfoID."
				  where productServiceCompany='".$company."' and productServiceName='".
				  $_POST["productServiceName"]."';";
				  
				 $connect_result = $connect->query($server_target_db);
				 
				 if($connect_result === False){
					 echo json_encode(array("state"=>11, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }

				 if ($connect_result->num_rows > 0) {
					// output data of each row
					 while($row = $connect_result->fetch_assoc()) {
						 $describe = $row["productServiceDescription"];				 
					}
				 }else{
					 echo json_encode(array("state"=>3, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }
				 echo json_encode(array("describe"=>$describe, "state"=>4, 
				 "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
			 }
			 else if($_POST["describe"] == 3){
				 $server_target_db = "select productServiceApprovedBy from ".$productServiceInfoID."
				  where productServiceCompany='".$company."' and productServiceName='".
				  $_POST["productServiceName"]."';";
				  
				 $connect_result = $connect->query($server_target_db);
				 
				 if($connect_result === False){
					 echo json_encode(array("state"=>11, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }

				 if ($connect_result->num_rows > 0) {
					// output data of each row
					 while($row = $connect_result->fetch_assoc()) {
						 $approvedBy = $row["productServiceApprovedBy"];				 
					}
				 }else{
					 echo json_encode(array("state"=>3, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }
				 echo json_encode(array("productServiceApprovedBy"=>$approvedBy, "state"=>5, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
			 }
			 else if($_POST["describe"] == 4){
				 $server_target_db = "select productServiceCommencementDate, 
				 productServiceElapsingDate, productServiceCommencementTime,
				 productServiceElapsingTime, gagaShipmentDate, gagaShipmentTime from ".$productServiceInfoID."
				  where productServiceCompany='".$company."' and productServiceName='".
				  $_POST["productServiceName"]."';";
				  
				 $connect_result = $connect->query($server_target_db);
				 
				 if($connect_result === False){
					 echo json_encode(array("state"=>11, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }

				 if ($connect_result->num_rows > 0) {
					// output data of each row
					 while($row = $connect_result->fetch_assoc()) {
						 $productServiceCommencementDate = $row["productServiceCommencementDate"];				 
						 $productServiceElapsingDate = $row["productServiceElapsingDate"];				 
						 $productServiceCommencementTime = $row["productServiceCommencementTime"];				 
						 $productServiceElapsingTime = $row["productServiceElapsingTime"];				 
						 $gagaShipmentDate = $row["gagaShipmentDate"];				 
						 $gagaShipmentTime = $row["gagaShipmentTime"];				 
					}
				 }else{
					 echo json_encode(array("state"=>3, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }
				 
				 echo json_encode(array("productServicePeriod"=>
				 array($productServiceCommencementDate, $productServiceElapsingDate,
				 $productServiceCommencementTime, $productServiceElapsingTime,
				 $gagaShipmentDate, $gagaShipmentTime), "state"=>6, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
			 }
			 else if($_POST["describe"] == 5){
				 $server_target_db = "select productServiceCountry from ".$productServiceInfoID."
				  where productServiceCompany='".$company."' and productServiceName='".
				  $_POST["productServiceName"]."';";
				  
				 $connect_result = $connect->query($server_target_db);
				 
				 if($connect_result === False){
					 echo json_encode(array("state"=>11, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }

				 if ($connect_result->num_rows > 0) {
					// output data of each row
					 while($row = $connect_result->fetch_assoc()) {
						 $productServiceCountry = $row["productServiceCountry"];				 
					}
				 }else{
					 echo json_encode(array("state"=>3, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
					 return;
				 }
				 echo json_encode(array("productServiceCountry"=>$productServiceCountry, "state"=>7, "error"=>$connect->error, 
				 "close"=>$connect->close(), "description_id"=>$_POST["describe"], 
				 "company"=>$company, "drim"=>$id, "prid"=>$productServiceInfoID, 
				 "dirId"=>$dirId, "prname"=>$_POST["productServiceName"]));
			 }
			 else{
				 
			 }
			 return;
}
 
DescribeProductService();
?>