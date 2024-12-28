<?php
include ('database.php');
// echo "Connect successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = md5($_POST['password']);
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
