<?php
$pageTitle = "Activities and Events";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Gym Club</title>
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
    <h2>Our Activities</h2>
    <p>Our Gym Club encourages students to exercise,
    improve their fitness and live a healthy lifestyle.</p>

    <ul>
        <li>Weight training</li>
        <li>Cardio exercises</li>
        <li>Stretching exercises</li>
        <li>Group fitness sessions</li>
        <li>Fitness challenges</li>
    </ul>

    <h2>Upcoming Events</h2>

    <table>
        <tr>
            <th>Event</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>Fitness Day</td>
            <td>Students take part in fitness activities.</td>
            <td>To be announced</td>
        </tr>
        <tr>
            <td>Fitness Challenge</td>
            <td>Students test their fitness and endurance.</td>
            <td>To be announced</td>
        </tr>
        <tr>
            <td>Group Exercise</td>
            <td>Members exercise together.</td>
            <td>To be announced</td>
        </tr>
    </table>
</main>

<footer>
    <p>&copy; 2026 School Gym Club</p>
</footer>

</body>
</html>
