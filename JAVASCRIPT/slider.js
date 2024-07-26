var slide = document.getElementById('slide');
var slides = ['IMG/index/slider/elements/1.png', 'IMG/index/slider/elements/2.png', 'IMG/index/slider/elements/3.png'];
var slideNum = 0;

function slideleft() {
  slideNum = slideNum - 1;
  if (slideNum < 0) {
    slideNum = 2;
  }
  slide.setAttribute('src', slides[slideNum]);
}

function slideright() {
  slideNum = slideNum + 1;
  if (slideNum > 2) {
    slideNum = 0;
  }
  slide.setAttribute('src', slides[slideNum]);
}
