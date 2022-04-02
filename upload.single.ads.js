  function upload(){
      let files =  document.getElementById("upload");  
      var form = new FormData();
	  form.append("adv", document.forms['adv-files']['uploads'].files[0]);
	  form.append("fetch", 0);
	  $.ajax({
	     type: "POST",
		 url: "adv-uploader.php",
		 data: form,
		 contentType: false,
		 cache : false,
		 processData: false,
		 success: function(result){
	        window.console.log(result);
		    var data_returned = JSON.parse(result);
			if(data_returned.state = true){
				  var removeEventVid = () => {
					 let eventContainer = document.getElementById("adv-files-showcase");
					 var eventVid = storeAllCreatedIds;
					 const eventVidLength = eventVid.length;
					 for(var i = 0;i < eventVidLength;i++){
						if(i == eventVidLength){
						  storeAllCreatedIds = [];
						  exhibitEvents();	
						  break;
						}
					    var videos = document.getElementById(eventVid[i]);
						eventContainer.removeChild(videos);
						storeAllCreatedIds = [];
					 }
				  }
				  
				  removeEventVid();
				  storeAllCreatedIds = [];
				  convert_to_object = null;
				  system_dirArr = [];
				  array_js_init = 0, array_js = [], linkArr = null;
				  exhibitEvents();	
			} 
			else{
			   window.alert("No");
			}
		 },
		 error: function(){}
	  });
  }  