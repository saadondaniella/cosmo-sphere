<?php
$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarine', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];
?>

<div class="starfield">
    <?php for ($i = 0; $i < 200; $i++): ?>
        <?php $star = $stars[$i % count($stars)]; ?>
        <div class="star" style="
            background-color: <?= $star['color']; ?>;
            width: <?= $star['size']; ?>px;
            height: <?= $star['size']; ?>px;
            left: <?= random_int(1, 99); ?>vw;
            top: <?= random_int(1, 99); ?>vh;
            animation-delay: <?= random_int(0, 2000) / 1000; ?>s;
            animation-duration: <?= random_int(2, 5); ?>s;
            "></div>
    <?php endfor; ?>
</div>
<?php
require __DIR__ . "/header.php"; ?>

<main>

    <p>Här kommer allt vårt innehåll</p>
</main>

<div class="container">
    <div class="left">
        <h1>Sphere’s Inner Circle</h1>
        <p>Share your email to know about all our upcoming shows and events.</p>

        <form>
            <input type="text" placeholder="Full name *" required>
            <input type="email" placeholder="Email *" required>
            <p>By clicking submit I agree to the Privacy Policy and Terms of Use.</p>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="right">
        <img src="/pictures/sci-fi movies.jpg" alt="Placeholder image">
    </div>
</div>

<?php
require __DIR__ . "/footer.php";
?>