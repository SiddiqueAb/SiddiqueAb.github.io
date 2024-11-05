<?php
include ('database.php');
// echo "Connect successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($name && $mobile && $password && $email) {
        $sql = "UPDATE users SET name = '$name', email = '$email', 
        password = '$password', mobile = '$mobile' WHERE id = '$id'";

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
