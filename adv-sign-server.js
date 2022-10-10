"use strict";

var formId = document.getElementById("modal-content-signup");
var formId2 = document.getElementById("modal-content-signin");
formId.addEventListener("submit", (event) => {event.preventDefault();});
formId2.addEventListener("submit", (event) => {event.preventDefault();});

var formSubmitId = document.getElementById("signupbtn");
var formSubmitId2 = document.getElementById("signinbtn");

function clear(){
		$uid = null;
		$psk = null;

	   pkeek = [];
	   pass = [];
	   pks = null;
	   rans = [];
	   tkeeper = [];
	   tc = 0;
	   riv = 0;
	   p3 = [];
	   dd = 0;
	   i=j=k=0;
	   window.__sleep = 0;	
}

formSubmitId2.addEventListener("click", function(){
/* 	var $email = document.getElementById("input-signin-txt").value.toString().trim();
	
	var $password = document.getElementById("input-pwd-signin").value.toString().trim();
	
	var $repeatPassword = document.getElementById("input-pwd-signin-2").value.toString().trim();
	
	var fn = RK($email, $password, $repeatPassword);
	
	if(fn == -1){
		return AlertBoxInModal("Email field is empty!!!");
	}
	if(fn == -2){
		return AlertBoxInModal("Password field is empty!!!");
	}
	if(fn == -3){
		return AlertBoxInModal("Confirmation Password field is empty!!!");
	} */
	
    //window.console.log(fn);
	
	//return clear();
	
	//setTimeout(() => {
	var gagaForm = {
		gagaSignIn : {
					email : document.getElementById("input-signin-txt"),
					password : document.getElementById("input-pwd-signin"),
					repeatPassword : document.getElementById("input-pwd-signin-2"),
					remember : document.getElementById("remember-2"),
					signinbtn : "on",
					signinID : 1
		},
		gagaSignAPI : function(){
			 //AlertBoxInModal("dkdkd93393");
			 GagaResponseFormApi(null, this.gagaSignIn.email.value.toString().trim(), 
			 this.gagaSignIn.password.value.toString().trim(), 
			 this.gagaSignIn.repeatPassword.value.toString().trim(), "", "", "", "",
			 this.gagaSignIn.remember, this.gagaSignIn.signinID);
		}
	};	
	gagaForm.gagaSignAPI();
  // }, 3000);
});

formSubmitId.addEventListener("click", function(){
  
	
/* 	var $email = document.getElementById("input-signup-txt").value.toString().trim();
	
	var $password = document.getElementById("input-pwd-signup").value.toString().trim();
	
	var $repeatPassword = document.getElementById("input-pwd-signup-2").value.toString().trim();
	
 	var fn = RK($email, $password, $repeatPassword);
	
	if(fn == -1){
		return AlertBoxInModal("Email field is empty!!!");
	}
	if(fn == -2){
		return AlertBoxInModal("Password field is empty!!!");
	}
	if(fn == -3){
		return AlertBoxInModal("Confirmation Password field is empty!!!");
	} 
	 */
	var gagaForm = {
		gagaSignUp : {
			        user_name : document.getElementById("input-signup-txt-name"),
					email : document.getElementById("input-signup-txt"),
					password : document.getElementById("input-pwd-signup"),
					repeatPassword : document.getElementById("input-pwd-signup-2"),
					selectedAdIndustry : document.getElementById("selected-ad-industry"),
					selectedCompanyCountryRegistration : document.getElementById("selected-company-country"),
					adFee : document.getElementById("fee"),
					companiesOnly : document.getElementById("companiesOnly"),
					remember : document.getElementById("remember"),
					signupbtn : "on",
					signupID : 0
		},
		gagaSignAPI : function(){
			 GagaResponseFormApi(this.gagaSignUp.user_name.value.toString().trim(), 
			 this.gagaSignUp.email.value.toString().trim(), 
			 this.gagaSignUp.password.value.toString().trim(),
			 this.gagaSignUp.repeatPassword.value.toString().trim(), 
			 this.gagaSignUp.selectedAdIndustry.value.toString().trim(), 
			 this.gagaSignUp.selectedCompanyCountryRegistration.value.toString().trim(), 
			 this.gagaSignUp.adFee.value.toString().trim(), 
			 this.gagaSignUp.companiesOnly, 
			 this.gagaSignUp.remember, 
			 this.gagaSignUp.signupID);
		}
	};
	gagaForm.gagaSignAPI();
//}, 3000);
});

function getImageFileName(image, imageID){
   return GagaResponseFormApi("", "", "", "", "", "", "", "", "", 2, image, imageID);
}

function AlertBoxInModal(alertErrorData = "", alertID = 0){
	document.getElementById("info-error").innerHTML = alertErrorData;
	document.getElementById("alert-box").style.display = "block";
	setTimeout(() => {
		document.getElementById("info-error").innerHTML = "";
		document.getElementById("alert-box").style.display = "none";		
	}, 2000);
}

function GagaResponseFormApi(user_name, email, password, repeatPassword, 
selectedAdIndustry, selectedCompanyCountryRegistration, adFee, companiesOnly, remember, signID, image = null, imageId = ""){
	var form = new FormData();
	form.append("email", email);
	var pswd, rpswd = "";
	pswd = Salt(password);
	rpswd = Salt(repeatPassword);
	
	if(remember.checked == true){
		remember = "1";
	}
	else{
		remember = "0";
	}
	form.append("remember", remember);
	form.append("pswd", JSON.stringify(pswd));
	form.append("rpswd", JSON.stringify(rpswd));
	form.append("password", transportThis(pswd[0]));
	form.append("repeatPassword", transportThis(rpswd[0])); 
	form.append("signID", signID);
	
/* 	window.console.log(pswd);
	window.console.log(rpswd);
	window.console.log(transportThis(pswd[0]));
	window.console.log(transportThis(rpswd[0]));
	return; */
	
	if(signID == 0){
		if(user_name == ""){
			return AlertBoxInModal("Username field is empty!!!", 0);
		}	
		if(email == ""){
			return AlertBoxInModal("Email field is empty!!!");
		}
		if(password == ""){
			return AlertBoxInModal("Password field is empty!!!");
		}else{
			
		}
		if(repeatPassword == ""){
			return AlertBoxInModal("Confirmation Password field is empty!!!");
		}

		if(password != repeatPassword){
			return AlertBoxInModal("Please passwords mismatched !!!");
		}        
        
		RK(password, repeatPassword);
		
		var $uuid = $uid;
		var $pssk = $psk;
		
		clear();

	    form.append("uid", $uuid);
	    form.append("psk", $pssk);
	    form.append("username", user_name);

		if(companiesOnly.checked == true){
			companiesOnly = "1";
			if(selectedAdIndustry != "Select Your Industry:"){
			  form.append("selectedAdIndustry", selectedAdIndustry);
			}else{
			  return AlertBoxInModal("Please select your ad industry or select 'All'");
			}
/* 			if(selectedCompanyCountryRegistration == "Country of Registration"){
				return AlertBoxInModal("Please select your country.");
			} */
			adFee = "$0.00";
			if(adFee == ""){
				return AlertBoxInModal("Please provide your chargeable fee");
			}
		}else{
			if(selectedAdIndustry != "Select Your Industry:"){
			  form.append("selectedAdIndustry", selectedAdIndustry);
			}else{
			  return AlertBoxInModal("Please select your ad industry or select 'All'");
			}
/* 			if(selectedCompanyCountryRegistration != "Country of Registration"){
				return AlertBoxInModal("Please only companies are allowed to select a country.");
			} */
			companiesOnly = "0";
		}		
		//return window.console.log(companiesOnly);

		//return window.console.log(companiesOnly);
		//form.append("CountryRegistration", selectedCompanyCountryRegistration);
		if(document.getElementById("advertizersOnly").checked == true){
		  adFee = "$0.00";
		  if(companiesOnly == "0"){
			 companiesOnly = "2";
			 if(adFee == ""){
				return AlertBoxInModal("Please provide your chargeable fee");
			 }
		  }
		}else{
		  if(companiesOnly == "0"){
			if(adFee == ""){
				return AlertBoxInModal("Please provide your chargeable fee");
			}
		  }
		}
		
		form.append("companiesOnly", companiesOnly);
		form.append("adFee", adFee);
	    form.append("RRND", didcx_random_number_generator(0, 228828281919191).toString());
	    form.append("signupbtn", "on");
	}else if(signID == 1){
		if(email == ""){
			return AlertBoxInModal("Email field is empty!!!");
		}
		
		if(password == ""){
			return AlertBoxInModal("Password field is empty!!!");
		}else{
			
		}
		if(repeatPassword == ""){
			return AlertBoxInModal("Confirmation Password field is empty!!!");
		}

		if(password != repeatPassword){
			return AlertBoxInModal("Please passwords mismatched !!!");
		}    

		//RK(password, repeatPassword);
		
		var $uuid = $uid;
		var $pssk = $psk;

        clear();
		
		//setTimeout(() => {
	    //window.console.log($uuid);
	    //window.console.log($pssk);
		
	    form.append("uid", $uuid);
	    form.append("psk", $pssk);
		form.append("signinbtn", "on");//}, 2000);
	}else{
		//window.console.log(imageId);
	    if(getCookieValue("GAGA_RESPONSE") != imageId){
			AlertBoxInModal("Invalid Request Method");
			//return window.location.replace("https://www.didcy.com");
			return window.location.replace("https://www.didcy.com");
		}
		//form.append("GAGA_CMPO", getCookieValue("GAGA_CMPO").toString().trim());
		form.append("imageId", imageId);
	}
	
	if(signID == 0 || signID == 1){
		if($__4958484_1929_cookie_terms_policy_accept == 0){
		  return AlertBoxInModal("Cookie not accepted &darr;");
		}		
	}
/* 		window.__sleep = 0;
		sleeper = 0; */

	$.ajax({
		type: "POST",
		url: "adv-sign-server.php",
		cache: false,
		contentType: false,
		processData: false,
		data: form,
		success: function(result){
			//window.console.log(result);
			//return;
			var data_returned = JSON.parse(result);
			if(data_returned.state == 0){
				return AlertBoxInModal("Connection to Server Error!!!.");
			}
			else if(data_returned.state == 1){
				return AlertBoxInModal("Connection to Database Error!!!.");
			}
			else if(data_returned.state == 2){
				return AlertBoxInModal("User already exists!!!.");
			}
			else if(data_returned.state == 3){
				return AlertBoxInModal("Data insertion Error!!!");
			}
			else if(data_returned.state == 4){
				document.cookie = "GAGA_RESPONSE="+data_returned.cookie_id+";path=/";
				document.cookie = "GAGA_CMPO="+data_returned.companiesOnly+";path=/";
				document.cookie = "GAGA_ADI="+data_returned.adInterest+";path=/";
				document.cookie = "GAGA_RM="+data_returned.rememberMe+";path=/";
                 window.location.href = "adv-main.php?drim="+data_returned.cookie_id+
				 "";
			}
			else if(data_returned.state == 5){
				//return AlertBoxInModal("Cookie not enabled!!!");
				return window.location.replace("https://www.didcy.com");
			}
			else if(data_returned.state == 6){
				return AlertBoxInModal("Please click on the Sign Up!!!");
			}
			else if(data_returned.state == 7){
				return AlertBoxInModal("Email Input Field Empty!!!");
			}
			else if(data_returned.state == 8){
				//if(getCookieValue("GAGA_RELATIONS") != ""){
				 //window.console.log(data_returned.cookie_id);
				 //return;
				 document.cookie = "GAGA_RESPONSE="+data_returned.cookie_id+";";
				 document.cookie = "GAGA_CMPO="+data_returned.companiesOnly+";path=/";
				 document.cookie = "GAGA_ADI="+data_returned.adInterest+";path=/";
				 document.cookie = "GAGA_RM="+data_returned.rememberMe+";path=/";
                 window.location.href = "adv-main.php?drim="+data_returned.cookie_id+
				 "";//"&companiesOnly="+data_returned.companiesOnly+"&&_rid=39393938228282"+"&39300293939000";
	            //}
				//return AlertBoxInModal("Signin was successful.");
			}
			else if(data_returned.state == 9){
			    if(getCookieValue("GAGA_CMPO") == 0){
			      image.src = "adv.actors.profiles/"+data_returned.src;
				}else{
				  image.src = "adv.company.profiles/"+data_returned.src;	
				}
				if(data_returned.src == "" || data_returned.src == null || data_returned.src == "null"){
					image.style.display = "none";
					return;
				}
			    image.style.display = "block";
				image.onclick = function(){
				  // Get the modal
				  var modal = document.getElementById("myModal-1");

				  // Get the image and insert it inside the modal - use its "alt" text as a caption
				  //var img = document.getElementById("");
				  var modalImg = document.getElementById("img01-1");
				  var captionText = document.getElementById("caption-1");
				  
			      modal.style.display = "block";
			 
			      modalImg.src = image.src;
			      captionText.innerHTML = "Didcy Profile";	
                  modalImg.value = '8';				  
				}
			}
			else if(data_returned.state == 10){
				return window.console.log("Image Loading Failed!");
			}
			else if(data_returned.state == 11){
				return AlertBoxInModal("User not exists!!!");
			}
			else if(data_returned.state == 12){
				return AlertBoxInModal("User not exists!!!");
			}
			else if(data_returned.state == 20){
				return AlertBoxInModal("User Name Input Field Empty !!!");
			}
			else if(data_returned.state == 21){
				return AlertBoxInModal("Password Input Field Empty!!!");
			}
			else if(data_returned.state == 22){
				return AlertBoxInModal("Repeat Password Input Field Empty!!!");
			}
			else if(data_returned.state == 23){
				return AlertBoxInModal("Please your ad industry or select 'All' !!!");
			}
			else if(data_returned.state == 210){
				return  document.write("Invalid Request Method");
			}
			else if(data_returned.state == 303334){
				return  AlertBoxInModal("Chat Error!!!");
			}
			else{
				//return AlertBoxInModal("dkdkkddk");
			}
			
		},
		error: function(){}
	});
}

document.getElementById("companiesOnly").addEventListener("click", () => {
	if(document.getElementById("companiesOnly").checked == true){
		document.getElementById("advertizers").style.display = "none";
		document.getElementById("advertizersOnly").style.display = "none";
		document.getElementById("advOnly").style.display = "none";
		document.getElementById("fee-label").style.display = "none";
		document.getElementById("fee").style.display = "none";
	}
	else{
	    document.getElementById("advertizers").style.display = "block";
	    document.getElementById("advertizersOnly").style.display = "block";
	    document.getElementById("advOnly").style.display = "block";
	    document.getElementById("fee-label").style.display = "none";
	    document.getElementById("fee").style.display = "none";
	}
});

document.getElementById("advertizersOnly").addEventListener("click", () => {
	if(document.getElementById("advertizersOnly").checked == true){
		document.getElementById("companies").style.display = "none";
		document.getElementById("cmpOnly").style.display = "none";
		document.getElementById("companiesOnly").style.display = "none";
	}
	else{
	    document.getElementById("companies").style.display = "block";
	    document.getElementById("cmpOnly").style.display = "block";
	    document.getElementById("companiesOnly").style.display = "block";
	}
});