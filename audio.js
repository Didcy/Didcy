/*var audio = document.getElementById("audio");
var playPauseBTN = document.getElementById("playPauseBTN");*/

var count = 0;
var clearStopIfEnded = 0;

function playPause(audio, playPauseBTN){
	if(count == 0){
		count = 1;
		audio.play();
		playPauseBTN.innerHTML = "&#9208;";
	}else{
		count = 0;
		audio.pause();
		playPauseBTN.innerHTML = "&#9658;";
	}
	clearStopIfEnded = setInterval(() => {StopSongIfEnded(audio, playPauseBTN);}, 1000);
}

function StopSongIfEnded(audio, playPauseBTN){
 if(count == 1){
  if (audio.ended){
		count = 0;
		audio.pause();
		playPauseBTN.innerHTML = "&#9658;";	
        clearInterval(clearStopIfEnded);
		clearStopIfEnded = 0;
  }
 }
}

function stop(){
	playPause();
	audio.pause();
	audio.currentTime = 0;
	playPauseBTN.innerHTML = "&#9658;";
}