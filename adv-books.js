"use strict";

var seconds_count = 5;
var initial = 0;
var elem = document.getElementById("adv-Bar");
var elemWidth = 0;
var id = null;
var esta = null;
var freezeMode = null;

var openBooks = () => {
	document.getElementById('myModal-books').style.display='block';
	document.getElementById('count-down').style.display='block';
	document.getElementById("adv-Progress").style.display = "none";
	document.getElementById('count-down').innerHTML = "";
	

// Set the date we're counting down to
var countDownDate = new Date("Dec 31, 2022 15:37:25").getTime();

// Update the count down every 1 second
esta = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  /*document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";*/
  
  // Output the result in an element with id="demo"
  //document.getElementById("demo").innerHTML = seconds;
  
  if(seconds_count == -1){
	 //document.getElementById("demo").innerHTML = seconds_count; 
	 seconds_count = 5;
	 clearInterval(esta);
	 esta = null;
	 document.getElementById("count-down").style.display = "none";
	 document.getElementById("adv-Progress").style.display = "block";
	 document.getElementById("count-down").innerHTML = "";
	 return move();
  }else{
	 document.getElementById("count-down").innerHTML = seconds_count;
  }
  
  seconds_count--;
  
  // If the count down is over, write some teestat 
  if (distance < 0) {
    clearInterval(esta);
    document.getElementById("count-down").innerHTML = "EestaPIRED";
  }	
 }, 1000);
	
}

function move() {
  if (initial == 0) {
    initial = 1;
    elem = document.getElementById("adv-Bar");
    elemWidth = 1;
    id = setInterval(frame, 100);
    function frame() {
      if (elemWidth >= 100) {
        clearInterval(id);
        initial = 0;
		id = null;
		if(esta != null){
		   clearInterval(esta);
		   esta = null;
		}
		freezeMode = setTimeout(() => {
		 id = null;
		 if(esta != null){
		   clearInterval(esta);
		   esta = null;
		 }
         elem.style.width = 0 + "%";
		 elem.innerHTML = 0  + "%";
		 document.getElementById("myModal-books").style.display = "none";
		 document.getElementsByClassName("modal-ads-books")[0].style.height = "100%";
		 document.getElementsByClassName("modal-ads-books")[0].style.zIndex = "12";
		 freezeMode = null;
		}, 2000);
      } else {
        elemWidth++;
        elem.style.width = elemWidth + "%";
		 elem.innerHTML = elemWidth  + "%";
      }
    }
  }
}

var spanAdsBooksCountDown = document.getElementsByClassName("close-ads-books-countdown")[0];
var spanAdsBooks = document.getElementsByClassName("close-modal-ads-books")[0];

spanAdsBooks.onclick = function(){
  document.getElementsByClassName("modal-ads-books")[0].style.height = "0%";	
}

spanAdsBooksCountDown.onclick = function(){
  if(esta != null){
	  seconds_count = 5;
	  clearInterval(esta);
	  document.getElementById("count-down").style.display = "none";
	  document.getElementById("adv-Progress").style.display = "none";
	  document.getElementById("count-down").innerHTML = "";
	  esta = null;
  }
  if(id != null){
	  if(esta != null){
		  seconds_count = 5;
		  clearInterval(esta);
		  document.getElementById("count-down").style.display = "none";
		  document.getElementById("adv-Progress").style.display = "none";
		  document.getElementById("count-down").innerHTML = "";
		  esta = null;		  
	  }
	  seconds_count = 5;
	  document.getElementById("count-down").style.display = "none";
	  document.getElementById("adv-Progress").style.display = "none";
	  document.getElementById("count-down").innerHTML = "";
	  elem.style.width = 0 + "%";
	  elem.innerHTML = 0  + "%";
	  clearInterval(id);
	  initial = 0;
	  elemWidth = 0;
	  id = null;
      if(freezeMode != null){
		  if(esta != null){
			  seconds_count = 5;
			  clearInterval(esta);
			  document.getElementById("count-down").style.display = "none";
			  document.getElementById("adv-Progress").style.display = "none";
			  document.getElementById("count-down").innerHTML = "";
			  esta = null;		  
		  }
		  seconds_count = 5;
		  document.getElementById("count-down").style.display = "none";
		  document.getElementById("adv-Progress").style.display = "none";
		  document.getElementById("count-down").innerHTML = "";
		  elem.style.width = 0 + "%";
		  elem.innerHTML = 0  + "%";
		  if(id != null){
		     clearInterval(id);
			 id = null;
		  }
		  initial = 0;
		  elemWidth = 0;
		  esta = null;
		  id = null;
		  clearTimeout(freezeMode);
		  freezeMode = null;
		  document.getElementsByClassName("modal-ads-books")[0].style.height = "0%";
		  document.getElementsByClassName("modal-ads-books")[0].style.zIndex = "12";
	  }  
  }
  if(freezeMode != null){
	  if(esta != null){
		 seconds_count = 5;
		 clearInterval(esta);
		 document.getElementById("count-down").style.display = "none";
		 document.getElementById("adv-Progress").style.display = "none";
		 document.getElementById("count-down").innerHTML = "";
		 esta = null;		  
	  }
	  seconds_count = 5;
	  document.getElementById("count-down").style.display = "none";
	  document.getElementById("adv-Progress").style.display = "none";
	  document.getElementById("count-down").innerHTML = "";
	  elem.style.width = 0 + "%";
	  elem.innerHTML = 0  + "%";
	  if(id = null){
	     clearInterval(id);
	     id = null;
	  }
	  initial = 0;
	  elemWidth = 0;
	  esta = null;
	  id = null;
	  clearTimeout(freezeMode);
	  freezeMode = null;
      document.getElementsByClassName("modal-ads-books")[0].style.height = "0%";
	  document.getElementsByClassName("modal-ads-books")[0].style.zIndex = "12";
  } 
  document.getElementsByClassName("modal-books")[0].style.display = "none";	
}


document.getElementById("didcy-books").addEventListener("click", openBooks);

