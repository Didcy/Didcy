<?php

function ExecuteCrypto($ttip){
	$ip = "";
	$remoteIP = "";

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	if (strstr($ip, ', ')) {
		$ips = explode(', ', $ip);
		$remoteIP = $ips[0];
	}

	if($ip != "::1" && $ip != "127.0.0.1"){
		if(filter_var($remoteIP, FILTER_VALIDATE_IP)){
			return GetTTLIPfromDB($remoteIP, 
			gethostbyaddr($remoteIP));
		}
		else{
			return -2;
		}
	}else{
			return GetTTLIPfromDB($ip, gethostbyaddr($ip));
	}
}
  
function GetTTLIPfromDB($remote_ip, $hostname){
	$query = "select * from Crypto where 
	remote_ip='".$remote_ip."' and hostname='".
	$hostname."';";
	
	if(count(fetchAll($query)) == 0){
		return 0;
	}
	
	$ttip = fetchAll($query);
	
	return $ttip[0]["ttip"];
}
  

function decipher($encrypted_data = [], $password = [], $index = []){
    $ttip = ExecuteCrypto(null);
	if($ttip == 0){
		echo json_encode(array("state"=>0));
		return;
	}
	$add = 0;
	$c = 0;
	$__index = 0;
	$parr = $password;
	$upswd = "";
    for($ran = 0;$ran < count($parr);$ran++){
		$parr[$ran] = $parr[$ran]/$ttip;
		if(count($index) != $__index){
			if($ran == $index[$__index]){  
				$c = ($parr[$ran]<<1)+1;
				$__index++;
			}else{
				$c = ($parr[$ran]<<1);
			}
		}else{
			$c = ($parr[$ran]<<1);
		}
		$upswd .= chr($c);
	    //document.write("<br>"+String.fromCharCode($c));
	}
	return $upswd;
}

function extractUserPassword($upswd){
	$upassword = "";
	for($ucount = 0;$ucount < strlen($upswd);$ucount++){
		$ucount++;
		$upassword .= $upswd[$ucount];
	}
	return $upassword;
}

?>