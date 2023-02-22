<?php
include_once "header.php";
include 'db.php';
$item = isset($_GET['item']) ? $_GET['item'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';

?>
<body>
    <div class="main">
        <div class="container">
            <h1>Feel this form to confirm your order</h1>
            <br>
            <form action="" method="post">
            <h3><?php echo $item; ?></h3>
            <h4>Rs. <?php echo $price; ?></h4>
                <label for="Table">Select Table Number:</label>
                <select name="Table" id="Table">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <br>
                <label for="Quantity">Quantity:</label>
                <select name="Quantity" id="Quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <br>
                <input type="submit" name="submit" value="SUBMIT" class="button">
            </form>
        </div>
    </div>
</body>
<?php
if(isset($_POST['submit'])) {
    // Get the values from the form
    $table_number = $_POST['Table'];
    $quantity = $_POST['Quantity'];
    $item = $item = $item;
    $price = $price;
    $price = $price;

    // Insert the values into the database
    $sql = "INSERT INTO orders_received (table_number, quantity, item, price)
    VALUES ('$table_number', '$quantity', '$item', '$price')";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>
