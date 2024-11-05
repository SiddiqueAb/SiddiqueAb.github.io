<?php
include_once('database.php');
// echo "Connect successfully";

$sql = "SELECT * FROM users";
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
    <h4 style="text-align:center;">All Users</h4>
    <a href="add_user.php">Add new users</a>
    <br>
    <br>
    <table style="border:2px solid;">
        <tr>
            <th>Sn.</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <!-- <th>Password</th> -->
            <th>Action</th>
        </tr>
        <?php
        $sn = 1;
        foreach ($row_Data as $row) { ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <!-- <td><?php //echo $row['password']; ?></td> -->
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>