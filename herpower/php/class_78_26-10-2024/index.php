<?php
// include('advance.php');

// echo readfile('myInfo.txt');
// echo "<br>";
// echo file_get_contents('myInfo.txt');


// $file = fopen('myInfo.txt', "r") or die("Can't open file");

// // echo fread($file, filesize("myInfo.txt"));
// // echo fgets($file);

// while (!feof($file)) {
//     echo fgets($file) . ".<br>";
// }

// fclose($file);

// echo $file;

// $file = fopen("testfile.txt", "w");


// $txt = "I am a test file fadsf";
// fwrite($file, $txt);
// echo readfile('testfile.txt');
// fclose($file);

// unlink('testfile.txt');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $target_folder = "uploads/";
    $target_file = $target_folder. basename($_FILES["user_image"]["name"]);
    move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);

    $file_name = $_FILES['user_image'];
    print_r($file_name);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- choose your file to upload       -->
        <input type="file" name="user_image"> <br><br>

        <input type="submit" value="submit your image">
    </form>
</body>

</html>