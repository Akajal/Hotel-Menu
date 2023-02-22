<?php
include "header.php";
include "headermenus.php";
include "db.php";

// Query orders table
$sql = "SELECT item, price, image FROM orders";
$result = mysqli_query($conn, $sql);

$orders = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = array(
            "item" => $row["item"],
            "price" => $row["price"],
            "image" => $row["image"]
        );
    }
} else {
    echo "0 results";
}
// Close connection
mysqli_close($conn);
?>

<!-- Main Section -->
<main class="main">
    <section class="section banner banner-section">
        <div class="container banner-column">
            <img class="banner-image" src="./img/1.png" alt="banner">
            <div class="banner-inner">
                <h1 class="heading-xl">Order food from the widest range of restaurants.</h1>
                <p class="paragraph">
                    Order food from the widest range of restaurants.
                </p>
                <button class="btn btn-darken btn-inline">
                    Our items<i class="bx bx-right-arrow-alt"></i>
                </button>
            </div>
            <div class="banner-links">
                <a href="#" title=""><i class="bx bxl-facebook"></i></a>
                <a href="#" title=""><i class="bx bxl-instagram"></i></a>
                <a href="#" title=""><i class="bx bxl-twitter"></i></a>
                <a href="#" title=""><i class="bx bxl-youtube"></i></a>
            </div>
        </div>
    </section>
</main>
<div id="men">
    <div id="menu_row">
        <h2>Menu</h2>
        <div id="menu_column">
            <?php
            if (count($orders) > 0) {
                foreach ($orders as $order) {
                    echo '<div class="box">';
                    echo '<div id="image">';
                    echo '<img src="' . $order['image'] . '">';
                    echo '</div>';
                    echo '<h3>' . $order['item'] . '</h3>';
                    echo '<h4>Rs' . $order['price'] . '</h4>';
                    echo '<a href="order_process.php?item=' . $order['item'] . '&price=' . $order['price'] . '">
                    <button class="order-button">order</button>
                     </a>';
                   echo '</div>';
                }
            } else {
                echo "No orders found";
            }
            ?>
        </div>
    </div>
</div>

<?php include "footer.php" ?>