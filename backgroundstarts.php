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