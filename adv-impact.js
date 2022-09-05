"use strict";

function AdvImpactLink(){
    return document.getElementById("impact-container").style.display = "block";
}

document.getElementById("impact").addEventListener("click", (event) => {event.preventDefault();});

var span2i = document.getElementsByClassName("close-1")[0];
var myModal_1i = document.getElementById("myModal-1");
var img01_1i = document.getElementById("img01-1");
var caption1i = document.getElementById("caption-1");
var empty_ = [];
var impactContainer_ = null, selectIndustryCategory = 0;
var selectIndustryType = 0;

var img2 = document.getElementById("impact");

img2.onclick = function(){
/* 	ServicesNotAvailable('Industry Services', 
	'Industry Service report is at the back side. Please tab/put the mouse on this box to view the report.');
	return; */
	Impact(["No Industry", "Tech", "Electronics", "Food", "Entertainment", "Education", 
	"Health", "Mechanics", "All", "Real Estates", "Resort"], ["no-industry", "didcy-tech", "didcy-electronics", "didcy-agriculture",  
	 "didcy-entertainment", "didcy-education", "didcy-health", 
	"didcy-mechanics", "didcy-all", "didcy-real-estates", "didcy-resort"]);
	//["Graphics", "Arts", "Agriculture", "Foods"]
}

function DisableIndustrialFeaturesUsing2(features, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10){
	if(i1 == 0){features[0].style.display = "none";}
	if(i2 == 0){features[6].style.display = "none";}
	if(i3 == 0){features[1].style.display = "none";}
	if(i4 == 0){features[2].style.display = "none";}
	if(i5 == 0){features[3].style.display = "none";}
	if(i6 == 0){features[8].style.display = "none";}
	if(i7 == 0){features[9].style.display = "none";}
	if(i8 == 0){features[4].style.display = "none";}
	if(i9 == 0){features[5].style.display = "none";}
	if(i10 == 0){features[7].style.display = "none";}
}

function DisableIndustrialFeaturesUsing(features, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10){
	if(i1 == 0){features[1].style.display = "none";}
	if(i2 == 0){features[7].style.display = "none";}
	if(i3 == 0){features[2].style.display = "none";}
	if(i4 == 0){features[3].style.display = "none";}
	if(i5 == 0){features[4].style.display = "none";}
	if(i6 == 0){features[9].style.display = "none";}
	if(i7 == 0){features[10].style.display = "none";}
	if(i8 == 0){features[5].style.display = "none";}
	if(i9 == 0){features[6].style.display = "none";}
	if(i10 == 0){features[8].style.display = "none";}
}

function Impact2(impact = [], impactIDs = []){
	    span2i.style.top = "0";
		var impactContainer = document.createElement("div");
		impactContainer.setAttribute("class", "modal-content-1");
		impactContainer.setAttribute("id", "impact-container");
		//impactContainer.setAttribute("style", "overflow-y: scroll");
	  
	  //myModal_1.append(impactContainer);
	 
	  
	  //myModal_1.insertBefore(impactContainer, caption1);
	  //var impactContainer2 = document.getElementById("impact-list-container");
	  //myModal_1.insertBefore(impactContainer2, caption1);
	  
	  const impactPlatformsID = impactIDs;
	  const impactPlatforms = impact;
	  var empty = [];
	  
	  for(var impactCount = 0;impactCount < 10;impactCount++){
		  var classID = "impact-list-a button " + impactIDs[impactCount];
		  var impactDoc = document.createElement("a");
		  var impactDocText = document.createTextNode(impactPlatforms[impactCount]);
		  impactDoc.setAttribute("class", classID);
		  impactDoc.setAttribute("id", impactIDs[impactCount]);
		  impactDoc.append(impactDocText);
		  impactContainer.append(impactDoc);
		  empty[impactCount] = impactDoc;
	  }
						  
		//window.console.log(myModal_1i);
		myModal_1i.insertBefore(impactContainer, caption1i);	
		myModal_1i.style.display = "block";	
        //window.console.log(myModal_1i);		
		img01_1i.value = "14";	
	    img01_1i.style.display = "none";
	  
	    //modalImg.src = "adv.actors.profiles/people2.jpg";
	    caption1i.innerHTML = "Didcy Industry";	
	
		var didcyTech = null, didcyElectronics = null, didcyResorts = null, didcyMechanics
		= null, didcyRealEstates = null, didcyEntertainment = null, 
		didcyEducation = null, didcyHealth = null, didcyAll = null, 
		didcyAgriculture = null;
		
		didcyTech = document.getElementById("didcy-tech");
		didcyMechanics = document.getElementById("didcy-mechanics");
		didcyElectronics = document.getElementById("didcy-electronics");
		didcyResorts = document.getElementById("didcy-resort");
		didcyRealEstates = document.getElementById("didcy-real-estates");
		didcyEntertainment = document.getElementById("didcy-entertainment");
		didcyEducation = document.getElementById("didcy-education");
		didcyHealth = document.getElementById("didcy-health");
		didcyAll = document.getElementById("didcy-all");
		didcyAgriculture = document.getElementById("didcy-agriculture");
		
		didcyRealEstates.style.display = "none";
		didcyResorts.style.display = "none";

       if(window.location.href.slice(40) != ""){		
		if(getCookieValue("GAGA_ADI") == "Tech"){
			DisableIndustrialFeaturesUsing(empty, 
            1, 0, 0, 0, 0, 0, 0, 0, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Mechanic"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 1, 0, 0, 0, 0, 0, 0, 0, 0);			
		}
		
		if(getCookieValue("GAGA_ADI") == "Electronic"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 1, 0, 0, 0, 0, 0, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Food"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 1, 0, 0, 0, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Entertainment"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 1, 0, 0, 0, 0, 0);					
		}

		if(getCookieValue("GAGA_ADI") == "Real Estates"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 1, 0, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Resort"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 1, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Education"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 1, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Health"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 0, 1, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "All"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 0, 0, 1);				
		}
		
		if(getCookieValue("GAGA_ADI") == ""){
			AlertBoxInModal("Invalid Request Access");	
            return window.location.replace("http://www.didcy.com");			
		}		
	   }
	   
		function IndustrialVAds(adType = 0, adDisplayType = 0, drim = null){
			   exhibitEvents(13, drim, 'av', 0, adType, adDisplayType);

		   empty_ = empty;
		   impactContainer_ = impactContainer;
		  //}
			   for(var impactR = 0; impactR < empty.length;impactR++){
/* 				   if(impactR == empty.length){
					  
				   } */
				   impactContainer.removeChild(empty[impactR]);
			   }
			   empty = [];
			   document.getElementById("industrial-ad-area").style.display = "none";
			  
			   myModal_1i.style.display = "none";
			   
			   document.getElementById("industrial-type-static-ads").onclick = function(){
				   
			   }
			   document.getElementById("industrial-type-video-ads").onclick = function(){
				   
			   }
			   document.getElementById("industrial-type-audio-ads").onclick = function(){
				   
			   }
		}
		

        function SendAdReq(typeID = null, drim = null){
			document.getElementById("industrial-ad-area").style.display = "block";
			document.getElementById("industrial-ad-area").style.backgroundColor = "rgba(0, 0, 0, 1)";
			
			document.getElementById("industrial-type-static-ads").onclick = function(){
				IndustrialVAds(typeID, 0, drim);
			}
			document.getElementById("industrial-type-video-ads").onclick = function(){
			    IndustrialVAds(typeID, 1, drim);
			}
			document.getElementById("industrial-type-audio-ads").onclick = function(){
			    IndustrialVAds(typeID, 2, drim);
			}
		}	
	    
		var drim = window.location.href.slice(39);
		if(drim == ""){
		  drim = null;
		}
		
		didcyTech.onclick = function(){
		    SendAdReq(0, drim);
		}

		didcyElectronics.onclick = function(){
           SendAdReq(1, drim);
		}

		didcyMechanics.onclick = function(){
           SendAdReq(2, drim);
		}

		didcyRealEstates.onclick = function(){
           SendAdReq(9, drim);
		}

		didcyResorts.onclick = function(){
           SendAdReq(8, drim);
		}
		

		didcyEducation.onclick = function(){
           SendAdReq(7, drim);
		}


		didcyEntertainment.onclick = function(){
           SendAdReq(6, drim);
		}
                      
		didcyAgriculture.onclick = function(){
           SendAdReq(4, drim);
		}
		
		didcyHealth.onclick = function(){
           SendAdReq(3, drim);
		}
		
		didcyAll.onclick = function(){
           SendAdReq(5, drim);
		}
}


function Impact(impact = [], impactIDs = []){
	    span2i.style.top = "0";
		var impactContainer = document.createElement("div");
		impactContainer.setAttribute("class", "modal-content-1");
		impactContainer.setAttribute("id", "impact-container");
		//impactContainer.setAttribute("style", "overflow-y: scroll");
	  
	  //myModal_1.append(impactContainer);
	 
	  
	  //myModal_1.insertBefore(impactContainer, caption1);
	  //var impactContainer2 = document.getElementById("impact-list-container");
	  //myModal_1.insertBefore(impactContainer2, caption1);
	  
	  const impactPlatformsID = impactIDs;
	  const impactPlatforms = impact;
	  var empty = [];
	  
	  /*for(var impactCount = 0;impactCount < 10;impactCount++){
		  var classID = "impact-list-a button " + impactIDs[impactCount];
		  var impactDoc = document.createElement("a");
		  var impactDocText = document.createTextNode(impactPlatforms[impactCount]);
		  impactDoc.setAttribute("class", classID);
		  impactDoc.setAttribute("id", impactIDs[impactCount]);
		  impactDoc.append(impactDocText);
		  impactContainer.append(impactDoc);
		  empty[impactCount] = impactDoc;
	  }*/
      
	  selectIndustryType = document.createElement("select");
	  const selectIndustryTypeText = document.createTextNode("Select industry");
	  selectIndustryType.append(selectIndustryTypeText);
	  
	  selectIndustryType.setAttribute("class", "impact-list-a button");
	  selectIndustryType.setAttribute("id", "select-industry-category");
	  
	  var impcount = 0;
	  
	  for(var impactCount = 0;impactCount < impactPlatforms.length;impactCount++){
		  var classID = "impact-list-a button " + impactIDs[impactCount];
		  var impactDoc = document.createElement("option");
		  var impactDocText = document.createTextNode(impactPlatforms[impactCount]);
		  impactDoc.setAttribute("class", classID);
		  impactDoc.setAttribute("id", impactIDs[impactCount]);
		  impactDoc.append(impactDocText);
		  selectIndustryType.append(impactDoc);
		  
		    empty[impactCount] = impactDoc;
			//impcount++;
		  
	  }
         //window.console.log(empty);
         impactContainer.append(selectIndustryType);
						  
		//window.console.log(myModal_1i);
		myModal_1i.insertBefore(impactContainer, caption1i);	
		myModal_1i.style.display = "block";	
        //window.console.log(myModal_1i);		
		img01_1i.value = "14";	
	    img01_1i.style.display = "none";
	  
	    //modalImg.src = "adv.actors.profiles/people2.jpg";
	    caption1i.innerHTML = "Didcy Industry";	
	
		var didcyTech = null, didcyElectronics = null, didcyResorts = null, didcyMechanics
		= null, didcyRealEstates = null, didcyEntertainment = null, 
		didcyEducation = null, didcyHealth = null, didcyAll = null, 
		didcyAgriculture = null;
		
		didcyTech = document.getElementById("didcy-tech");
		didcyMechanics = document.getElementById("didcy-mechanics");
		didcyElectronics = document.getElementById("didcy-electronics");
		didcyResorts = document.getElementById("didcy-resort");
		didcyRealEstates = document.getElementById("didcy-real-estates");
		didcyEntertainment = document.getElementById("didcy-entertainment");
		didcyEducation = document.getElementById("didcy-education");
		didcyHealth = document.getElementById("didcy-health");
		didcyAll = document.getElementById("didcy-all");
		didcyAgriculture = document.getElementById("didcy-agriculture");
		
		didcyRealEstates.style.display = "none";
		didcyResorts.style.display = "none";

       if(window.location.href.slice(40) != ""){		
		if(getCookieValue("GAGA_ADI") == "Tech"){
			DisableIndustrialFeaturesUsing(empty, 
            1, 0, 0, 0, 0, 0, 0, 0, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Mechanic"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 1, 0, 0, 0, 0, 0, 0, 0, 0);			
		}
		
		if(getCookieValue("GAGA_ADI") == "Electronic"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 1, 0, 0, 0, 0, 0, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Food"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 1, 0, 0, 0, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Entertainment"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 1, 0, 0, 0, 0, 0);					
		}

		if(getCookieValue("GAGA_ADI") == "Real Estates"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 1, 0, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Resort"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 1, 0, 0, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "Education"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 1, 0, 0);				
		}

		if(getCookieValue("GAGA_ADI") == "Health"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 0, 1, 0);				
		}
		
		if(getCookieValue("GAGA_ADI") == "All"){
			DisableIndustrialFeaturesUsing(empty, 
            0, 0, 0, 0, 0, 0, 0, 0, 0, 1);				
		}
		
		if(getCookieValue("GAGA_ADI") == ""){
			AlertBoxInModal("Invalid Request Access");	
            return window.location.replace("http://www.didcy.com");			
		}		
	   }
	   
		function IndustrialVAds(adType = 0, adDisplayType = 0, drim = null){
			   myModal_1i.style.zIndex = '70';
			   exhibitEvents(13, drim, 'av', 0, adType, adDisplayType);

		   empty_ = empty;
		   impactContainer_ = impactContainer;
		  //}
			  /* for(var impactR = 0; impactR < empty.length;impactR++){
				   impactContainer.removeChild(empty[impactR]);
			   }*/
			   impactContainer.removeChild(selectIndustryType);
			   empty = [];
			   document.getElementById("industrial-ad-area").style.display = "none";
			  
			   myModal_1i.style.display = "none";
			   
			   document.getElementById("industrial-type-static-ads").onclick = function(){
				   
			   }
			   document.getElementById("industrial-type-video-ads").onclick = function(){
				   
			   }
			   document.getElementById("industrial-type-audio-ads").onclick = function(){
				   
			   }
		}
		

        function SendAdReq(typeID = null, drim = null){
			myModal_1i.style.zIndex = '1';
			document.getElementById("industrial-ad-area").style.display = "block";
			document.getElementById("industrial-ad-area").style.backgroundColor = "rgba(0, 0, 0, 1)";
			
			document.getElementById("industrial-type-static-ads").onclick = function(){
				IndustrialVAds(typeID, 0, drim);
			}
			document.getElementById("industrial-type-video-ads").onclick = function(){
			    IndustrialVAds(typeID, 1, drim);
			}
			document.getElementById("industrial-type-audio-ads").onclick = function(){
			    IndustrialVAds(typeID, 2, drim);
			}
		}	
	    
		var drim = window.location.href.slice(39);
		if(drim == ""){
		  drim = null;
		}
		
		selectIndustryType.addEventListener("change", function(){
			if(selectIndustryType.value == "Tech"){
				SendAdReq(0, drim);
				selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Electronics"){
			   SendAdReq(1, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Mechanics"){
			   SendAdReq(2, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Real Estates"){
			   SendAdReq(9, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Resort"){
			   SendAdReq(8, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Education"){
			   SendAdReq(7, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Entertainment"){
			   SendAdReq(6, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Agriculture"){
			   SendAdReq(10, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Health"){
			   SendAdReq(3, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "All"){
			   SendAdReq(5, drim);
			   selectIndustryCategory = 1;
			}
			else if(selectIndustryType.value == "Food"){
			   SendAdReq(4, drim);
			   selectIndustryCategory = 1;
			}
			else{
				
			}
		});
}

document.getElementById("close-industrial-ad-area").addEventListener("click", 
() => {
	myModal_1i.style.zIndex = '70';
    if(selectIndustryCategory == 1){
      document.getElementById("select-industry-category").selectedIndex = 0;
	  selectIndustryCategory = 0;
	  
	}	
	document.getElementById("industrial-ad-area").style.display = "none";
    	
		document.getElementById("industrial-type-video-ads").onclick = function(){
			
		}
    	
		document.getElementById("industrial-type-static-ads").onclick = function(){
	    
		}

		document.getElementById("industrial-type-audio-ads").onclick = function(){
	    
		}
			   /*for(var impactR = 0; impactR < empty_.length;impactR++){

				   impactContainer_.removeChild(empty_[impactR]);
			   }*/
			   //impactContainer_.removeChild(selectIndustryType);
			   empty = [];
			   empty_ = [];
			   selectIndustryCategory = 0;
});



