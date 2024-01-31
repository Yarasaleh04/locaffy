<?php
include 'signDb.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-**your-integrity-hash**" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <title>Shopping Cart</title>
</head>

<body class="cart-background">
    <?php require('header.php'); ?>

    <div class="container">
        <section class="h-100 h-custom" style="">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                                <?php
                                                $total = 0; // Initialize total variable

                                                if (isset($_SESSION['privileged'])) {
                                                    $user = $_SESSION['privileged'];
                                                    $sql = "SELECT COUNT(*) as itemCount FROM cart1 WHERE username='$user';";
                                                    $result = mysqli_query($con, $sql);

                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        $itemCount = $row['itemCount'];
                                                        echo '<h6 class="mb-0 text-muted">' . $itemCount . ' item(s)</h6>';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <hr class="my-4">

                                            <?php
                                            if (isset($_SESSION['privileged'])) {
                                                $user = $_SESSION['privileged'];
                                                $sql = "SELECT * FROM cart1 WHERE username='$user';";
                                                $result = mysqli_query($con, $sql);

                                                if ($result) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $id = $row['product-id'];
                                                            $name = $row['product-name'];
                                                            $quantity = $row['product-quantity'];
                                                            $image = $row['product-image'];
                                                            $price = $row['product-price'] * $quantity;
                                                            $total += $price; // Accumulate total

                                                            echo "
                                                            <div class='row mb-4'>
                                                                <div class='col-md-2'>
                                                                    <img src='$image' class='img-fluid rounded-3'
                                                                        alt='$name'>
                                                                </div>
                                                                <div class='col-md-4'>
                                                                    <h6 class='text-muted'>Product</h6>
                                                                    <h6 class='text-black mb-0'>$name</h6>
                                                                </div>
                                                                <div class='col-md-2'>
                                                                    <h6 class='text-muted'>Quantity</h6>
                                                                    <form action='updateItem.php' method='GET'>
                                                                        <input type='number' name='product-quantity'
                                                                            value='".max(1, $quantity)."' min='1' />
                                                                        <input type='hidden' name='product-id' value='$id' />
                                                                        <button type='submit' class='btn btn-update btn-theme'>Update</button>
                                                                    </form>
                                                                </div>
                                                                <div class='col-md-2'>
                                                                    <h6 class='text-muted'>Price</h6>
                                                                    <p>
                                                                        JD " . number_format($price, 2) . "
                                                                    </p>
                                                                </div>
                                                                
                                                                <div class='col-md-2'>
                                                                    <button class='btn btn-danger btn-delete'>
                                                                        <a class='text-light text-decoration-none' href='deleteItem.php?id=$id'>Delete</a>
                                                                    </button>
                                                                </div>
                                                            </div>";
                                                        }
                                                    } else {
                                                        // No items in the cart
                                                        echo "<p>No items in the cart.</p>";
                                                    }
                                                }
                                            }
                                            ?>
                                            <hr class='my-4'>
                                        </div>
                                    </div>
                                    <div class='col-lg-4 bg-grey'>
                                        <div class='p-5'>
                                            <div class='d-flex justify-content-between mb-4'>
                                                <h5 class='text-uppercase'>Total Price</h5>
                                                <h5 id='totalPrice'>
                                                    JD
                                                    <?php echo number_format($total, 2); ?>
                                                </h5>
                                            </div>
                                            <?php
                                            if ($total > 0) {
                                                echo '<button type="button" class="btn btn-dark btn-block btn-lg btn-theme" data-mdb-ripple-color="dark" onclick="checkout()">Checkout</button>';
                                            }
                                            ?>

                                            <!-- Back to Menu button -->
                                            <div class='pt-5'>
                                                <button class='btn btn-back-to-menu' style='background-color: grey;'>
                                                    <a href='menu.php' class='text-white text-decoration-none'><i
                                                            class='fas fa-long-arrow-alt-left me-2'></i>Back to Menu</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
