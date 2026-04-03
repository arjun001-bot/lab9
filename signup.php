<?php
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $province = htmlspecialchars($_POST['province']);
    $postal = htmlspecialchars($_POST['postal']);


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users 
    (first_name, last_name, username, email, password, address, city, province, postal_code)
    VALUES 
    ('$first_name', '$last_name', '$username', '$email', '$hashed_password', '$address', '$city', '$province', '$postal')";

    if (mysqli_query($conn, $sql)) {
        header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
