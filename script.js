const showMoreBtn = document.getElementById("show-more");

if (showMoreBtn) {
  showMoreBtn.addEventListener("click", function () {
    const hiddenMovies = document.querySelectorAll(
      ".movie-item:nth-child(n+7)"
    );
    const isShowingMore = this.classList.toggle("expanded");

    if (isShowingMore) {
      hiddenMovies.forEach((item) => item.classList.add("show"));
      this.textContent = "Show less";
    } else {
      hiddenMovies.forEach((item) => item.classList.remove("show"));
      this.textContent = "Show more";
    }
  });
}

document.querySelectorAll(".title-footer").forEach((title) => {
  title.addEventListener("click", () => {
    title.parentElement.parentElement.classList.toggle("footer-list--open");
  });
});

const scrollTopBtn = document.getElementById("scrollTopBtn");

if (scrollTopBtn) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 400) {
      scrollTopBtn.classList.add("show");
    } else {
      scrollTopBtn.classList.remove("show");
    }
  });

  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

const movieImages = [
  "pictures/movie1.jpeg",
  "pictures/BR.bild2.jpg",
  "pictures/BR-bild3.jpeg",
];

let movieIndex = 0;

const movieImgElement = document.getElementById("bladeRunnerSlideshow");

if (movieImgElement) {
  movieImgElement.src = movieImages[movieIndex];
  movieImgElement.style.opacity = 1;

  function showMovieImage(newIndex) {
    movieImgElement.style.opacity = 0;

    setTimeout(() => {
      movieIndex = (newIndex + movieImages.length) % movieImages.length;
      movieImgElement.src = movieImages[movieIndex];
      movieImgElement.style.opacity = 1;
    }, 500);
  }

  setInterval(() => {
    showMovieImage(movieIndex + 1);
  }, 3000);
}
