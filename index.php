<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/Header.php"; ?>

<img class="logga" src="/pictures/LOGGA.png" alt="Logga">
<main>
    <article class="intro-text">
        <h1>Welcome <br>to a world full of Sci-Fi.</h1>
        <p>Explore iconic classics and the latest intergalactic releases — all in one place. The Cosmo Sphere Cinema.</p>
    </article>

    <section class="heroFilm-BladeRunner">
        <div class="heroFilm-frame">
            <img
                src="/pictures/herobladerunner.webp"
                alt="Blade Runner poster"
                class="heroFilm-BladeRunner-poster" />
        </div>

        <div class="heroFilm-overlay">
            <p class="heroFilm-label">Explore the classics</p>
            <h3 class="heroFilm-headline">
                BLADE RUNNER – The future we still don’t understand.
            </h3>
            <div class="heroFilm-actions">
                <a href="movie.php" class="heroButton">Watch trailer</a>
                <a href="movie.php" class="heroButton">Get tickets</a>
            </div>
        </div>
    </section>

    <h2 class="smashinOffer">Smashing offers!</h2>

    <?php require __DIR__ . "/offers.php"; ?>

    <h2 class="movie-list-header">Current movies</h2>

    <?php require __DIR__ . "/movie-list.php"; ?>

    <h2 class="FullExperiance-header">Get the full experiance of Cosmo Sphere</h2>

    <section class="FullExperiance-karusell">
        <div class="FullExperiance-wrapper">
            <article class="FullExperiance-card">
                <img src="/pictures/cinema.jpg" />
                <h2>The cinema</h2>
                <p>Everything you need to know about the Sphere. Find us here!</p>
            </article>

            <article class="FullExperiance-card">
                <img src="/pictures/troja.jpg" />
                <h2>SHOP</h2>
                <p>Watch all our products from the shop…</p>
            </article>

            <article class="FullExperiance-card">
                <img src="/pictures/poster.jpg" />
                <h2>Posters</h2>
                <p>Get your favorit Sci-fi poster</p>
            </article>
            <article class="FullExperiance-card">
                <img src="/pictures/wall-e1.jpg" />
                <h2>Animation</h2>
                <p>Watch all our animatied movies</p>
            </article>
            <article class="FullExperiance-card">
                <img src="/pictures/date.jpg" />
                <h2>Date Night</h2>
                <p>Bring your date under the stars and get a romantic experiance in the sphere</p>
            </article>
            <article class="FullExperiance-card">
                <img src="/pictures/chips-utanbakgrund.png" />
                <h2>Offers</h2>
                <p>Take advantage of our incredible offers on snacks and treats</p>
            </article>
        </div>
    </section>

    <section class="innerCircle">
        <div class="innerCircle-signUp">
            <h2>Sphere’s Inner Circle</h2>
            <p>Share your email to know about all our upcoming shows and events.</p>

            <form>
                <input type="text" placeholder="Full name *" required>
                <input type="email" placeholder="Email *" required>
                <p>By clicking submit I agree to the Privacy Policy and Terms of Use.</p>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="innerCircle-img">
            <img src="pictures/sci-fi movies.jpg" alt="Placeholder image">
        </div>
    </section>

    <section class="coming-section">
        <div class="coming-wrapper">
            <h2 class="coming-heading">Upcoming Movies 2026</h2>

            <div class="coming-grid">

                <article class="coming-card">
                    <img src="/pictures/GalaxyGuardians-movie.png" alt="Galaxy Guardians poster" class="coming-image" />
                    <div class="coming-body">
                        <p class="coming-quote">"WHAT COMES NEXT WILL CHANGE EVERYTHING."</p>
                        <h3 class="coming-title">GALAXY GUARDIANS</h3>
                        <p class="coming-meta">Premieres • Feb 14, 2026</p>
                        <button class="coming-button">More info</button>
                    </div>
                </article>

                <article class="coming-card">
                    <img src="/pictures/noTomorrow-movie.png" alt="No Tomorrow poster" class="coming-image" />
                    <div class="coming-body">
                        <p class="coming-quote">"COME EARLY. IF YOU DARE."</p>
                        <h3 class="coming-title">NO TOMORROW</h3>
                        <p class="coming-meta">Premieres • Feb 1, 2026</p>
                        <button class="coming-button">More info</button>
                    </div>
                </article>

                <article class="coming-card">
                    <img src="/pictures/beyondThisPoint-movie.png" alt="Beyond This Point poster" class="coming-image" />
                    <div class="coming-body">
                        <p class="coming-quote">"NOT ALL WORLDS SHOULD BE DISCOVERED."</p>
                        <h3 class="coming-title">BEYOND THIS POINT</h3>
                        <p class="coming-meta">Premieres • Apr 1, 2026</p>
                        <button class="coming-button">More info</button>
                    </div>
                </article>

                <article class="coming-card">
                    <img src="/pictures/startobot-movie.png" alt="Starobot poster" class="coming-image" />
                    <div class="coming-body">
                        <p class="coming-quote">"SOMETHING IS COMING. AND IT'S NOT HUMAN."</p>
                        <h3 class="coming-title">STAROBOT - HE'S BACK</h3>
                        <p class="coming-meta">Premieres • Jun 1, 2026</p>
                        <button class="coming-button">More info</button>
                    </div>
                </article>

            </div>
        </div>
    </section>
</main>
<?php
require __DIR__ . "/footer.php";
?>