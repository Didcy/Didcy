"use strict";

function SetAutomaticDate(){
	var dateTime = new Date();
	var $month, $date, $_dateOfShipment;
	
	if(dateTime.getMonth() < 10){
		$month = '0' + (Number(dateTime.getMonth())+1).toString(); 
	}else{
		$month = dateTime.getMonth();
	}
				 
	if(dateTime.getDate() < 10){
		$date = '0' + dateTime.getDate();
	}else{
		$date = dateTime.getDate();
	}
				 
	$_dateOfShipment = $date + '/' + $month + '/' + dateTime.getFullYear();
	//$id_dateOfExpiry = $date + '/' + $month + '/' + (Number(dateTime.getFullYear()) + 5).toString();// + '/' + String(Number(dateTime.getFullYear())+5);
    return $_dateOfShipment;
}

function SetAutomaticTime(){
	var dateTime = new Date();
    var $_timeofShipment;
	if(dateTime.getHours() < 10){
		$_timeofShipment = '0' + dateTime.getHours().toString();
		if(dateTime.getMinutes() < 10){
		   $_timeofShipment += ':' + '0' + dateTime.getMinutes().toString();
		}else{
		   $_timeofShipment += ':' + dateTime.getMinutes().toString();
		}
		if(dateTime.getSeconds() < 10){
		    $_timeofShipment += ':' + '0' + dateTime.getSeconds().toString();
	    }else{
			$_timeofShipment += ':' + dateTime.getSeconds().toString();
		}
	}else{
		if(dateTime.getHours() <= 12){
			$_timeofShipment = dateTime.getHours().toString() + ':' + dateTime.getMinutes().toString()
			+ ':' + dateTime.getSeconds().toString();	
		}else{
			let $hours = Number(dateTime.getHours()) - 12;
			$_timeofShipment = '0' + $hours.toString() + ':' + dateTime.getMinutes().toString()
			+ ':' + dateTime.getSeconds().toString();
		}	
	}
    return $_timeofShipment;
}