var adsDescriptionContainer = [], descriptionLength = 0, adsDescriptionNextPointer = [];
var prev = 0, nex = 0;
var correct = false;
var type = null, audioIn = 0, audioTypeCount = 0, audioCount = 0, audioImageContainer = [];

var didcx_random_number_generator = function(min, max){
	return Math.floor(Math.random() * (max - min)) + min;
}

var adsFilesLength, upvid, blob;

var ins = 0;
var containUpVid = [];
var filenames = [];
var filenames2 = [];

function Extract(_files){
	    let files = _files.files || [];
		
		if(!files.length){return;}
		
		//window.console.log(files);
	
	   for(var i = 0;i < files.length;i++){
		
		const reader = new FileReader();
		
		function CaptureFiles(files, i){
		reader.onload = function(e){
		//blobURL = URL.createObjectURL(file);
		filenames[i] = files[i].name;		
	    upvid = document.createElement("video");
		upvid.setAttribute("class", "upvid-"+didcx_random_number_generator(0, 88848938389282828211).toString().trim());
		//upvid.setAttribute("id", "upvid-"+didcx_random_number_generator(0, 88848938389282828211).toString().trim());
		upvid.setAttribute("id", files[i].name);
		upvid.setAttribute("width", "640");
		upvid.setAttribute("height", "340");
		//upvid.setAttribute("muted", "true");
		//upvid.setAttribute("autoplay", "true");
		upvid.setAttribute("style", "visibility: hidden");
		upvid.setAttribute("src", e.target.result+"#t=1.4");
		upvid.setAttribute("value", files[i].name);
		//document.getElementById("video-content").style.display = "block";		
        //filenames[i] = files[i].name;		
		document.getElementById("video-content").append(upvid);		   
		
		upvid.load();
		
		containUpVid[ins] = upvid;
		
		//filenames[ins] = e.target.name;
		
		window.console.log(ins);
	    //filenames[i] = files[i].name;
		//await sleep(2000);
		//window.console.log(e);
		//window.console.log(e.target.result);
		
		
		ins++;
		
		//upvid.play();
		}
		
		reader.onprogress = function(e){
		   var progress = Math.round((e.loaded * 100)/e.total);
		   console.log('progress: ', progress);
		   /*if(progress == 100){
			 Vids(upvid, files.length, i);
		   }*/
		}
		
		 reader.readAsDataURL(files[i]);
        }
		CaptureFiles(files, i);
	  }
}

 var setTimeFrame = 3000;
 var blobContainer = [], blobContainer2 = [];
 var framePS = 0, framePSx = 0, clIn = null;
 var genContainer = [];
 
 function SendImage(blob){
		document.getElementById("video-content").style.display = "block";
		
		Vids(containUpVid, 0, 0);
		//setTimeout(() => {
	    var form = new FormData();
		
		//Vids(containUpVid, 0, 0);
		
		//var genContainer = [];
		
		for(var i = 0;i < blobContainer.length;i++){
		   genContainer[i] = didcx_random_number_generator(0, 88848938389282828211).toString().trim();
		   form.append(genContainer[i], blobContainer[i], didcx_random_number_generator(0, 88848938389282828211).toString().trim());
	    }
	     
		form.append("gen-container", JSON.stringify(genContainer));
		form.append("image-sid", 1);
		$.ajax({
			type: "POST",
			url: "tree.php",
			data: form,
			cache: false,
			contentType: false,
			processData: false,
			success: function(result){
			    window.console.log(result);
				data_returned = JSON.parse(result);
				window.console.log(data_returned);
				blobContainer = [];
				containUpVid = [];
				genContainer = [];
				framePS = 0;
				ins = 0;
		   },
		   error: function(){}
	    });//}, 3000);
 }
 
 function SendExtract(form, blob){
			document.getElementById("video-content").style.display = "block";
			
			Vids(containUpVid, 0, 0);
			//Vids(containUpVid, 0, 0);
			
			//var genContainer = [];
		 if(blobContainer.length > 0){	
			for(var i = 0;i < blobContainer.length;i++){
			   if(blobContainer[i].size <= 0){
				   return false;
			   }
			   genContainer[i] = didcx_random_number_generator(0, 88848938389282828211).toString().trim();
			   form.append(genContainer[i], blobContainer[i], didcx_random_number_generator(0, 88848938389282828211).toString().trim());
			}
			 
			form.append("gen-container", JSON.stringify(genContainer));	 
			form.append("real-arrangement-container", JSON.stringify(filenames2));	 
			form.append("video-image-container-length", genContainer.length);
			
			return true;
		}
 }

 function convertURIToImageData(dataURI) {
		// convert base64/URLEncoded data component to raw binary data held in a string
		  var byteString;
		  if (dataURI.split(',')[0].indexOf('base64') >= 0)
			byteString = atob(dataURI.split(',')[1]);
		  else
			byteString = unescape(dataURI.split(',')[1]);

		// separate out the mime component
		  var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

		// write the bytes of the string to a typed array
		  var ia = new Uint8Array(byteString.length);
		  for (var i = 0; i < byteString.length; i++) {
			ia[i] = byteString.charCodeAt(i);
		  }

		  return new Blob([ia], {type:mimeString});
  }

 function getFirstFrame(video, canvas, i){
		 
		 video[i].pause();
		 
		 var blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 //blob = URL.createObjectURL(blob);
		 
		 blobContainer2[framePSx] = blob;
		 
		 //setTimeout(() => {

         //window.console.log(blob);
		 
		 document.getElementById("video-content").removeChild(video[i]);
		 document.getElementById("video-content").removeChild(canvas);
		 
		 document.getElementById("video-content").style.display = "none";
		 //}, 2000);
		 /*var image = document.createElement("img");
		 image.setAttribute("src", canvas.toDataURL("image/png"));
		 image.setAttribute("width", "640");
		 image.setAttribute("height", "340");
		 image.setAttribute("style", "position: relative");
		 
		 //document.getElementById("video-content").style.display = "block";
		 document.getElementById("video-content").style.visibility = "visible";
		 document.getElementById("video-content").append(image);*/
		 
		 //window.console.log(canvas);
		 
		 framePSx++;
		 
		 upvid = null;
		 
		 //SendImage(blob);
		//setTimeout(() => SendImage(blob), 2000);
		 
		 return;
		 //clIn = setInterval(getFirstFrame, 100);
 }


async function Vids(vid, fileLength, fileCount){	
	 var video = vid;//document.getElementById(vid);
	
	for(var i = 0;i < vid.length;i++){
	 var blob = null;
	 
	 //filenames[i] = video[i].src;
	 
	 filenames2[i] = vid[i].id;
	 
	 var canvas = document.createElement("canvas");
	 canvas.setAttribute("class", "canvas");
	 canvas.setAttribute("id", "canvas");
	 canvas.setAttribute("style", "display:none");
	 canvas.setAttribute("width", "300px");
	 canvas.setAttribute("height", "300px");
	 
	 document.getElementById("video-content").append(canvas);

	 
	//video.addEventListener("play", () => setTimeout(getFirstFrame, 3000));
	/*if(fileLength > 2){
	  setTimeFrame += 2000;
	  //setTimeFrame = 3000;
	  setTimeout(() => getFirstFrame(video, canvas, i),  setTimeFrame);
	}*/
	if(i == 0){
	     canvas.width = video[0].videoWidth;
	     canvas.height = video[0].videoHeight;
		 canvas.getContext("2d").drawImage(video[0], 0, 0);
	 
		 blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 getFirstFrame(video, canvas, 0);
	}else{
	     canvas.width = video[i].videoWidth;
	     canvas.height = video[i].videoHeight;
		 canvas.getContext("2d").drawImage(video[i], 0, 0);	
	 
		 blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 setTimeout(getFirstFrame(video, canvas, i),  setTimeFrame);
		 //getFirstFrame(video, canvas, i);//,  1000);
		 
	}
	
    //await sleep(3000);	
	//setTimeout(getFirstFrame(video, canvas, i),  setTimeFrame);
	//getFirstFrame(video, canvas, i);
      
	 
	 /*function SendImage(blob){
		document.getElementById("video-content").style.display = "block";
		
	    var form = new FormData();
		
		for(var i = 0;i < blobContainer.length;i++){
		   form.append("image", blobContainer[i], "image-name-"+didcx_random_number_generator(0, 88848938389282828211).toString().trim());
	    }
	 
		form.append("image-sid", 1);
		$.ajax({
			type: "POST",
			url: "tree.php",
			data: form,
			cache: false,
			contentType: false,
			processData: false,
			success: function(result){
			    //window.console.log(result);
				data_returned = JSON.parse(result);
		   },
		   error: function(){}
	    });
	 }*/
	 
	}
     //setTimeout(	 
}	 

function GetSecondaryInfos(info_id = null){
	var productServiceInfo = {};
	if(info_id == 1){
	   productServiceInfo = {
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
		  productServiceId : ""
	  };
		  
	}
	 else{
	  productServiceInfo = {
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
		  productServiceId : ""
	  };		 
	 }
	 
	  productServiceInfo.gagaShipmentDate = SetAutomaticDate();
	  productServiceInfo.gagaShipmentTime = SetAutomaticTime();
	  if(productServiceInfo.productServiceId != ""){
		  productServiceInfo.productServiceId = "";
	      productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }else{
		  productServiceInfo.productServiceId = (new Date().getTime())*didcx_random_number_generator(0, 1919191);
	  }
	  
	  productServiceInfo.productServiceId += ads_count;	  
	  
	  return productServiceInfo;
}

function selectAds(selectorId = 0){
  document.getElementById("open-button").style.display = "none";
  if(getCookieValue("GAGA_CMPO") == "0"){
	document.getElementById("psInfo").innerHTML = "Featured Product/Service";
	document.getElementById("ps_info").innerHTML = "Featured Product/Service";
  }else{
	document.getElementById("psInfo").innerHTML = "Product/Service Info";  
	document.getElementById("ps_info").innerHTML = "Product/Service Info";  
  }
   if(selectorId == 0){
	document.getElementById("open-button").onclick = function(){
		openForm12(0);   
    }		
	if(document.getElementById("uploads").files.length != 0){
	  /*if(document.getElementById("uploads").files.length == 1){
		closeAdFormEntirely(0);
		adForms = 1;
		adsFilesLength = document.getElementById("uploads").files.length;
		openForm(0);
	  }else{*/
	  
	      type = document.getElementById("uploads").files[ads_count].type.slice(0, 5);
	      
		  if(type == 'audio'){
			 document.getElementById("audio-ad-image").style.display = "block";
			 audioIn = 1;
			 audioImageContainer[audioTypeCount] = type;
		  }else{
			 Extract(document.getElementById("uploads"));
		  }
		  
		  adsFilesLength = document.getElementById("uploads").files.length;

		  if(ads_count == 0){
			closeAdFormEntirely(0);  
		  }
		  if((adsFilesLength - ads_count) == 0){
			  document.getElementById("cancel").value = "end";
			  alertBox("Last Form reached");
		  }else{
				document.getElementById("cancel").value = ads_count.toString();
				document.getElementById("open-button").value = ads_count.toString();
				openForm(0);	
				descriptionLength = 1;
               				
		  }
	  //}
	}//----------------------------Image/static Ads Zone---------------------------
	else{
	    return alertBox("Please select at least a file");
	}
   }else{
	document.getElementById("open-button").onclick = function(){
		openForm12(1);   
    }		
	if(document.getElementById("uploads-2-ad-image-records").files.length != 0){
	  /*if(document.getElementById("uploads-2-ad-image-records").files.length == 1){
		closeAdFormEntirely(1);
		adForms = 1;
		adsFilesLength = document.getElementById("uploads-2-ad-image-records").files.length;
		openForm(1);
	  }else{*/
		  adsFilesLength = document.getElementById("uploads-2-ad-image-records").files.length;

		  if(ads_count == 0){
			closeAdFormEntirely(1);  
		  }
		  if((adsFilesLength - ads_count) == 0){
			  document.getElementById("cancel-21").value = "end";
			  alertBox("Last Form reached");
		  }else{
				document.getElementById("cancel-21").value = ads_count.toString();
				document.getElementById("open-button").value = ads_count.toString();
				openForm(1);	
				descriptionLength = 1;
               				
		  }
	  //}
	}	   
   }
/*   }else{
	  return alertBox("Companies Only");
  } */
}

  function uploads($_files = null || undefined, drim = null, fetchID = null){
	  //SendImage(null);
	  //return;
      let files =  $_files;  
	  adForms = 0;
	  let datetime = new Date();
/* 	  var productServiceInfo = {
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
		  productServiceCompany : document.getElementById("pscompany")
	  }; */
	  
/* 	  var productServiceInfo = {
		  productServiceEmail : ,
		  productServiceTelephone : ,
		  productServiceLocation : ,
		  productServiceApprovedBy : ,
		  productServiceDescription : ,
		  productServiceCommencementDate : ,
		  productServiceElapsingDate : ,
		  productServiceCommencementTime : ,
		  productServiceElapsingTime : ,
		  gagaShipmentDate : "",
		  gagaShipmentTime : "",
		  productServiceCountry : ,
		  productServiceCompany : 
	  }; */
	  
	  
	  var form = new FormData(files);
	  
/* 	  SendExtract(form, null);
	  return; */
/* 	  form.append("productServiceEmail", productServiceInfo.productServiceEmail.value.toString().trim());
	  form.append("productServiceTelephone", productServiceInfo.productServiceTelephone.value.toString().trim());
	  form.append("productServiceLocation", productServiceInfo.productServiceLocation.value.toString().trim());
	  form.append("productServiceApprovedBy", productServiceInfo.productServiceApprovedBy.value.toString().trim());
	  form.append("productServiceDescription", productServiceInfo.productServiceDescription.value.toString().trim());
	  form.append("productServiceCommencementDate", productServiceInfo.productServiceCommencementDate.value.toString().trim());
	  form.append("productServiceElapsingDate", productServiceInfo.productServiceElapsingDate.value.toString().trim());
	  form.append("productServiceCommencementTime", productServiceInfo.productServiceCommencementTime.value.toString().trim());
	  form.append("productServiceElapsingTime", productServiceInfo.productServiceElapsingTime.value.toString().trim());
	  form.append("gagaShipmentDate", SetAutomaticDate());
	  form.append("gagaShipmentTime", SetAutomaticTime());
	  form.append("productServiceCountry", productServiceInfo.productServiceCountry.value.toString().trim());
	  form.append("productServiceCompany", productServiceInfo.productServiceCompany.value.toString().trim());
 */
/*        if($fileSet == 0){
		  return alertBox("Please select a product/service image");
	   } */

	  
	  if(adsDescriptionContainer.length > 0){
		for(var audioAdImageCount = 0;audioAdImageCount < adsDescriptionContainer.length;audioAdImageCount++){
		 if(audioImageContainer.length > 0){ 
		  if(audioImageContainer[audioAdImageCount] == "audio"){
			  if(audioImageContainer[audioAdImageCount] == "audio" && adsDescriptionContainer[audioAdImageCount].audioAdImage == "undefined"){
				  return alertBox("Please select an audio image for audio ad ("+audioAdImageCount+")");
			  }else{
			   if(adsDescriptionContainer[audioAdImageCount].audioAdImage.type.slice(0, 5) == "image"){
					var audio_image_file_ = "audio-image-file-"+audioAdImageCount.toString();
					audioCount = audioAdImageCount+1;
			   }else{
				  return alertBox("Please the selected file is not an image file for audio ad ("+audioAdImageCount+")");
			   }
			  }
		  }
		 }
		}
	  }else{
		  return alertBox("Please fill in the blank fields");
	  }
	  
	  if(adsFilesLength != adsDescriptionContainer.length){
		return alertBox("Please fill out the rest of the fields");
	  }
	  
/* 	  window.console.log(audioImageContainer);
	  window.console.log(audioImageContainer.length);
	  window.console.log(audioIn);
	  window.console.log(audioTypeCount);
	  window.console.log(audioCount);
	  return; */
	   
	   if(fetchID == 1){		 
		 if(document.getElementById("uploads").files.length == 0){
			return alertBox("Please select your ads"); 
		 }
		
        if(document.getElementById("uploads").files.length == 1){
         if(document.getElementById("email").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service email.");
		 }
		 
         if(document.getElementById("tel").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service telephone no.");
		 }
		
         if(document.getElementById("psl").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service location.");
		 }

         if(document.getElementById("apb").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide approvable agency.");
		 }

         if(document.getElementById("psd").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please describe your product/service.");
		 }

         if(document.getElementById("pscd").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service commencement date.");
		 }

         if(document.getElementById("psed").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service elapsing date.");
		 }

         if(document.getElementById("pss").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service commencement time.");
		 }
		 
         if(document.getElementById("pset").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service elapsing time.");
		 }
		 
         if(document.getElementById("pscompany").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide product/service company.");
		 }
		 
/*          if(document.getElementById("pscountry").value == "" 
		 || document.getElementById("pscountry").value == "Country of Production" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide product/service developing country.");
		 } */
		 
		 for(var descriptiveCount = 0;descriptiveCount < adsDescriptionContainer.length;descriptiveCount++){
		    if(document.getElementById("email").value == "" && adsDescriptionContainer[descriptiveCount].email == ""){
				return alertBox("Please insert product/service email");
				break;
			}else{
				adsDescriptionContainer[descriptiveCount].email = document.getElementById("email").value;
			}
			
			if(document.getElementById("tel").value == "" && adsDescriptionContainer[descriptiveCount].telephone == ""){
				document.getElementById("email").value =  adsDescriptionContainer[descriptiveCount].email;
				return alertBox("Please insert product/service telephone no.");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].telephone = document.getElementById("tel").value;
			}
			
			if(document.getElementById("psl").value == "" && adsDescriptionContainer[descriptiveCount].location == ""){
				return alertBox("Please insert product/service location");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].location = document.getElementById("psl").value;
			}
			
		    if(document.getElementById("apb").value == "" && adsDescriptionContainer[descriptiveCount].approvedBy == ""){
				return alertBox("Please insert product/service Approvable Agency");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].approvedBy = document.getElementById("apb").value;
			}
			
			if(document.getElementById("psd").value == "" && adsDescriptionContainer[descriptiveCount].description == ""){
				return alertBox("Please describe your product/service");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].description = document.getElementById("psd").value;
			}
			
			if(document.getElementById("pscd").value == "" && adsDescriptionContainer[descriptiveCount].commencementDate == ""){
				return alertBox("Please provide product/service commencement date");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].commencementDate = document.getElementById("pscd").value;
			}
			
			if(document.getElementById("psed").value == "" && adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
				return alertBox("Please provide product/service elapsing date");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].elapsingDate = document.getElementById("psed").value;
			}
			
			if(document.getElementById("pss").value == "" && adsDescriptionContainer[descriptiveCount].commencementTime == ""){
				return alertBox("Please provide product/service commencement time");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].commencementTime = document.getElementById("pss").value;
			}
			
			if(document.getElementById("pset").value == "" && adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
				return alertBox("Please provide product/service elapsing time");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].elapsingTime = document.getElementById("pset").value;
			}
			
			if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;				
			}
			
			if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;				
			}
			
			if(document.getElementById("pscompany").value == "" && adsDescriptionContainer[descriptiveCount].company == ""){
				return alertBox("Please set product/service company");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].company = document.getElementById("pscompany").value;
			}
			
			if(document.getElementById("pscountry").value == "" && adsDescriptionContainer[descriptiveCount].country == "" || 
			adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
				return alertBox("Please set product/service country and must be valid.");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].country = document.getElementById("pscountry").value;
			}
			
			if(adsDescriptionContainer[descriptiveCount].psid == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;					
			}
		 }
		 
	    }else{
/* 		 if(adsDescriptionContainer.length == 0){
			return alertBox("Please fill in all the input fields. Thank you.");
		 } */
		 
		 if(ads_count == 0 && adsDescriptionContainer.length == 0){
			 if(document.getElementById("email").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please provide product/service company.");
			 }			 
		  }else if(ads_count == nex && adsDescriptionContainer.length > 0){

			 for(var descriptiveCount = 0;descriptiveCount < adsDescriptionContainer.length-1;descriptiveCount++){
				if(descriptiveCount == adsDescriptionContainer.length-1){
				   correct = true;
				   break;
				}
				if(adsDescriptionContainer[descriptiveCount].email == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" email");
					break;
				}
				
				if(adsDescriptionContainer[descriptiveCount].telephone == ""){
					//document.getElementById("email-21").value =  adsDescriptionContainer[descriptiveCount].email;
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" telephone no.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].location == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" location");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].approvedBy == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" Approvable Agency");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].description == ""){
					correct = false;
					return alertBox("Please describe your product/service "+descriptiveCount+"");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" commencement date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" elapsing date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementTime == ""){
					correct = false;
					return alertBox("Please provide product/service commencement time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
					correct = false;
					return alertBox("Please provide product/service elapsing time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].company == ""){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" company");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].country == "" || 
				adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" country and must be valid.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].psid == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;					
				}
				
			 }
             
			if(correct == true){
			 if(document.getElementById("email").value == ""){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel").value == ""){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl").value == ""){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb").value == ""){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd").value == ""){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd").value == ""){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed").value == ""){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss").value == ""){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset").value == ""){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany").value){
				return alertBox("Please provide product/service company.");
			 }			 
			}
		  }else if(ads_count == prev && adsDescriptionContainer.length > 0){
			 if(document.getElementById("email").value == ""){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel").value == ""){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl").value == ""){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb").value == ""){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd").value == ""){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd").value == ""){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed").value == ""){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss").value == ""){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset").value == ""){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany").value == ""){
				return alertBox("Please provide product/service company.");
			 }			  
			 
			 correct = true;
			 
			 adsDescriptionContainer[ads_count] = GetProductServiceDescription(GetSecondaryInfos(0));

			 for(var descriptiveCount = 0;descriptiveCount <= adsDescriptionContainer.length;descriptiveCount++){
				if(descriptiveCount == adsDescriptionContainer.length){
				   correct = true;
				   break;
				}
				if(adsDescriptionContainer[descriptiveCount].email == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" email");
					break;
				}
				
				if(adsDescriptionContainer[descriptiveCount].telephone == ""){
					//document.getElementById("email-21").value =  adsDescriptionContainer[descriptiveCount].email;
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" telephone no.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].location == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" location");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].approvedBy == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" Approvable Agency");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].description == ""){
					correct = false;
					return alertBox("Please describe your product/service "+descriptiveCount+"");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" commencement date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" elapsing date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementTime == ""){
					correct = false;
					return alertBox("Please provide product/service commencement time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
					correct = false;
					return alertBox("Please provide product/service elapsing time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].company == ""){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" company");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].country == "" || 
				adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" country and must be valid.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].psid == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;					
				}
				
			 }
			 
			 if(correct == true){
				if(adsDescriptionContainer.length != adsFilesLength){
				  return alertBox("Please fill out the next product/service.");
				}
			 }
			 	 
		  }
	   }
		   

		 
		 
/* 		 if(document.getElementById("pscountry").value == "Country of Production"){
			  return alertBox("Please select a valid Country");
		 }	 */	  
	}else{
        if(document.getElementById("uploads").files.length == 1){
         if(document.getElementById("email-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service email.");
		 }
		 
         if(document.getElementById("tel-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service telephone no.");
		 }
		
         if(document.getElementById("psl-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please insert product/service location.");
		 }

         if(document.getElementById("apb-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide approvable agency.");
		 }

         if(document.getElementById("psd-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please describe your product/service.");
		 }

         if(document.getElementById("pscd-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service commencement date.");
		 }

         if(document.getElementById("psed-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service elapsing date.");
		 }

         if(document.getElementById("pss-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service commencement time.");
		 }
		 
         if(document.getElementById("pset-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please set product/service elapsing time.");
		 }
		 
         if(document.getElementById("pscompany-21").value == "" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide product/service company.");
		 }

		 for(var descriptiveCount = 0;descriptiveCount < adsDescriptionContainer.length;descriptiveCount++){
		    if(document.getElementById("email-21").value == "" && adsDescriptionContainer[descriptiveCount].email == ""){
				return alertBox("Please insert product/service email");
				break;
			}else{
				adsDescriptionContainer[descriptiveCount].email = document.getElementById("email-21").value;
			}
			
			if(document.getElementById("tel-21").value == "" && adsDescriptionContainer[descriptiveCount].telephone == ""){
				//document.getElementById("email-21").value =  adsDescriptionContainer[descriptiveCount].email;
				return alertBox("Please insert product/service telephone no.");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].telephone = document.getElementById("tel-21").value;
			}
			
			if(document.getElementById("psl-21").value == "" && adsDescriptionContainer[descriptiveCount].location == ""){
				return alertBox("Please insert product/service location");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].location = document.getElementById("psl-21").value;
			}
			
		    if(document.getElementById("apb-21").value == "" && adsDescriptionContainer[descriptiveCount].approvedBy == ""){
				return alertBox("Please insert product/service Approvable Agency");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].approvedBy = document.getElementById("apb-21").value;
			}
			
			if(document.getElementById("psd-21").value == "" && adsDescriptionContainer[descriptiveCount].description == ""){
				return alertBox("Please describe your product/service");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].description = document.getElementById("psd-21").value;
			}
			
			if(document.getElementById("pscd-21").value == "" && adsDescriptionContainer[descriptiveCount].commencementDate == ""){
				return alertBox("Please provide product/service commencement date");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].commencementDate = document.getElementById("pscd-21").value;
			}
			
			if(document.getElementById("psed-21").value == "" && adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
				return alertBox("Please provide product/service elapsing date");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].elapsingDate = document.getElementById("psed-21").value;
			}
			
			if(document.getElementById("pss-21").value == "" && adsDescriptionContainer[descriptiveCount].commencementTime == ""){
				return alertBox("Please provide product/service commencement time");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].commencementTime = document.getElementById("pss-21").value;
			}
			
			if(document.getElementById("pset-21").value == "" && adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
				return alertBox("Please provide product/service elapsing time");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].elapsingTime = document.getElementById("pset-21").value;
			}
			
			if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;				
			}
			
			if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;				
			}
			
			if(document.getElementById("pscompany-21").value == "" && adsDescriptionContainer[descriptiveCount].company == ""){
				return alertBox("Please set product/service company");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].company = document.getElementById("pscompany-21").value;
			}
			
			if(document.getElementById("pscountry-21").value == "" && adsDescriptionContainer[descriptiveCount].country == "" || 
			adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
				return alertBox("Please set product/service country and must be valid.");
				break;				
			}else{
				adsDescriptionContainer[descriptiveCount].country = document.getElementById("pscountry-21").value;
			}
			
			if(adsDescriptionContainer[descriptiveCount].psid == ""){
				return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
				break;					
			}
			
		 }

		}
		else{
		 
/*          if(document.getElementById("pscountry-21").value == "" && adsDescriptionContainer.length == 0
		 || document.getElementById("pscountry-21").value == "Country of Production" && adsDescriptionContainer.length == 0){
			return alertBox("Please provide product/service developing country.");
		 } */

/* 		 if(adsDescriptionContainer.length == 0){
			return alertBox("Please fill in all the input fields. Thank you.");
		 } */
		 
		 if(ads_count == 0 && adsDescriptionContainer.length == 0){
			 if(document.getElementById("email-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset-21").value == "" && adsDescriptionContainer.length == 0){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany-21").value == ""){
				return alertBox("Please provide product/service company.");
			 }			 
		  }else if(ads_count == nex && adsDescriptionContainer.length > 0){

			 for(var descriptiveCount = 0;descriptiveCount < adsDescriptionContainer.length-1;descriptiveCount++){
				if(descriptiveCount == adsDescriptionContainer.length-1){
				   correct = true;
				   break;
				}
				if(adsDescriptionContainer[descriptiveCount].email == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" email");
					break;
				}
				
				if(adsDescriptionContainer[descriptiveCount].telephone == ""){
					//document.getElementById("email-21").value =  adsDescriptionContainer[descriptiveCount].email;
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" telephone no.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].location == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" location");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].approvedBy == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" Approvable Agency");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].description == ""){
					correct = false;
					return alertBox("Please describe your product/service "+descriptiveCount+"");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" commencement date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" elapsing date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementTime == ""){
					correct = false;
					return alertBox("Please provide product/service commencement time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
					correct = false;
					return alertBox("Please provide product/service elapsing time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].company == ""){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" company");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].country == "" || 
				adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" country and must be valid.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].psid == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;					
				}
				
			 }
             
			if(correct == true){
			 if(document.getElementById("email-21").value == ""){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel-21").value == ""){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl-21").value == ""){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb-21").value == ""){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd-21").value == ""){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd-21").value == ""){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed-21").value == ""){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss-21").value == ""){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset-21").value == ""){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany-21").value){
				return alertBox("Please provide product/service company.");
			 }			 
			}
		  }else if(ads_count == prev && adsDescriptionContainer.length > 0){
			 if(document.getElementById("email-21").value == ""){
				return alertBox("Please insert product/service email.");
			 }
			 
			 if(document.getElementById("tel-21").value == ""){
				return alertBox("Please insert product/service telephone no.");
			 }
			
			 if(document.getElementById("psl-21").value == ""){
				return alertBox("Please insert product/service location.");
			 }

			 if(document.getElementById("apb-21").value == ""){
				return alertBox("Please provide approvable agency.");
			 }

			 if(document.getElementById("psd-21").value == ""){
				return alertBox("Please describe your product/service.");
			 }

			 if(document.getElementById("pscd-21").value == ""){
				return alertBox("Please set product/service commencement date.");
			 }

			 if(document.getElementById("psed-21").value == ""){
				return alertBox("Please set product/service elapsing date.");
			 }

			 if(document.getElementById("pss-21").value == ""){
				return alertBox("Please set product/service commencement time.");
			 }
			 
			 if(document.getElementById("pset-21").value == ""){
				return alertBox("Please set product/service elapsing time.");
			 }
			 
			 if(document.getElementById("pscompany-21").value == ""){
				return alertBox("Please provide product/service company.");
			 }			  
			 
			 correct = true;
			 
			 adsDescriptionContainer[ads_count] = GetProductServiceDescription(GetSecondaryInfos(1));

			 for(var descriptiveCount = 0;descriptiveCount <= adsDescriptionContainer.length;descriptiveCount++){
				if(descriptiveCount == adsDescriptionContainer.length){
				   correct = true;
				   break;
				}
				if(adsDescriptionContainer[descriptiveCount].email == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" email");
					break;
				}
				
				if(adsDescriptionContainer[descriptiveCount].telephone == ""){
					//document.getElementById("email-21").value =  adsDescriptionContainer[descriptiveCount].email;
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" telephone no.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].location == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" location");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].approvedBy == ""){
					correct = false;
					return alertBox("Please insert product/service "+descriptiveCount+" Approvable Agency");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].description == ""){
					correct = false;
					return alertBox("Please describe your product/service "+descriptiveCount+"");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" commencement date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingDate == ""){
					correct = false;
					return alertBox("Please provide product/service "+descriptiveCount+" elapsing date");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].commencementTime == ""){
					correct = false;
					return alertBox("Please provide product/service commencement time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].elapsingTime == ""){
					correct = false;
					return alertBox("Please provide product/service elapsing time");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentDate == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].shipmentTime == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].company == ""){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" company");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].country == "" || 
				adsDescriptionContainer[descriptiveCount].country == "Country of Production"){
					correct = false;
					return alertBox("Please set product/service "+descriptiveCount+" country and must be valid.");
					break;				
				}
				
				if(adsDescriptionContainer[descriptiveCount].psid == ""){
					correct = false;
					return alertBox("Please an error occured whiles process data. Please reload the page and try again.");
					break;					
				}
				
			 }
			 
			 if(correct == true){
				if(adsDescriptionContainer.length != adsFilesLength){
				  return alertBox("Please fill out the next product/service.");
				}
			 }
			 	 
		  }
	    }
/* 		 if(document.getElementById("pscountry-21").value == "Country of Production"){
			  return alertBox("Please select a valid Country");
		 }  */
	   }
	  
	  if(adsDescriptionContainer.length != document.getElementById("uploads").files.length){
		 return uploads($_files, drim, fetchID);
	  }
	  
/* 	  if(document.getElementById("uploads").files[0].type.slice(0, 5) == "audio"){
		  
	  } */
	  
	  if(adsDescriptionContainer.length > 0){
		audioCount = 0;
		for(var audioAdImageCount = 0;audioAdImageCount < adsDescriptionContainer.length;audioAdImageCount++){
		 if(audioImageContainer.length > 0){ 
		  if(audioImageContainer[audioAdImageCount] == "audio"){
			  if(audioImageContainer[audioAdImageCount] == "audio" && adsDescriptionContainer[audioAdImageCount].audioAdImage == "undefined"){
				  return alertBox("Please select an audio image for audio ad ("+audioAdImageCount+")");
			  }else{
			   if(adsDescriptionContainer[audioAdImageCount].audioAdImage.type.slice(0, 5) == "image"){ 
					audioCount = audioAdImageCount+1;
			   }else{
				  return alertBox("Please the selected file is not an image file for audio ad ("+audioAdImageCount+")");
			   }
			  }
		  }
		 }
		}
	  }else{
		  return alertBox("Please fill in the blank fields");
	  }
	  
	  for(var loopAudioCount = 0;loopAudioCount < audioCount;loopAudioCount++){
		var audio_image_file_ = "audio-image-file-"+loopAudioCount.toString();
		window.console.log(audio_image_file_);
		window.console.log(adsDescriptionContainer[loopAudioCount].audioAdImage);
		form.append(audio_image_file_, adsDescriptionContainer[loopAudioCount].audioAdImage);		  
	  }
	  
	  //Extract(document.getElementById("uploads"));
	  
	  var extractSuccess = SendExtract(form, null);
	  
	  if(extractSuccess == false){
		  return alertBox("Please close the forms & reselect your files");
	  }
	  
	  form.append("audio-image-container", JSON.stringify(audioImageContainer));
	  form.append("audio-image-container-length", audioImageContainer.length);
	  form.append("audio-in", audioIn);
	  form.append("audio-type-count", audioTypeCount);
	  form.append("audio-count", audioCount);
      form.append("PS", JSON.stringify([adsDescriptionContainer, adsDescriptionContainer.length]));
	  form.append("fetch", fetchID);
	  form.append("drim", drim);
	  form.append("dirId", didcx_random_number_generator(0, 88848938389282828211).toString().trim());
	  form.append("RRND", didcx_random_number_generator(0, 8211).toString().trim());
	  form.append("GAGA_CMPO", getCookieValue("GAGA_CMPO"));
	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
			blobContainer2 = [];
			blobContainer = [];
			filename = [];
			filename2 = [];
		    containUpVid = [];
			genContainer = [];
			framePS = 0;
			framePSx = 0;
			ins = 0;
			upvid = null;
			window.console.log(result);
			return;
			//window.console.log(storeAllCreatedIds);
		    var data_returned = JSON.parse(result);
			let drim = window.location.href;  
			if(data_returned.state == 100){
/* 				  var removeEventVid = () => {
					 let eventContainer = document.getElementById("adv-files-showcase");
					 let eventColumn = document.getElementsByClassName("column");
					 let eventElem = storeAllCreatedIds;
					 //window.console.log(eventContainer);
					 var eventVid = eventColumn;//storeAllCreatedIds;
					 const eventVidLength = eventVid.length;
					 for(var i = 0;i < eventVidLength;i++){
						if(i == eventVidLength){
						  storeAllCreatedIds = [];
						  exhibitEvents(2, drim.slice(34));	
						  break;
						}
						//window.console.log(eventContainer);
					    var videos = document.getElementById(eventElem[i]);
					    var videos2 = eventVid[i];
						eventVid[i].removeChild(videos);
						eventContainer.removeChild(videos2);
						storeAllCreatedIds = [];
					 }
				  }
				  if(storeAllCreatedIds.length != 0){
				     removeEventVid();
				  } */
				  if(local == 1){
					  var advFiles = document.getElementById("adv-files-showcase-video-ads");
					  document.getElementById("container-c31").removeChild(advFiles);

					  var advFiles = document.getElementById("adv-files-showcase-static-ads");
					  document.getElementById("container-c31").removeChild(advFiles);

					  var advFiles = document.getElementById("adv-files-showcase-companies-profiles");
					  document.getElementById("container-c31").removeChild(advFiles);
					  
					  var advFiles = document.getElementById("adv-files-showcase-actors-n-groups-profiles");
					  document.getElementById("container-c31").removeChild(advFiles);
					  
					  
					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase-video-ads");
					  document.getElementById("container-c31").append(advFilesShowcase);		

					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase-static-ads");
					  document.getElementById("container-c31").append(advFilesShowcase);	
					  
					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase-companies-profiles");
					  document.getElementById("container-c31").append(advFilesShowcase);	
					  
					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase-actors-n-groups-profiles");
					  document.getElementById("container-c31").append(advFilesShowcase);	
								  
					  local = 0;
				  }
				  if($fetchIDTemp != 0){
					  var advFiles = document.getElementById("adv-files-showcase");
					  document.getElementById("container-c31").removeChild(advFiles);
					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase");
					  document.getElementById("container-c31").append(advFilesShowcase);			  
					  local = 0;		
					  $fetchIDTemp = 0;			  
				  }	
				  if(fetchSearch != 0){
					  var advFiles = document.getElementById("adv-files-showcase");
					  document.getElementById("container-c31").removeChild(advFiles);
					  var advFilesShowcase = document.createElement("div");
					  advFilesShowcase.setAttribute("class", "row");
					  advFilesShowcase.setAttribute("id", "adv-files-showcase");
					  document.getElementById("container-c31").append(advFilesShowcase);			  
					  local = 0;		
					  fetchSearch = 0;	
					  $fetchIDTemp = 0;					  
				  }
				  
				  adsDescriptionContainer = [];
				  adsFilesLength = 0;
				  ads_count = 0;
				  $fileSet = 0;
				  
				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;
				  eraseProductServiceFormInfo(document.forms["myForm"]);
				  document.getElementsByClassName("open-button")[0].style.display = "none";
				  adClosure  = 0;
		          exhibitEvents(2, drim.slice(41), 'upload.multiple');	
				  return;
			}
			else if(data_returned.state == 1000){
				$fileSet = 0;
				adForms  = 0, adClosure = 0, previousCount = 0, ads_count = 0, nextCount = 0, 
				psd_global = null;
				if(files["uploads-2-ad-image-records"].files.length > 1){
					return alertBox("Files successfully uploaded");
				}else{
					return alertBox("File was successfully uploaded");					
				}
			}
			else if(data_returned.state == 50){
				return alertBox("Please some product/service ads wasn't "+
				" successful in upload. Ads: "+data_returned.productErrorContainer);
			}
			else if(data_returned.state == 0){
				return alertBox("Connection Error!!!");
			}
			else if(data_returned.state == 1){
				return alertBox("Database connection Error!!!");
			}
			else if(data_returned.state == 35){
				window.console.log(data_returned);
				return alertBox("Data insertion Error!!!");
			}
			else if(data_returned.state == 36){
				return alertBox("Ads selection error!!!");
			}
			else if(data_returned.state == 37){
				return alertBox("Ads already exists!!!");
			}
			else if(data_returned.state == 110){
				var ps_error = "Please email field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 111){
				var ps_error = "Please telephone field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 112){
				var ps_error = "Please location field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 113){
				var ps_error = "Please approvedBy field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 114){
				var ps_error = "Please description field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 115){
				var ps_error = "Please commencement date field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 116){
				var ps_error = "Please elapsing date field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 117){
				var ps_error = "Please commencement time field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 118){
				var ps_error = "Please elapsing time field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 119){
				var ps_error = "Please shipment date is invalid for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 120){
				var ps_error = "Please shipment time is invalid for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 121){
				var ps_error = "Please country field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 122){
				var ps_error = "Please company field is empty for Product/Service " +
				data_returned.ps_number+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 1230710){
				var ps_error = data_returned.file_error + " @ " + data_returned.type + 
				" under product/service " + 
				data_returned.ps_number+" "+ data_returned.file_name+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 1230711){
				var ps_error = data_returned.file_error + " @ " + data_returned.type + 
				" under product/service " + 
				data_returned.ps_number+" "+data_returned.file_name+" !!!";
				return alertBox(ps_error);
			}
			else if(data_returned.state == 1230712){
				var ps_error = data_returned.file_error + " @ " + (Number(data_returned.size)+0.1) + 
				"MB under product/service " + 
				data_returned.ps_number+" "+ data_returned.file_name + "!!!";
				return alertBox(ps_error);
			}
			else{
			   alertBox("No");
			}
		 },
		 error: function(){}
	  });
  }  
  