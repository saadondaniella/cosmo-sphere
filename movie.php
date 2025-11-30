<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/Header.php";

?>

<section class="bladeRunner-movie">
    <img
        src="pictures/movie1.jpeg"
        alt="Blade Runner 2049 poster"
        class="bladeRunner-movieimg" />

    <div class="bladeRunner-movie-content">
        <h2 class="bladeRunner-movie-title">Blade Runner 2049</h2>

        <div class="bladeRunner-movie-info">
            <ul>
                <li>2017</li>
                <li>Age: 15</li>
                <li>2h 44m</li>
                <li>IMDB: 8/10</li>
            </ul>
        </div>
    </div>
</section>
<section class="genrebox">
    <div>Action epic</div>
    <div>AI</div>
    <div>Cyber Thriller</div>
    <div>Cyber Punk</div>
    <div>Dystopian Sci-Fi</div>
    <div>Sci-Fi epic</div>
</section>

<article class="bladeRunner-movie-description">
    <div class="about-movie">
        <p>Thirty years after the events of the first film, the world of Blade Runner 2049 is a bleak and beautiful vision of
            the future — neon-lit cities, synthetic beings, and fading memories.<br><br>
            Officer K, a new generation Blade Runner for the Los Angeles Police Department, uncovers a long-buried secret that
            could shatter the fragile balance between humans and replicants. <br><br>
            His investigation leads him on a haunting journey to track down Rick Deckard, a former Blade Runner who has been
            missing for three decades.
        </p>

        <p>Director: Denis Vileneuve</p>
        <p>Stars: Ryan Gosling, Michael Green, Philip k Dick</p>
    </div>
</article>

<div class="video-wrapper">
    <iframe class="video"
        src="https://www.youtube.com/embed/gCcx85zbxz4"
        title="Blade Runner 2049"
        frameborder="0"
        allowfullscreen></iframe>
</div>

<p class="choose-date-title">
    Get tickets <br>
    <span>Choose the date:</span>
</p>

<div class="time-tablet">
    <div class="days">
        <span class="day-label">Mon 1/12</span>
        <span class="day-times">18:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Tue 2/12</span>
        <span class="day-times">18:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Wed 3/12</span>
        <span class="day-times">18:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Thu 4/12</span>
        <span class="day-times">18:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Fri 5/12</span>
        <span class="day-times">19:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Sat 6/12</span>
        <span class="day-times">15:00, 21:00</span>
    </div>
    <div class="days">
        <span class="day-label">Sun 7/12</span>
        <span class="day-times">14:00, 21:00</span>
    </div>
</div>

<p class="subtitle">Swedish subtitle</p>
<p class="vip">VIP- Expirience</p>

<section class="reviewsPart">
    <img
        src="/pictures/bladerunner.jpg"
        alt="Blade Runner 2049 Cast"
        class="reviewsPart-image" />

    <div class="reviewsPart-content">
        <h2 class="reviews-title">Blade Runner 2049 – Critical Acclaim</h2>

        <div class="review">
            <p class="quote">“A breathtaking masterpiece of modern sci-fi.”</p>
            <span class="critic">— The NeoTimes</span>
        </div>

        <div class="review">
            <p class="quote">“Visually stunning and emotionally haunting.”</p>
            <span class="critic">— Cinema Pulse</span>
        </div>

        <div class="review">
            <p class="quote">“The strongest cyberpunk film since the original.”</p>
            <span class="critic">— FutureFilm Review</span>
        </div>
    </div>
</section>

<section class="similar-movies">
    <h2>More movies like this</h2>

    <div class="similar-track">
        <div class="similar-card">
            <img src="/pictures/Jurassic Park 2.jpg" alt="Jurassic Park 2">
            <p class="similar-title">Jurassic Park 2</p>
        </div>


        <div class="similar-card">
            <img src="/pictures/Dune.jpg" alt="Dune">
            <p class="similar-title">Dune</p>
        </div>
        <div class="similar-card">
            <img src="/pictures/Terminator 1.jpg" alt="Terminator 1">
            <p class="similar-title">Terminator</p>
        </div>

        <div class="similar-card">
            <img src="/pictures/Preadator badlands.jpg" alt="Predator Badlands">
            <p class="similar-title">Predator Badlands</p>
        </div>
        <div class="similar-card">
            <img src="/pictures/Terminator 3.jpg" alt="Terminator 3">
            <p class="similar-title">Terminator 3</p>
        </div>

    </div>
</section>

<?php
require __DIR__ . "/footer.php" ?>