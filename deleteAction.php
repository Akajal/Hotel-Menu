<?php
include 'db.php';
  // Delete customer order from the database
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
      // Delete the selected item from the database
      $id = $_POST['id'];
      $sql = "DELETE FROM orders WHERE id='$id'";
      if (mysqli_query($conn, $sql)) {
        header("Location: menu.php");
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    } else {
      echo "Error: ID not provided";
    }
  
    }
    mysqli_close($conn);
?>