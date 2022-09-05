"use strict";

function randomizChars(){
   var randContainer = "", randomChars = ['A', 'B', 'C', 'D', 'E', 'F', 'G',' H', 'I', 'J', 'K', 
   'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '@', '#', '$', '&', 
   '?'];
   for(var ran = 0;ran < randomChars.length;ran++){
	  $randomizer = didcx_random_number_generator(0, 100);
	  randContainer += randomChars[didcx_random_number_generator(0, randomChars.length-1)] + 
	  $randomizer.toString();
   }
   return randContainer;
}

var checkRP = 0;

function Salt($password = []){
   let $randomizer = "";
   var randContainer = "", randomChars = ['A', 'B', 'C', 'D', 'E', 'F', 'G',' H', 'I', 'J', 'K', 
   'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '@', '#', '$', '&', 
   '?'];
   var ran = 0;
   for(;ran < $password.length;ran++){
	  //$randomizer = didcx_random_number_generator(0, 100);
	  randContainer += randomChars[didcx_random_number_generator(0, randomChars.length-1)] + 
	  $randomizer.toString();
   }   
   
   if($password.length < randomChars.length){
	   for(var _ran = ran;_ran < randomChars.length;ran++){
		  //$randomizer = didcx_random_number_generator(0, 100);
		  randContainer += randomChars[didcx_random_number_generator(0, randomChars.length-1)] + 
		  $randomizer.toString();
	   }
	   checkRP = 1;
   }
   return randContainer;	
}

var shift($password = []) => {
	let $shifted_data = "";
	var encrypted_data = Salt($password);
	
	for(var shift_each_data = 0;shift_each_data < encrypted_data.length;shift_each_data++){
		$shifted_data += (1>>Number(encrypted_data[shift_each_data])).toString();
		
	}
	return $shifted_data;
}

shift("ILOVEYOU");