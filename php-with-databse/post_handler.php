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

    // echo "<pre>";
    // print_r($_FILES['profi   le_photo']);exit;

    $uploadPath = "uploads/";
    $tmpName = $_FILES['profile_photo']['tmp_name'];
    $destiny =  $uploadPath . $_FILES['profile_photo']['name'];
    move_uploaded_file($tmpName, $destiny);

    // unlink

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $categories = implode(",", $_POST['categories']);
    $state = $_POST['state'];
    $address = $_POST['address'];
    $password =  md5($_POST['password']);
    $image = $_FILES['profile_photo']['name'];

    $query = "INSERT INTO sellers (name, email, gender, categories, state, address, password, profile_photo) VALUES ('$name', '$email', '$gender', '$categories', '$state', '$address', '$password', '$image')";

    $connection->query($query);
    header('location:seller.php');
}
