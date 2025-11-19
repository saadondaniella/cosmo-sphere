<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/header.php"; ?>



<article class="intro">
    <h1>Welcome <br>to a world full of Sci-Fi.</h1>
    <p>Here you will find all the old and the latest movies. from single films to trilogies</p>
</article>

<section class="feature-film">
    <div class="feature-film__frame">
        <img
            src="/pictures/blade-runner-old.webp"
            alt="Blade Runner poster"
            class="feature-film__poster" />
    </div>

    <div class="feature-film__overlay">
        <p class="feature-film__label">A classicer:</p>
        <h3 class="feature-film__headline">
            BLADE RUNNER – The future we still don’t understand.
        </h3>
        <div class="feature-film__actions">
            <a href="movie.php" class="feature-btn feature-btn--outline">Watch trailer</a>
            <a href="movie.php" class="feature-btn feature-btn--filled">Get tickets</a>
        </div>
    </div>
</section>

<?php require __DIR__ . "/movie-list.php"; ?>

<section class="karusell">
    <div class="cards-wrapper">
        <article class="card">
            <img src="/pictures/biosalong.webp" />
            <h2>The cinema</h2>
            <p>Welcome in to cosmo Sphere Cinema…</p>
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


<?php
require __DIR__ . "/footer.php";
?>