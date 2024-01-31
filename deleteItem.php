<?php
include("signDb.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    echo "Product ID: $id"; 
    $sql = "DELETE FROM cart1 WHERE `product-id` = $id";
    echo "SQL Query: $sql";  
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: cart.php');
    } else {
        die(mysqli_error($con));
    }
} else {
    echo "No product ID provided"; 
}
?>
