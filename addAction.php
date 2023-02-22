<?php
include'header.php'; 
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}
  include 'db.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $item = $_POST['item'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // Check if the image file is an actual image or a fake image
    if (isset($image) && $image['error'] == 0) {
      $target_dir = "images/";
      $target_file = $target_dir . basename($image["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Allow certain file formats
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
          echo "The file " . basename($image["name"]) . " has been uploaded.";
          header("Location: menu.php");
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

    // Insert the new item into the database
    $sql = "INSERT INTO orders (item, type, price, image)
    VALUES ('$item', '$type', '$price', '" . str_replace("uploads/", "", $target_file) . "')";
       
    
    if (mysqli_query($conn, $sql)) {
      header("Location: menu.php");
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
  include 'footer.php';
?>
