<?php
  
						$server_name = "localhost";
						$server_ip = "127.0.0.1";
						$server_username = "root";
						$server_password = "";
						$server_dbname = "GAGA";
						$server_port = 3306;
						
						$dataId = array("data_id"=>array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"));
						
						$connect = new mysqli($server_name, $server_username, $server_password, $server_dbname, $server_port);
						if($connect->connect_error){
							return 0;
						}
						$server_target_db = "create database if not exists `333811`;";
						$connect_result = $connect->query($server_target_db);
						if($connect_result === False){
						   echo "failed";
						}else{
						   $connect->close();
						   echo "done";
						   
						}
						  

?>