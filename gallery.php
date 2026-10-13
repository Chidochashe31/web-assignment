
<?php
$pageTitle = "Gym Club Gallery";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>School Gym Club</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="activities.php">Activities and Events</a>
        <a href="gallery.php">Gallery</a>
        <a href="membership.php">Join Us</a>
    </nav>
</header>

<main>
    <h2>Our Gym Gallery</h2>

    <p>Explore our gym facilities and see examples of
    strength training and fitness activities.</p>

    <div class="gallery">

        <figure>
            <img src="gym1.jpg"
                 alt="A man pulling training ropes during a strength workout">
            <figcaption>Strength Training with Ropes</figcaption>
        </figure>

        <figure>
            <img src="gym2.jpg"
                 alt="The school gym and its exercise facilities">
            <figcaption>Our Gym Facilities</figcaption>
        </figure>

        <figure>
            <img src="gym3.jpg"
                 alt="A woman lifting weights during strength training">
            <figcaption>Weightlifting and Fitness</figcaption>
        </figure>

    </div>
</main>

<footer>
    <p>&copy; 2026 School Gym Club</p>
</footer>

</body>
</html>
