"use strict";

function FormNewLetters(){
	var name = document.getElementById("name-newsletter");
	var mail = document.getElementById("email-newsletter");
	var Checkbox = document.getElementById("checkbox-newsletter");
	
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
event.preventDefault();FormNewLetters();});

document.getElementById("submit-newsletter").addEventListener("click", () => 
FormNewLetters());

