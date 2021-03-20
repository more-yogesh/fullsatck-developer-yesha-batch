<?php
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$categories = implode(",", $_POST['categories']);
$state = $_POST['state'];
$address = $_POST['address'];
$password =  md5($_POST['password']);

$query = "INSERT INTO sellers (name, email, gender, categories, state, address, password) VALUES ('$name', '$email', '$gender', '$categories', '$state', '$address', '$password')";

$connection->query($query);
header('location:seller.php');
