<?php
include('db.php');

if (isset($_POST['btnUpdate'])) {
    // echo "clicked";exit;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $categories = implode(",", $_POST['categories']);
    $state = $_POST['state'];
    $address = $_POST['address'];
    $updateQuery = "UPDATE sellers SET name = '$name', email = '$email', gender='$gender', categories = '$categories', state='$state', address='$address' WHERE id = '$id'";
    $connection->query($updateQuery);
    header('location:show-sellers.php');
} else {
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
}
