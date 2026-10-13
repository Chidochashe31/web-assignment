
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: membership.php");
    exit;
}

$fullname = trim($_POST["fullname"] ?? "");
$studentNumber = trim($_POST["studentNumber"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$interest = trim($_POST["interest"] ?? "");

if (
    $fullname === "" ||
    $studentNumber === "" ||
    $email === "" ||
    $phone === "" ||
    $interest === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    echo "<h2>Invalid Application</h2>";
    echo "<p>Please enter valid details in all fields.</p>";
    echo '<a href="membership.php">Return to the form</a>';
    exit;
}

function safeOutput($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>School Gym Club</h1>
</header>

<main>
    <h2>Application Submitted Successfully!</h2>

    <p>Thank you for applying to join the School Gym Club.</p>

    <h3>Your Application Details</h3>

    <p><strong>Full Name:</strong> <?php echo safeOutput($fullname); ?></p>
    <p><strong>Student Number:</strong> <?php echo safeOutput($studentNumber); ?></p>
    <p><strong>Email Address:</strong> <?php echo safeOutput($email); ?></p>
    <p><strong>Phone Number:</strong> <?php echo safeOutput($phone); ?></p>
    <p><strong>Fitness Interest:</strong> <?php echo safeOutput($interest); ?></p>

    <p>Your details are displayed for confirmation but are not saved in a database.</p>

    <a href="index.php">Return to Home Page</a>
</main>

<footer>
    <p>&copy; 2026 School Gym Club</p>
</footer>

</body>
</html>
