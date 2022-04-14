	var __sleep = 1000;
	
	function sleep(ms){
	  return new Promise(resolve => setTimeout(resolve, ms));
	}


async function sleepMode(sleep_time = 121000, sleep_caller = null){
		 while(__sleep < sleep_time){ //181000 - 3mins 1s 301000 - 5mins 01s 61000 - 1mins 1s

             await sleep(1000);
			 if(window.__sleep == 121000){ //121000; 300000 - 5mins 60000 - 1mins 180000 - 3mins
				 //window.console.log("ended " + window.__sleep);
				 //sleeper = 0;
                 //window.console.log(keysKeeper);

				 break;
			 }else{
				 window.__sleep = window.__sleep + 1000;
			 }
		 }
}