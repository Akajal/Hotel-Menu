<?php
session_start();
include 'db.php';

if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['userId'];

$userQuery = "SELECT * FROM users WHERE id=$userId";
$userResult = mysqli_query($conn, $userQuery);
$user = mysqli_fetch_assoc($userResult);

?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: <?php echo $user['firstname'] ?> <?php echo $user['lastname'] ?> </p>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
