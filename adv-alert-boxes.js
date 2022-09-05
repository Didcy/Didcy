"use strict";

/* document.getElementById("close-alert-box").onclick = function(){
	document.getElementById("info-error").innerHTML = "";
	document.getElementById("alert-box").style.display = "none";
}
 */

// Get the modal
function AlertBoxInModal($error_line = ""){
	var modal = document.getElementById("myModal-alert-box");

	// Get the button that opens the modal
	//var btn = document.getElementById("myBtn");
   
   modal.style.display="block";
   document.getElementById("error-line").innerHTML = $error_line;
   setTimeout(()=>{modal.style.display="none";}, 2000);

}