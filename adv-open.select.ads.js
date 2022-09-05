"use strict";

var adForms  = 0, adClosure = 0, previousCount = 0, ads_count = 0, nextCount = 0, 
psd_global = null;
/* function openForm(access_path = '') {
 if(access_path == 'p'){
  if(isNaN(document.getElementById("open-button").value) == false){

	 ads_count -= 1;
  }
 }else{
  if(isNaN(document.getElementById("open-next-button").value) == false){

  }	 
 }
  document.getElementById("myForm").style.display = "block";
  adClosure = 0;
} */



function openForm(access_path = 0) {
 if(access_path == 0){
  document.getElementById("myForm").style.display = "block";
  if(adsFilesLength > 1){
	  document.getElementById("next").style.display = "block";
	  document.getElementById("step-back-by-1").style.display = "block";
	  document.getElementById("cancel").style.display = "none";
  }else{
	  document.getElementById("cancel").style.display = "block";  
	  document.getElementById("next").style.display = "none";
	  document.getElementById("step-back-by-1").style.display = "none";
  }
 }else{
  document.getElementById("myForm-21").style.display = "block";
  if(adsFilesLength > 1){
	  document.getElementById("next-21").style.display = "block";
	  document.getElementById("step-back-by-21").style.display = "block";
	  document.getElementById("cancel-21").style.display = "none";
  }else{
	  document.getElementById("cancel-21").style.display = "block";  
	  document.getElementById("next-21").style.display = "none";
	  document.getElementById("step-back-by-21").style.display = "none";
  }	  
 }
  adClosure = 0;
}

function openForm12(openId = 0){
 if(openId == 0){
    document.getElementById("myForm").style.display = "block";
 }else{
  document.getElementById("myForm-21").style.display = "block"; 
  document.getElementsByClassName("open-button")[0].style.display = "none";
 }
  adClosure = 0;
}

function closeForm(closeId = 0) {
  if(closeId == 0){
    document.getElementById("myForm").style.display = "none";
   
   if(adsFilesLength == 1){
	 document.getElementById("open-button").style.display = "block"; 
   }	
	/* document.getElementById("open-next-button").style.display = "block"; */
  }else{
    document.getElementById("myForm-21").style.display = "none";
   
   if(adsFilesLength == 1){
	 document.getElementById("open-button").style.display = "block"; 
   }		  
  }
  adClosure  = 1;
  if(adsFilesLength != 1){
    $fileSet = 0;
  }
}

function closeAdFormEntirely(entireId = 0){
   if(entireId == 0){
	 document.getElementById("myForm").style.display = "none";
	 document.getElementById("open-button").style.display = "none";	
   }else{
	 document.getElementById("myForm-21").style.display = "none";
	 document.getElementById("open-button").style.display = "none";		   
   }
	 /* document.getElementById("open-next-button").style.display = "none"; */	
}

function GetSingleProductServiceDescription(sps = 0){
	if(sps == 0){
	  var productServiceInfo = {
		  productServiceEmail : document.getElementById("email"),
		  productServiceTelephone : document.getElementById("tel"),
		  productServiceLocation : document.getElementById("psl"),
		  productServiceApprovedBy : document.getElementById("apb"),
		  productServiceDescription : document.getElementById("psd"),
		  productServiceCommencementDate : document.getElementById("pscd"),
		  productServiceElapsingDate : document.getElementById("psed"),
		  productServiceCommencementTime : document.getElementById("pss"),
		  productServiceElapsingTime : document.getElementById("pset"),
		  gagaShipmentDate : "",
		  gagaShipmentTime : "",
		  productServiceCountry : document.getElementById("pscountry"),
		  productServiceCompany : document.getElementById("pscompany"),
		  productServiceAudioImage: document.getElementById("audio-ad-image"),
		  productServiceAudioInfos: [],
		  productServicePrivacy: document.getElementById("ps-privacy"),
		  productServiceId : "", 
		  productServiceType: document.getElementById("uploads")
	  };
	 
	  productServiceInfo.gagaShipmentDate = SetAutomaticDate();
	  productServiceInfo.gagaShipmentTime = SetAutomaticTime();
	  /*if(ads_count == 0){
		  productServiceInfo.productServiceType = 
		  document.getElementById("uploads").files[ads_count].type;
	  }else{
		  productServiceInfo.productServiceType = 
		  document.getElementById("uploads").files[ads_count+1].type;
		  window.console.log("kdkdk");
	  }*/
	  
	  if(productServiceInfo.productServiceId != ""){
		  productServiceInfo.productServiceId = "";
	      productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }else{
		  productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }
	  
	  productServiceInfo.productServiceId += ads_count;
	  
	  ads_count = 0;
	  adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
	  return AlertBoxInModal("Last Form reached");
	}else{
	  var productServiceInfo = {
		  productServiceEmail : document.getElementById("email-21"),
		  productServiceTelephone : document.getElementById("tel-21"),
		  productServiceLocation : document.getElementById("psl-21"),
		  productServiceApprovedBy : document.getElementById("apb-21"),
		  productServiceDescription : document.getElementById("psd-21"),
		  productServiceCommencementDate : document.getElementById("pscd-21"),
		  productServiceElapsingDate : document.getElementById("psed-21"),
		  productServiceCommencementTime : document.getElementById("pss-21"),
		  productServiceElapsingTime : document.getElementById("pset-21"),
		  gagaShipmentDate : "",
		  gagaShipmentTime : "",
		  productServiceCountry : document.getElementById("pscountry-21"),
		  productServiceCompany : document.getElementById("pscompany-21"),
		  productServiceAudioImage: document.getElementById("audio-ad-image-21"),
		  productServiceAudioInfos: [],
		  productServicePrivacy: document.getElementById("ps-privacy-21"),
		  productServiceId : "",
		  productServiceType: document.getElementById("uploads-2-ad-image-records")
	  };
	  
	  productServiceInfo.gagaShipmentDate = SetAutomaticDate();
	  productServiceInfo.gagaShipmentTime = SetAutomaticTime();
	  if(productServiceInfo.productServiceId != ""){
		  productServiceInfo.productServiceId = "";
	      productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }else{
		  productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }
	  
	  productServiceInfo.productServiceId += ads_count;
	  
	  ads_count = 0;
	  adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
	  return AlertBoxInModal("Last Form reached");
	}
}

function CloseMain(closeId = 0){
   if(closeId == 0){
	if(isNaN(document.getElementById("cancel").value) == true){
		document.getElementById("cancel").value = ads_count.toString();
	    closeForm(0);
	}else{
		  ads_count+= 1;
		  adForms = ads_count;
		  if(adsFilesLength != 1){
		    document.getElementById("open-next-button").value = ads_count.toString();
		  }else{
			 GetSingleProductServiceDescription(0);
		  }
		  //eraseProductServiceFormInfo(document.forms["myForm"], 0);
		  closeForm(0);
		  ads_count = 0;
	}
   }else{
	if(isNaN(document.getElementById("cancel-21").value) == true){
		document.getElementById("cancel-21").value = ads_count.toString();
	    closeForm(1);
	}else{
		/* if(adsFilesLength != 1){ */
		  ads_count+= 1;
		  adForms = ads_count;
		  if(adsFilesLength != 1){
		    document.getElementById("open-next-button").value = ads_count.toString();
		  }else{
			 GetSingleProductServiceDescription(1);
		  }
		  //eraseProductServiceFormInfo(document.forms["myForm-21"], 1);
		  closeForm(1);
		  //ads_count = 0;
/* 		}else{
		  closeForm(1);
		} */
	}	   
   }
}


function closeForm2(closeId = 0) {
 if(closeId == 0){
  document.getElementById("myForm").style.display = "none";
  document.getElementsByClassName("open-button")[0].style.display = "block";
 }else{
  document.getElementById("myForm-21").style.display = "none";
  document.getElementsByClassName("open-button")[0].style.display = "block";
 }
 adClosure  = 1;
 //$fileSet = 0;
}

function closeAdFormEntirely2(){
	 document.getElementById("myForm").style.display = "none";
	 document.getElementById("open-button").style.display = "none";	
	// document.getElementById("uploads").value = "";
}

function CloseMain2(closeId = 0){
  if(closeId == 0){
	if(adsFilesLength > 1){
		adsDescriptionContainer[ads_count] = GetProductServiceDescription(psd_global);
		type = document.getElementById("uploads").files[ads_count].type.slice(0, 5);
        if(type == "audio"){
		  audioIn = 1;
		  audioImageContainer[audioTypeCount] = type;
		  audioFetch = 1;
	    }else{
		  videoFetch = 1;
		}
		AlertBoxInModal("Last Form reached");
		//window.console.log(JSON.stringify([adsDescriptionContainer, adsDescriptionContainer.length]));
		closeForm2(0);
	}
  }else{
	adsDescriptionContainer[ads_count] = GetProductServiceDescription(psd_global);
	AlertBoxInModal("Last Form reached");
	//window.console.log(JSON.stringify([adsDescriptionContainer, adsDescriptionContainer.length]));
    closeForm2(1);	  
  }	
}

function GetProductServiceDescription(psd = null){
	var __psd = {
		email : psd.productServiceEmail.value.toString(),
		telephone : psd.productServiceTelephone.value.toString(),
		location : psd.productServiceLocation.value.toString(),
		approvedBy : psd.productServiceApprovedBy.value.toString(),
	    description : psd.productServiceDescription.value.toString(),
	    commencementDate : psd.productServiceCommencementDate.value.toString(),
	    elapsingDate : psd.productServiceElapsingDate.value.toString(),
	    commencementTime : psd.productServiceCommencementTime.value.toString(),
	    elapsingTime : psd.productServiceElapsingTime.value.toString(),
	    shipmentDate : psd.gagaShipmentDate.toString(),
	    shipmentTime : psd.gagaShipmentTime.toString(),
	    country : psd.productServiceCountry.value.toString(),
	    company : psd.productServiceCompany.value.toString(),
		audioAdImage : psd.productServiceAudioImage.files[0],
		audioInfos: [], 
		privacy: psd.productServicePrivacy.value.toString(),
		psid : psd.productServiceId.toString(),
		type: psd.productServiceType.files[ads_count].type.slice(0, 5).toString()
		
	}
	
	if(typeof __psd.audioAdImage !== typeof undefined){
		__psd.audioInfos[0] = psd.productServiceAudioImage.files[0].name;
		__psd.audioInfos[1] = psd.productServiceAudioImage.files[0].type;
		__psd.audioInfos[2] = psd.productServiceAudioImage.files[0].size;
		//__psd.audioAdImage = psd.productServiceAudioImage.files[0];
	}else{
		__psd.audioAdImage = "undefined";
		__psd.audioInfos = "null";
	}
	
	return __psd;
}

function Next(nextId = 0){
   if(nextId == 0){
	  var productServiceInfo = {
		  productServiceEmail : document.getElementById("email"),
		  productServiceTelephone : document.getElementById("tel"),
		  productServiceLocation : document.getElementById("psl"),
		  productServiceApprovedBy : document.getElementById("apb"),
		  productServiceDescription : document.getElementById("psd"),
		  productServiceCommencementDate : document.getElementById("pscd"),
		  productServiceElapsingDate : document.getElementById("psed"),
		  productServiceCommencementTime : document.getElementById("pss"),
		  productServiceElapsingTime : document.getElementById("pset"),
		  gagaShipmentDate : "",
		  gagaShipmentTime : "",
		  productServiceCountry : document.getElementById("pscountry"),
		  productServiceCompany : document.getElementById("pscompany"),
		  productServiceAudioImage: document.getElementById("audio-ad-image"),
		  productServiceAudioInfos: [],
		  productServicePrivacy: document.getElementById("ps-privacy"),
		  productServiceId : "",
		  productServiceType: document.getElementById("uploads")
	  };

	  productServiceInfo.gagaShipmentDate = SetAutomaticDate();
	  productServiceInfo.gagaShipmentTime = SetAutomaticTime();

	  /*if(ads_count == 0){
		  productServiceInfo.productServiceType = 
		  document.getElementById("uploads").files[ads_count].type;
	  }else{
		  productServiceInfo.productServiceType = 
		  document.getElementById("uploads").files[ads_count+1].type;
		  window.console.log("kdkdk");
	  }*/
  
	  if(productServiceInfo.productServiceId != ""){
		  productServiceInfo.productServiceId = "";
	      productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }else{
		  productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }
	  
	  productServiceInfo.productServiceId += ads_count;
	  
	if((adsFilesLength - 1) == ads_count){
	  
	 // document.getElementById("uploads").files[adsFilesLength - 1].type;
	  //window.console.log("kdkdk--");
		  
	  adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
      if(type == "audio"){
		audioIn = 1;
		audioImageContainer[audioTypeCount] = type;
		  audioFetch = 1;
	    }else{
		  videoFetch = 1;
		}
	  nex = ads_count;
	  return AlertBoxInModal("Last Form reached");
	}
	{
		adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
		
		type = document.getElementById("uploads").files[ads_count].type.slice(0, 5);
		
        if(type == "audio"){
		   audioIn = 1;
		   audioImageContainer[audioTypeCount] = type;
		   audioTypeCount++;
		  audioFetch = 1;
	    }else{
		   if(videoCount == 1){
			  Extract(document.getElementById("uploads"));
			  videoFetch = 1;
			  videoCount++;
		   }
		}

	}
	ads_count+= 1;
	nex = ads_count;
	//descriptionLength += 1;
	adForms = ads_count;	
	eraseProductServiceFormInfo(document.forms["myForm"], 0);
	document.getElementById("myForm").style.display = "none";
	
	setTimeout(()=>{
/* 		if(adsDescriptionNextPointer != 0){
		  if(adsDescriptionNextPointer[ads_count-1] != undefined){
	    	resetNextProductServiceFormInfo(document.forms["myForm"], adsDescriptionContainer, adsDescriptionNextPointer, ads_count);
	      }
		} */

		type = document.getElementById("uploads").files[ads_count].type.slice(0, 5);
			  
		if(type == 'audio'){
			document.getElementById("audio-ad-image").style.display = "block";
		}else{
			document.getElementById("audio-ad-image").style.display = "none";
		}

		if((adsFilesLength - 1) == ads_count){
			document.getElementById("next").style.display = "none";
			document.getElementById("done").style.display = "block";
			psd_global = productServiceInfo;
		}
		if(adsDescriptionContainer[ads_count] != undefined){
			resetNextProductServiceFormInfo(document.forms["myForm"], 0, adsDescriptionContainer, ads_count);
		}
		document.getElementById("myForm").style.display = "block";
		adsDescriptionNextPointer[ads_count-1] = ads_count;
	}, 1000);
   }else{
	  var productServiceInfo = {
		  productServiceEmail : document.getElementById("email-21"),
		  productServiceTelephone : document.getElementById("tel-21"),
		  productServiceLocation : document.getElementById("psl-21"),
		  productServiceApprovedBy : document.getElementById("apb-21"),
		  productServiceDescription : document.getElementById("psd-21"),
		  productServiceCommencementDate : document.getElementById("pscd-21"),
		  productServiceElapsingDate : document.getElementById("psed-21"),
		  productServiceCommencementTime : document.getElementById("pss-21"),
		  productServiceElapsingTime : document.getElementById("pset-21"),
		  gagaShipmentDate : "",
		  gagaShipmentTime : "",
		  productServiceCountry : document.getElementById("pscountry-21"),
		  productServiceCompany : document.getElementById("pscompany-21"),
		  productServiceAudioImage: document.getElementById("audio-ad-image-21"),
		  productServiceAudioInfos: [],
		  productServicePrivacy: document.getElementById("ps-privacy-21"),
		  productServiceId : ""
	  };
	  
	  productServiceInfo.gagaShipmentDate = SetAutomaticDate();
	  productServiceInfo.gagaShipmentTime = SetAutomaticTime();
	  if(productServiceInfo.productServiceId != ""){
		  productServiceInfo.productServiceId = "";
	      productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }else{
		  productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }
	  
	  productServiceInfo.productServiceId += ads_count;
	  
	if((adsFilesLength - 1) == ads_count){
	  adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
	  nex = ads_count;
	  return AlertBoxInModal("Last Form reached");
	}
	{
		adsDescriptionContainer[ads_count] = GetProductServiceDescription(productServiceInfo);
	}
	ads_count+= 1;
	//descriptionLength += 1;
	nex = ads_count;
	adForms = ads_count;	
	eraseProductServiceFormInfo(document.forms["myForm-21"], 1);
	document.getElementById("myForm-21").style.display = "none";
	setTimeout(()=>{
/* 		if(adsDescriptionNextPointer != 0){
		  if(adsDescriptionNextPointer[ads_count-1] != undefined){
	    	resetNextProductServiceFormInfo(document.forms["myForm"], adsDescriptionContainer, adsDescriptionNextPointer, ads_count);
	      }
		} */
		if((adsFilesLength - 1) == ads_count){
			document.getElementById("next-21").style.display = "none";
			document.getElementById("done-21").style.display = "block";
			psd_global = productServiceInfo;
		}
		if(adsDescriptionContainer[ads_count] != undefined){
			resetNextProductServiceFormInfo(document.forms["myForm-21"], 1, adsDescriptionContainer, ads_count);
		}
		document.getElementById("myForm-21").style.display = "block";
		adsDescriptionNextPointer[ads_count-1] = ads_count;
	}, 1000);	   
   }
	//closeForm();
}

function Previous(previousId = 0){
  if(previousId == 0){
	document.getElementById("done").style.display = "none";
	if(ads_count == 0){
		//adsDescriptionContainer.pop();
		openForm(0);
		AlertBoxInModal("End of Forms");
		audioTypeCount = 0;
		prev = ads_count;
		return ads_count;
	}else if(ads_count < 0){
		ads_count = 0;
		audioTypeCount = 0;
		prev = ads_count;
		AlertBoxInModal("End of Forms");
		return ads_count;		
	}
	else{
		eraseProductServiceFormInfo(document.forms["myForm"], 0);
		resetPreviousProductServiceFormInfo(document.forms["myForm"], 0, adsDescriptionContainer, ads_count);
		//adsDescriptionContainer.pop();
		ads_count -= 1;
		//audioTypeCount -= 1;
		prev = ads_count;
		closeAdFormEntirely(0);
		type = document.getElementById("uploads").files[ads_count].type.slice(0, 5);
        if(type != "audio"){
			 if(audioImageContainer.length > 0){
			   document.getElementById("audio-ad-image").style.display = "none";
			   audioIn = 1;
			   audioImageContainer.pop();
			   if(audioTypeCount > 0){
				 audioTypeCount -= 1;
			   }
			 }
			 videoFetch = 1;
			 document.getElementById("audio-ad-image").style.display = "none";
		}else{
			 if(audioImageContainer.length > 0){
			   document.getElementById("audio-ad-image").style.display = "block";
			   audioIn = 1;
			   if(audioTypeCount > 0){
				 audioTypeCount -= 1;
			   }
			   audioImageContainer.pop();
			 }
			 audioFetch = 1;
			 document.getElementById("audio-ad-image").style.display = "block";
		}
		setTimeout(()=>{
			openForm(0);
		}, 1000);
		return ads_count;
	}
  }else{
	document.getElementById("done-21").style.display = "none";
	if(ads_count == 0){
		//adsDescriptionContainer.pop();
		openForm(1);
		AlertBoxInModal("End of Forms");
		prev = ads_count;
		return ads_count;
	}else if(ads_count < 0){
		ads_count = 0;
		AlertBoxInModal("End of Forms");
		prev = ads_count;
		return ads_count;		
	}
	else{
		eraseProductServiceFormInfo(document.forms["myForm-21"], 1);
		resetPreviousProductServiceFormInfo(document.forms["myForm-21"], 1, adsDescriptionContainer, ads_count);
		//adsDescriptionContainer.pop();
		ads_count -= 1;
		prev = ads_count;
		closeAdFormEntirely(1);
		setTimeout(()=>{
			openForm(1);
		}, 1000);
		return ads_count;
	}	  
  }
}

function eraseProductServiceFormInfo(form = null, formId = 0){
	if(formId == 0){
		form["email"].value = "";
		form["tel"].value = "";
		form["psl"].value = "";
		form["apb"].value = "";
		form["psd"].value = "";
		form["pscd"].value = "";
		form["psed"].value = "";
		form["pss"].value = "";
		form["pset"].value = "";
		form["pscompany"].value = "";
		form["pscountry"].selectedIndex = 256;
		form["audio-ad-image"].value = "";
		form["ps-privacy"].selectedIndex = 0;
	}else{
		form["email-21"].value = "";
		form["tel-21"].value = "";
		form["psl-21"].value = "";
		form["apb-21"].value = "";
		form["psd-21"].value = "";
		form["pscd-21"].value = "";
		form["psed-21"].value = "";
		form["pss-21"].value = "";
		form["pset-21"].value = "";
		//form["pscompany-21"].value = "Country of Production";
		form["pscompany-21"].value = "";
		form["pscountry-21"].selectedIndex = 256;		
		form["audio-ad-image-21"].value = "";
		form["ps-privacy-21"].selectedIndex = 0;
	}
	/* form[""].value = ""; */
	return form;
}

function resetPreviousProductServiceFormInfo(form = null, formId = 0, psd = null, psd_location = null, ads_count = 0){
	//window.console.log(psd+"<br/>"+psd_location);
	if(formId == 0){
		form["email"].value = psd[psd_location-1].email;
		form["tel"].value = psd[psd_location-1].telephone;
		form["psl"].value = psd[psd_location-1].location;
		form["apb"].value = psd[psd_location-1].approvedBy;
		form["psd"].value = psd[psd_location-1].description;
		form["pscd"].value = psd[psd_location-1].commencementDate;
		form["psed"].value = psd[psd_location-1].elapsingDate;
		form["pss"].value = psd[psd_location-1].commencementTime;
		form["pset"].value = psd[psd_location-1].elapsingTime;
		form["pscompany"].value = psd[psd_location-1].company;
		form["pscountry"].value = psd[psd_location-1].country;
		form["ps-privacy"].value = psd[psd_location-1].privacy;
		//form["audio-ad-image"].name = psd[psd_location-1].audioAdImage.name;
	}else{
		form["email-21"].value = psd[psd_location-1].email;
		form["tel-21"].value = psd[psd_location-1].telephone;
		form["psl-21"].value = psd[psd_location-1].location;
		form["apb-21"].value = psd[psd_location-1].approvedBy;
		form["psd-21"].value = psd[psd_location-1].description;
		form["pscd-21"].value = psd[psd_location-1].commencementDate;
		form["psed-21"].value = psd[psd_location-1].elapsingDate;
		form["pss-21"].value = psd[psd_location-1].commencementTime;
		form["pset-21"].value = psd[psd_location-1].elapsingTime;
		form["pscompany-21"].value = psd[psd_location-1].company;
		form["pscountry-21"].value = psd[psd_location-1].country;
		form["ps-privacy-21"].value = psd[psd_location-1].privacy;
		//form["audio-ad-image-21"].name = psd[psd_location-1].audioAdImage.name;
	}
	/* form[""].value = ""; */
	return form;
}

function resetNextProductServiceFormInfo(form = null, formId = 0, psd = null, psd_location = null){
	//window.console.log(psd+"<br/>"+psd_location);
	if(formId == 0){
		form["email"].value = psd[psd_location].email; //+1
		form["tel"].value = psd[psd_location].telephone;
		form["psl"].value = psd[psd_location].location;
		form["apb"].value = psd[psd_location].approvedBy;
		form["psd"].value = psd[psd_location].description;
		form["pscd"].value = psd[psd_location].commencementDate;
		form["psed"].value = psd[psd_location].elapsingDate;
		form["pss"].value = psd[psd_location].commencementTime;
		form["pset"].value = psd[psd_location].elapsingTime;
		form["pscompany"].value = psd[psd_location].company;
		form["pscountry"].value = psd[psd_location].country;
		form["ps-privacy"].value = psd[psd_location].privacy;
		//form["audio-ad-image"].name = psd[psd_location].audioAdImage.name;	
	}else{
		form["email-21"].value = psd[psd_location].email; //+1
		form["tel-21"].value = psd[psd_location].telephone;
		form["psl-21"].value = psd[psd_location].location;
		form["apb-21"].value = psd[psd_location].approvedBy;
		form["psd-21"].value = psd[psd_location].description;
		form["pscd-21"].value = psd[psd_location].commencementDate;
		form["psed-21"].value = psd[psd_location].elapsingDate;
		form["pss-21"].value = psd[psd_location].commencementTime;
		form["pset-21"].value = psd[psd_location].elapsingTime;
		form["pscompany-21"].value = psd[psd_location].company;
		form["pscountry-21"].value = psd[psd_location].country;	
		form["ps-privacy-21"].value = psd[psd_location].privacy;	
        //form["audio-ad-image-21"].name = psd[psd_location].audioAdImage.name;
	}
	/* form[""].value = ""; */
	return form;
}

function CloseForm(formContainer = null, form = null, closeId = 0){
  if(closeId == 0){
	form["email"].value = "";
	form["tel"].value = "";
	form["psl"].value = "";
	form["apb"].value = "";
	form["psd"].value = "";
	form["pscd"].value = "";
	form["psed"].value = "";
	form["pss"].value = "";
	form["pset"].value = "";
	form["pscompany"].value = "";
	//form["pscountry"].value = "Country of Production";
	form["pscountry"].selectedIndex = 256;
	form["ps-privacy"].selectedIndex = 0;
	document.getElementById("uploads").value = "";
	form["audio-ad-image"].value = "";
    formContainer.style.display = "none";	
  }else{
	form["email-21"].value = "";
	form["tel-21"].value = "";
	form["psl-21"].value = "";
	form["apb-21"].value = "";
	form["psd-21"].value = "";
	form["pscd-21"].value = "";
	form["psed-21"].value = "";
	form["pss-21"].value = "";
	form["pset-21"].value = "";
	form["pscompany-21"].value = "";
	//form["pscountry-21"].value = "Country of Production";
	form["pscountry-21"].selectedIndex = 256;
	form["ps-privacy-21"].selectedIndex = 0;
	form["audio-ad-image-21"].value = "";
	document.getElementById("uploads").value = "";
	document.getElementById("uploads-2-ad-image-records").value = "";
    formContainer.style.display = "none";		  
  }
  blobContainer2 = [];
  blobContainer = [];
  filenames = [];
  filenames2 = [];
  containUpVid = [];
  genContainer = [];
  framePS = 0;
  framePSx = 0;
  ins = 0;
  upvid = null;
  videoType = 0;
  audioImageContainer = [];  
  document.getElementById("audio-ad-image").style.display = "none";
  document.getElementById("audio-ad-image-21").style.display = "none";
  
  document.getElementById("cancel").value = "#";
  document.getElementById("cancel-21").value = "#";
  //if(adsFilesLength == 1){
	document.getElementById("open-button").style.display = "none";  
	document.getElementById("done").style.display = "none";
	$fileSet = 0;
  //}
  adForms  = 0, adClosure = 0, previousCount = 0, ads_count = 0, nextCount = 0, 
  psd_global = null;
  adsDescriptionContainer = [];
  adsFilesLength = 0;
  type = null;
}