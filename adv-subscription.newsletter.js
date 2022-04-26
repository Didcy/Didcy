"use strict";

function FormNewLetters(formNewsletterID = 0){
	var name = null;
	var mail = null;
	var Checkbox = null;
	
	if(formNewsletterID == 0){
	  name = document.getElementById("name-newsletter");
	  mail = document.getElementById("email-newsletter");
	  Checkbox = document.getElementById("checkbox-newsletter");		
	}else{
	  name = document.getElementById("name-newsletter-2");
	  mail = document.getElementById("email-newsletter-2");
	  Checkbox = document.getElementById("checkbox-newsletter-2");		
	}
	
	if(name.value.toString().trim() == ""){
		return alertBox("Please insert your name");
	}
	
	if(mail.value.toString().trim() == ""){
		return alertBox("Please insert your email");
	}
	
	var form = new FormData();
	form.append("username", name.value.toString().trim());
	form.append("email", mail.value.toString().trim());
	$.ajax({
	   type: "POST",
	   url: "mailer.2.php",
	   data: form,
	   cache: false,
	   contentType: false,
	   processData: false,
	   success: function(result){
		   window.console.log(result);
		   var data_returned = JSON.parse(result);
		   if(data_returned.state == 0){
			  window.console.log("Connect Error!!!");
		   }
		   else if(data_returned.state == 1){
			  window.console.log(data_returned.message_data);
		   }
		   else if(data_returned.state == 2){
			  window.console.log(data_returned.message_data);
		   }
		   else{
			  window.console.log("Connect Error!!!#222");   
		   }
	   },
	   error: function(){}
	});
}

document.getElementById("form-newsletter").addEventListener("submit", (event) => { 
event.preventDefault();FormNewLetters(0);});

document.getElementById("form-newsletter-2").addEventListener("submit", (event) => { 
event.preventDefault();FormNewLetters(1);});

document.getElementById("submit-newsletter").addEventListener("click", () => 
FormNewLetters(0));

document.getElementById("submit-newsletter-2").addEventListener("click", () => 
FormNewLetters(1));

