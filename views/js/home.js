const buttons = document.querySelectorAll("[data-carousel-button]");

// manual buttons
buttons.forEach(button => {
  button.addEventListener("click", () => {
    moveSlide(button.dataset.carouselButton === "next" ? 1 : -1, button);
  });
});

// function to move slides
function moveSlide(offset, button) {
  const slides = button.closest("[data-carousel]").querySelector("[data-slides]");
  const activeSlide = slides.querySelector("[data-active]");

  let newIndex = [...slides.children].indexOf(activeSlide) + offset;

  if (newIndex < 0) newIndex = slides.children.length - 1;
  if (newIndex >= slides.children.length) newIndex = 0;

  slides.children[newIndex].dataset.active = true;
  delete activeSlide.dataset.active;
}

// auto next every 5 seconds
setInterval(() => {
  const carousel = document.querySelector("[data-carousel]");
  if (!carousel) return;

  const slides = carousel.querySelector("[data-slides]");
  const activeSlide = slides.querySelector("[data-active]");

  let newIndex = [...slides.children].indexOf(activeSlide) + 1;
  if (newIndex >= slides.children.length) newIndex = 0;

  slides.children[newIndex].dataset.active = true;
  delete activeSlide.dataset.active;
}, 5000); // 5000ms = 5 seconds
