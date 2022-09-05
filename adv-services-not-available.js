"use strict";

function ServicesNotAvailable(serviceTitle = null, serviceInfo = null, service_Id = 0){
	document.getElementById("services").innerHTML = serviceTitle;
	document.getElementById("services-not-available").innerHTML = serviceInfo;
	document.getElementById('id02').style.display='block';
	var backSide = document.getElementById("back-side-service-report");
/* 	if(serviceTitle == 'Didcy Books'){
		document.getElementById("didcy-cms").alt="Find out more about Didcy Books";
	}else if(serviceTitle == 'Didcy Course'){
		document.getElementById("didcy-cms").alt="Find out more about Didcy Course";
	} */
	if(service_Id == -1){
		backSide.className = "back-side-service-report";
		document.getElementsByClassName("back-side-service-report")[0].innerHTML = "Please can't access MyStory service on the Home Page.";
	    document.getElementById("loader").style.display = "none";
	}else if(service_Id == -2){
		backSide.className = "back-side-service-report";
		document.getElementsByClassName("back-side-service-report")[0].innerHTML = "Please this service is currently not available.";
	    document.getElementById("loader").style.display = "none";
	}else if(service_Id == -3){
		backSide.className = "back-side-service-report";
		document.getElementsByClassName("back-side-service-report")[0].innerHTML = "Please this service is currently being worked on.";
	    document.getElementById("loader").style.display = "none";
	}else if(service_Id == -4){
		backSide.className += " comingSoon";
		document.getElementsByClassName("back-side-service-report")[0].innerHTML = "Coming Soon";
		document.getElementById("loader").style.display = "inline-block";
	}else{
		backSide.className = "back-side-service-report";
		document.getElementsByClassName("back-side-service-report")[0].innerHTML = "Please this service is currently not available.";		
	    document.getElementById("loader").style.display = "none";
	}
}
