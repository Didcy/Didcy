"use strict";

var stream = document.getElementById("didcy-fixes-row");
var createPlugins = 0, updateCoin = 0, updateClick = 0, devResponse = 0;

/*document.getElementById("upload-developer-files").addEventListener("click", 
UploadDeveloperFiles);
*/

document.getElementById("upload-developer-files").addEventListener("click", 
UploadDevFiles);

document.getElementById("upload-developer-server-files").addEventListener("click", 
UploadDeveloperServerFiles);

function UploadDeveloperServerFiles(){
   var serverFiles = document.getElementById("server-files");

   var files = [];
   
   files = document.forms['developer-files-container-form'];
   
   var form = new FormData(files);
   
   if(serverFiles.files.length <= 0){
      return AlertBoxInModal("Please select at least one server file");
   }
   
   form.append("class-id", 3);
   form.append("plug-id", 2);
   form.append("upd", __$__49393_492_Page_acc_usr);
   $.ajax({
	 type: "POST",
	 url: "plug.php",
	 data: form,
	 processData: false,
	 cache: false,
	 contentType: false,
	 success: function(result){
		//window.console.log(result);
		
		var numberOfServerFiles = 0;
		
		var data_returned = JSON.parse(result);
		if(data_returned.state == 200){
		   if(serverFiles.files.length > 1){
			  numberOfServerFiles = (serverFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfServerFiles > 1){
				if(data_returned.files_uploaded_if_no_type > 0){
				   if(data_returned.files_uploaded_if_type_not_php > 0){
					numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_SRV]";
				   }else{
				    numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
				   }
				}else{
				   numberOfServerFiles += " Server files uploaded successfully.";
				}
			  }else{
				if(data_returned.files_uploaded_if_no_type > 0){
				   if(data_returned.files_uploaded_if_type_not_php > 0){
				      numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_SRV]";
				   }else{
					  numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
				   }
				}else{
				   numberOfServerFiles += " Server file uploaded successfully.";
				}
			  }
		      AlertBoxInModal(numberOfServerFiles);
		   }else{
			  numberOfServerFiles = (serverFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfServerFiles == 1){
				numberOfServerFiles += " Server file uploaded successfully.";  
			  }else{
				if(data_returned.files_uploaded_if_type_not_php > 0){
				    numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_SRV]";
				}else{
					numberOfServerFiles += " Server files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
			    }
			  }
			  AlertBoxInModal(numberOfServerFiles);
		   }
		   serverFiles.value = "";
		}
     }, 
	 error: function(result){}
   });
  return;
}

function UploadDevFiles(){
	var devFiles = document.getElementById("program-files");
    var files = [];
   
    files = document.forms['developer-files-container-form'];
    var form = new FormData(files);

    if(devFiles.files.length <= 0){
      return AlertBoxInModal("Please select at least a file");
    }

	form.append("devFilesLength", devFiles.files.length);
	form.append("plug-id", 4);
	form.append("class-id", 0);
	form.append("upd", __$__49393_492_Page_acc_usr);	 	
	 
   $.ajax({
	 type: "POST",
	 url: "plug.php",
	 data: form,
	 processData: false,
	 cache: false,
	 contentType: false,
	 success: function(result){
		//window.console.log(result);
		var data_returned = JSON.parse(result);
		var reporter = null;
		
		if(data_returned.state == 200){
		  if(data_returned.file_types.no_req > 0){	
			if(data_returned.file_types.no_req == 1){
			 reporter = "("+data_returned.file_types.no_req+")"+" file not allowed to be uploaded";
			 AlertBoxInModal(reporter);				
			}else{
			 reporter = "("+data_returned.file_types.no_req+")"+" files not allowed to be uploaded";
			 AlertBoxInModal(reporter);
			}
		  }else{
			if(data_returned.file_count_success == 0){
			 reporter = "("+data_returned.file_count_success+") files uploaded successfully";
			}else if(data_returned.file_count_success == 1){
			 reporter = "("+data_returned.file_count_success+") file uploaded successfully";
			}else{
			 reporter = "("+data_returned.file_count_success+") files uploaded successfully";
			}
			 AlertBoxInModal(reporter);
		  }
		  devFiles.value = "";
		  if(devResponse == 1){
			var devAddons = document.getElementsByClassName("response-i2");
			const devAddonsLen = devAddons.length;
			
			for(var removeAddOns = 0;removeAddOns < devAddonsLen;removeAddOns++){
				document.getElementById("developer-response").removeChild(
				devAddons[removeAddOns]);
			}
			devResponse = 0;
		  }
		  document.getElementsByClassName("response-i")[0].innerHTML = 
		  "No. of Program(.js) files uploaded - "+
		  data_returned.file_types.program;
		  
		  document.getElementsByClassName("response-i")[1].innerHTML = 
		  "No. of CSS(.css) files uploaded - "+
		  data_returned.file_types.css;
		  
		  document.getElementsByClassName("response-i")[2].innerHTML = 
		  "No. of PHP(.php) files uploaded - "+
		  data_returned.file_types.php;			  
		  
		  document.getElementsByClassName("response-i")[3].innerHTML = 
		  "No. of HTML(.html/htm/xhtm) files uploaded - "+
		  data_returned.file_types.html;		  
		  
		  document.getElementsByClassName("response-i")[4].innerHTML = 
		  "No. of MP4(.mp4) files uploaded - "+
		  data_returned.file_types.mp4;		  
		  
		  document.getElementsByClassName("response-i")[5].innerHTML = 
		  "No. of MP3(.mp3) files uploaded - "+
		  data_returned.file_types.mp3;		  
		  
		  document.getElementsByClassName("response-i")[6].innerHTML = 
		  "No. of Media(like .ogg, .wav, etc) files uploaded - "+
		  data_returned.file_types.data;

		  document.getElementsByClassName("response-i")[6].style.display = "none";
		  
		  document.getElementsByClassName("response-i")[7].innerHTML = 
		  "No. of NOT_ALLOWED files uploaded - "+
		  data_returned.file_types.no_req;	
		  
		  document.getElementsByClassName("response-i")[8].innerHTML = 
		  "Transmission State - "+
		  data_returned.state + " (OK)";	
		  
		  document.getElementsByClassName("response-i")[9].innerHTML = 
		  "No. of upload errors/unsuccessful - "+
		  data_returned.fileErrors.length;	
		  
		  document.getElementsByClassName("response-i")[10].innerHTML = 
		  "Transmission Class ID  - "+
		  data_returned["class-id"];	
		  
		  document.getElementsByClassName("response-i")[11].innerHTML = 
		  "No. of files successful - "+
		  data_returned.file_count_success;
		  
		  document.getElementsByClassName("response-i")[12].innerHTML = 
		  "No. of files unsuccessful - "+
		  data_returned.file_count_error;
		  
		  if(data_returned.pluginsOnFileTypes.length > 0){
			var devFileResponse = document.getElementById("developer-response");
			for(var loopPlugins = 0;loopPlugins < data_returned.pluginsOnFileTypes.length;loopPlugins++){
				var uploadedFiles = document.createElement("p");
				let filename = null;
				filename = "("+(loopPlugins+1).toString()+") Filename - "+
				data_returned.pluginsOnFileTypes[loopPlugins];					
				const uploadedFileNames = document.createTextNode(
				filename);
				//var breaks = document.createElement("br");
				uploadedFiles.append(uploadedFileNames);
				uploadedFiles.setAttribute("style", "color:white");
				uploadedFiles.setAttribute("class", "response-i2");
				
				devFileResponse.append(uploadedFiles);
				//devFileResponse.append(breaks);
				devResponse = 1;
			}
		  }
		  
		  return;

		}
		
	 },
	 error: function(){
		 
	 }
   });
}


function UploadDeveloperFiles(){
   var devProgramFiles = document.getElementById("program-files");
  
   let devCssFiles = document.getElementById("css-files");
   var fileInPosition = 0;
   
   var files = [];
   
   files = document.forms['developer-files-container-form'];
   var form = new FormData(files);
   
   if(devProgramFiles.files.length > 0){
	 if(devCssFiles.files.length > 0){
		fileInPosition = 2;
	 }else{
		fileInPosition = 0; 
	 }
   }else{
	 if(devCssFiles.files.length > 0){
		fileInPosition = 1; 
	 }else{
		fileInPosition = 3; 
	 }
   }
   
   if(fileInPosition == 0){
	  form.append("devProgramFiles", "");
	  form.append("devProgramFilesLength", devProgramFiles.files.length);
	  form.append("devCssFiles", "");
	  form.append("class-id", 0);
   }else if(fileInPosition == 1){
	  form.append("devProgramFiles", "");
	  form.append("devCssFiles", "");
	  form.append("devCssFilesLength", devCssFiles.files.length);
	  form.append("class-id", 1);
   }else if(fileInPosition == 2){
	  form.append("devProgramFiles", "");
	  form.append("devProgramFilesLength", devProgramFiles.files.length);
	  form.append("devCssFiles", "");
	  form.append("devCssFilesLength", devCssFiles.files.length);
	  form.append("class-id", 2);
   }else if(fileInPosition == 3){
	  return AlertBoxInModal("Please select at least a file for any of the file inputs");
   }
   
   form.append("plug-id", 1);
   form.append("upd", __$__49393_492_Page_acc_usr);
   $.ajax({
	 type: "POST",
	 url: "plug.php",
	 data: form,
	 processData: false,
	 cache: false,
	 contentType: false,
	 success: function(result){
		//window.console.log(result);
		var numberOfPrgFiles, numberOfCssFiles;
		
		var data_returned = JSON.parse(result);
		if(data_returned.state == 200){
		  if(fileInPosition == 0){
		   if(devProgramFiles.files.length > 1){
			  numberOfPrgFiles = (devProgramFiles.files.length-data_returned.files_uploaded_if_type);
			  if(numberOfPrgFiles > 1){
				if(data_returned.files_uploaded_if_type > 0){
				   numberOfPrgFiles += " Program files uploaded successfully. [NO_EXTENSIONS_ALLOWED]";
				}else{
				   numberOfPrgFiles += " Program files uploaded successfully.";
				}
			  }else{
				numberOfPrgFiles += " Program file uploaded successfully. [NO_EXTENSIONS_ALLOWED].";
			  }
		      AlertBoxInModal(numberOfPrgFiles);
		   }else{ 
			  numberOfPrgFiles = (devProgramFiles.files.length-data_returned.files_uploaded_if_type);
			  if(numberOfPrgFiles == 1){
				numberOfPrgFiles += " Program file uploaded successfully.";  
			  }else{
				numberOfPrgFiles += " Program files uploaded successfully. [NO_EXTENSIONS_ALLOWED]";
			  }
			  AlertBoxInModal(numberOfPrgFiles);
		   }
		  }else if(fileInPosition == 1){
		   if(devCssFiles.files.length > 1){
			  numberOfCssFiles = (devCssFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfCssFiles > 1){
				if(data_returned.files_uploaded_if_no_type > 0){
				   if(data_returned.files_uploaded_if_not_css_type > 0){
					numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS]";
				   }else{
				    numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
				   }
				}else{
				   numberOfCssFiles += " Stylesheet files uploaded successfully.";
				}
			  }else{
				if(data_returned.files_uploaded_if_no_type > 0){
				   if(data_returned.files_uploaded_if_not_css_type > 0){
				      numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS]";
				   }else{
					  numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
				   }
				}else{
				   numberOfCssFiles += " Stylesheet file uploaded successfully.";
				}
			  }
		      AlertBoxInModal(numberOfCssFiles);
		   }else{
			  numberOfCssFiles = (devCssFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfCssFiles == 1){
				numberOfCssFiles += " Stylesheet file uploaded successfully.";  
			  }else{
				if(data_returned.files_uploaded_if_not_css_type > 0){
				    numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS]";
				}else{
					numberOfCssFiles += " Stylesheet files uploaded successfully. [ONLY_EXTENSIONS_ALLOWED]";
			    }
			  }
			  AlertBoxInModal(numberOfCssFiles);
		   }
		  }else if(fileInPosition == 2){
		   var reporter = "";
		   if(devProgramFiles.files.length > 1){
			  numberOfPrgFiles = (devProgramFiles.files.length-data_returned.files_uploaded_if_type);
			  if(numberOfPrgFiles > 1){
				if(data_returned.files_uploaded_if_type > 0){
				   numberOfPrgFiles += " program files [NO_EXTENSIONS_ALLOWED] and ";
				}else{
				   numberOfPrgFiles += " program files and ";
				}
			  }else{
				numberOfPrgFiles += " program file [NO_EXTENSIONS_ALLOWED] and "
			  }
		   }else{
			  numberOfPrgFiles = (devProgramFiles.files.length-data_returned.files_uploaded_if_type);
			  if(numberOfPrgFiles == 1){
				numberOfPrgFiles += " program file and "; 
			  }else{
				numberOfPrgFiles += " program file [NO_EXTENSIONS_ALLOWED] and ";
			  }
		   }
		   if(devCssFiles.files.length > 1){
			  numberOfCssFiles = (devCssFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfCssFiles > 1){
				if(data_returned.files_uploaded_if_no_type > 0){
				   if(data_returned.files_uploaded_if_not_css_type > 0){
				      numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS] uploaded successfully.";
				   }else{
					  numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED] uploaded successfully.";
				   }
				}else{
				   numberOfCssFiles += " stylesheet files uploaded successfully";
				}
			  }else{
				   if(data_returned.files_uploaded_if_not_css_type > 0){
				      numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS] uploaded successfully.";
				   }else{
					  numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED] uploaded successfully.";
				   }
			  }
		   }else{
			  numberOfCssFiles = (devCssFiles.files.length-data_returned.files_uploaded_if_no_type);
			  if(numberOfCssFiles == 1){
				numberOfCssFiles += " stylesheet file uploaded successfully";
			  }else{
				   if(data_returned.files_uploaded_if_not_css_type > 0){
				      numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED_AND_MUST_BE_CSS] uploaded successfully.";
				   }else{
					  numberOfCssFiles += " stylesheet files [ONLY_EXTENSIONS_ALLOWED] uploaded successfully.";
				   }
			  }
		   }
		   
		   reporter = numberOfPrgFiles+numberOfCssFiles;
		   
		   AlertBoxInModal(reporter);
		   
		  }
		  devProgramFiles.value = "";
		  devCssFiles.value = "";
		}else{
			
		}
	 },
	 error: function(){}
   });
}

function UpdateSomePlugins(){
  //var tempCreatePluginsStore = createPlugins;
  if(createPlugins > 0){
	  //if(updateCoin == 0){
	   var didcyFixes = document.getElementsByClassName("col-fixes");
	   var script = document.getElementsByClassName("plugs-script");
	   const didcyFixesLength = didcyFixes.length;
	   let numberOfPluginsBe4AddPlugins = didcyFixesLength - (createPlugins);
	   //let numberOfPluginsBe4AddPlugins -= ;
	   const numberOfPluginsBe4AddPluginsStartingFrom0 = numberOfPluginsBe4AddPlugins;
	   /*for(var dropAddPlugins = 0;dropAddPlugins < createPlugins;dropAddPlugins++){
		  stream.removeChild(didcyFixes[numberOfPluginsBe4AddPluginsStartingFrom0+dropAddPlugins]);
	   }*/
	   var dropAddPluginsi = didcyFixesLength-2;
	   
	   for(var dropAddPlugins = 0;dropAddPlugins < createPlugins;dropAddPlugins++){
		  stream.removeChild(didcyFixes[dropAddPluginsi]);
		  dropAddPluginsi--;
	   }
	   for(var dropAddPlugins = 0;dropAddPlugins < script.length;dropAddPlugins++){
		  document.body.removeChild(script[dropAddPlugins]);
	   }
	   updateCoin = 1;
	   createPlugins = 0;
	  //}
  }else{
	  //stream.removeChild(document.getElementById("update-didcy-fixes-container"));
	  updateCoin = 1;
  }
}

var ReCreateAllDefaultUpdatesElements = () => {
	var inner_css = document.createElement("style");
	var inner_div = document.createElement("div");
	var adv_ft = document.getElementById("adv-ft");
	
	inner_css.setAttribute("type", "text/css");
	inner_css.setAttribute("id", "in-css");
	document.getElementById("didcy-A1").append(inner_css);
	
	inner_div.setAttribute("id", "in-div");
	inner_div.setAttribute("class", "in-div");
	document.body.insertBefore(inner_div, adv_ft);
}

function DeleteAllUpdates(){
	var headTag = document.getElementById("didcy-A1");
	
	{
		let inner_css = document.getElementById("in-css");
		let inner_div = document.getElementById("in-div");
		let inner_scripts = document.getElementsByClassName("plugs-script");
		//let inner_buttons = document.getElementsByClassName("inner-button");
		//let inner_button_containers = document.getElementsByClassName("inner-button-container");
		{
		   headTag.removeChild(inner_css);
		   document.body.removeChild(inner_div);
		   for(var bodyCount = 0;bodyCount < inner_scripts.length;bodyCount++){
			   document.body.removeChild(inner_scripts[bodyCount]);
		   }
/* 		   for(var buttonCount = 0;buttonCount < inner_button_containers.length;buttonCount++){
			   stream.removeChild(inner_button_containers[buttonCount];
		   } */
		}
	}
	ReCreateAllDefaultUpdatesElements();
}

function UpdateDidcyFixes(){
	UpdateSomePlugins();
	Plug();
}

function Update(){
   let buttonContainer = document.createElement("div");
   
   let update = document.createElement("button");
   const updateText = document.createTextNode("update");
   
   buttonContainer.setAttribute("class", "column col-fixes");
   buttonContainer.setAttribute("id", "update-didcy-fixes-container");
   
   update.setAttribute("class", "button");   
   update.setAttribute("id", "update-didcy-fixes"); 
   update.append(updateText);
   
   buttonContainer.append(update);
   stream.append(buttonContainer);   
   
   update.onclick = function(){
	  UpdateDidcyFixes();
	  updateClick = 1;
   }
}

function StreamPlugs(stream_response_data, htmlCat){
   for(var stream_i = 0;stream_i < stream_response_data.length;stream_i++){
    for(var stream_i2 = 0;stream_i2 < 4;stream_i2++){
	  let buttonContainer = document.createElement("div");
	  let button = document.createElement("button");
	  let script = document.createElement("script");
	  let css = document.createElement("link");
	  
	  buttonContainer.setAttribute("class", "column col-fixes inner-button-container");
	  
	  var buttonName = document.createTextNode(stream_response_data[stream_i][stream_i2]);	  
	  button.append(buttonName);
	  
	  button.setAttribute("class", "button inner-button");
	  button.setAttribute("id", stream_response_data[stream_i][stream_i2]);
	  
	  const link = stream_response_data[stream_i][stream_i2]+".css";
	  
	  /*css.setAttribute("href", link);
	  css.setAttribute("type", "text/css");
	  
	  var icon = document.getElementById("icon");
	  document.getElementById("didcy-A1").insertBefore(css, icon);*/
	  
	  var program_name = stream_response_data[stream_i][stream_i2];
	  
	  stream_i2++;
	  
	  var scriptText = document.createTextNode(stream_response_data[stream_i][stream_i2]);
	  
	  stream_i2++;
	  
	  var in_css_text = document.createTextNode(stream_response_data[stream_i][stream_i2]);
	  
	  stream_i2++;
	  
	  //const htmlText = stream_response_data[stream_i][stream_i2];
	  const htmlText = htmlCat;
	  document.getElementById("in-div").innerHTML = htmlText;
	  
	  /*var in_div = document.querySelector(".in-div");
	  //window.console.log(stream_response_data[stream_i][stream_i2]);
	  
	  //in_div.insertAdjacentElement( 'Beforebegin' , htmlText);
	  //in_div.insertAdjacentElement( 'afterend' , htmlText);
	  let no_html_file_found = "", html_file_found = "";
	  
	  if(stream_response_data[stream_i][stream_i2] == "NO_HTML_FILE_FOUND"){
	     //no_html_file_found = "<div class='no-html-file-found' id='no-html-file-found'>htm</div>";
		 document.querySelector(".in-div").insertAdjacentHTML("afterbegin", 
		 "<div class='no-html-file-found' id='no-html-file-found'>"+stream_response_data[stream_i][stream_i2]+"</div>");
	  }	  
	  else if(stream_response_data[stream_i][stream_i2] == "_NO_HTML_FILE_FOUND_"){
	     //no_html_file_found = "<div class='no-html-file-found' id='no-html-file-found'>htm</div>";
		 document.querySelector(".in-div").insertAdjacentHTML("afterbegin", 
		 "<div class='no-html-file-found' id='no-html-file-found'>"+stream_response_data[stream_i][stream_i2]+"</div>");
	  }else{
	     //html_file_found = "<div class='html-file-found' id='html-file-found'>"+stream_response_data[stream_i][stream_i2]+"</div>";
		 const htmlText = stream_response_data[stream_i][stream_i2];
		 window.console.log(htmlText);
		 in_div.insertAdjacentElement( 'afterbegin' , 
		 htmlText);	
         //"<div class='html-file-found' id='html-file-found'>"+		 
	  }*/
	  
	  var scriptID = program_name+'-0';
	  script.setAttribute("class", "plugs-script");
	  script.setAttribute("id", scriptID);
	  script.append(scriptText);
	  
	  document.getElementById("in-css").append(in_css_text);
	  
	  buttonContainer.append(button);
	  
	 if(updateCoin == 0){
	   stream.append(buttonContainer);
	 }else{
	   var updateBtn = document.getElementById("update-didcy-fixes-container");
	   stream.insertBefore(buttonContainer, updateBtn);
	 }
	  
	  document.body.append(script);
	  createPlugins++;
    }
   }
   
   if(updateCoin == 0){
    Update();
   }
   
   return;
}

function Plug(){
  var form = new FormData();
  form.append("upd", "");
  form.append("plug-id", 3);
  $.ajax({
	type: "POST",
	url: "plug.php",
	cache: false,
	contentType: false,
	data: form,
	processData: false,
	success: function(result){
	  //window.console.log(result);
	  var data_returned = JSON.parse(result);
	  if(data_returned.state == 100){
		 return;
	  }
	  else if(data_returned.state == 200){
		DeleteAllUpdates();
		StreamPlugs(data_returned.pluginsContainer, data_returned.htmlCat);
	  }else{
		  
	  }
	},
	error: function(){}
  });
}

Plug();