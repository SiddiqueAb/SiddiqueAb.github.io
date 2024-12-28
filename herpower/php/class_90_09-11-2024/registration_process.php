<?php
session_start();
include_once('database.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($name && $mobile && $password && $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "insert into authority (name, password, mobile, email) 
                values ('$name', '$hashedPassword', '$mobile', '$email')";

        if (mysqli_query($conn, $sql)) {
            // echo "data successfully inserted into users";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}
