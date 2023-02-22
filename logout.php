<?php
session_start();

// Remove the user session data
unset($_SESSION['userId']);

// Redirect the user back to the login page
header('Location: login.php');
exit();
?>
