"use strict";

function About(){
/* ServicesNotAvailable('About Services', 
'About Service report is at the back side. Please tab/put the mouse on this box to view the report.');  */ 

   open();
}

function open(){
   //document.getElementById("bit").style.display = "none";
   document.getElementsByClassName("curtain")[0].style.width = "50%";
   document.getElementsByClassName("curtain")[1].style.width = "50%";
 }
 
 var spanCurtain = document.getElementsByClassName("close-curtain")[0];
 var EnterRestaurant = document.getElementsByClassName("enter-restaurant")[0];
 var ExitRestaurant = document.getElementsByClassName("exit-restaurant")[0];

 spanCurtain.onclick = function(){
    document.getElementsByClassName("curtain")[0].style.width = "0%";
    document.getElementsByClassName("curtain")[1].style.width = "0%";  
 }

 EnterRestaurant.onclick = function(){
    document.getElementsByClassName("curtain")[0].style.width = "0%";
    document.getElementsByClassName("curtain")[1].style.width = "0%";  	 
 }
 
 ExitRestaurant.onclick = function(){
	window.location.replace("exit.restaurant.php");
	return;
 }
 
 About();
 
 