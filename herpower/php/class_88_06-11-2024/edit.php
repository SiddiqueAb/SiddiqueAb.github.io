<?php
include_once('database.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$data = mysqli_query($conn, $sql);
if (mysqli_num_rows($data) > 0) {
    $row_Data = mysqli_fetch_assoc($data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>
    <h1>Submit to Update Data</h1>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $row_Data['id'] ?>" name="id">
        <input type="text" value="<?php echo $row_Data['name'] ?>" name="name" placeholder="name"><br><br>
        <input type="text" value="<?php echo $row_Data['mobile'] ?>" name="mobile" placeholder="mobile"><br><br>
        <!-- <input type="text" value="<?php //echo $row_Data['password'] ?>" name="password" placeholder="password"><br><br> -->
        <input type="text" value="<?php echo $row_Data['email'] ?>" name="email" placeholder="email"><br><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>