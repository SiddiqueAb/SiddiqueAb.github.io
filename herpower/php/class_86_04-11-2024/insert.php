<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName  = "shopping_corner";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connect successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($name && $mobile && $password && $email) {
        $sql = "insert into users (name, password, mobile, email) 
                values ('$name', '$password', '$mobile', '$email')";

        if (mysqli_query($conn, $sql)) {
            // echo "data successfully inserted into users";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}
