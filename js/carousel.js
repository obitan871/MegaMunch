// Get the carousel track element and all its slides
const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const slideWidth = slides[0].getBoundingClientRect().width;

// Initialize the layout of slides, by making use of the width of slide,
// each slide should be arranged next to each other.
slides.forEach((slide, idx) => {
  slide.style.left = slideWidth * idx + 'px';
});

// Set the first slide as the initial current slide
slides[0].classList.add('carousel-current-slide');

// Function to return the current slide element
const currentSlide = () => {
  for (var i = 0; i < slides.length; i++) {
    if (slides[i].classList.contains('carousel-current-slide')) {
      return slides[i];
    }
  }
  return null;
}

// Function to switch from one slide to another
const switchSlide = (from, to) => {
  // Move the track to show the target slide
  track.style.transform = 'translateX(-' + to.style.left + ')';

  // Update the current slide classes
  from.classList.remove('carousel-current-slide');
  to.classList.add('carousel-current-slide');
};


// Get the carousel navigation element and its indicators
const nav = document.querySelector('.carousel-nav');
const indicators = Array.from(nav.children);

// Set the first indicator as the initial current indicator
indicators[0].classList.add('carousel-current-slide');

// Function to return the current indicator element
const currentIndicator = () => {
  for (var i = 0; i < indicators.length; i++) {
    if (indicators[i].classList.contains('carousel-current-slide')) {
      return indicators[i];
    }
  }
  return null;
}

// Get the left and right navigation buttons
const leftBtn = document.querySelector('.carousel-btn--left');
const rightBtn = document.querySelector('.carousel-btn--right');

// Event listener for the left button click
leftBtn.addEventListener('click', e => {
  const fromSlide = currentSlide();

  if (!fromSlide) return;

  const fromIdx = slides.findIndex(e => e === fromSlide);
  const toIdx = fromIdx > 0 ? fromIdx-1 : slides.length-1;
  const toSlide = slides[toIdx];

  switchSlide(fromSlide, toSlide);

  indicators[fromIdx].classList.remove('carousel-current-slide');
  indicators[toIdx].classList.add('carousel-current-slide');
});

// Event listener for the right button click
rightBtn.addEventListener('click', e => {
  const fromSlide = currentSlide();

  if (!fromSlide) return;
  
  const fromIdx = slides.findIndex(e => e === fromSlide);
  const toIdx = (fromIdx+1) % slides.length;
  const toSlide = slides[(fromIdx+1) % slides.length];

  switchSlide(fromSlide, toSlide);

  indicators[fromIdx].classList.remove('carousel-current-slide');
  indicators[toIdx].classList.add('carousel-current-slide');
});

// Event listener for navigation indicators click
nav.addEventListener('click', e => {
  const toIndicator = e.target.closest('button');

  if (!toIndicator) return;

  const from = currentSlide();
  const fromIndicator = currentIndicator();
  const idx = indicators.findIndex(e => e === toIndicator);

  const to = slides[idx];

  switchSlide(from, to);

  fromIndicator.classList.remove('carousel-current-slide');
  toIndicator.classList.add('carousel-current-slide');
});

