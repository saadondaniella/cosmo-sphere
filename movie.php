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

            <p>Stars: Ryan Gosling, Michael Green, Philip k Dick</p><br>
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

            <br>
            <p>Swedish subtitle</p>
            <p>VIP- Expirience</p>
    </article>
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
    </main>
    <?php
    require __DIR__ . "/footer.php";
