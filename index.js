

const nav = document.querySelector(".nav"),
  searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");

searchIcon.addEventListener("click", () => {
  nav.classList.toggle("openSearch");
  nav.classList.remove("openNav");
  if (nav.classList.contains("openSearch")) {
    return searchIcon.classList.replace("uil-search", "uil-times");
  }
  searchIcon.classList.replace("uil-times", "uil-search");
});

navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".slider")
  const slides = document.querySelectorAll(".slide")
  const prevBtn = document.querySelector(".prev-btn")
  const nextBtn = document.querySelector(".next-btn")
  const dotsContainer = document.querySelector(".dots")

  let currentSlide = 0
  const totalSlides = slides.length

  // Create dots
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement("div")
    dot.classList.add("dot")
    dot.addEventListener("click", () => goToSlide(i))
    dotsContainer.appendChild(dot)
  }

  const dots = document.querySelectorAll(".dot")

  function updateSlider() {
    slider.style.transform = `translateX(-${currentSlide * 100}%)`
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === currentSlide)
    })
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides
    updateSlider()
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides
    updateSlider()
  }

  function goToSlide(index) {
    currentSlide = index
    updateSlider()
  }

  nextBtn.addEventListener("click", nextSlide)
  prevBtn.addEventListener("click", prevSlide)

  // Autoplay
  let autoplayInterval = setInterval(nextSlide, 5000)

  // Pause autoplay on hover
  slider.addEventListener("mouseenter", () => clearInterval(autoplayInterval))
  slider.addEventListener("mouseleave", () => (autoplayInterval = setInterval(nextSlide, 5000)))

  // Initial update
  updateSlider()
})

