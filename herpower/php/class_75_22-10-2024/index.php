<?php
// function x_debug($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// $x = 10;


// function myFunction()
// {
//     //  $GLOBALS['x'] = 10;


// }
// myFunction();

// echo $x;


// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// print_r($_SERVER['HTTP_REFERER']);
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];


// echo $_REQUEST['firstname'];

// $str = "The rain in SPAIN falls mainly on the plains.";
// $pattern = "/ain/i";
// // echo preg_match_all($pattern, $str);
// echo preg_replace($pattern, "Bangladesh", $str);


// $txt = "you are better than\nYou think";
// $pattern = "/^you/im";
// echo preg_match_all($pattern, $txt);

// $txt = "W3Schools";
// // $pattern = "/[^o]/";
// // $pattern = "/[a-e]/";
// $pattern = "/[a-e]/";
// echo preg_match_all($pattern, $txt);


// print_r($_REQUEST);

// echo "<script>alert('Hello')</script>";
// echo htmlspecialchars("<script>alert('Hello')</script>");
// exit;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>


    <div class="container">
        <form action="backend.php" method="post">

            <input type="text" placeholder="First Name" name="fname"> <br> <br>
            <input type="email" placeholder="Email" name="email"> <br> <br>
            <input type="text" name="mobile" placeholder="Mobile"><br> <br>
            <input type="text" name="website" placeholder="Website"><br> <br>

            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other <br> <br>
            <textarea name="comment" rows="5" cols="40"></textarea> <br> <br>
            <input type="password" placeholder="Password" name="password"> <br> <br>

            <input type="submit" value="Submit">

        </form>
    </div>
</body>

</html>