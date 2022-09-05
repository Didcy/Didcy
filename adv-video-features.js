let slideIndexvf = 1;
showSlidesvf(slideIndexvf);

function plusSlidesvf(n) {
	  showSlidesvf(slideIndexvf += n);
}

function currentSlidevf(n) {
	  showSlidesvf(slideIndexvf = n);
}

function showSlidesvf(n) {

  let i;
  let slides = document.getElementsByClassName("mySlidesvf");
  let dots = document.getElementsByClassName("dotvf");
  if (n > slides.length) {slideIndexvf = 1}    
  if (n < 1) {slideIndexvf = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activevf", "");
  }
  slides[slideIndexvf-1].style.display = "block";  
  dots[slideIndexvf-1].className += " activevf";
}

setInterval(()=>plusSlidesvf(1), 100000);//2000