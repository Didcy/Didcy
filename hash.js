var rans = [], tkeeper = [];
var i = 0, k = 0, j = 0;

var $uid, $psk, psw, rpsw;

/* let didcx_random_number_generator = function(min, max){
	return Math.floor(Math.random() * (max - min)) + min;
} */

function RK($email, $password, $repeatPassword){
   
		if($email == ""){
			return -1;
		}
		
		if($password == ""){
			return -2;
		}
		
		if($repeatPassword == ""){
			return -3;
		} 
	
   rans[i] = didcx_random_number_generator(0, 2288282819191911);
   if(rans.length == 1000){
	   Passphrase($password, $repeatPassword);
       //TK($password, $repeatPassword);
       return;
   }
   else{
       i++;
      return RK($email, $password, $repeatPassword);
   }
}

var riv;

function trand(tc, ts = 0, tkeeper = 0){
    ts = didcx_random_number_generator(0, tkeeper.length-1);
	ts = tkeeper[ts];
   if(tc < ts){
     return trand(tc, ts, tkeeper);
   }
   return riv = ts;
}

var dd = 0;
var tc;

async function sleepMode2($password, $repeatPassword, sleep_time = 121000, sleep_caller = null){
		 while(tkeeper.length != 200){ //181000 - 3mins 1s 301000 - 5mins 01s 61000 - 1mins 1s
             await sleep(1);
             tkeeper[k] = (new Date().getTime())*didcx_random_number_generator(5, 103);
			 if(tkeeper.length == 200){
				var tr = didcx_random_number_generator(0, tkeeper.length-1);
				tc = tkeeper[tr];
				//window.console.log($password);
				Passphrase($password, $repeatPassword);
				break;
				return;
			 }else{
				 window.__sleep = window.__sleep + 1;
			 }
			 k++;
		 }
}


function TK($password, $repeatPassword){
	//window.console.log($password);
	
    tkeeper[k] = didcx_random_number_generator(5, 57553689829132);
	if(tkeeper.length == 6000){
		var tr = didcx_random_number_generator(0, tkeeper.length-1);
		tc = tkeeper[tr];
		psw = $password;
		rpsw = $repeatPassword;
		//window.console.log($password);
		//Passphrase($password, $repeatPassword);
		return;
	}else{
		k++;
		return TK($password, $repeatPassword); 
	}	
    //sleepMode2($password, $repeatPassword, 121000, null);
}

 var pass, pass2, pks;
var p3, pkeek;

function Passphrase($password, $repeatPassword){
  if($password == $repeatPassword){
  //window.console.log($password);
  //$password = $password.value.toString().trim();
  
  //let $password = $password;//"HELLOWORLD";//"1010";//"HELLOWORLD";
  
  var rk = didcx_random_number_generator(0, rans.length-1);
  var rpk = rans[rk];
  var sk = 0;
  
  var passcodes = [], passcodes2 = [], passcodes3 = [];
  
  if(rpk%2 == 1){
     sk = rpk;
  }
  else{
    return Passphrase($password, $repeatPassword);
  }
  
  //window.console.log($password);
  //return $password;
 
  for(var i = 0;i < $password.length;i++){
     passcodes[i] = $password.charCodeAt(i)+sk;
  }
  dd = new Date();
  
  TK($password, $repeatPassword);
  
  trand(tc, 0, tkeeper);
  var TTL = (tc-didcx_random_number_generator(1, 575536898291)) - riv;

  tkeeper[didcx_random_number_generator(0, tkeeper.length-1)] = TTL;
       
  for(var i = 0;i < $password.length;i++){
     passcodes2[i] = ((passcodes[i]+TTL)+2147483647)+Number(getCookieValue("TTLIP"));
  }  
  
  for(var i = 0;i < $password.length;i++){
     passcodes3[i] = (Math.trunc(Math.floor((passcodes2[i]))));
  }  
  
  pass = [], pass2 = [[], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []];
  
  p3 = [[], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []];
  
  pkeek = [];
  
  pass = converter(passcodes3, pass, pass2, p3);
  
  var pks = [TTL, sk];
  
   $uid = JSON.stringify(pass);
   $psk = JSON.stringify(pks);
   
   //ListenOnSignIn();
   //ListenOnSignUp();
   
  }else{
	  return "dd;d;d";
  }
}

function converter(array = [], pass = [], pass2 = [], pass3  = []){
   for(var g = 0;g < array.length;g++){
      var garbage = ['@', '#', '!', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '[', ']', '|', '`', '~'];
      var str = array[g].toString()+'@';
	  for(var k = 0; k < str.length;k++){
	      if(str[k] == '@'){
	        p3[g][k] = str[k];
	        pass2[g][k] = str[k]; 
		  }else{
	        p3[g][k] = str[k];
	        pass2[g][k] = String.fromCharCode(str[k]);
		  }
	  }
	  
   }
   
   for(var g = 0;g < array.length;g++){
	  pkeek[g] = [[p3[g]]];
	  pass[g] = [[pass2[g]]];
   }
   return pass;
}