"use strict";


var TAKE_A_PROFILE_PICTURE_ID = null || undefined, PROFILE_ACCOUNT_ACCESS_CODE = null || undefined;
var imageUploadx = null || undefined;
var checkImageFaceDetectorNumberx = 0, $report_id_search_for_friend;
var checkImageFaceDetectorResultInBOOLX = [];
   
var faceImageNamex = "" || null || undefined;
var faceImageNameCheckCurrentlyx = 0;

var faceDetectOutputTextx1 = "";
var facex = "";	
var modelLoadedChecker = 0;
var didcx_scanner_response_timer = 0, $fingerprint_didcx_scanner_response_timer = 0;
var citizenIDServer, Country, ID_TYPE = null;

let covidRegistrationHeader1, covidRegistrationHeader2; 
let $_SEND_ID_TYPE = undefined || null;
let $_COUNTRY = undefined || null;
var registration_id, $_clearTimeoutOnInvalidBG = 0, $_clearTimeoutOnConnectScanner = 0, $_clearTimeoutOnSubmitIDRegistrationForm = 0;
var ifOpenCapture = 0;
var user_registration_output_box = document.getElementById("registration-output"), 
CHANGE_ID_WEBCAM_BACKGROUND_COLOR_ERROR = "rgba(12, 101, 255, 1)", CHANGE_ID_TEXT_COLOR_ERROR = "#fff";
var verifyUser = 0, captureValue = null;
var OkVerifier = null || undefined, VerifierID = null || undefined, FacialRecogSuccessValOn4Fingerprint = null;
var $_deviceSelect = 0, captureFingerprintFreshVal = 0, $_facialCaptureReset = 0, facialCaptureResetID = 0, ifInitStart = 0;


 async function startStream(videoSys, media){
     await window.navigator.mediaDevices.getUserMedia(media).then(function(media){
	    videoSys.video.srcObject = handleStream(media);
		videoID = 1;
	 });
 }
 
 function handleStream(media){
    return media;
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

 var stopStreamedVideo = (video = n) => {
	const stream = video.srcObject;
	const tracks = stream.getTracks();
	tracks.forEach(function(track){
		track.stop();
	});
    video.srcObject = null;					
 }	

 var stopStreamedVideox = (video = null, video2 = undefined) => {
	const stream = video.srcObject;
	const stream2 = video2.srcObject;
	const tracks = stream.getTracks();
	const tracks2 = stream2.getTracks();
	tracks.forEach(function(track){
		track.stop();
	});
	tracks2.forEach(function(track2){
		track2.stop();
	});	

    video.srcObject = null;			
    video2.srcObject = null;			
 }

   function validateProfileImageFormx(site_name, faceImageName = null, $report_id_search_for_friendx = null | undefined, webcam_container_type = null || undefined){ //150213
     
	$report_id_search_for_friend = $report_id_search_for_friendx;
	$webcam_container_typex = $report_id_search_for_friendx;
	 
	if(faceImageName == null){
	   alert("Please take a profile picture directly from your camera.");
	   return false;
	}   
       
	   faceImageNamex = faceImageName;
	   
       imageUploadx = faceImageName;
       
	 if(modelLoadedChecker == 0){
	   Promise.all([
		  faceapi.nets.faceRecognitionNet.loadFromUri('http://www.localhost/models'),
		  faceapi.nets.faceLandmark68Net.loadFromUri('http://www.localhost/models'),
		  faceapi.nets.ssdMobilenetv1.loadFromUri('http://www.localhost/models')
		]).then(startx);
	  }
	  else{
	    startx(site_name);
	  }
	  
	  return checkImageFaceDetectorResultInBOOLX;	
    }

	async function startx(site_name){ 
		const container = document.createElement("div");
		container.style.display = "none";
		container.style.position = "relative";
		container.style.boxShadow = "1px 1px 11px 4px rgba(100, 110, 101, 1)";
		document.body.append(container);
		const labeledFaceDescriptors = await loadLabeledImagesx(["image labels here"], "image-link-here", "image-type-here");
		const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6);
		let image;
		var canvas;
		if(modelLoadedChecker == 0){
		   window.console.log('Loaded');
		   window.console.log("Starting facial recognition.....");
		}else{
		   window.console.log("Starting facial recognition.....");
		}

			   let datax = null || undefined;
			   var blob = imageUploadx;
			   
		 var FindFaceInImage = async () => {
			if(image) image.remove();
			if(canvas) canvas.remove();
			image = await faceapi.bufferToImage(imageUploadx);
			container.append(image);
			canvas = faceapi.createCanvasFromMedia(image);
			container.append(canvas);
			const displaySize = { width: image.width, height: image.height };
			faceapi.matchDimensions(canvas, displaySize);
			const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors();
         

			const resizedDetections = faceapi.resizeResults(detections, displaySize);
			
			const results = resizedDetections.map(d => 
			faceMatcher.findBestMatch(d.descriptor));
			
			var resultOutput;
			
			results.forEach((result, i) => {
			   const box = resizedDetections[i].detection.box;
			   const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString().toUpperCase() });
			   drawBox.draw(canvas);
			   resultOutput = result;
		    });
			
			canvas.style.display = "block";
			container.style.display = "block";
			container.style.zIndex = "1";			

			setTimeout(() => {container.style.display = "none"}, 5000);
   
		    var faceDetectOutputText = null || undefined | "";
		    
		    var user_registration_output_boxx = document.getElementById("registration-output");
			
		    
		       didcx_facial_recognition.video.pause();
		       didcx_facial_recognition.close_video_container.style.display = "none";
		       didcx_facial_recognition.video.style.display = "none";
		       didcx_facial_recognition.image.style.display = "none";
		       didcx_facial_recognition.canvas.style.display = "none";
		       didcx_facial_recognition.buttonMeter.style.display = "none";
		       didcx_facial_recognition.selectChangeBGColor.style.display = "none";
               TAKE_A_PROFILE_PICTURE_ID = null || undefined;			   
               stopStreamedVideoxx(didcx_facial_recognition.video);	
               didcx_facial_recognitionx.registerID.selectedIndex = 6;	
			   
			   checkImageFaceDetectorNumberx = detections.length;
			
			if(new Number(checkImageFaceDetectorNumberx) > 1){
			    faceDetectOutputText = site_name+" detected more than one face in the image (" + detections.length.toString() + ")";
				
				PopupRegistrationOutputBoxx(null, faceDetectOutputText, 1, "#000", "#fff", "660px", "310px", "30px");
						
				setTimeout(() => {
					ClosePopupRegistrationOutputBoxx(null);
			    }, 10000);

				faceImageNameCheckCurrentlyx += 1;
				checkImageFaceDetectorResultInBOOLX = false;
				modelLoadedChecker = 1;
				FacialRecogSuccessValOn4Fingerprint = null;
				return checkImageFaceDetectorResultInBOOLX;
			}
			else if(new Number(checkImageFaceDetectorNumberx) < 1){
				faceDetectOutputTextx1 = "Match not Found.";
			    faceDetectOutputText = faceDetectOutputTextx1 + " Didcx detected no face(s) in the image (" + detections.length.toString() + ")";
				
				PopupRegistrationOutputBoxx(null, faceDetectOutputText, 1, "#000", "#fff", "750px", "270px", "20px");
						
				setTimeout(() => {
					ClosePopupRegistrationOutputBoxx(null);

				}, 10000);
				
				faceImageNameCheckCurrentlyx += 1;
				checkImageFaceDetectorResultInBOOLX = false;
				modelLoadedChecker = 1;
				FacialRecogSuccessValOn4Fingerprint = null;
				return checkImageFaceDetectorResultInBOOLX;		
			}
			else{
				resultOutput = resultOutput.toString().toUpperCase();
				var space_count = 0;
			    var rep = "";
				for(let space_check = 0; space_check < resultOutput.length; space_check++){
					if(new String(Number(resultOutput[space_check])) == "0"){
						space_count += 1;
						if(new String(Number(resultOutput[space_check])) == "0" && space_count == 2){
							break;
						}
					}
					rep += resultOutput[space_check];
				}
				
				switch(rep){
				   case "unknown":
				   case "UNKNOWN":
				   case "Unknown":
					 {
						faceDetectOutputTextx1= "Match not Found.";
					 }
				   break;
				   default: 
						faceDetectOutputTextx1 = "Match Found.";		
				} 	
			
			  faceDetectOutputText = faceDetectOutputTextx1 + " Didcx detected only one face in the image (" + detections.length.toString() + ")";
              
			  if(faceDetectOutputTextx == "Match Found."){						 
					PopupRegistrationOutputBoxx(null, faceDetectOutputText, 1, "#000", "#fff", "750px", "270px", "30px");
										
					setTimeout(() => {
						ClosePopupRegistrationOutputBoxx(null);
								
					}, 10000);	
			  }else{
					PopupRegistrationOutputBoxx(null, faceDetectOutputText, 1, "#000", "#fff", "780px", "250px", "30px");
										
					setTimeout(() => {
						ClosePopupRegistrationOutputBoxx(null);
								
					}, 10000);					  
			  }

				 checkImageFaceDetectorResultInBOOLX = true;
				 modelLoadedChecker = 1;
				
				if($webcam_container_typex == 0){ // Profile Picture
				  if($report_id_search_for_friend == 150213){ 
				    return FormAreax();
			      }else{
				    return FormArea();
				 }
				}else if($webcam_container_typex == 1){ // Friend ID Search
					
				}else if($webcam_container_typex == 2){ //Fingerprint Registration Through Facial Verification
/* 				  if(verifier == 0){
				    FacialRecogSuccessValOn4Fingerprint = 0;
				  }else{
					FacialRecogSuccessValOn4Fingerprint = 1;  
				  } */
				    FacialRecogSuccessValOn4Fingerprint = 1; 
					return checkImageFaceDetectorResultInBOOLX;
				}else if($webcam_container_typex == 3){  //No Insertion Mode View
					
				}else{
					
				}
			}
	  } 
		 var stopStreamedVideoxx = (video = n) => {
		    const stream = video.srcObject;
			const tracks = stream.getTracks();
			tracks.forEach(function(track){
			   track.stop();
			});

            video.srcObject = null;					
		 }		  
	  
	  FindFaceInImage();
	}

	function loadLabeledImagesx(labelx, image_link, fileType){
		const labels = labelx;/*"Captain Marvel", "Hawkoyo", "Jim Rhodes", "Thor",
		"Tony Stark"];*/
		
		return Promise.all(
		  labels.map(async label => { 
			  const descriptions = [];
			  for(let i = 1; i <= 1; i++){//'http://www.localhost/labeled_images/', '.jpg'
				  const img = await faceapi.fetchImage(image_link +label.toString()+'/'+i.toString()+fileType); 
				  const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor();
				  descriptions.push(detections.descriptor);
			  }
			  return new faceapi.LabeledFaceDescriptors(label, descriptions);
		  })
		);
	}