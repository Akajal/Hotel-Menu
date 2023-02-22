<?php
session_start();
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password match a record in the database
    $loginQuery = "SELECT * FROM users WHERE email='$email'";
    $loginResult = mysqli_query($conn, $loginQuery);
    if (mysqli_num_rows($loginResult) > 0) {
        $user = mysqli_fetch_assoc($loginResult);
        if (password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['userId'] = $user['id'];
            header('Location: admin.php');
            exit();
        } else {
            // Invalid password
            header("Location: login.php?error=invalidPassword");
            exit();
        }
    } else {
        // Email not found
        header("Location: login.php?error=emailNotFound");
        exit();
    }
}
mysqli_close($conn);
?>
