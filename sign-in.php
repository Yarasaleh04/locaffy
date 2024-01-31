<?php
require("signDb.php");
session_start();

$loginError = ""; // Initialize variable to store login error message

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from client1 where name='$username' and password='$password';";
    $menu = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($menu);

    if ($row) {
        $_SESSION['privileged'] = $username;
        header("location:menu.php");
    } else {
        $loginError = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-**your-integrity-hash**" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

</head>
<body class="body-signup">
    <?php require('header.php');?>
    <div class="container">
        <div class="account-section">
            <p>Dont have an account? </p>
            <a href="sign-up.php" class="btn btn-outline-light">Create Account</a>
        </div>
        <div id="signup-form">
            <h2>Sign in Your Account</h2>
            <?php
            if ($loginError) {
                echo "<div id='invalid'><p><i>$loginError</i></p></div>";
            }
            ?>
            <form action="" method="post">
                <label for="username"><b>Username:</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <button type="submit" name="login">Sign in </button>
            </form>
        </div>
    </div>
    <?php require('footer.php');?>
</body>
</html>
