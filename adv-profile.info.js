"use strict";

  var urls = ["chat/"+"chat_action.php", "chat/"+"retrieve.new.status.php", 
  "chat/"+"retrieve.chat.php", "chat/"+"updateConversation.php",
  "chat/"+"chat.log.php", "chat/"+"chat.add.php"];

var openButton2 = null;
function openForm_2() {
  document.getElementById("myForm-2").style.display = "block";
  document.getElementById("myForm-2").style.zIndex = "9";
  openButton2 = document.getElementsByClassName("open-button-2")[0];
  openButton2.style.zIndex = "-1";
  adClosure = 0;
  selectCloseCheck = 3;
}

function UpdateStoryTime(tellYourStoryId = null, profileID = 0){
	switch(tellYourStoryId){
		case 0:
		{
			var ActorStory = {
				firstname : document.getElementById("fname"),
				middlename : document.getElementById("mname"),
				lastname : document.getElementById("lname"),
				profession : document.getElementById("profession"),
				privateTelOptional : document.getElementById("ptel"),
				publicTelOptional : document.getElementById("putel"),
				whatAppNoOptional : document.getElementById("wtel"),
				businessEmail : document.getElementById("bemail"),
				privatePersonalEmailOptional : document.getElementById("pemail"),
				facebookHandleOptional : document.getElementById("fb_handle"),
				twitterHandleOptional : document.getElementById("tw_handle"),
				instagramHandleOptional : document.getElementById("ins_handle"),
				youtubeHandleOptional : document.getElementById("you_handle"),
				websiteDomainOptional : document.getElementById("web_handle"),
				actorStory : document.getElementById("agpd"),
				countryOfBirth : document.getElementById("country"),
				done : document.getElementById("cancel-2")
			};
			
			function CheckTruthOfStory(){
				UpdateUploadz(ActorStory.firstname.value, ActorStory.middlename.value, ActorStory.lastname.value,
				ActorStory.profession.value, ActorStory.privateTelOptional.value, ActorStory.publicTelOptional.value, 
				ActorStory.whatAppNoOptional.value, ActorStory.businessEmail.value, 
				ActorStory.privatePersonalEmailOptional.value, ActorStory.facebookHandleOptional.value,
				ActorStory.twitterHandleOptional.value, ActorStory.instagramHandleOptional.value,
			    ActorStory.youtubeHandleOptional.value, ActorStory.websiteDomainOptional.value,
				ActorStory.actorStory.value, ActorStory.countryOfBirth.value, ActorStory.done.value); 
			}
			CheckTruthOfStory();
		}
		break;
		case 1:
		case 2:
		{
			var CompanyStory = {
				institutionName : document.getElementById("iname-company-registration"),
				ein : document.getElementById("ein-company-registration"),
				tin : document.getElementById("tin-company-registration"),
				activity : document.getElementById("activity-company-registration"),
				privateTelOptional : document.getElementById("ptel-company-registration"),
				publicTelOptional : document.getElementById("putel-company-registration"),
				whatAppNoOptional : document.getElementById("wtel-company-registration"),
				businessEmail : document.getElementById("bemail-company-registration"),
				privatePersonalEmailOptional : document.getElementById("pemail-company-registration"),
				facebookHandleOptional : document.getElementById("fb_handle-company-registration"),
				twitterHandleOptional : document.getElementById("tw_handle"),
				instagramHandleOptional : document.getElementById("ins_handle-company-registration"),
				youtubeHandleOptional : document.getElementById("you_handle-company-registration"),
				websiteDomainOptional : document.getElementById("web_handle-company-registration"),
				companyStory : document.getElementById("agpd-company-registration"),
				location : document.getElementById("location-company-registration"),
				countryOfRegistration : document.getElementById("country-company-registration"),
				companyRegistrationDate : document.getElementById("crd-company-registration"),
				done : document.getElementById("cancel-2-company-registration")
			};
			
			function CheckTruthOfStory(){
				UpdateUploadzCompany(CompanyStory.institutionName.value, 
				CompanyStory.ein.value, CompanyStory.tin.value,
				CompanyStory.activity.value, CompanyStory.privateTelOptional.value, CompanyStory.publicTelOptional.value, 
				CompanyStory.whatAppNoOptional.value, CompanyStory.businessEmail.value, 
				CompanyStory.privatePersonalEmailOptional.value, 
				CompanyStory.facebookHandleOptional.value,
				CompanyStory.twitterHandleOptional.value, 
				CompanyStory.instagramHandleOptional.value,
			    CompanyStory.youtubeHandleOptional.value, 
				CompanyStory.websiteDomainOptional.value,
				CompanyStory.companyStory.value, 
				CompanyStory.location.value, 
				CompanyStory.countryOfRegistration.value, 
				CompanyStory.companyRegistrationDate.value, 
				CompanyStory.done.value);	           
			}
			CheckTruthOfStory();		   	
		}
		break;
		default: 
		 return;
	}
}

function UpdateUploadz(firstname, middlename, lastname, profession, privateTelOptional, publicTelOptional, 
  whatAppNoOptional, businessEmail, privatePersonalEmailOptional, facebookHandleOptional,
  twitterHandleOptional, instagramHandleOptional, youtubeHandleOptional, websiteDomainOptional,
  actorStory, countryOfBirth, done){
	  
/* 	  if(firstname.trim() == ""){
		 return alertBox("Firstname field is empty"); 
	  }

	  if(middlename.trim() == ""){
		 return alertBox("Middlename field is empty"); ){
		  
	  }
	  
	  if(lastname.trim() == ""){
		 return alertBox("Lastname field is empty"); 
	  }

	  if(profession.trim() == ""){
		 return alertBox("Profession field is empty");
		  
	  } */

	  if(countryOfBirth == "Select a country"){
		  return alertBox("Please select a country");
	  }
	  
	  var drim = window.location.href;
      var form = new FormData();
	  form.append("firstname", firstname);
	  form.append("middlename", middlename);
	  form.append("lastname", lastname);
	  form.append("profession", profession);
	  form.append("privateTelOptional", privateTelOptional);
	  form.append("publicTelOptional", publicTelOptional);
	  form.append("whatAppNoOptional", whatAppNoOptional);
	  form.append("businessEmail", businessEmail);
	  form.append("privatePersonalEmailOptional", privatePersonalEmailOptional);
	  form.append("facebookHandleOptional", facebookHandleOptional);
	  form.append("twitterHandleOptional", twitterHandleOptional);
	  form.append("instagramHandleOptional", instagramHandleOptional);
	  form.append("youtubeHandleOptional", youtubeHandleOptional);
	  form.append("websiteDomainOptional", websiteDomainOptional);
	  form.append("actorStory", actorStory);
	  form.append("countryOfBirth", countryOfBirth);
	  form.append("done", done);
	  form.append("imageId", drim.slice(39));
	  form.append("fetch", 20);

	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return alertBox("Connection to Server Error!!!.");
			}
			else if(data_returned.state == 1){
				return alertBox("Connection to Database Error!!!.");
			}
			else if(data_returned.state == 2){
				return alertBox("User already exists!!!.");
			}	
			else if(data_returned.state == 3){
				return alertBox("Profile Error!!!.");
			}
			else if(data_returned.state == 4){
				closeForm_entirely();
                return alertBox("Profile Update was successful");
			}
			else if(data_returned.state == 200){
				 return alertBox("Please insert your first name!!!.");
			}
			else if(data_returned.state == 202){
				 return alertBox("Please insert your last name!!!.");
			}
			else{
				
			}
		 },
		 error: function(){}
	  });
}

function UpdateUploadzCompany(institutionName, ein, tin, activity, 
  privateTelOptional, publicTelOptional, 
  whatAppNoOptional, businessEmail, privatePersonalEmailOptional, 
  facebookHandleOptional, twitterHandleOptional, instagramHandleOptional, 
  youtubeHandleOptional, websiteDomainOptional,
  companyStory, location, countryOfRegistration,
  companyRegistrationDate, done){
      //window.console.log(document.forms['adv-files-20']);

	  
	  var drim = window.location.href;
      var form = new FormData();
	  form.append("institutionName", institutionName);
	  form.append("ein", ein);
	  form.append("tin", tin);
	  if(activity != "Select Your Company's Activity :"){
	    form.append("activity", activity);
	  }else{
		return alertBox("Please select your company's activity");
	  }

	  if(countryOfRegistration == "Select a country"){
		  return alertBox("Please select a country");
	  }	  
	  
	  form.append("privateTelOptional", privateTelOptional);
	  form.append("publicTelOptional", publicTelOptional);
	  form.append("whatAppNoOptional", whatAppNoOptional);
	  form.append("businessEmail", businessEmail);
	  form.append("privatePersonalEmailOptional", privatePersonalEmailOptional);
	  form.append("facebookHandleOptional", facebookHandleOptional);
	  form.append("twitterHandleOptional", twitterHandleOptional);
	  form.append("instagramHandleOptional", instagramHandleOptional);
	  form.append("youtubeHandleOptional", youtubeHandleOptional);
	  form.append("websiteDomainOptional", websiteDomainOptional);
	  form.append("companyStory", companyStory);
	  form.append("location", location);
	  form.append("countryOfRegistration", countryOfRegistration);
	  form.append("companyRegistrationDate", companyRegistrationDate);
	  form.append("done", done);
	  form.append("imageId", drim.slice(39));
	  form.append("fetch", 21);

	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
			//window.console.log(result);
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return alertBox("Connection to Server Error!!!.");
			}
			else if(data_returned.state == 1){
				return alertBox("Connection to Database Error!!!.");
			}
			else if(data_returned.state == 2){
				return alertBox("User already exists!!!.");
			}	
			else if(data_returned.state == 3){
				return alertBox("Profile Error!!!.");
			}
			else if(data_returned.state == 4){
				document.getElementById("update-company-registration").style.display = "none";
				closeForm_company_registration_entirely();
                return alertBox("Profile Update was successful");
			}
			else if(data_returned.state == 2000){
				 return alertBox("Please insert your institution Name!!!.");
			}
			else if(data_returned.state == 2001){
				 return alertBox("Please insert your ein!!!.");
			}
			else if(data_returned.state == 2002){
				 return alertBox("Please insert your tin!!!.");
			}
			else if(data_returned.state == 2003){
				 return alertBox("Please insert your company's activity!!!.");
			}
			else if(data_returned.state == 2004){
				 return alertBox("Please insert your company's public telephone number!!!.");
			}
			else if(data_returned.state == 2005){
				 return alertBox("Please insert your company's story !!!.");
			}
			else if(data_returned.state == 2006){
				 return alertBox("Please insert your physical location in the country!!!.");
			}
			else if(data_returned.state == 2007){
				 return alertBox("Please insert your country of registration!!!.");
			}
			else if(data_returned.state == 2008){
				 return alertBox("Please insert your company's registration date!!!.");
			}
			else if(data_returned.state == 2009){
				 return alertBox("Please insert your company's business email!!!.");
			}
			else{
				
			}
		 },
		 error: function(){}
	  });
}


function updateAdInfos(updateID = 0){
    UpdateStoryTime(updateID,19);
}

function closeForm_2(closeOnDone = null) {
  if(myStoryId == 1){
	openButton2 = document.getElementsByClassName("open-button-2")[0];
	document.getElementById("gaga-react-container").append(openButton2);
    document.getElementById("myForm-2").style.display = "none";
	openButton2.style.zIndex = "9";
    openButton2.style.display = "block";
  }else if(myStoryId == 2){
	openButton2 = document.getElementsByClassName("open-button-2")[0];
    document.getElementById("myModal-8").append(openButton2);
    document.getElementById("myForm-2").style.padding = "0";	
	selectCloseCheck = 2;
	openButton2.style.zIndex = "1";
    document.getElementById("myForm-2").style.display = "none";
    openButton2.style.display = "block";
  }else{
    document.getElementById("myForm-2").style.display = "none";
    openButton2 = document.getElementsByClassName("open-button-2")[0];
    openButton2.style.display = "block";	  
  }
  if(closeOnDone != null){
    openButton2.style.display = "none";
  }
  adClosure  = 2;
  
}

function closeForm_entirely() {
  document.getElementById("myForm-2").style.display = "none";
  document.getElementById("open-button-2").style.display = "none";
  document.getElementById("update-ad-actor-infos").style.display = "none";
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