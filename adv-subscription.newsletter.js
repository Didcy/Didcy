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
		return AlertBoxInModal("Please insert your name");
	}
	
	if(mail.value.toString().trim() == ""){
		return AlertBoxInModal("Please insert your email");
	}
	
	var form = new FormData();
	form.append("username", name.value.toString().trim());
	form.append("email", mail.value.toString().trim());
	$.ajax({
	   type: "POST",
	   url: "mail.php",
	   data: form,
	   cache: false,
	   contentType: false,
	   processData: false,
	   success: function(result){
		   //AlertBoxInModal(result);
		   var data_returned = JSON.parse(result);
		   if(data_returned.state == 0){
			  AlertBoxInModal("Connect Error!!!");
		   }
		   else if(data_returned.state == 1){
			  //AlertBoxInModal(data_returned.message_data);
			  AlertBoxInModal("Thanks for subscribing to Didcy Newsletters.");
			  document.getElementById("modal-newsletters").style.display = "none";
			  setTimeout(() => {
				  if(newsletterDifference == 1){			  
					 PopUpRandomizer();
					 clearFirstNewsletter = 1;
				  }
				  newsletterDifference = 2;
			  }, 1000);
		   }
		   else if(data_returned.state == 2){
			  AlertBoxInModal(data_returned.message_data);
		   }		   
		   else if(data_returned.state == 2000){
			  AlertBoxInModal(data_returned.message_data);
		   }		   
		   else if(data_returned.state == 2001){
			  AlertBoxInModal(data_returned.message_data);
		   }		   
		   else if(data_returned.state == 2002){
			  AlertBoxInModal(data_returned.message_data);
		   }		   
		   else if(data_returned.state == 2003){
			  AlertBoxInModal(data_returned.message_data);
		   }
		   else if(data_returned.state == 2004){
			  AlertBoxInModal(data_returned.message_data);
		   }
		   else{
			  AlertBoxInModal("Connect Error!!!#222");   
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

