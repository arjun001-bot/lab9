<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $conn = new mysqli("localhost", "root", "", "lab9");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['user'] = $email;

            header("Location: welcome.php");
            exit();
        } else {
            header("Location: loginform.php?error=Wrong password");
            exit();
        }
    } else {
        header("Location: loginform.php?error=User not found");
        exit();
    }
} else {
    header("Location: loginform.php");
    exit();
}
