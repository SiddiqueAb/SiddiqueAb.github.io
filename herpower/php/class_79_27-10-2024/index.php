<?php

// if ($_SERVER["REQUEST_METHOD"] == 'POST') {

//     $target_folder = "uploads/";
//     $target_file = $target_folder . basename($_FILES["user_image"]["name"]);
//     move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);

//     $file_name = $_FILES['user_image'];
//     print_r($file_name);
// }
// $name = "Something special";
// echo $name;





// echo time();

// setcookie("school", "Sher e bangla", time() - (86400 * 30), "/");
// setcookie("school", "Sher e bangla", time() - 1, "/");
// echo $_COOKIE["school"];


// session_start();


// session_unset();
// session_destroy(); 
// $_SESSION["favcolor"] = "green";
// $_SESSION["normal"] = "Red";

// print_r($_SESSION);
// echo $_SESSION["normal"] . "<br>";
// echo $_SESSION["favcolor"];

// $age = array("Peter" => "Vasha", "Ben" => 37, "Joe" => 43);

// print_r($age);
// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// var_dump(json_decode($jsonobj));
// // var_dump(json_encode($age);

// exit;

// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Tonu input 0 ");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(10, 0);
// } catch (Exception $e) {
//     print_r($e);
//     // echo "You have inters 0 as divisor";
// } finally {
//     echo "The counting process finished";
// }

// throw new Exception("New error found");
// exit;









// setcookie("name", "Something Special", time() + (86400 * 30), "/");
// if (!isset($_COOKIE["name"])) {
//     echo "Cookie named '" . "Name" . "' is not set!";
// } else {
//     echo "Cookie '" . "Name" . "' is set!<br>";
//     echo "Value is: " . $_COOKIE["name"];
// }

// exit;








class Car
{
    public $name = "Volvo Car fasd";
    // public $color;
    // public $price;
    public function startRun()
    {
        echo "Car is running";
    }
}

$myObject = new Car();
echo $myObject->name;
echo "<br>";
echo $myObject->startRun();









exit;
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
        <input type="file" name="user_image"> <br><br>
        <input type="submit" value="submit your image">
    </form>
</body>

</html>