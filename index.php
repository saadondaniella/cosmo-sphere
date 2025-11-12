<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/header.php"; ?>



<div class="intro">
    <h1>Sci-Fi biograf i centrala Göteborg.</h1>
    <p>Visar de gamla och senaste filmerna</p>
</div>

<section class="feature-film">
    <div class="feature-film__frame">
        <img
            src="/pictures/blade-runner-old.webp"
            alt="Blade Runner poster"
            class="feature-film__poster" />
    </div>

    <div class="feature-film__overlay">
        <p class="feature-film__label">The classicer:</p>
        <h3 class="feature-film__headline">
            BLADE RUNNER – The future we still don’t understand.
        </h3>
        <div class="feature-film__actions">
            <a href="movie.php" class="feature-btn feature-btn--outline">Watch trailer</a>
            <a href="movie.php" class="feature-btn feature-btn--filled">Get tickets</a>
        </div>
    </div>
</section>

<br><br><br><br><br><br><br><br><br>
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


<br><br><br><br><br><br>
<?php
require __DIR__ . "/footer.php";
?>