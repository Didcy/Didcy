<?php
 
  include("connect_server.php");
 
  function badgeClick(){
	switch($_POST["click-state"]){
	 case 0:
	 $connect = ConnectServer(0);

	 if($connect["state"] != 500006){
		echo json_encode($connect);
		return;
	 }
			 
	 $connect = $connect["connect"];
	 
	 $sql = "create table if not exists badgeClick(
	             id bigint primary key,
				 click smallint not null default 1
			 );";
	 
	 $connect_result = $connect->query($sql);

	 $sql = "select * from badgeClick where id='".$_POST["drim"]."';";
	 
	 $connect_result = $connect->query($sql);
	 
	 if($connect_result->num_rows > 0){
		$sql = "update badgeClick set click='".$_POST["click"]."' where id='".$_POST["drim"]."';"; 
	 }
	 else{
		$sql = "insert into badgeClick values('".$_POST["drim"]."', '".$_POST["click"]."');";
	 }
	 
	 $connect_result = $connect->query($sql);
	 
	 $connect->close();	  
	 
	 echo json_encode(array("click"=>$_POST["click"], "state"=>2));
	 return;
	break;
	case 1: 
	 $connect = ConnectServer(0);

	 if($connect["state"] != 500006){
		echo json_encode($connect);
		return;
	 }
			 
	 $connect = $connect["connect"];
	 
	 $sql = "create table if not exists badgeClick(
	             id bigint primary key,
				 click smallint not null default 1
			 );";
	 
	 $connect_result = $connect->query($sql);

	 $sql = "create table if not exists badgeClickHome(
                	 click smallint not null default 1
			 );";
	 
	 $connect_result = $connect->query($sql);

	 $sql = "select * from badgeClickHome;";
	 
	 $connect_result = $connect->query($sql);
	 
	 if($connect_result->num_rows > 0){
		$sql = "update badgeClickHome set click=1";; 
	 }
	 else{
		$sql = "insert into badgeClickHome values('1');";
	 }
	 
	 $connect_result = $connect->query($sql);
	 
	 $connect->close();	  
	 
	 echo json_encode(array("click"=>$_POST["click"], "state"=>2));
	 return;	
	break;
	default: 
	 return;
  }
  
}

  badgeClick();
?>