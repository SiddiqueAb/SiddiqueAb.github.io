<?php

// echo $_SERVER['REQUEST_METHOD'];
// exit;
// print_r($_REQUEST);
// exit;



echo $fname = htmlspecialchars($_POST['fname']);

exit;




$lname = $_POST['lastname'];
// $country = $_POST['country'] ?? "NO";
$subject = $_POST['subject'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>You Submit Below's Information</h1>

    <?php //pif ($fname && $lname && $subject) { 
    ?>


    <div style="padding: 40px; background-color: pink;">
        Full Name: <?php echo $fname . " " . $lname ?> <br>
        <!-- Country: <?php //echo $country 
                        ?> <br> -->
        Subject: <?php echo $subject ?> <br>
    </div>

    <?php //} 
    ?>
</body>

</html>