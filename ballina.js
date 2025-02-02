let currentIndex = 0;
const slides = document.querySelectorAll('.slider img');
const totalSlides = slides.length;

function changeSlide() {
  slides[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % totalSlides;
  slides[currentIndex].classList.add('active');
}

setInterval(changeSlide, 3000);
