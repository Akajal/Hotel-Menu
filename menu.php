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
        text-align: start;
      }
    </style>
  </body>
  <table class="table table-striped">
    <tr>
      <th>Item</th>
      <th>Item Type</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php
    include 'db.php';
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['item']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>
        <td>
          <!-- Add a form for the delete action -->
          <form action="deleteAction.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
    <?php } ?>
  </table>
</html>
