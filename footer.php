<section class="footer-bar">

    <div class="footer-list">
        <ul>
            <li class="title-footer">
                <span>Follow us</span>
                <img src="/pictures/PIL-blå.png" alt="" class="footer-arrow" />
            </li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.tiktok.com/">TikTok</a></li>
            <li><a href="https://www.instagram.com">Instagram</a></li>
            <li><a href="https://se.linkedin.com/">Linkedin</a></li>
        </ul>
    </div>

    <div class="footer-list">
        <ul>
            <li class="title-footer">
                <span>Information</span>
                <img src="/pictures/PIL-blå.png" alt="" class="footer-arrow" />
            </li>
            <li>Kungsgatan 40 414 55 Göteborg</li>
            <li> +46 745-0033</li>
            <li>cosmo.sphere@cinema.se</li>
            <li>Customer service</li>
        </ul>
    </div>

    <div class="footer-list">
        <ul>
            <li class="title-footer">
                <span>Resources</span>
                <img src="/pictures/PIL-blå.png" alt="" class="footer-arrow" />
            </li>
            <li>FAQs</li>
            <li>Newsletter signup</li>
        </ul>
    </div>

    <div class="footer-list">
        <ul>
            <li class="title-footer">
                <span>About us</span>
                <img src="/pictures/PIL-blå.png" alt="" class="footer-arrow" />
            </li>
            <li>About</li>
            <li>Contact us</li>
            <li>Studio</li>
            <li>Press</li>
            <li>Careers</li>
            <li>Investors</li>
        </ul>
    </div>

</section>

<img src="/pictures/WALL_Elila.png" alt="wall-e" class="moving-image">

<script>
    document.getElementById("show-more").addEventListener("click", function() {
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
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const titles = document.querySelectorAll(".title-footer");

        titles.forEach((title) => {
            title.addEventListener("click", () => {
                const list = title.closest(".footer-list");

                // toggla open
                list.classList.toggle("footer-list--open");
            });
        });
    });
</script>

</body>

</html>