"use strict";

document.getElementById("links").addEventListener("click", (event) => {event.preventDefault();
About();});

document.getElementById("links-left-side").addEventListener("click", (event) => {event.preventDefault();
About();});

function About(){
/* ServicesNotAvailable('About Services', 
'About Service report is at the back side. Please tab/put the mouse on this box to view the report.');  */ 

   open();
}

function Jhal(){
   openJhal();
}

document.getElementById("jhal").addEventListener("click", Jhal);