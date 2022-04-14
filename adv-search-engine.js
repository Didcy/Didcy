"use strict";

/*
	if(drim_2 == "http://www.localhost/" || drim_2 == "http://www.localhost" 
	|| drim_2 == "localhost" || drim_2 == "www.localhost" || 
	drim_2 == "localhost/" || drim_2 == "www.localhost/"
    || drim_2 == "http://www.localhost/?id=1" 
	|| drim_2 == "localhost/?id=1" 
	|| drim_2 == "localhost?id=1" 
	|| drim_2 == "www.localhost/?id=1"){

*/

var input = document.getElementsByClassName("search-engine");
var searchResults = [], searchResultsCompany = [];
var drim_2 = window.location.href, drim_21, searchCallID = 0;

input[0].addEventListener("keyup", function(event) {

if (event.keyCode == 13) {
    var $searchEngine = document.getElementsByClassName("search-engine")[0].value.toString().trim();
	if($searchEngine == ""){ 
		return alertBox("Type in anything to search....");
	}
	var form = new FormData();
	if(drim_2 == "http://www.localhost/" || drim_2 == "http://www.localhost" 
	|| drim_2 == "localhost" || drim_2 == "www.localhost" || 
	drim_2 == "localhost/" || drim_2 == "www.localhost/"
    || drim_2 == "http://www.localhost/?id=1" 
	|| drim_2 == "localhost/?id=1" 
	|| drim_2 == "localhost?id=1" 
	|| drim_2 == "www.localhost/?id=1"){
		//form.append("drim", drim_2.slice(51));
		form.append("live",  0);
		//window.alert(drim_2 + ' [');
	}
	else{
		form.append("drim", drim_2.slice(39));
		form.append("live",  1);
		drim_21 = drim_2.slice(39);
	}
	form.append("liveSearch", $searchEngine);
	$.ajax({
	  type: 'POST',
	  url: 'adv-search-engine.php',
	  cache: false,
	  contentType: false,
	  data: form,
	  processData: false,
	  success: function(result){
		  window.console.log(result);
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
		  //window.console.log(result);
	      var data_returned = JSON.parse(result);
	      //window.console.log(data_returned.fileTypeID);
	      //window.console.log(data_returned);
	      //window.console.log(data_returned[1]);
		  if(data_returned.state == 32){
		    LiveSearch(data_returned[0], $searchEngine, data_returned[1], data_returned.fileTypeID, data_returned.page_type);
		  }else if(data_returned.state == 33){
			LiveSearch(data_returned[0], $searchEngine, data_returned[1], data_returned.fileTypeID, data_returned.page_type);  
		  }else{
			TransformText(0);
		  }
	  },
	  error: function(){
	  
	  }
	});
  } else {
    
  }
});

input[1].addEventListener("keyup", function(event) {

if (event.keyCode == 13) {
    var $searchEngine = document.getElementsByClassName("search-engine")[1].value.toString().trim();
	if($searchEngine == ""){ 
		return alertBox("Type in anything to search....");
	}
	var form = new FormData();
	if(drim_2 == "http://www.localhost/" || drim_2 == "http://www.localhost" 
	|| drim_2 == "localhost" || drim_2 == "www.localhost" || 
	drim_2 == "localhost/" || drim_2 == "www.localhost/"
    || drim_2 == "http://www.localhost/?id=1" 
	|| drim_2 == "localhost/?id=1" 
	|| drim_2 == "localhost?id=1" 
	|| drim_2 == "www.localhost/?id=1"){
		//form.append("drim", drim_2.slice(51));
		form.append("live",  0);
		//window.alert(drim_2 + ' [');
	}
	else{
		form.append("drim", drim_2.slice(39));
		form.append("live",  1);
		drim_21 = drim_2.slice(39);
	}
	form.append("liveSearch", $searchEngine);
	$.ajax({
	  type: 'POST',
	  url: 'adv-search-engine.php',
	  cache: false,
	  contentType: false,
	  data: form,
	  processData: false,
	  success: function(result){
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
		  //window.console.log(result);
	      var data_returned = JSON.parse(result);
	      //window.console.log(data_returned.fileTypeID);
	      //window.console.log(data_returned);
	      //window.console.log(data_returned[1]);
		  if(data_returned.state == 32){
		    LiveSearch(data_returned[0], $searchEngine, data_returned[1], data_returned.fileTypeID, data_returned.page_type);
		  }else if(data_returned.state == 33){
			LiveSearch(data_returned[0], $searchEngine, data_returned[1], data_returned.fileTypeID, data_returned.page_type);  
		  }else{
			TransformText(0);
		  }
	  },
	  error: function(){
	  
	  }
	});
  } else {
    
  }
});



function LiveSearch(searchList = [], searchData = null, company_name_text = null, 
fileTypeID = null, page_type = null) {

  var input, filter, ul, li, a, i, li2;
  input = searchData;
  filter = input.toUpperCase();
  //ul = document.getElementById("myMenu");
  //li = ul.getElementsByTagName("li");
  li = searchList;
  li2 = company_name_text;
  
  var $liveIndex = 0;
  
  for (i = 0; i < li.length; i++) {
    a = li[i];//.getElementsByTagName("a")[0];
    if (a.toUpperCase().indexOf(filter) > -1) {
      //window.console.log(li[i]);//.style.display = "";
	    if(fileTypeID[i] == 1){
		  searchResults[$liveIndex] = "adv.videos/"+li[i];
        }else if(fileTypeID[i] == 2){
		  searchResults[$liveIndex] = "adv.audios/"+li[i];
        }else{
		  searchResults[$liveIndex] = "adv.images/"+li[i];
		}
        //if(page_type == 1){
		    searchResultsCompany[$liveIndex] = li2[i];
	    //}
        $liveIndex += 1;
    } else {
      $liveIndex = 0;
      //window.console.log(li[i]+'0');//li[i].style.display = "none";
    }
  }
    if(searchResults.length != 0){
      var advFilesContainer = document.getElementById("adv-files-showcase");
      if(searchCallID == 1){
		//var colEmbed = document.getElementById("col-embed");var columElem
        for(var i = 0;i < columElemContainer.length;i++){
           advFilesContainer.removeChild(columElemContainer[i]);
		}
		searchCallID = 0;
      }
       if(fetchSearch == 1){
		document.getElementById("container-c31").removeChild(advFilesContainer);
		var advFileContainer = document.createElement("div");
		advFileContainer.setAttribute("class", "row");
		advFileContainer.setAttribute("id", "adv-files-showcase");
		document.getElementById("container-c31").append(advFileContainer);//clearContainerId
		//window.console.log(searchResults);
		//window.console.log(fileTypeID);
		searchCallID = 1;
	   }
	    fetchSearch = 1;

		exhibitEventsFromLiveSearch(2, drim_21, searchResults, null, searchResultsCompany, fileTypeID);
		searchResults = [];
        columElemContainer = [];
        searchResultsCompany = [];
	}
   
   //window.console.log("dkdkd");
}