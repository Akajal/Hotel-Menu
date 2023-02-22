<?php

// Connect to the database
include 'db.php';

// Check if the id and updated data are received
if (isset($_PUT['id']) && isset($_PUT['item']) && isset($_PUT['price'])) {
    $id = $_REQUEST['id'];
    $item = $_REQUEST['item'];
    $price = $_REQUEST['price'];
    

    // Update the data in the database
    $sql = "UPDATE orders SET item='$item', price='$price' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Data is not received']);
}
//print_r($_REQUEST);

// Close the database connection
mysqli_close($conn);

