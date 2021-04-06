<?php
session_start();
require('db.php');
if (isset($_POST['btnRegister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm_password = $_POST['confirm_password'];

    $insertQuery = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

    $db->query($insertQuery);
    header('location:login.php');
}

if (isset($_POST['btnLogin'])) {



    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $message = [];
    if ($email == '') {
        $message['email'] = "Please Enter Email";
    }
    if ($_POST['password'] == '') {
        $message['password'] = "Please Enter Password";
    }

    if (sizeof($message) > 0) {
        header('location:login.php?errorMessages=' . json_encode($message));
    }

    $loginQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $data = $db->query($loginQuery);

    if ($data->num_rows == 1) {
        $_SESSION['myUserDetails'] = $data->fetch_object();
        header('location:dashboard.php');
    }

    header('location:login.php?loginError=Email or password is wrong');
}
