   "use strict";
   var emoji = document.getElementsByClassName("emoji");
   var click = 0, previousEmoji = 0, emojiOutCome = String(""), temp = 0;   
   
   function submitFeedBack(rateID = 0){
	   if(rateID == 1){
		if(click == 1){
		   var form = new FormData();
		   var drim = window.location.href.slice(39);
		   if(drim != ""){
		   var emo = {
						  drm: drim, 
						  clck: click, 
						  previousEmo: previousEmoji, 
						  tmp: temp, 
						  emoOutCome: emojiOutCome
					  };
					  
		   form.append("RT", "0");
		   form.append("rate", JSON.stringify(emo));
		      $.ajax({
			    type: "POST",
				url: "adv-rater.php",
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				success: function(result){
				  // window.console.log(result);
				   var data_returned = JSON.parse(result);
				   if(data_returned.state == 0){
				        alertBox(data_returned.error); 
				   }
				   else if(data_returned.state == 1){
				        alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 2){
				        alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 3){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 4){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 5){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 6){
				       alertBox(data_returned.congrate);
				   }
				   else{}
					   click = 0;		   
					   emoji[temp].style.opacity = "1";
					   previousEmoji = 0;
					   temp = 0;
				},
				error: function(){}
			  });
		   }else{
			   alertBox("Please not allowed on Home Page");
		   }
		}else{
		   alertBox("Please select an emo");
		}  
	   }else{
		   var form = new FormData();
		   form.append("RT", "1");
		      $.ajax({
			    type: "POST",
				url: "adv-rater.php",
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				success: function(result){
				   //window.console.log(result);
				   var data_returned = JSON.parse(result);
				   if(data_returned.state == 0){
				        alertBox(data_returned.error); 
				   }
				   else if(data_returned.state == 1){
				        alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 2){
				        alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 3){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 4){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 5){
				       alertBox(data_returned.error);
				   }
				   else if(data_returned.state == 55){
					   //window.console.log(data_returned);
					   document.getElementsByClassName("ratings-percentages-header")[0].innerHTML = 
					   data_returned.ratings.ratingsInPercentage;
					   document.getElementsByClassName("ratings-percentages-header")[1].innerHTML = 
					   data_returned.ratings.ratingsInRealNumber;
					   {

					   document.getElementsByClassName("rating-figures")[0].innerHTML = 
					   data_returned.ratings.raters.gd["n"];
					   
					   document.getElementsByClassName("rating-figures")[1].innerHTML = 
					   data_returned.ratings.raters.vg["n"];				   
					   
					   document.getElementsByClassName("rating-figures")[2].innerHTML = 
					   data_returned.ratings.raters.bd["n"];
					   
					   document.getElementsByClassName("rating-figures")[3].innerHTML = 
					   data_returned.ratings.raters.vb["n"];					   
					   
					   document.getElementsByClassName("rating-figures")[4].innerHTML = 
					   data_returned.ratings.raters.et["n"];						   
						   
						   
					   document.getElementsByClassName("ratings-percentages")[0].innerHTML = 
					   data_returned.ratings.raters.gd["%"];
					   
					   document.getElementsByClassName("ratings-percentages")[1].innerHTML = 
					   data_returned.ratings.raters.vg["%"];				   
					   
					   document.getElementsByClassName("ratings-percentages")[2].innerHTML = 
					   data_returned.ratings.raters.bd["%"];
					   
					   document.getElementsByClassName("ratings-percentages")[3].innerHTML = 
					   data_returned.ratings.raters.vb["%"];					   
					   
					   document.getElementsByClassName("ratings-percentages")[4].innerHTML = 
					   data_returned.ratings.raters.et["%"];	
					   
					   
					   {
						   
					   document.getElementsByClassName("bar-5")[0].style.width = 
					   data_returned.ratings.raters.gd["%"]+"%";
					   
					   document.getElementsByClassName("bar-4")[0].style.width = 
					   data_returned.ratings.raters.vg["%"]+"%";				   
					   
					   document.getElementsByClassName("bar-3")[0].style.width = 
					   data_returned.ratings.raters.bd["%"]+"%";
					   
					   document.getElementsByClassName("bar-2")[0].style.width = 
					   data_returned.ratings.raters.vb["%"]+"%";					   
					   
					   document.getElementsByClassName("bar-1")[0].style.width = 
					   data_returned.ratings.raters.et["%"]+"%";
						   
					   }
					   
					   }
				   }
				   else{}
				},
				error: function(){}
			  });			  
	   }
   }
   
   for(var i = 0;i < emoji.length;i++){
     emoji[i].addEventListener("click", md(emoji, i));
   }


function md(emoji, i){ 
    emoji[i].onclick = function(){
	   if(click == 1){
	     if(previousEmoji != i && click == 1){
		   emoji[previousEmoji].style.opacity = "1";
		   click = 0;
		   previousEmoji = 0;	   
		 }
	    }
		if(click == 1){
		   click = 0;		   
		   emoji[i].style.opacity = "1";
		   return;
		}
		if(i == 0){emojiOutCome = "bad";}
		if(i == 1){emojiOutCome = "very bad";}
		if(i == 2){emojiOutCome = "good";}
		if(i == 3){emojiOutCome = "very good";}
		if(i == 4){emojiOutCome = "excellent";}
		
		emoji[i].style.opacity = "0.1";
		click = 1;
		previousEmoji = i;
		temp = i;
    }  	
} 
