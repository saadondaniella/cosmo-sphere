<?php
require __DIR__ . "/backgroundstarts.php";
require __DIR__ . "/header.php"; ?>



<div class="intro">
    <h1>Sci-Fi biograf i centrala Göteborg.</h1>
    <p>Visar de gamla och senaste filmerna</p>
</div>

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
        <img src="/pictures/sci-fi movies.jpg" alt="Placeholder image">
    </div>
</div>


<br><br><br><br><br><br>
<?php
require __DIR__ . "/footer.php";
?>