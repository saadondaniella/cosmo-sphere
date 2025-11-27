const showMoreBtn = document.getElementById("show-more");

document.getElementById("show-more").addEventListener("click", function () {
  const hiddenMovies = document.querySelectorAll(".movie-item:nth-child(n+7)");
  const isShowingMore = this.classList.toggle("expanded");

  if (isShowingMore) {
    hiddenMovies.forEach((item) => item.classList.add("show"));
    this.textContent = "Show less";
  } else {
    hiddenMovies.forEach((item) => item.classList.remove("show"));
    this.textContent = "Show more";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".title-footer");

  titles.forEach((title) => {
    title.addEventListener("click", () => {
      const list = title.closest(".footer-list");

      list.classList.toggle("footer-list--open");
    });
  });
});
