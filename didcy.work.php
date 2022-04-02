<!doctype html>
<html lang="en-us" default-lang="english" def_country="usa">
<head> 
 <title class="" id="">Didcy Work</title>
 <meta http-equiv="refresh" content="35000000">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="work.css" type="text/css" min="0em" max="0vw" media="" media-type="">
 <link rel="stylesheet" href="adv-custom.radio.css" type="text/css" min="0em" max="0vw" media="" media-type="">
 <link rel="icon" href=".ico" type="image/ico">
 <style type="text/css">
  *{
	box-sizing: border-box;
  }
  html{
	
  }
  body{
    margin: 0;
	font-family:Arial,Helvetica,Sans-serif, Verdana;
	color: white;
  }
  div.welcome-didcy-work-container{
	background: rgba(20, 120, 201, 0.9);
	width: 100%;
	padding: 5px;
  }
  div.welcome-didcy-work-container h1.welcome-didcy-work{
    text-align: center;
  }
  div.welcome-didcy-work-container p.work-as-a-puzzle{
	text-align: center;
  }
/* Style inputs, select elements and textareas */
input.didcy-text, select.didcy-select, textarea.tarea, input.didcy-tel, input.didcy-number{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=number], span.or-n{
  width: 33.33%;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input.didcy-work-form-submit, button.take-photo {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button.take-photo{
  background-color: #000;
}

.custom-file-input-0::before{
  background: white;
  color: black;
  font-weight: 10;
  font-size: 15px;
}

/* Style the container */
.container-didcy-work {
  border-radius: 5px;
  background-color: rgba(70, 110, 80, 0.9);
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  .arrow-down{
	display: none;
  }
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input.didcy-work-form-submit, button.take-photo, input.didcy-number {
    width: 100%;
    margin-top: 0;
  }
  .arrow-right{
	display: none;
  }
  .arrow-down{
	display: block;
  }
}
 </style>
</head>
<body>

<div class="welcome-didcy-work-container">
	<h1 class="welcome-didcy-work">Welcome to Didcy Work</h1>
	<p class="work-as-a-puzzle">Where work is a puzzle</p>
</div>

<div class="container-didcy-work">
  <form id="didcy-work-form">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="didcy-text" id="fname" name="firstname" placeholder="Your first name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" class="didcy-text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select class="didcy-select" id="country" name="country">
		<option name="">Åland Islands</option>	
		<option name="">Afghanistan</option>	
		<option name="">Albania</option>	
		<option name="">Algeria</option>	
		<option name="">American Samoa</option>	
		<option name="">Andorra</option>	
		<option name="">Angola</option>	
		<option name="">Anguilla</option>	
		<option name="">Antigua and Barbuda</option>	
		<option name="">Argentina</option>	
		<option name="">Armenia</option>	
		<option name="">Aruba</option>	
		<option name="">Australia</option>	
		<option name="">Austria</option>	
		<option name="">Azerbaijan</option>	
		<option name="">Bahamas</option>	
		<option name="">Bahrain</option>	
		<option name="">Bangladesh</option>	
		<option name="">Barbados</option>	
		<option name="">Belarus</option>	
		<option name="">Belgium</option>	
		<option name="">Belize</option>	
		<option name="">Benin</option>	
		<option name="">Bermuda</option>	
		<option name="">Bhutan</option>	
		<option name="">Bolivia</option>	
		<option name="">Bonaire</option>	
		<option name="">Bosnia and Herzegovina</option>	
		<option name="">Botswana</option>	
		<option name="">Brazil</option>	
		<option name="">British Indian Ocean Territory</option>	
		<option name="">British Virgin Islands</option>	
		<option name="">Brunei</option>	
		<option name="">Bulgaria</option>	
		<option name="">Burkina Faso</option>	
		<option name="">Burundi</option>	
		<option name="">Cambodia</option>	
		<option name="">Cameroon</option>	
		<option name="">Canada</option>	
		<option name="">Cape Verde</option>	
		<option name="">Cayman Islands</option>	
		<option name="">Central African Republic</option>	
		<option name="">Chad</option>	
		<option name="">Chile</option>	
		<option name="">China</option>	
		<option name="">Colombia</option>	
		<option name="">Comoros</option>	
		<option name="">Democratic Republic of the Congo</option>	
		<option name="">Republic of the Congo</option>	
		<option name="">Cook Islands</option>	
		<option name="">Costa Rica</option>	
		<option name="">Croatia</option>	
		<option name="">Cuba</option>	
		<option name="">Curaçao</option>	
		<option name="">Cyprus</option>	
		<option name="">Czech Republic</option>	
		<option name="">Denmark</option>	
		<option name="">Djibouti</option>	
		<option name="">Dominica</option>	
		<option name="">Dominican Republic</option>	
		<option name="">Ecuador</option>	
		<option name="">Egypt</option>	
		<option name="">El Salvador</option>	
		<option name="">Equatorial Guinea</option>	
		<option name="">Eritrea</option>	
		<option name="">Estonia</option>	
		<option name="">Ethiopia</option>	
		<option name="">Falkland Islands</option>	
		<option name="">Faroe Islands</option>	
		<option name="">Fiji</option>	
		<option name="">Finland</option>	
		<option name="">France</option>	
		<option name="">French Guiana</option>	
		<option name="">French Polynesia</option>	
		<option name="">French Southern and Antarctic Lands</option>	
		<option name="">Gabon</option>	
		<option name="">Gambia</option>	
		<option name="">Georgia</option>	
		<option name="">Germany</option>	
		<option name="">Ghana</option>	
		<option name="">Gibraltar</option>	
		<option name="">Greece</option>	
		<option name="">Greenland</option>	
		<option name="">Grenada</option>	
		<option name="">Guadeloupe</option>	
		<option name="">Guam</option>	
		<option name="">Guatemala</option>	
		<option name="">Guinea</option>	
		<option name="">Guinea-Bissau</option>	
		<option name="">Guyana</option>	
		<option name="">Haiti</option>	
		<option name="">Honduras</option>	
		<option name="">Hong Kong</option>	
		<option name="">Hungary</option>	
		<option name="">Iceland</option>	
		<option name="">India</option>	
		<option name="">Indonesia</option>	
		<option name="">Iran</option>	
		<option name="">Iraq</option>	
		<option name="">Ireland</option>	
		<option name="">Israel</option>	
		<option name="">Italy</option>	
		<option name="">Ivory Coast</option>	
		<option name="">Jamaica</option>	
		<option name="">Japan</option>	
		<option name="">Jordan</option>	
		<option name="">Kazakhstan</option>	
		<option name="">Kenya</option>	
		<option name="">Kiribati</option>	
		<option name="">North Korea</option>	
		<option name="">South Korea</option>	
		<option name="">Kosovo</option>	
		<option name="">Kurdistan</option>	
		<option name="">Kuwait</option>	
		<option name="">Kyrgyzstan</option>	
		<option name="">Laos</option>	
		<option name="">Latvia</option>	
		<option name="">Lebanon</option>	
		<option name="">Lesotho</option>	
		<option name="">Liberia</option>	
		<option name="">Libya</option>	
		<option name="">Liechtenstein</option>	
		<option name="">Lithuania</option>	
		<option name="">Luxembourg</option>	
		<option name="">North Macedonia</option>	
		<option name="">Macau</option>	
		<option name="">Premium channels</option>	
		<option name="">Madagascar</option>	
		<option name="">Malawi</option>	
		<option name="">Malaysia</option>	
		<option name="">Maldives</option>	
		<option name="">Mali</option>	
		<option name="">Malta</option>	
		<option name="">Marquesas Islands</option>	
		<option name="">Marshall Islands</option>	
		<option name="">Martinique</option>	
		<option name="">Mauritania</option>	
		<option name="">Mauritius</option>	
		<option name="">Mayotte</option>	
		<option name="">Mexico</option>	
		<option name="">Over-the-air</option>	
		<option name="">National TV Broadcast</option>	
		<option name="">Federated States of Micronesia</option>	
		<option name="">Midway Islands</option>	
		<option name="">Moldova</option>	
		<option name="">Monaco</option>	
		<option name="">Mongolia</option>	
		<option name="">Montenegro</option>	
		<option name="">Montserrat</option>	
		<option name="">Morocco</option>	
		<option name="">Mozambique</option>	
		<option name="">Myanmar</option>	
		<option name="">Namibia</option>	
		<option name="">Nepal</option>	
		<option name="">Netherlands</option>	
		<option name="">Netherlands Antilles</option>	
		<option name="">New Caledonia</option>	
		<option name="">New Zealand</option>	
		<option name="">Nicaragua</option>	
		<option name="">National channels</option>	
		<option name="">Local channels</option>	
		<option name="">Niger</option>	
		<option name="">Nigeria</option>	
		<option name="">Niue</option>	
		<option name="">Northern Mariana Islands</option>	
		<option name="">Norway</option>	
		<option name="">Oman</option>	
		<option name="">Pakistan</option>	
		<option name="">Palau</option>	
		<option name="">Palestine</option>	
		<option name="">Panama</option>	
		<option name="">Papua New Guinea</option>	
		<option name="">Paraguay</option>	
		<option name="">Peru</option>	
		<option name="">Philippines</option>	
		<option name="">Government-owned networks</option>	
		<option name="">Minor television networks</option>	
		<option name="">Pitcairn Islands</option>	
		<option name="">Poland</option>	
		<option name="">Portugal</option>	
		<option name="">Puerto Rico</option>	
		<option name="">Qatar</option>	
		<option name="">Réunion</option>	
		<option name="">Romania</option>	
		<option name="">Russia </option>	
		<option name="">Rwanda</option>	
		<option name="">Saba</option>	
		<option name="">Saint Barthélemy</option>	
		<option name="">Saint Kitts and Nevis</option>	
		<option name="">Saint Lucia</option>	
		<option name="">Sint Maarten</option>	
		<option name="">Saint Pierre and Miquelon</option>	
		<option name="">Saint Vincent and the Grenadines</option>	
		<option name="">Samoa</option>	
		<option name="">San Marino</option>	
		<option name="">São Tomé and Príncipe</option>	
		<option name="">Saudi Arabia</option>	
		<option name="">Senegal</option>	
		<option name="">Serbia</option>	
		<option name="">Seychelles</option>	
		<option name="">Sierra Leone</option>	
		<option name="">Singapore</option>	
		<option name="">Sint Eustatius</option>	
		<option name="">Slovakia</option>	
		<option name="">Slovenia</option>	
		<option name="">Solomon Islands</option>	
		<option name="">Somalia</option>	
		<option name="">South Africa</option>	
		<option name="">Spain</option>	
		<option name="">Sri Lanka</option>	
		<option name="">Sudan</option>	
		<option name="">South Sudan</option>	
		<option name="">Suriname</option>	
		<option name="">Eswatini</option>	
		<option name="">Sweden</option>	
		<option name="">Switzerland</option>	
		<option name="">Syria</option>	
		<option name="">Taiwan</option>	
		<option name="">Tajikistan</option>	
		<option name="">Tanzania</option>	
		<option name="">Thailand</option>	
		<option name="">Tibet</option>	
		<option name="">Timor-Leste</option>	
		<option name="">Togo</option>	
		<option name="">Tokelau</option>	
		<option name="">Tonga</option>	
		<option name="">Trinidad and Tobago</option>	
		<option name="">Tristan da Cunha</option>	
		<option name="">Tunisia</option>	
		<option name="">Turkey</option>	
		<option name="">Turkmenistan</option>	
		<option name="">Turks and Caicos Islands</option>	
		<option name="">Tuvalu</option>	
		<option name="">Uganda</option>	
		<option name="">Ukraine</option>	
		<option name="">United Arab Emirates</option>	
		<option name="">United Kingdom</option>	
		<option name="">United States</option>	
		<option name="">Over-the-air</option>	
		<option name="">Cable and satellite</option>	
		<option name="">Defunct</option>	
		<option name="">United States Virgin Islands</option>	
		<option name="">Uruguay</option>	
		<option name="">Uzbekistan</option>	
		<option name="">Vanuatu</option>	
		<option name="">Vatican City</option>	
		<option name="">Venezuela</option>	
		<option name="">Vietnam</option>	
		<option name="">Wake Island</option>	
		<option name="">Wallis and Futuna</option>	
		<option name="">Western Sahara</option>	
		<option name="">Yemen</option>	
		<option name="">Zambia</option>	
		<option name="">Zanzibar</option>	
		<option name="">Zimbabwe</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mobile-number">Telephone No.</label>
      </div>
      <div class="col-75">
	   <input type="tel" class="didcy-tel" name="mobile-number" placeholder="Telephone number.." class="" id="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="id-card">Select your ID card</label>
      </div>
      <div class="col-75">
	    <input type="file" class="custom-file-input-0" name="id-card">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="bacn">Bank A/C No.</label>
      </div>
      <div class="col-75">
	    <input type="text" class="didcy-text bacn" name="bacn" placeholder="Bank Account Number ...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <label for="or">OR</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mobile-money-number">Mobile Money Number</label>
      </div>
      <div class="col-75">
	    <input type="tel" class="mmn didcy-tel" name="mmn" placeholder="Mobile Money Number ...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="primary-skills">Choose your Primary Skills or What you can do best</label>
      </div>
      <div class="col-75">
	    <select id="" class="didcy-select">
		 <option name="" id="">Programming</option>
		 <option name="" id="">Web Development</option>
		 <option name="" id="">Site Administrator</option>
		 <option name="" id="">Creator, Idealist, Tinker or Thinker</option>
		 <option name="" id="">Graphic Design</option>
		 <option name="" id="">Programming, Web Development &amp; Graphic Design</option>
		 <option name="" id="">Sales</option>
		 <option name="" id="">Marketing</option>
		 <option name="" id="">Sales & Marketing</option>
		 <option name="" id="">Sales & Digital Marketing</option>
		 <option name="" id="">Digital Marketing</option>
		 <option name="" id="">Sales, Marketing &amp; Advertising</option>
		 <option name="" id="">SEO Advertising</option>
		 <option name="" id="">SEO Keyword Researcher</option>
		 <option name="" id="">Social Media Advertising</option>
		 <option name="" id="">Digital Advertising</option>
		 <option name="" id="">Audio Advertising</option>
		 <option name="" id="">Software Engineer</option>
		 <option name="" id="">Software Developer</option>
		 <option name="" id="">Software Engineer & Developer</option>
		 <option name="" id="">Full Stack Developer</option>
		 <option name="" id="">Back-end Developer</option>
		 <option name="" id="">Front-end Developer</option>
		 <option name="" id="">Tax Accountant</option>
		 <option name="" id="">Tax advisor</option>
		 <option name="" id="">Tax Attorney</option>
		 <option name="" id="">Accountant</option>
		 <option name="" id="">Chartered Accountant</option>
		 <option name="" id="">Bug Hunter</option>
		 <option name="" id="">Hacker(all kinds)</option>
		 <option name="" id="">Banker</option>
		 <option name="" id="">Social Media Manager</option>
		</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="secondary-skills">Choose your Secondary Skills</label>
      </div>
      <div class="col-75">
	    <select id="" class="didcy-select">
		 <option name="" id="">Programming</option>
		 <option name="" id="">Web Development</option>
		 <option name="" id="">Site Administrator</option>
		 <option name="" id="">Creator, Idealist, Tinker or Thinker</option>
		 <option name="" id="">Graphic Design</option>
		 <option name="" id="">Programming, Web Development &amp; Graphic Design</option>
		 <option name="" id="">Sales</option>
		 <option name="" id="">Marketing</option>
		 <option name="" id="">Sales & Marketing</option>
		 <option name="" id="">Sales & Digital Marketing</option>
		 <option name="" id="">Digital Marketing</option>
		 <option name="" id="">Sales, Marketing &amp; Advertising</option>
		 <option name="" id="">SEO Advertising</option>
		 <option name="" id="">SEO Keyword Researcher</option>
		 <option name="" id="">Social Media Advertising</option>
		 <option name="" id="">Digital Advertising</option>
		 <option name="" id="">Audio Advertising</option>
		 <option name="" id="">Software Engineer</option>
		 <option name="" id="">Software Developer</option>
		 <option name="" id="">Software Engineer & Developer</option>
		 <option name="" id="">Full Stack Developer</option>
		 <option name="" id="">Back-end Developer</option>
		 <option name="" id="">Front-end Developer</option>
		 <option name="" id="">Tax Accountant</option>
		 <option name="" id="">Tax advisor</option>
		 <option name="" id="">Tax Attorney</option>
		 <option name="" id="">Accountant</option>
		 <option name="" id="">Chartered Accountant</option>
		 <option name="" id="">Bug Hunter</option>
		 <option name="" id="">Hacker(all kinds)</option>
		 <option name="" id="">Banker</option>
		 <option name="" id="">Social Media Manager</option>
		</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="daily-revenue">How much do you think any of your programs can generate in revenue on a daily basis?</label>
      </div>
      <div class="col-75">
        <input type="number" min="0" max="1000000000000" name="" class="didcy-number">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <label for="or">OR</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <input type="radio" id="not-now">Not Now
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="daily-users">How many people do you think any of your programs can attract on a daily basis?</label>
      </div>
      <div class="col-75">
        <input type="number" min="0" max="1000000000000" name="" class="didcy-number">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <label for="or">OR</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <input type="radio" id="not-now">Not Now
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="daily-users">What values do you think any of your programs can provide to its users?</label>
      </div>
      <div class="col-75">
        <textarea id="values" name="values" class="tarea" placeholder="Tell your users, they're waiting ..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <label for="or">OR</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
	    <input type="radio" id="not-now">Not Now
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Kindly profile yourself to your team</label>
      </div>
      <div class="col-75">
        <textarea id="subject" class="tarea" name="subject" placeholder="Share yourself .." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="camera">Please kindly take a live photo 
		<b class="arrow-right" style="font-size: 20px;font-weight: bolder">&rarr;</b>
		<b class="arrow-down" style="padding-left: 200px;font-size: 20px;font-weight: bolder">&darr;</b></label>
      </div>
      <div class="col-75">
		<button type="button" id="take-photo" class="take-photo">Take Photo</button>
      </div>
    </div>    
        <p style="text-align: center">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
	<div class="row">
      <input type="submit" id="didcy-work-form-submit" class="didcy-work-form-submit" value="Submit">
    </div>
  </form>
</div>  

<div id="work-apply-container" class="modal-signup modal-work-apply">
  <span class="close-work-apply" id="close-work-apply" title="Close Modal">&times;</span>
  <div class="modal-content-signup modal-content-work-apply" id="modal-content-work-apply">
   
   <video id="video-work-apply" class="video-work-apply" width="1022" height="500" muted=true controls=false loop=1 autoplay=true></video>
   <canvas id="canvas" class="canvas"></canvas>
   <img id="image-work-apply" class="image-work-apply" alt="" title="" download="" ping=""/>
   <button class="video-btn" id="video-btn">Capture</button>  
  </div>

	<div id="adv-f" class="adv-f">
	 <form id="adv-fx" name="adv-fx">
	 <input type="file" class="custom-file-input-0" name="uploadsWorkApply" id="uploads-4" enctype="form/multipart-data">
	 <input type="submit" name="submit" class="upload-3" value="Upload" id="upload-3" title="Get your ads viewed first before your competitors">
	 </form>
	 
	</div>
  
</div>

<script type="text/javascript">
 "use strict";
 document.getElementById("didcy-work-form").addEventListener("submit", 
 (event) => event.preventDefault());
 
 document.getElementById("didcy-work-form-submit").addEventListener("click", 
 function(){
	//submission code here.....
 }); 
 
</script> 

</body>
</html>