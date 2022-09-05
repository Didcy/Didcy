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
			"and practicing is nothing. He believes is like been forced to do something you've no love for. "+
			"David loves what he do and what he do love is making everybody happy not pleasing(only when necessary)."; 
	  }
	  else if(description == 'Godbless' || description == 'Godbless'){
		 description = "Godbless is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you."; 
	  }
	  else if(description == 'Alex' || description == 'Alex'){
		 description = "Alex Sanchez is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you."; 
	  }
	  document.getElementById("more-insight").innerHTML = 
	  //"Tel: "+tel+"<br>//"Email: "+email+"<br>
	  "Description: "+description;
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

WriteDescription1("Godbless is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you.", "doubalet@gmail.com", 1);

WriteDescription1("Alex Sanchez is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you.", "alexsanchez@gmail.com", 2);

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
			"davidansong213@gmail.com", 3);

WriteDescription1("Godbless is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you.",
		 "doubalet@gmail.com", 4);			
			
WriteDescription1("Alex Sanchez is a young entrepreneur with a lot of vision and desire to improve and fix the current"+
		 " mess the world is currently residing or situated in. He is a valuable thinker, tinker, developer or creator, designer, idealist "+
		 " and young upcoming businessman. He is one of the most valuable builders of this incredible growing platform. He helped "+
		 "draft DidcyTerms and DidcyCook as part of a generous and dedicated team work. Alex is a great team member. He is always available to "+ 
		 "individuals with the vision and spirit to fix the mess in the world and help more people out of their current miseries and poverty. He is also "+ 
		 "great with childrens even though it might not show from looking at his appearance. He do love childrens and we as a team can testify to that. "+
		 "He sends all his undying love wishes to everybody on planet Earth and more <b>finding</b> wishes to every USER of this amazingly incredible platform, so that "+
		 "they can <b>find</b> whatever they seek on this platform. "+
		 "<br>Love you all. <br>Thank you.", "alexsanchez@gmail.com", 5);
/* WriteDescription1("", 1);
WriteDescription1("", 2);
WriteDescription1("", 3);
WriteDescription1("", 4);
WriteDescription1("", 5); */