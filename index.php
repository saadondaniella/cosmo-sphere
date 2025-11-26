<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/Header.php"; ?>

<article class="intro">
    <h1>Welcome <br>to a world full of Sci-Fi.</h1>
    <p>Here you will find all the old and the latest movies. from single films to trilogies</p>
</article>

<section class="feature-film">
    <div class="feature-film-frame">
        <img
            src="/pictures/blade-runner-old.webp"
            alt="Blade Runner poster"
            class="feature-film-poster" />
    </div>

    <div class="feature-film-overlay">
        <p class="feature-film-label">A classicer:</p>
        <h3 class="feature-film-headline">
            BLADE RUNNER – The future we still don’t understand.
        </h3>
        <div class="feature-film-actions">
            <a href="movie.php" class="headerButton">Watch trailer</a>
            <a href="movie.php" class="headerButton">Get tickets</a>
        </div>
    </div>
</section>
<?php require __DIR__ . "/offers.php"; ?> 
<h2 id="movie-list-header">Current movies</h2>
<?php require __DIR__ . "/movie-list.php"; ?>

<h2 id="header-karusell">Get the full experiance of Cosmo Sphere</h2>
<section class="karusell">
    <div class="cards-wrapper">
        <article class="card">
            <img src="/pictures/biosalong.webp" />
            <h2>The cinema</h2>
            <p>Welcome inside of cosmo Sphere Cinema…</p>
        </article>

        <article class="card">
            <img src="/pictures/troja.jpg" />
            <h2>SHOP</h2>
            <p>Watch all our products from the shop…</p>
        </article>

        <article class="card">
            <img src="/pictures/poster.jpg" />
            <h2>Posters</h2>
            <p>Get your favorit Sci-fi poster</p>
        </article>
        <article class="card">
            <img src="/pictures/wall-e1.jpg" />
            <h2>Animation</h2>
            <p>Watch all our animatied movies</p>
        </article>
        <article class="card">
            <img src="/pictures/date.jpg" />
            <h2>Date Night</h2>
            <p>Bring your date under the stars and get a romantic experiance in the sphere</p>
        </article>
        <article class="card">
            <img src="/pictures/chips-utanbakgrund.png" />
            <h2>Offers</h2>
            <p>Take advantage of our incredible offers on snacks and treats</p>
        </article>
    </div>
</section>
<div class="container">
    <div class="left">
        <h2>Sphere’s Inner Circle</h2>
        <p>Share your email to know about all our upcoming shows and events.</p>

        <form>
            <input type="text" placeholder="Full name *" required>
            <input type="email" placeholder="Email *" required>
            <p>By clicking submit I agree to the Privacy Policy and Terms of Use.</p>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="right">
        <img src="pictures/sci-fi movies.jpg" alt="Placeholder image">
    </div>
</div>

<section class="coming-soon">
    <h2 class="coming-soon-heading">COMMING SOON!</h2>

    <article class="coming-card">
        <div class="coming-card-text">
            <p class="coming-card-quote">"WHAT COMES NEXT WILL CHANGE EVERYTHING."</p>
            <h3 class="coming-card-title">BEYOND THIS POINT</h3>
            <p class="coming-card-meta">ON SCREENS 12 MARCH<br />
                A NEW REALITY AWAITS – BOOK NOW.
            </p>
            <button class="coming-button">More info</button>
        </div>
        <div class="coming-card-image-wrapper">
            <img
                src="/pictures/beyondthispoint.jpg"
                alt="Sci-fi control room"
                class="coming-image" />
        </div>
    </article>

    <article class="coming-card">
        <div class="coming-card-text">
            <p class="coming-card-quote">“SOMETHING IS COMING. AND IT’S NOT HUMAN.”</p>
            <h3 class="coming-card-title">NO TOMORROW</h3>
            <p class="coming-card-meta">
                ON SCREENS 1 JANUARY<br />
                DISCOVER WHAT’S COMING.
            </p>
            <button class="coming-button">More info</button>
        </div>
        <div class="coming-card-image-wrapper">
            <img
                src="/pictures/echoesoftomorrow.jpg"
                alt="Sci-fi portal"
                class="coming-image" />
        </div>
    </article>

    <article class="coming-card">
        <div class="coming-card-text">
            <p class="coming-card-quote">"NOT ALL WORLDS SHOULD BE DISCOVERED."</p>
            <h3 class="coming-card-title">THE PARALLAX CODE</h3>
            <p class="coming-card-meta">
                ON SCREENS 5 FEBRUARY<br />
                ENTER EARLY. IF YOU DARE.
            </p>
            <button class="coming-button">More info</button>
        </div>
        <div class="coming-card-image-wrapper">
            <img
                src="/pictures/theparallaxcode.jpg"
                alt="Sci-fi ship at night"
                class="coming-image" />
        </div>
    </article>
</section>
<?php
require __DIR__ . "/footer.php";
?>