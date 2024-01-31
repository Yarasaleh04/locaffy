<?php
require("signDb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO client1 (name,email,password) values ('$username','$email','$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: sign-in.php");
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-**your-integrity-hash**" crossorigin="anonymous">

    <link rel="stylesheet" href="Style.css">
</head>
<body class="body-signup">
<?php require('header.php');?>
<div class="container">
<div id="signup-form">
    
    <h2>Create an Account</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <button type="submit" name="signup">Sign Up</button>
    </form>
</div>
</div>
<?php require('footer.php');?>
</body>
</html>

