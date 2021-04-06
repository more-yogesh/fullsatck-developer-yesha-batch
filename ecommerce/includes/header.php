<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Welcome E-commerce</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="assets/images/logo.png" class="logo-image">
        </div>
        <div class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php

                if (isset($_SESSION['myUserDetails'])) {
                    $user = $_SESSION['myUserDetails'];
                ?>
                    <li><a href="logout.php"><?php echo $user->name;?></a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>