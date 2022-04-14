"use strict";

/*[[https://www.didcy.ueuo.com], [$1_secure_my_domains, $1_secure_my_domains, 
term_of_use, term_of_use, term_of_sanction, term_of_sanction, https://policymaker.io/non_disclosure_agreement, https://policymaker.io/privacy_policy, authors/know_more, investors/know_more, team/know_more, didcy_design_updates_centre, mentors/know_more]];
*/
//http://www.didcy.ueuo.com http://www.didcy.ueuo.com/advert.llc

//http://www.didcy.ueuo.com

//http://www.didcy.ueuo.com

var didcyLinks = {
	didcy: {"id": "didcy", "link": "http://www.didcy.ueuo.com/adv-main.html?drim="},
	home: {"id": "home", "link": "http://www.didcy.ueuo.com/adv-main.html?drim="},
	secure_my_domains: {"id": "secure-my-domains", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=029910827171820&policy-id=0&&data_id=0&service=0&&drim="},
	dispute: {"id": "dispute", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=12299108271718212&policy-id=0&&data_id=12&service=0&&drim="},
	domian_term_of_use: {"id": "domian-term-of-use", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=129910827171821&policy-id=0&&data_id=1&service=0&&drim="},
	limit: {"id": "limit", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=11299108271718211&policy-id=0&&data_id=11&service=0&&drim="},
	term_of_sanction: {"id": "term-of-sanction", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=229910827171822&policy-id=0&&data_id=2&service=0&&drim="},
	term_of_sanction2: {"id": "term-of-sanction-2", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=229910827171822&policy-id=0&&data_id=2&service=0&&drim="},
	non_disclosure_agreement: {"id": "non-disclosure-agreement", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=329910827171823&policy-id=0&&data_id=3&service=0&&drim="},
	privacy_policy : {"id": "privacy-policy", "link": "adv-retrieve.php?rc_id=429910827171824&policy-id=0&&data_id=4&service=0&&drim="},
	privacy_policy_link: {"id": "privacy-policy-link", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=529910827171825&policy-id=0&&data_id=5&service=0&&drim="},
	authors_know_more : {"id": "authors-know-more", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=629910827171826&policy-id=0&&data_id=6&service=0&&drim="},
	investors_know_more: {"id": "investors-know-more", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=729910827171827&policy-id=0&&data_id=7&service=0&&drim="},
	team_know_more: {"id": "team-know-more", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=829910827171828&policy-id=0&&data_id=8&service=0&&drim="},
	design_update_centre: {"id": "design-update-centre", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=929910827171829&policy-id=0&&data_id=9&service=0&&drim="},
	mentors_know_more: {"id": "mentors-know-more", "link": "http://www.didcy.ueuo.com/adv-retrieve.php?rc_id=10299108271718210&policy-id=0&&data_id=10&service=0&&drim="}	
};

function SetDidcyLinks(){
	var drim = null; 
	
	if(window.location.href.slice(39) == ""){
	  drim =  "19200112993801028822991919-929lkkwowiiw00-lwwlw19991lmmcxcjwei9_292011";
	}else{
		drim = window.location.href.slice(39);
	}
	var did = null;
	{
	   document.getElementById(didcyLinks.secure_my_domains.id).setAttribute("href", didcyLinks.secure_my_domains.link+drim);


	   {
	   
	     var dispute = document.getElementsByClassName(didcyLinks.dispute.id);
		 
		 const disputeLength = dispute.length;
		 
		 for(var i = 0;i < disputeLength; i++){
			dispute[i].setAttribute("href", didcyLinks.dispute.link+drim);
		 }
	   
	   }
	   
	   did = didcyLinks.secure_my_domains.link+drim;
	   
	   document.getElementById(didcyLinks.domian_term_of_use.id).href = didcyLinks.domian_term_of_use.link+drim;
	   
	   {
	   
	     var limit = document.getElementsByClassName(didcyLinks.limit.id);
		 
		 const limitLength = limit.length;
		 
		 for(var i = 0;i < limitLength; i++){
			limit[i].href = didcyLinks.limit.link+drim;
		 }
	   
	   }
	   
	   //document.getElementById(didcyLinks.term_of_sanction.id).href = didcyLinks.term_of_sanction.link+drim;

	   {
	   
	     var term_of_sanction = document.getElementsByClassName(didcyLinks.term_of_sanction.id);
		 
		 const term_of_sanctionLength = term_of_sanction.length;
		 
		 for(var i = 0;i < term_of_sanctionLength; i++){
			term_of_sanction[i].href = didcyLinks.term_of_sanction.link+drim;
		 }
	   
	   }
	   
	   //document.getElementById(didcyLinks.term_of_sanction2.id).href = didcyLinks.term_of_sanction.link+drim;

	   {
	   
	     var term_of_sanction2 = document.getElementsByClassName(didcyLinks.term_of_sanction2.id);
		 
		 const term_of_sanction2Length = term_of_sanction2.length;
		 
		 for(var i = 0;i < term_of_sanction2Length; i++){
			term_of_sanction2[i].href = didcyLinks.term_of_sanction.link+drim;
		 }
	   
	   }
	   
	   document.getElementById(didcyLinks.non_disclosure_agreement.id).href = didcyLinks.non_disclosure_agreement.link+drim;
	   
	   document.getElementById(didcyLinks.privacy_policy.id).href = didcyLinks.privacy_policy.link+drim;
	   
	   document.getElementById(didcyLinks.privacy_policy_link.id).href = didcyLinks.privacy_policy_link.link+drim;
	   
	   document.getElementById(didcyLinks.authors_know_more.id).href = didcyLinks.authors_know_more.link+drim;
	   
	   document.getElementById(didcyLinks.investors_know_more.id).href = didcyLinks.investors_know_more.link+drim;
	   
	   document.getElementById(didcyLinks.team_know_more.id).href = didcyLinks.team_know_more.link+drim;
	   
	   document.getElementById(didcyLinks.design_update_centre.id).href = didcyLinks.design_update_centre.link+drim;
	   
	   document.getElementById(didcyLinks.mentors_know_more.id).href = didcyLinks.mentors_know_more.link+drim;
	}
	//window.console.log(did);
}

//setTimeout(() => 
SetDidcyLinks();//, 3000);