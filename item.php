<?php 
include'header.php'; 
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}
?>
<body>
    <style>
      table{
        width: 98%;
        margin: 0 20px;
      }
      th {
        padding: 10px 0;
      }
    </style>
  </body>
  <table>
    <tr>
      <th>ID</th>
      <th>Item</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php 
      include 'header.php';
      include 'db.php';
  
      $query = "SELECT id, item, price, image FROM orders";
      $result = mysqli_query($conn, $query);
  
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $item = $row['item'];
          $price = $row['price'];
          $image = $row['image'];
    ?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $item; ?></td>
      <td><?php echo $price; ?></td>
      <td><img src="<?php echo $image; ?>" height="100" width="100"></td>
      <td>
      <a href="edit.php?id=<?php echo $id; ?>&item=<?php echo $item; ?>&price=<?php echo $price; ?>&price=<?php echo $image; ?>"
      >Edit</a>
      </td>
    </tr>
    <?php
        }
      } else {
        echo "0 results";
      }
    ?>
  </table>
