<?php
$nameError = "";
$mailError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $nameError = "First Name is required ";
    } else {
        $fname = $_POST["fname"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["fname"])) {
            $nameError = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $mailError = "Email is required ";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mailError = "Invalid email format";
        }
    }
}


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
        <form action="" method="post">

            <input type="text" placeholder="First Name" name="fname"> <br>
            <span style="color:red;"><?php echo $nameError; ?></span> <br><br>

            <input type="email" placeholder="Email" name="email"> <br>
            <span style="color:red;"><?php echo $mailError; ?></span> <br><br>
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