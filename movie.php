<?php
require __DIR__ . "/backgroundstarts.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmo Sphere Cinema</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="mobile-header">
        <a href="index.php"> <img class="mobile-image" src="/pictures/sidebar.png" alt="Liten menyikon"></a><br>
    </header>
    <header class="site-header">
        <nav class="navbar" aria-label="Main">
            <ul class="navlist">
                <li><a href="/movie.php">Movies</a></li>
                <li><a href="/index.php">Tickets</a></li>
                <li><a href="/index.php">Premium</a></li>
                <li><a href="/index.php">Offers</a></li>
                <li><a href="/index.php">Shop</a></li>
            </ul>
        </nav>
    </header>

    <article class="movie-card">
        <div class="movie-info">
            <ul>
                <h2>Blade Runner 2049</h2>
                <li>2017</li>
                <li>Age: 15</li>
                <li>2h 44m</li>
                <li>IMDB rating 8/10</li>
            </ul>
        </div>

        <div class="movie-image">
            <img src="pictures/movie1.jpeg" alt="Blade Runner 2049 poster">
        </div>
    </article>
    <section class="genrebox">
        <div>Action epic</div>
        <div>AI</div>
        <div>Cyber Thriller</div>
        <div>Cyber Punk</div>
        <div>Dystopian Sci-Fi</div>
        <div>Sci-Fi epic</div>
    </section>

    <article class="movie-description">
        <div class="about-movie">
            <p>Thirty years after the events of the first film, the world of Blade Runner 2049 is a bleak and beautiful vision of
                the future — neon-lit cities, synthetic beings, and fading memories.<br><br>
                Officer K, a new generation Blade Runner for the Los Angeles Police Department, uncovers a long-buried secret that
                could shatter the fragile balance between humans and replicants. <br><br>
                His investigation leads him on a haunting journey to track down Rick Deckard, a former Blade Runner who has been
                missing for three decades.
            </p>

            <p> Director: Denis Vileneuve</p>

            <p>Stars: Ryan Gosling, Michael Green, Philip k Dick</p><br><br>
            <p>Tickets</p>
            <div class="time-tablet">
                <div class="days">Monday 1/12 19:00</div>
                <div class="days">Tusday 2/12 19:00</div>
                <div class="days">Wednsday 3/12 19:00</div>
                <div class="days">Thursday 4/12 19:00</div>
                <div class="days">Friday 5/12 19:00</div>
                <div class="days">Saturday 6/12 18:30</div>
                <div class="days">Sunday 7/12 16:00</div>
            </div>
            <br>
            <p>Swedish subtitle</p>
            <p>VIP- Expirience</p>
    </article>
    </main>
    <?php
    require __DIR__ . "/footer.php";
