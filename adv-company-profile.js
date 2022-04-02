"use strict";

var openButton2_company_registration = null;
function openForm_company_registration_2() {
  document.getElementById("myForm-company-registration-2").style.display = "block";
  document.getElementById("myForm-company-registration-2").style.zIndex = "9";
  openButton2_company_registration = document.getElementsByClassName("open-company-registration-button-2")[0];
  openButton2_company_registration.style.zIndex = "-1";
  adClosure = 0;
  selectCloseCheck = 3;
}

function closeForm_2_company_registration(closeOnDone = null) {
  if(myStoryId == 1){
	openButton2_company_registration = document.getElementsByClassName("open-company-registration-button-2")[0];
	document.getElementById("gaga-react-container").append(openButton2_company_registration);
    document.getElementById("myForm-company-registration-2").style.display = "none";
	openButton2_company_registration.style.zIndex = "9";
    openButton2_company_registration.style.display = "block";
  }else if(myStoryId == 2){
	openButton2_company_registration = document.getElementsByClassName("open-company-registration-button-2")[0];
    document.getElementById("myModal-8").append(openButton2_company_registration);
    document.getElementById("myForm-company-registration-2").style.padding = "0";	
	selectCloseCheck = 2;
	openButton2_company_registration.style.zIndex = "1";
    document.getElementById("myForm-company-registration-2").style.display = "none";
    openButton2_company_registration.style.display = "block";
  }else{
    document.getElementById("myForm-company-registration-2").style.display = "none";
    openButton2_company_registration = document.getElementsByClassName("open-company-registration-button-2")[0];
    openButton2_company_registration.style.display = "block";	  
  }
  if(closeOnDone != null){
    openButton2_company_registration.style.display = "none";
  }
  adClosure  = 2;
  
}

function closeForm_company_registration_entirely() {
  document.getElementById("myForm-company-registration-2").style.display = "none";
  document.getElementById("open-company-registration-button-2").style.display = "none";
  if(selectCloseCheck == 1){
	  var file_handle = document.getElementById("uploads-2");
	  //file_handle.files[0].name = "";
	  //file_handle.files.length = 0;
	  file_handle.value = "";
	  file_handle.files.value = "";
	  file_handle.files = null;
  }
  selectCloseCheck = 0;
}