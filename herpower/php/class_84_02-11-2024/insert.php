<?php

$servername ="localhost";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connect successfully";

$sql = "CREATE DATABASE abc_test_db";

if(mysqli_query(mysql: $conn, $sql)){
    echo "Database created successfully";
} else{
    echo "Error creating database: " . mysqli_error($conn);
}