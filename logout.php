<?php

session_start();

if(isset($_SESSION['priviliged'])) {
    unset($_SESSION['priviliged']);
}
session_destroy();

header("Location: sign-in.php");
exit;