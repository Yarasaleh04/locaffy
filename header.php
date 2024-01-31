<nav>
    <img src="../assets/LOCAFFY.png" alt="LocaffyCafe">
    <?php
    // Check if the user is signed in based on the session
    if (isset($_SESSION['privileged'])) {
        echo '<a href="logout.php" class="navbar-right">Log Out</a>';
    } else {
        echo '<a href="sign-in.php" class="navbar-right">Sign In</a>';
    }
    ?>
    <a href="http://locaffy.kesug.com/Cart.php" class="navbar-right">
        <i class="fas fa-shopping-cart"></i> 
    </a>
    <a href="Contact.php" class="navbar-right">Contact</a>
    <a href="menu.php">Menu</a>
    <a href="index.php" class="navbar-right">Home</a>
</nav>

