<?php 
include 'header.php';
include 'db.php';

$query = "SELECT item, price, table_number, quantity, created_at FROM  orders_received";
$result = mysqli_query($conn, $query);
?>
<html>
<body>
    <style>
      table{
        width: 98%;
        margin: 0 20px;
      }
      th{
        padding: 10px 0;
      }
    </style>
  </body>
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Table Number</th>
                <th>Quantity</th>
                <th>Order place Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $table_number = $row['table_number'];
                    $item = $row['item'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    $created_at = $row['created_at'];
                    echo "<tr>";
                    echo "<td>$item</td>";
                    echo "<td>$price</td>";
                    echo "<td>$table_number</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$created_at</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            ?>
        </tbody>
    </table>
</html>
<?php
mysqli_close($conn);
?>
