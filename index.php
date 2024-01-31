<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-**your-integrity-hash**" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body class= "home-background"> 
<?php require('header.php');?>
    <div id="video-container">
        <iframe src="../assets/video.mp4" frameborder="0" allowfullscreen=""></iframe>
    </div>
    <!-- About Us Section -->
    <div id="about-us">
        <h2>About Us</h2>
        <p>Our cafe is dedicated to providing delicious food and a cozy atmosphere for our customers.</p>
    </div>

    <!-- Our Story Section -->
    <div id="our-story">
        <h2>Our Story</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.</p>
    </div>

    <!-- Our Team Section -->
    <div id="our-team">
        <h2>Our Team</h2>
        <div class="team-card">
            <img src="../assets/emma.jpg" alt="1" >
            <h3>Emma Smith</h3>
            <p>"Creating delightful experiences for our customers."</p>
        </div>
        <div class="team-card">
            <img src="../assets/john.jpg" alt="2">
            <h3>John Doe</h3>
            <p>"Passionate about serving quality food with a smile."</p>
        </div>
        <div class="team-card">
            <img src="../assets/alice.jpg" alt="3">
            <h3>Alice Johnson</h3>
            <p>"Dedicated to making your dining experience memorable."</p>
        </div>
    </div>

    <?php require('footer.php');?>
</body>

</html>