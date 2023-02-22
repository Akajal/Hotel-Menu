<?php
include 'db.php';
// Check if the form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmailQuery = "SELECT email FROM users WHERE email='$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
    if (mysqli_num_rows($checkEmailResult) > 0) {
        // Email already exists
        // Redirect to the same page with error message
        header("Location: register.php?error=emailExists");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email address
        // Redirect to the same page with error message
        header("Location: register.php?error=invalidEmail");
        exit();
    } else {    
        // Insert a new record
        $password = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password, created_at)
        VALUES ('$firstName', '$lastName', '$email', '$password', NOW())";        
        $insertResult = mysqli_query($conn, $insertQuery);
        if($insertResult) {
            // Registration successful
            // Redirect to the next page
            header("Location: registerSuccess.php");
            exit();
        } else {
            // Registration failed
            // Redirect to the same page with error message
            header("Location: register.php?error=registerFailed");
            exit();
        }
    }
}
mysqli_close($conn);
