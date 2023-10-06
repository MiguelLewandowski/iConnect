var carousel = document.querySelector('.carousel');
var container = carousel.querySelector('.carousel-container');
var prevButton = carousel.querySelector('.carousel-prev');
var nextButton = carousel.querySelector('.carousel-next');
var imgWidth = carousel.querySelector('img').offsetWidth;

var currentIndex = 0;
var timer;

function slideTo(index) {
  if (index < 0) {
    index = container.children.length - 1;
  } else if (index >= container.children.length) {
    index = 0;
  }

  container.style.transform = 'translateX(' + -imgWidth * index + 'px)';
  currentIndex = index;
}

function nextSlide() {
  slideTo(currentIndex + 1);
}

function prevSlide() {
  slideTo(currentIndex - 1);
}

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

function startTimer() {
  timer = setInterval(nextSlide, 3000); // Altere o tempo em milissegundos conforme desejado (aqui está configurado para 3 segundos)
}

function stopTimer() {
  clearInterval(timer);
}

carousel.addEventListener('mouseenter', stopTimer);
carousel.addEventListener('mouseleave', startTimer);

startTimer();
