const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const slideCount = slides.length;

let currentIndex = 0;
let autoSlideInterval;

// Clone slides to create seamless infinite scrolling
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);
slider.appendChild(firstClone);
slider.insertBefore(lastClone, slides[0]);

// Adjust the slider position to start at the first actual slide
slider.style.transform = `translateX(-100%)`;

// Update the slider's position
const updateSliderPosition = () => {
  slider.style.transition = "transform 0.5s ease-in-out";
  slider.style.transform = `translateX(-${(currentIndex + 1) * 100}%)`;
};

// Handle infinite loop effect
const handleInfiniteLoop = () => {
  if (currentIndex === slideCount) {
    slider.style.transition = "none";
    currentIndex = 0;
    slider.style.transform = `translateX(-100%)`;
  } else if (currentIndex < 0) {
    slider.style.transition = "none";
    currentIndex = slideCount - 1;
    slider.style.transform = `translateX(-${slideCount * 100}%)`;
  }
};

// Move to the next slide
const moveToNextSlide = () => {
  currentIndex++;
  updateSliderPosition();
  setTimeout(handleInfiniteLoop, 500); // Adjust to match transition duration
};

// Move to the previous slide
const moveToPrevSlide = () => {
  currentIndex--;
  updateSliderPosition();
  setTimeout(handleInfiniteLoop, 500); // Adjust to match transition duration
};

// Start auto-sliding
const startAutoSlide = () => {
  autoSlideInterval = setInterval(moveToNextSlide, 3000); // Adjust interval as needed
};

// Stop auto-sliding on interaction
const stopAutoSlide = () => {
  clearInterval(autoSlideInterval);
};

// Add event listeners for buttons
nextBtn.addEventListener("click", () => {
  stopAutoSlide();
  moveToNextSlide();
  startAutoSlide();
});

prevBtn.addEventListener("click", () => {
  stopAutoSlide();
  moveToPrevSlide();
  startAutoSlide();
});

// Initialize auto-slide
startAutoSlide();
