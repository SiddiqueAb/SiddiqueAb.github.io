<?php
include_once('database.php');
$id = $_GET['id'];
// echo $id;
// $sql = "DELETE FROM users WHERE id = '$id'";
$sql = "UPDATE users SET status= 0 WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    // echo "data successfully inserted into users";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
