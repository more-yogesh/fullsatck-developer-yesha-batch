<?php
session_start();

unset($_SESSION['myUserDetails']);

session_destroy();

header('location:login.php');
