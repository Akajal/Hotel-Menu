<?php
include 'db.php';
?>
<form action="deleteAction.php" method="post">
  <h3>Delete Item</h3>
  <select name="id">
    <?php
    // Read the existing items from the database and display them in a dropdown menu
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['id']}'>{$row['item']}</option>";
      }
    }
    ?>
  </select>
  <input type="submit" value="Delete Item">
</form>

