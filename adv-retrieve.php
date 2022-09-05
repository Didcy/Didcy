<?php

require_once("connect_server.php");

function ValidateDrim($rc_id = null, $data_id = null, $drim = null) : int{
						
						$rcId = array("rc_id"=>
						array("029910827171820",  
						"129910827171821", "229910827171822", 
						"329910827171823", "429910827171824",
						"529910827171825", "629910827171826",
						"729910827171827", "829910827171828",
						"929910827171829", "10299108271718210",
						"11299108271718211", "12299108271718212",
						"13299108271718213", "14299108271718214",
						"15299108271718215", "16299108271718216",
						"17299108271718217"));
						
						$dataId = array("data_id"=>array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"));
						
					     $connect = connectserver(1);

						 if($connect["state"] != 500006){
							//echo json_encode($connect);
							return $connect["state"];
						 }
						 
						 $connect = $connect["connect"];
						
						$imageId = $drim;
						
						$server_target_db = "select id from gaga where id='".$imageId."';";
						
						$connect_result = $connect->query($server_target_db);		
						if($connect_result === False){
							$connect->close();
							return 2;
						}else{
							$connect->close();
						}
						
                        if($connect_result->fetch_assoc()["id"] == ""){
							//echo $connect_result->fetch_assoc()["id"];
						    return 2;		
						}
						
						if($rcId["rc_id"][0] == $rc_id && $dataId["data_id"][0] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							
			               return 200;
						   
						}else if($rcId["rc_id"][1] == $rc_id && $dataId["data_id"][1] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][2] == $rc_id && $dataId["data_id"][2] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][3] == $rc_id && $dataId["data_id"][3] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][4] == $rc_id && $dataId["data_id"][4] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][5] == $rc_id && $dataId["data_id"][5] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][6] == $rc_id && $dataId["data_id"][6] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][7] == $rc_id && $dataId["data_id"][7] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][8] == $rc_id && $dataId["data_id"][8] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][9] == $rc_id && $dataId["data_id"][9] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][10] == $rc_id && $dataId["data_id"][10] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							/* echo $rcId["rc_id"][10]." ".$rc_id."<br>".$dataId["data_id"]." ".$data_id; */
							return 200;
						}else if($rcId["rc_id"][11] == $rc_id && $dataId["data_id"][11] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][12] == $rc_id && $dataId["data_id"][12] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][13] == $rc_id && $dataId["data_id"][13] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][14] == $rc_id && $dataId["data_id"][14] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}else if($rcId["rc_id"][15] == $rc_id && $dataId["data_id"][15] == $data_id && $drim != "" && $drim != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
							return 200;
						}
						return 0;
}

function ValidateDidcyLinks(){
  if(isset($_COOKIE) == FALSE){
      session_destroy();
	  echo "Cookie not enabled";
  }else{ 
      if(empty($_COOKIE) != TRUE && count($_COOKIE) > 1){
		  /*if(empty($_COOKIE["GAGA_RESPONSE"]) != true || $_COOKIE["GAGA_RESPONSE"] != ""){*/
	         $cookie_id = $_COOKIE["GAGA_RESPONSE"];
	         $link = "adv-main.php?drim=".$cookie_id;
			 /*echo "<script type='text/javascript'>
					  'use strict';
				       
				   </script>";*/
			 
			 $validId = "";
			 
		     if($_GET["rc_id"] == "029910827171820" && $_GET["data_id"] == "0" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					         require("adv-policies/$1-secure-my-domains.htm");  
				  }	
			 }else if($_GET["rc_id"] == "129910827171821" && $_GET["data_id"] == "1" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/domian-term-of-use.htm");
				  }			 
			 }else if($_GET["rc_id"] == "229910827171822" && $_GET["data_id"] == "2" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/term-of-sanction.htm");					  
				  }			 
			 }else if($_GET["rc_id"] == "329910827171823" && $_GET["data_id"] == "3" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/non-disclosure-agreement.htm");					  
				  }				 
			 }else if($_GET["rc_id"] == "429910827171824" && $_GET["data_id"] == "4" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                   if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/privacy-policy.htm");					  
				  }				 
			 }else if($_GET["rc_id"] == "529910827171825" && $_GET["data_id"] == "5" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/privacy-policy-link.htm");	
				  }	
			 }else if($_GET["rc_id"] == "629910827171826" && $_GET["data_id"] == "6" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/authors-know-more.htm");					  
				  }				 
			 }else if($_GET["rc_id"] == "729910827171827" && $_GET["data_id"] == "7" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/investors-know-more.htm");					  
				  }		 
			 }else if($_GET["rc_id"] == "829910827171828" && $_GET["data_id"] == "8" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/team-know-more.htm");					  
				  }				 
			 }else if($_GET["rc_id"] == "929910827171829" && $_GET["data_id"] == "9" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/design-update-centre.htm");					  
				  }				 
			 }else if($_GET["rc_id"] == "10299108271718210" && $_GET["data_id"] == "10" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/mentors-know-more.htm");					  
				  }		 
			 }else if($_GET["rc_id"] == "11299108271718211" && $_GET["data_id"] == "11" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/limit.htm");
				  }				 
			 }else if($_GET["rc_id"] == "12299108271718212" && $_GET["data_id"] == "12" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  require("adv-policies/dispute.htm");
				  }				 
			 }else if($_GET["rc_id"] == "13299108271718213" && $_GET["data_id"] == "13" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  
				  }			 
			 }else if($_GET["rc_id"] == "14299108271718214" && $_GET["data_id"] == "14" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  
				  }			 
			 }else if($_GET["rc_id"] == "15299108271718215" && $_GET["data_id"] == "15" && $_GET["drim"] != "" && $_GET["drim"] != "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011"){
				 $validId = ValidateDrim($_GET["rc_id"], $_GET["data_id"], $_GET["drim"]);
                  if($validId == 0){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
							   </script>";					  
				  }else if($validId == 1){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('An error occured while connecting to https://www.didcy.com');			   
						      </script>";					  
				  }else if($validId == 2){
						echo "<script type='text/javascript'>
								'use strict';
								document.write('<h2>Please user not exist. Please check your drim in the URL. Thank you</h2>.'); 			   
							  </script>";					  
				  }else{
					  
				  }		 
			 }else{
			  if(empty($_COOKIE["GAGA_RESPONSE"]) != true || $_COOKIE["GAGA_RESPONSE"] != ""){
				echo "<script type='text/javascript'>
						'use strict';
						document.write('<h2>Please check your rc_id, data_id & drim and provide the right values for each in the URL. Thank you.</h2>');			   
					 </script>";
				return;		 
			  }else{
				    session_start();
					include_once("adv-policies/policy-error.htm");
          }
			 }
			 //return;
		  /*}else{
				echo "<script type='text/javascript'>
						'use strict';
						document.write('An error occured while connecting to https://www.didcy.com');			   
					 </script>";
				return;
          }*/
      }else{
		  session_start();
		  //setcookie("GAGA_RELATIONS", "r99303922022");
		  //include("index.htm");
		  include_once("adv-policies/policy-error.htm");
      }
  }
}

ValidateDidcyLinks();

?>