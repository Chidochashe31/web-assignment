
<?php
$pageTitle = "Gym Club Membership";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
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
    <h2>Gym Club Membership Form</h2>

    <p>Complete this form to apply to join our Gym Club.</p>

    <form action="process_membership.php" method="post"
          id="membershipForm">

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="studentNumber">Student Number:</label>
        <input type="text" id="studentNumber"
               name="studentNumber" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="interest">Fitness Interest:</label>
        <select id="interest" name="interest" required>
            <option value="">Select an activity</option>
            <option value="Weight Training">Weight Training</option>
            <option value="Cardio">Cardio Exercises</option>
            <option value="Group Fitness">Group Fitness</option>
            <option value="General Fitness">General Fitness</option>
        </select>

        <button type="submit">Submit Application</button>
    </form>
</main>

<footer>
    <p>&copy; 2026 School Gym Club</p>
</footer>

</body>
</html>
