const slider = document.querySelector('.slider');
let slideIndex = 0;

function nextSlide() {
  slideIndex = (slideIndex + 1) % slider.children.length;
  updateSlider();
}

function prevSlide() {
  slideIndex = (slideIndex - 1 + slider.children.length) % slider.children.length;
  updateSlider();
}

function updateSlider() {
  slider.style.transform = `translateX(-${slideIndex * 100}%)`;
}

setInterval(nextSlide, 5000); // Auto slide every 5 seconds