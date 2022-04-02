"use strict";

var id = null;

function ResizeAnimator(){
  //document.getElementById('myModal-animated-image').style.width = "0%";
  document.getElementById('myModal-animated-image').style.height = "0%";	
  document.getElementById('myModal-animated-image').style.display = "none";	
}

function SwitchImages(imageId = null, imageFile = "") {
   	var image = null;
   switch(imageId){
	  case "dans":
	    image = "adv.actors.profiles/people1.jpg";
	    document.getElementById("animated-image").src = image;
	  break
	  case "alsan":
	    image = "adv.actors.profiles/people2.jpg";
	    document.getElementById("animated-image").src = image;	   
	  break;
	  case "mrglss":
	    image = "adv.actors.profiles/people3.jpg";
	    document.getElementById("animated-image").src = image;		  
	  break;
	  case "dquary":
	    image = "adv.actors.profiles/people1.jpg";
	    document.getElementById("animated-image").src = image;		  
	  break;
	  case "jsbrn":
	    image = "adv.actors.profiles/people2.jpg";
	    document.getElementById("animated-image").src = image;		  
	  break;
	  case "bsad":
	    image = "adv.actors.profiles/people1.jpg";
	    document.getElementById("animated-image").src = image;		  
	  break;
	  case "enki":
	    image = "adv.actors.profiles/people3.jpg";
	    document.getElementById("animated-image").src = image;		  
	  break;
	  case "-upcoming-updates":
	    image = "adv.tutorials/images/Capture291.PNG";
	    document.getElementById("animated-image").src = image;			
	    document.getElementById("animated-image").style.height = "90%";			
	    document.getElementById("animated-image").style.width = "100%";			
	    document.getElementById("animated-image").style.left = "0%"				
	    document.getElementById("animated-image").style.margin = "0";								
	    document.getElementById("animated-image").style.top = "0%";			
	  break;
	  case "upcoming-updates":
	    image = "adv.tutorials/images/Capture261.PNG";
	    document.getElementById("animated-image").src = image;			
	    document.getElementById("animated-image").height = "90%";			
	    document.getElementById("animated-image").width = "100%";			
	    document.getElementById("animated-image").left = "0%";			
	    document.getElementById("animated-image").top = "0%";			
	  break;
	  default: 
	    return window.alert("Image Not Found");
   }
}

function MoveAnimate(imageId = null, imageFile = "") {
  //document.getElementById('myModal-animated-image').style.width = "100%";
  //document.getElementById('myModal-animated-image').style.';
  SwitchImages(imageId, imageFile);
  document.getElementById('myModal-animated-image').style.display = "block";
  document.getElementById('myModal-animated-image').style.height='100%';
  document.getElementById('animated-image').style.top = "0%";
  document.getElementById('animated-image').style.left = "0%";
  document.getElementById('animated-image').style.width = "50px";
  document.getElementById('animated-image').style.height = "50px";
  var elem = document.getElementById("animated-image");   
  var pos = 0;
  clearInterval(id);
  id = setInterval(frame, 1);//10
  function frame() {
   if(window.matchMedia('(min-width: 1025px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 20 + '%'; 
	  elem.style.width = "60%";
	  elem.style.height = "70%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }
   }else if(window.matchMedia('(max-width: 1024px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 10 + '%'; 
	  elem.style.width = "80%";
	  elem.style.height = "70%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 987px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 927px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 823px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 738px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 600px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 450px)').matches == true){
    if (pos == 350) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 400px)').matches == true){
    if (pos == 330) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 375px)').matches == true){
    if (pos == 330) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }else if(window.matchMedia('(max-width: 3600px)').matches == true){
    if (pos == 250) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }		   
   }else if(window.matchMedia('(max-width: 320px)').matches == true){
    if (pos == 250) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }		   
   }else if(window.matchMedia('(max-width: 280px)').matches == true){
    if (pos == 170) {
      clearInterval(id);
      elem.style.top = 20 + '%'; 
      elem.style.left = 0 + '%'; 
	  elem.style.width = "100%";
	  elem.style.height = "80%";
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }	   
   }
  }
}
