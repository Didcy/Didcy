<?php
  namespace IT{
	
	require_once("functions.php");
	
	class ITrack{
	   public $program_name;
       protected $developer;
	   public $program_creation_date;
	   public $program_creation_time;
	   private $program_projected_revenue;
	   private $program_projected_users;
	   public $program_value;
	   private $developer_email;
	   private $ITrackTable = "ITrack";
	   private $Dash = "Dash";
	   private $Dish = "Dish";
	   public function __construct($program_name = "", $developer = "", $program_creation_date = "", 
	   $program_creation_time = "", $program_projected_revenue = "", $program_projected_users = "", 
	   $program_value = "", $developer_email = ""){
		  $this->program_name = $program_name;
		  $this->developer = $developer;
		  $this->program_creation_date = $program_creation_date;
		  $this->program_creation_time = $program_creation_time;
		  $this->program_projected_revenue = $program_projected_revenue;
		  $this->program_projected_users = $program_projected_users;
		  $this->program_value = $program_value;
		  $this->developer_email = $developer_email;
	   }
	   public function insertITrack($user = 0, $_userID = ""){
		   $query = "create table if not exists ".$this->ITrackTable."(
		         id bigint(50) primary key auto_increment,
				 program_name varchar(100) not null default 'Didcy Plugin',
				 developer char(100) not null default 'Didcy',
				 creation_date nchar(100) not null default CURRENT_DATE,
				 creation_time nvarchar(100) not null default CURRENT_TIME,
				 projected_revenue text null default '1000.000',
				 projected_users text null default '1000',
				 value text not null default '',
				 developer_email varchar(100) not null default 'info@didcy.com',
				 current_ttl_revenue bigint(50) not null default 0,
				 current_ttl_users bigint(50) not null default 1,
				 current_ttl_clicks bigint(50) not null default 1,
				 utime time default CURRENT_TIME,
				 udate date default CURRENT_DATE,
				 utimestamp timestamp default CURRENT_TIMESTAMP
		   );";
		   
		   $performQueryer = performQueryer($query);
		   
		   if($performQueryer["state"] != true){
			  return array("state"=>201, "error"=>$performQueryer["error"]);
		   }
		   
		   $query = "create table if not exists ".$this->Dash."(
		         userID varchar(100) not null default '0', 
				 program_name varchar(100) not null default 'Didcy Plugin',
				 developer char(100) not null default 'Didcy',
				 developer_email varchar(100) not null default 'info@didcy.com',
				 user_app_clicks_per_day bigint(50) not null default 1,
				 utime time default CURRENT_TIME,
				 udate date default CURRENT_DATE,
				 utimestamp timestamp default CURRENT_TIMESTAMP
		   );";
		   
		   $performQueryer = performQueryer($query);
		   
		   if($performQueryer["state"] != true){
			  return array("state"=>202, "error"=>$performQueryer["error"]);
		   }
		   
		   $query = "create table if not exists ".$this->Dish."(
				 program_name varchar(100) not null default 'Didcy Plugin',
				 developer char(100) not null default 'Didcy',
				 developer_email varchar(100) not null default 'info@didcy.com',
				 user_app_clicks_per_day bigint(50) not null default 1,
				 utime time default CURRENT_TIME,
				 udate date default CURRENT_DATE,
				 utimestamp timestamp default CURRENT_TIMESTAMP
		   );";
		   
		   $performQueryer = performQueryer($query);
		   
		   if($performQueryer["state"] != true){
			  return array("state"=>209, "error"=>$performQueryer["error"]);
		   }

           $query = "Select id from ".$this->ITrackTable." where 
		   program_name='".$this->program_name."' and 
		   developer='".$this->developer."' and developer_email='".$this->developer_email."';";

		   $performQueryer = fetchAll($query);
		   
		   if(count($performQueryer) <= 0){
			   
			   $pattern = "/'/i";
			   $this->program_value = preg_replace($pattern, "\'", $this->program_value); 
			   
			   $query = "insert into ".$this->ITrackTable."(program_name, developer, 
			   creation_date, creation_time, projected_revenue, projected_users,
			   value, developer_email) values('".$this->program_name."', 
			   '".$this->developer."', '".$this->program_creation_date."', 
			   '".$this->program_creation_time."', '".$this->program_projected_revenue."', 
			   '".$this->program_projected_users."', '".$this->program_value."', 
			   '".$this->developer_email."');";
			   
			   $performQueryer = performQueryer($query);
			   
			   if($performQueryer["state"] != true){
				  return array("state"=>203, "error"=>$performQueryer["error"]);
			   }				   

			   $clickPerUser = $this->UpdateClickPerUserUsingDate($user, $_userID);
			   
			   if($clickPerUser["state"] == 206){
				   return array("state"=>206, "error"=>$clickPerUser["error"]);
			   }

		   }else{
			   return $this->updateClicks($user, $_userID);
		   } 
		   
		   return array("state"=>200, "error"=>"");
	   }
	   public function updateClicks($user = 0, $_userID = ""){

           $query = "Select * from ".$this->ITrackTable." where 
		   program_name='".$this->program_name."' and 
		   developer='".$this->developer."' and developer_email='".$this->developer_email."';";

		   $performQueryer = fetchAll($query);
		   
		   if(count($performQueryer) <= 0){
			  return array("state"=>204, "error"=>"");  
		   }		   
		  
		   //echo json_encode(fetchAll($query));
		   //return;
		   
		   $clicks = fetchAll($query)[0]["current_ttl_clicks"]+1;
		   
		   
           $query = "update ".$this->ITrackTable." 
		   set current_ttl_clicks='".number_format($clicks)."' where 
		   program_name='".$this->program_name."' and developer='".
		   $this->developer."' and developer_email='".$this->developer_email."';";

		   $performQueryer = performQueryer($query);
		   
		   if($performQueryer["state"] != true){
			   return array("state"=>205, "error"=>$performQueryer["error"]);
		   }		  

		   $clickPerUser = $this->UpdateClickPerUserUsingDate($user, $_userID);
		   
		   if($clickPerUser["state"] == 206){
			   return array("state"=>206, "error"=>$clickPerUser["error"]);
		   }
		   
		   return array("state"=>208, "error"=>$performQueryer["error"]);
	   }
	   
	   public function UpdateClickPerUserUsingDate($user = 0, $_userID = ""){
			   
			   $query = "select * from ".$this->Dish." where program_name='".$this->program_name."' and 
				developer='".$this->developer."' and 
				developer_email='".$this->developer_email."' and udate=CURRENT_DATE;";
			   
			   $performQueryer = fetchAll($query);
			   
			   if(count($performQueryer) <= 0){
				   $query = "insert into ".$this->Dish."(program_name, developer,
				   developer_email, udate, utime, utimestamp) values('".$this->program_name."', 
				   '".$this->developer."', '".$this->developer_email."', 
				   CURRENT_DATE, CURRENT_TIME, CURRENT_TIMESTAMP);";				   
			   }else{
				   $clicks = fetchAll($query)[0]["user_app_clicks_per_day"]+1;
				   
				   $query = "update ".$this->Dish." 
				   set user_app_clicks_per_day='".number_format($clicks)."' where  
				   program_name='".$this->program_name."' and developer='".
				   $this->developer."' and developer_email='".$this->developer_email."'
				   and udate=CURRENT_DATE;";
			   }
			   
			   $performQueryer = performQueryer($query);
			   
			   if($performQueryer["state"] != true){
				  return array("state"=>210, "error"=>$performQueryer["error"]);
			   }
			   
           if($user == 1){
			   
			   $query = "select * from ".$this->Dash." where userID='".$_userID."'
			    and program_name='".$this->program_name."' and 
				developer='".$this->developer."' and 
				developer_email='".$this->developer_email."' and udate=CURRENT_DATE;";
			   
			   $performQueryer = fetchAll($query);
			   
			   if(count($performQueryer) <= 0){
				   $query = "insert into ".$this->Dash."(userID, program_name, developer,
				   developer_email, udate, utime, utimestamp) values('".$_userID."', '".$this->program_name."', 
				   '".$this->developer."', '".$this->developer_email."', 
				   CURRENT_DATE, CURRENT_TIME, CURRENT_TIMESTAMP);";				   
			   }else{
				   $clicks = fetchAll($query)[0]["user_app_clicks_per_day"]+1;
				   
				   $query = "update ".$this->Dash." 
				   set user_app_clicks_per_day='".number_format($clicks)."' where 
				   userID='".$_userID."' and program_name='".$this->program_name."' and developer='".
				   $this->developer."' and developer_email='".$this->developer_email."'
				   and udate=CURRENT_DATE;";
			   }
			   
			   $performQueryer = performQueryer($query);
			   
			   if($performQueryer["state"] != true){
				  return array("state"=>206, "error"=>$performQueryer["error"]);
			   }
			   
			   return array("state"=>207, "error"=>$performQueryer["error"]);
		   }
		   else{
		       return array("state"=>200, "error"=>"");  
		   }
		   
	   }
	   
	   public function ITrackWrapper($trackID = 0, $user = "", $_userID = ""){
		   if($trackID == 0){
			  return $this->insertITrack($user, $_userID);
		   }
		   else if($trackID == 1){
			  return $this->updateClicks($user, $_userID);
		   }
	   }
	   public function _ITrack(){}
	   public function __destruct(){}
	}
  }
?>