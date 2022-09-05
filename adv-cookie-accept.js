"use strict";

var $__4958484_1929_cookie_terms_policy_accept = 0;

function acceptCookies($term_cookie_policy_acceptance = 0){
  $__4958484_1929_cookie_terms_policy_accept = $term_cookie_policy_acceptance;
  
  if($__4958484_1929_cookie_terms_policy_accept == 1){
    document.getElementById('cookie-accept').style.display='none';
  }
}