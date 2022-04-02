"use strict";

function ITrack(program_name = "", developer = "", program_creation_date = "",
program_creation_time = "",  program_projected_revenue = 0, program_projected_users = 0, 
program_value = "", developer_email = ""){
	
	var plugin = [
	    program_name, developer, program_creation_date, program_creation_time, 
		program_projected_revenue, program_projected_users, program_value,
	    developer_email
	];
	
	var form = new FormData();
    
	var __drim = window.location.href;
	var __drim1 = null;
	
	if(__drim == "http://www.didcytest.ueuo.com/" || __drim == "http://www.didcytest.ueuo.com" 
	|| __drim == "didcytest.ueuo.com" || __drim == "www.didcytest.ueuo.com" || 
	__drim == "didcytest.ueuo.com/" || __drim == "www.didcytest.ueuo.com/"
    || __drim == "http://www.didcytest.ueuo.com/?id=1" 
	|| __drim == "didcytest.ueuo.com/?id=1" 
	|| __drim == "didcytest.ueuo.com?id=1" 
	|| __drim == "www.didcytest.ueuo.com/?id=1"){
		//form.append("drim", __drim.slice(51));
		form.append("user",  0);
		form.append("userID", "");
		//window.alert(__drim + ' [');
	}
	else{
		form.append("userID", __drim.slice(44));
		form.append("user",  1);
		__drim1 = __drim.slice(44);
	}

	form.append("plugin", JSON.stringify(plugin));
	$.ajax({
	   type: "POST",
	   url: "it.php",
	   data: form,
	   processData: false,
	   contentType: false, 
	   cache: false,
	   success: function(result){
		   window.console.log(result);
		   return;
		   var data_returned = JSON.parse(result);
		   if(data_returned.state == 200){
			   
		   }
	   },
	   error: function(){}
	});
	
}

function GetITrack(taskID = 0){
	
}

/*function GetITrackID(){}
function GetITrackProjectedRevenueStatus(){}
function GetITrackProjectedUsers(){}
function GetITrackValue(){}
function GetITrackDeveloper(){}
function GetITrackDate(){}
function GetITrackTime(){}
function UpdateITrack(){}*/