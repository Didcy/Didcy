let slideIndexf = 1;
showSlidesf(slideIndexf);

function plusSlidesf(n) {
	  showSlidesf(slideIndexf += n);
}

function currentSlidef(n) {
	  showSlidesf(slideIndexf = n);
}

function showSlidesf(n) {

  let i;
  let slides = document.getElementsByClassName("mySlidesf");
  let dots = document.getElementsByClassName("dotf");
  if (n > slides.length) {slideIndexf = 1}    
  if (n < 1) {slideIndexf = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activef", "");
  }
  slides[slideIndexf-1].style.display = "block";  
  dots[slideIndexf-1].className += " activef";
}

setInterval(()=>plusSlidesf(1), 2000);//2000