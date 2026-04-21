<?php
require_once("../db_connect.php");

$con = mysqli_connect($servername, $db_username, $db_password, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$comments = mysqli_real_escape_string($con, $_POST['comments']);
$accommodation_id = intval($_POST['accommodation']);


$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$sql = "Select location FROM accommodations WHERE accommodations_id = $accommodation_id";
$result = mysqli_query($con, $sql);
if(!$result) {
    die("Error fetching accommodation: " . mysqli_error($con));
}
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $accommodation_name = $row['location'];
} else {
    $accommodation_name = "Unknown Accommodation";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">


<div class="text-center">

    <h1 class="mb-4">Booking Confirmed!</h1>
    <p class="lead">We're so excited to have you stay with us!</p>

    <p class="lead">Thank you, <?php echo $firstname . " " . $lastname; ?>.</p>

    <div class="card p-4 mt-4">

        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Comments:</strong> <?php echo $comments ? $comments : "None"; ?></p>

        <hr>

        <p><strong>Check-in:</strong> <?php echo $checkin; ?></p>
        <p><strong>Check-out:</strong> <?php echo $checkout; ?></p>
        <p><strong>Accommodation:</strong> <?php echo $accommodation_name; ?></p>

    </div>

    <a href="booking.php" class="btn btn-primary mt-4">Back to Booking</a>

    

</div>
<div class="text-center mt-5">
     
<a href="index.php">
        <img src="up-north-logo.png" alt="Up North Logo" class="mt-4" style="width: 10%;">
</a>
</div>

</body>
</html>