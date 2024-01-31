<?php
include 'signDb.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['product-id']) ? $_GET['product-id'] : null;
    $quantity = isset($_GET['product-quantity']) ? $_GET['product-quantity'] : null;

    $sql = "UPDATE `cart1` SET `product-quantity`='$quantity' WHERE `product-id`='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data updated successfully";
        header('Location: cart.php');
        exit();
    } else {
        echo "Data update failure";
        die(mysqli_error($con));
    }
}
?>
