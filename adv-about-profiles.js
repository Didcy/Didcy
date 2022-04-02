 "use strict";
 
 function Insight(image, profileName, tel, email, description){
      document.getElementById("img01-21").src = image;
	  document.getElementById("profile-name").innerHTML = profileName;
	  if(description == 0 || description == '0'){
		 description = "David Ansong is a person who"+ 
		 " loves to make everybody most especially, children, his first priority. He believes that childrens"+
		 " are what matters in this world. He believes giving them the best of everything we've got as a "+
		 " human race is what will provide safety to them and assure them their peaceful future ahead."+
		  " David is the main author and creator of this platform but hates to make it publicly known to the world"+
		  " becaus for him human praise is the last thing on his mind. He believes truth and honest praise comes"+
		   " from your legacy not whiles you are currently alive where you can hear people shout your name with or "+ 
			"without real honesty in what they shout at. David loves learning, reading and makes sure that whatever "+
			"he start to learn he understands 100%. He believes that learning and reading without understanding "+
			"and practicing is nothing. He believes is like be forced to do something you've no love for. "+
			"David loves what he do and what he do love is making everybody happy not pleasing(only when necessary)."; 
	  }
	  document.getElementById("more-insight").innerHTML = 
	  "Tel: "+tel+"<br>Email: "+email+"<br>Description: "+description;
	  document.getElementById("myModal-profile-insight").style.display = "block";
 } 
 var spanProfileInsight = document.getElementById("close-profile-insight");
 spanProfileInsight.onclick = function(){
      document.getElementById("img01-21").src = "";
	  document.getElementById("profile-name").innerHTML = "";
	  document.getElementById("more-insight").innerHTML = "";    
      document.getElementById("myModal-profile-insight").style.display = "none";	  
 }

function WriteDescription1(description, email, id){
 var members = document.getElementsByClassName("descriptive-developers");
 var emails = document.getElementsByClassName("email-developers");
 let membersLength = members.length;
/*  for(var itMember = 0;itMember < membersLength;itMember++){
	if(id == 0){ */
	const itMember = id;
	 members[itMember].innerHTML = description.substring(0, 45)+"...";
	 emails[itMember].innerHTML = email;
/* 	}
 } */
}

WriteDescription1("David Ansong is a person who"+ 
		 " loves to make everybody most especially, children, his first priority. He believes that childrens"+
		 " are what matters in this world. He believes giving them the best of everything we've got as a "+
		 " human race is what will provide safety to them and assure them their peaceful future ahead."+
		  " David is the main author and creator of this platform but hates to make it publicly known to the world"+
		  " becaus for him human praise is the last thing on his mind. He believes truth and honest praise comes"+
		   " from your legacy not whiles you are currently alive where you can hear people shout your name with or "+ 
			"without real honesty in what they shout at. David loves learning, reading and makes sure that whatever "+
			"he start to learn he understands 100%. He believes that learning and reading without understanding "+
			"and practicing is nothing. He believes is like be forced to do something you've no love for. "+
			"David loves what he do and what he do love is making everybody happy not pleasing(only when necessary).", 
			"davidansong213@gmail.com", 0);
/* WriteDescription1("", 1);
WriteDescription1("", 2);
WriteDescription1("", 3);
WriteDescription1("", 4);
WriteDescription1("", 5); */

WriteDescription1("David Ansong is a person who"+ 
		 " loves to make everybody most especially, children, his first priority. He believes that childrens"+
		 " are what matters in this world. He believes giving them the best of everything we've got as a "+
		 " human race is what will provide safety to them and assure them their peaceful future ahead."+
		  " David is the main author and creator of this platform but hates to make it publicly known to the world"+
		  " becaus for him human praise is the last thing on his mind. He believes truth and honest praise comes"+
		   " from your legacy not whiles you are currently alive where you can hear people shout your name with or "+ 
			"without real honesty in what they shout at. David loves learning, reading and makes sure that whatever "+
			"he start to learn he understands 100%. He believes that learning and reading without understanding "+
			"and practicing is nothing. He believes is like be forced to do something you've no love for. "+
			"David loves what he do and what he do love is making everybody happy not pleasing(only when necessary).", 
			"davidansong213@gmail.com", 1);
/* WriteDescription1("", 1);
WriteDescription1("", 2);
WriteDescription1("", 3);
WriteDescription1("", 4);
WriteDescription1("", 5); */