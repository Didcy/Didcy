function open(){
   //document.getElementById("bit").style.display = "none";
   document.getElementsByClassName("curtain")[0].style.width = "50%";
   document.getElementsByClassName("curtain")[1].style.width = "50%";
 }
 
 function openJhal(){
   //document.getElementById("bit").style.display = "none";
   document.getElementsByClassName("curtain-animate")[0].style.width = "50%";
   document.getElementsByClassName("curtain-animate")[1].style.width = "50%";
 }
 
 function openJhalTeam(){
	 
 }
 function openJhalDevelopers(){
	 
 }
 
 
 var spanCurtain = document.getElementsByClassName("close-curtain")[0];
 var spanCurtainAnimate = document.getElementsByClassName("close-curtain-animate")[0];
 
spanCurtainAnimate.onclick = function(){
    document.getElementsByClassName("curtain-animate")[0].style.width = "0%";
    document.getElementsByClassName("curtain-animate")[1].style.width = "0%";  
    {
		//document.getElementById("video-abt").pause();
	}
}
 
 spanCurtain.onclick = function(){
    document.getElementsByClassName("curtain")[0].style.width = "0%";
    document.getElementsByClassName("curtain")[1].style.width = "0%";  
 }