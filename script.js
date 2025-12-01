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

const footerTitles = document.querySelectorAll(".title-footer");

footerTitles.forEach((title) => {
  title.addEventListener("click", () => {
    const footerList = title.closest(".footer-list");
    footerList.classList.toggle("footer-list--open");
  });
});

const scrollBtn = document.getElementById("scrollTopBtn");

if (scrollBtn) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
      scrollBtn.classList.add("show");
    } else {
      scrollBtn.classList.remove("show");
    }
  });

  scrollBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
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
