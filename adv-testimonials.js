var slideIndexTestiomonials = 1;
showSlidesTestiomonialsx(slideIndexTestiomonials);

// Next/previous controls
function plusSlidesTestiomonials(n) {
  showSlidesTestiomonials(slideIndexTestiomonials += n);
}

// Thumbnail image controls
function currentSlideTestiomonials(n) {
  showSlidesTestiomonials(slideIndexTestiomonials = n);
}

function showSlidesTestiomonialsx(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-testimonials");
  var dots = document.getElementsByClassName("dot-testimonials");
  if (n > slides.length) {slideIndexTestiomonials = 1}
  if (n < 1) {slideIndexTestiomonials = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-testimonials", "");
  }
  slides[slideIndexTestiomonials-1].style.display = "block";
  dots[slideIndexTestiomonials-1].className += " active-testimonials";
}


slideIndexTestiomonials = 0;
showSlidesTestiomonials();

function showSlidesTestiomonials() {
  var i;
  var slides = document.getElementsByClassName("mySlides-testimonials");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndexTestiomonials++;
  if (slideIndexTestiomonials > slides.length) {slideIndexTestiomonials = 1}
  slides[slideIndexTestiomonials-1].style.display = "block";
  setTimeout(showSlidesTestiomonials, 10000); // Change image every 2 seconds
}