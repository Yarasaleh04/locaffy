<?php
require('signDb.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['privileged'])) {
        $name = $_POST['product-name'];
        $price = $_POST['product-price'];
        $quantity = $_POST['product-quantity'];
        $image = $_POST['product-image'];
        $user = $_SESSION['privileged']; 

        $sql = "INSERT INTO `cart1` (`product-name`, `product-image`, `product-price`, `product-quantity`, `username`) VALUES ('$name', '$image', $price, $quantity, '$user')";
        $result = mysqli_query($con, $sql);
      

        if ($result) {
            echo '<script>alert("Product added to cart successfully")</script>';
        } else {
            echo '<script>alert("Error adding product to cart")</script>';
        }
    } else {
        echo '<script>alert("Please sign in first")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yara">
    <title>Desserts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-**your-integrity-hash**" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Style.css">
</head>
<body class="menu-background ">
    <?php require('header.php'); ?>
    <div class="container ">
        <div class="welcome-message">Welcome to Locaffy Desserts!</div>
        <div class="explore-message">Indulge in our delightful dessert creations and discover a world of sweet delights.</div>
        <br>
    </div>
    <div id="menu-container" class="container">
        <?php
        $sql = "SELECT * FROM deserts1";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['product-id'];
                $name = $row['product-name'];
                $desc = $row['product-desc'];
                $image = $row['product-image'];
                $price = $row['product-price'];

                echo '
                <div class="card">
                    <img src="' . $image . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $name . '</h5>
                        <p class="card-text">' . $desc . '</p>
                        <p class="card-text card-price">Price: ' . $price . ' JD</p>
                    </div>
                    <form class="form" method="post">
                        <input type="hidden" name="product-name" value="' . $name . '">
                        <input type="hidden" name="product-price" value="' . $price . '">
                        <input type="hidden" name="product-image" value="' . $image . '">
                        <input type="number" name="product-quantity" min="1" class="custom" required>
                        <input type="submit" name="add_to_cart" value="Add to Cart" class="custom btn btn-primary">
                    </form>
                </div>
                ';
            }
        } else {
            echo "No desserts available.";
        }
        ?>
</div>
    <?php require('footer.php'); ?>
</body>
</html>
