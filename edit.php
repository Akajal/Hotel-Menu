<?php 
include 'header.php';
include 'db.php';

$id = '';
$item = '';
$price = ''; 
$image = '';

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];

  if (isset($_GET['item']) && !empty($_GET['item'])) {
    $item = $_GET['item'];
  }

  if (isset($_GET['price']) && !empty($_GET['price'])) {
    $price = $_GET['price'];
  }

  if (isset($_GET['image']) && !empty($_GET['image'])) {
    $image = $_GET['image'];
  }
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $item = $_POST['item'];
  $price = $_POST['price'];

  if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
  }
  
  $set_values = [];

  if (!empty($item)) {
    $set_values[] = "item = '$item'";
  }

  if (!empty($price)) {
    $set_values[] = "price = '$price'";
  }

  if (!empty($image)) {
    $set_values[] = "image = '$image'";
  }

  if (empty($set_values)) {
    echo "Error: Please provide at least one value to update.";
    exit();
  }

  $set_clause = implode(", ", $set_values);
  
  $query = "UPDATE orders SET $set_clause WHERE id = '$id'";

  if (mysqli_query($conn, $query)) {
    if (!empty($image)) {
      $target = "images/" . basename($image);

      if (move_uploaded_file($image_temp, $target)) {
        header("Location: item.php");
      } else {
        echo "Error: Failed to move uploaded file.";
        exit();
      }
    } else {
      header("Location: item.php");
    }
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}
?>  

<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="text" name="item" value="<?php echo $item; ?>">
  <input type="text" name="price" value="<?php echo $price; ?>">
  <input type="file" name="image" img src="images/<?php echo $image; ?>">
  <input type="submit" name="update" value="Update">
</form>
