"use strict";

function ascii (a) { return a.charCodeAt(0); }

function Salt($password = []){
   let $randomizer = "";
   var $parr = [];
   var checkRP = 0, index = [], _index = 0;
   var $chars = "";
   
   var randContainer = "", randomChars = ['A', 'B', 'C', 'D', 'E', 'F', 'G',' H', 'I', 'J', 'K', 
   'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '@', '#', '$', '&', 
   '?', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's', 't',
   'u', 'v', 'w', 'x', 'y', 'z', '%', '^'];
   
   var ran = 0, $add = 0;
   var $c = 0;
   
   for(;ran < $password.length;ran++){
	  $randomizer = ((ascii($password[ran])>>1)*(Number(getCookieValue("TTLIP"))));
	  $c = didcx_random_number_generator(0, randomChars.length-1);
	  
	  randContainer += ((ascii(randomChars[$c])>>1)*(Number(getCookieValue("TTLIP")))).toString() + 
	  $randomizer.toString();
	  
	  $parr[$add] = ((ascii(randomChars[$c])>>1)*(Number(getCookieValue("TTLIP")))).toString();// + 
	  $add += 1;
	  $parr[$add] = $randomizer.toString();
	  if(ascii($password[ran])%2 == 1){
	     index[_index] = $add;
		 _index += 1;
	  }
	  $add += 1;
	  $chars += randomChars[$c] + $password[ran];
   }   
   
   if($password.length < randomChars.length){
	   for(var _ran = ran-1;_ran < randomChars.length;_ran++){
		  randContainer += 
		  (ascii(randomChars[didcx_random_number_generator(0, randomChars.length-1)])>>1).toString();// + 
	   }
	   checkRP = 1;
   }
   //return [randContainer, $parr, index];	
   return [$parr, index];	
}

var shift = ($password = [])=> {
	let $shifted_data = "";
	var encrypted_data = Salt($password);
    return encrypted_data;
}

function transportThis($pssr = []){
	let $presult = "";
	for(var $run = 0;$run < $pssr.length;$run++){
		$presult += String.fromCharCode($pssr[$run]);
	}
	return $presult;
}