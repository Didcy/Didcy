  "use strict";
  
  var it = {
	split: document.getElementById("split"),
	quak: document.getElementById("quak"), 
	didcyFixes: { 
	       mainSplit: document.getElementById("modal-split"), 
		   contentSplit: document.getElementById("modal-content-split"), 
		   closeSplit: document.getElementById("close-split"), 
	       mainQuak: document.getElementById("modal-quak"), 
		   contentQuak: document.getElementById("modal-content-quak"), 
		   closeQuak: document.getElementById("close-quak"), 
    }
	//split: document.getElementById(""),  
  };
  
  it.didcyFixes.closeSplit.onclick = function(){
	   it.didcyFixes.mainSplit.style.height = "0%";
  }
  
  it.didcyFixes.closeQuak.onclick = function(){
	   it.didcyFixes.mainQuak.style.height = "0%";
  }
  
  it.split.onclick = function(){
	 ITrack("Split", "Didcy", "2022-25-03", "08:57:04", "98050", "10051", "Help users split any page or window into two.", 
	 "info@didcy.com");
	  it.didcyFixes.mainSplit.style.height = "100%";
  }
  it.quak.onclick = function(){
	 ITrack("Quak", "Didcy", "2022-26-03", "01:22:34", "20050", "34551", "Provides entertainment to it's users as a Game.", 
	 "info@didcy.com");
	 it.didcyFixes.mainQuak.style.height = "100%";
  }