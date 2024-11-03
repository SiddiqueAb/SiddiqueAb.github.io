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

// $sql = "CREATE DATABASE abc_test_db";

// if(mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else{
//     echo "Error creating database: " . mysqli_error($conn);
// }

$sql = "SELECT name, mobile,email,password FROM users";
$data = mysqli_query($conn, $sql);

if (mysqli_num_rows($data) > 0) {
    $row_Data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    // print_r($row_Data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Time Data</title>
    <style>
        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
    <table style="border:2px solid;">
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Password</th>
        </tr>


        <?php foreach ($row_Data as $row) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>