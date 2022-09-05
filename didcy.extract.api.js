var adsDescriptionContainer = [], descriptionLength = 0, adsDescriptionNextPointer = [];
var prev = 0, nex = 0;
var correct = false, videoType = 0, videoFetch = 0, audioFetch = 0;
var type = null, audioIn = 0, audioTypeCount = 0, audioCount = 0, audioImageContainer = [];

var didcx_random_number_generator = function(min, max){
	return Math.floor(Math.random() * (max - min)) + min;
}

var adsFilesLength, upvid, blob;
var videoCount = 0;

var ins = 0;
var containUpVid = [];
var filenames = [];
var filenames2 = [];
var audioFound = 0;

var setTimeFrame = 3000;
var blobContainer = [], blobContainer2 = [];
var framePS = 0, framePSx = 0, clIn = null;
var genContainer = [], blobGenNames = [];


function ExtractAPI(_files, width = "640", height = "340", time = "#t=1.4", 
videoContent = "video-content", videoStyle = "visibility: hidden"){
	    let files = _files.files || [];
		
		if(!files.length){return;}
		
	   for(var i = 0;i < files.length;i++){
		
		if(files[i].type.slice(0, 5) == "video"){
			const reader = new FileReader();
			
			function CaptureFiles(files, i, width, height, time){
			reader.onload = function(e){
			filenames[i] = files[i].name;		
			upvid = document.createElement("video");
			upvid.setAttribute("class", "upvid-"+didcx_random_number_generator(0, 88848938389282828211).toString().trim());
			upvid.setAttribute("id", files[i].name);
			upvid.setAttribute("width", width);
			upvid.setAttribute("height", height);
			upvid.setAttribute("style", videoStyle);
			upvid.setAttribute("src", e.target.result+time);
			upvid.setAttribute("value", files[i].name);
			document.getElementById(videoContent).append(upvid);		   
			
			upvid.load();
			
			containUpVid[ins] = upvid;
			
			window.console.log(ins);
			
			ins++;
			
			}
			
			reader.onprogress = function(e){
			   var progress = Math.round((e.loaded * 100)/e.total);
			   console.log('progress: ', progress);
			}
			
			 reader.readAsDataURL(files[i]);
			}
			CaptureFiles(files, i, width, height, time, videoContent, videoStyle);
		}
	  }
}

 function SendExtractAPI(blob = null, videoContent = "video-content", 
width = "300px", height = "300px", canvas_id = "canvas", canvas_classname = "canvas", 
canvas_style = "display:block", setTimeFrame = 3000){
	        
			document.getElementById(videoContent).style.display = "block";
	        
			Vids(containUpVid, 0, 0, videoContent, width, height, canvas_id, 
			canvas_classname, canvas_style, setTimeFrame);

		 if(blobContainer.length > 0){	
			for(var i = 0;i < blobContainer.length;i++){
			   if(blobContainer[i].size <= 0){
				   return false;
			   }
			   
			   genContainer[i] = didcx_random_number_generator(0, 88848938389282828211).toString().trim();
					   
			   //form.append(genContainer[i], blobContainer[i], didcx_random_number_generator(0, 88848938389282828211).toString().trim());
			}
			 
/* 			form.append("gen-container", JSON.stringify(genContainer));	 
			form.append("real-arrangement-container", JSON.stringify(filenames2));	 
			form.append("video-image-container-length", genContainer.length); */
			
			return true;
		}	 
 }
 
async function Vids(vid, fileLength, fileCount, videoContent = "video-content", image_format = "image/png", 
width = "300px", height = "300px", canvas_id = "canvas", canvas_classname = "canvas", 
canvas_style = "display:block", setTimeFrame = 0){	
	 var video = vid;
	
	for(var i = 0;i < vid.length;i++){
	 var blob = null;
	 	 
	 filenames2[i] = vid[i].id;
	 
	 var canvas = document.createElement("canvas");
	 canvas.setAttribute("class", canvas_classname);
	 canvas.setAttribute("id", canvas_id);
	 canvas.setAttribute("style", canvas_style);
	 canvas.setAttribute("width", width);
	 canvas.setAttribute("height", height);
	 
	 document.getElementById(videoContent).append(canvas);

	if(i == 0){
	     canvas.width = video[0].videoWidth;
	     canvas.height = video[0].videoHeight;
		 canvas.getContext("2d").drawImage(video[0], 0, 0);
	 
		 blob = convertURIToImageData(canvas.toDataURL(image_format));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 getFirstFrame(video, canvas, 0, videoContent);
	}else{
	     canvas.width = video[i].videoWidth;
	     canvas.height = video[i].videoHeight;
		 canvas.getContext("2d").drawImage(video[i], 0, 0);	
	 
		 blob = convertURIToImageData(canvas.toDataURL(image_format));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 setTimeout(getFirstFrame(video, canvas, i, videoContent),  setTimeFrame);		 
	}
	} 
}	 

function ExtractAPIv2(_files, width = ["640"], height = ["340"], time = ["#t=1.4"], 
videoContent = "video-content", videoStyle = ["visibility: hidden"]){
	    let files = _files.files || [];
		
		if(!files.length){return;}
		
	   for(var i = 0;i < files.length;i++){
		
		if(files[i].type.slice(0, 5) == "video"){
			const reader = new FileReader();
			
			function CaptureFiles(files, i, width, height, time){
			reader.onload = function(e){
			filenames[i] = files[i].name;		
			upvid = document.createElement("video");
			upvid.setAttribute("class", "upvid-"+didcx_random_number_generator(0, 88848938389282828211).toString().trim());
			upvid.setAttribute("id", files[i].name);
			upvid.setAttribute("width", width[i]);
			upvid.setAttribute("height", height[i]);
			upvid.setAttribute("style", videoStyle[i]);
			upvid.setAttribute("src", e.target.result+time[i]);
			upvid.setAttribute("value", files[i].name);
			document.getElementById(videoContent).append(upvid);		   
			
			upvid.load();
			
			containUpVid[ins] = upvid;
			
			window.console.log(ins);
			
			ins++;
			
			}
			
			reader.onprogress = function(e){
			   var progress = Math.round((e.loaded * 100)/e.total);
			   console.log('progress: ', progress);
			}
			
			 reader.readAsDataURL(files[i]);
			}
			CaptureFiles(files, i, width, height, time, videoContent, videoStyle);
		}
	  }
}

 function SendExtractAPIv2(form = null, blob = null, videoContent = "video-content", 
width = ["300px"], height = ["300px"], canvas_id = ["canvas"], canvas_classname = ["canvas"], 
canvas_style = ["display:block"], setTimeFrame = [3000]){
	        
			document.getElementById(videoContent).style.display = "block";
	        
			Vids(containUpVid, 0, 0, videoContent, width, height, canvas_id, 
			canvas_classname, canvas_style, setTimeFrame);

		 if(blobContainer.length > 0){	
			for(var i = 0;i < blobContainer.length;i++){
			   if(blobContainer[i].size <= 0){
				   return false;
			   }
			   
			   genContainer[i] = didcx_random_number_generator(0, 88848938389282828211).toString().trim();
					   
			   //form.append(genContainer[i], blobContainer[i], didcx_random_number_generator(0, 88848938389282828211).toString().trim());
			}
			 
/* 			form.append("gen-container", JSON.stringify(genContainer));	 
			form.append("real-arrangement-container", JSON.stringify(filenames2));	 
			form.append("video-image-container-length", genContainer.length); */
			
			return true;
		}	 
 }
 
async function Vidsv2(vid, fileLength, fileCount, videoContent = "video-content", 
width = ["300px"], height = ["300px"], canvas_id = ["canvas"], canvas_classname = ["canvas"], 
canvas_style = ["display:block"], setTimeFrame = [0]){	
	 var video = vid;
	
	for(var i = 0;i < vid.length;i++){
	 var blob = null;
	 	 
	 filenames2[i] = vid[i].id;
	 
	 var canvas = document.createElement("canvas");
	 canvas.setAttribute("class", canvas_classname[i]);
	 canvas.setAttribute("id", canvas_id[i]);
	 canvas.setAttribute("style", canvas_style[i]);
	 canvas.setAttribute("width", width[i]);
	 canvas.setAttribute("height", height[i]);
	 
	 document.getElementById(videoContent).append(canvas);

	if(i == 0){
	     canvas.width = video[0].videoWidth;
	     canvas.height = video[0].videoHeight;
		 canvas.getContext("2d").drawImage(video[0], 0, 0);
	 
		 blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 getFirstFrame(video, canvas, 0, videoContent);
	}else{
	     canvas.width = video[i].videoWidth;
	     canvas.height = video[i].videoHeight;
		 canvas.getContext("2d").drawImage(video[i], 0, 0);	
	 
		 blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 
		 blobContainer[framePS] = blob;
		 
		 framePS++;
		 setTimeout(getFirstFrame(video, canvas, i, videoContent),  setTimeFrame[i]);		 
	}
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

 function getFirstFrame(video, canvas, i, videoContent){
		 
		 video[i].pause();
		 
		 var blob = convertURIToImageData(canvas.toDataURL("image/png"));
		 
		 blobContainer2[framePSx] = blob;

		 //document.getElementById(videoContent).removeChild(video[i]);
		 //document.getElementById(videoContent).removeChild(canvas);
		 
		 //document.getElementById(videoContent).style.display = "none";

		 framePSx++;
		 
		 upvid = null;

		 return;
 }