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

$txt = "W3Schools";
// $pattern = "/[^o]/";
// $pattern = "/[a-e]/";
$pattern = "/[a-e]/";
echo preg_match_all($pattern, $txt);
exit;





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text],
        select,
        textarea {
            width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical
                /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }

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
        <form action="backend.php" method="get">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option>Select Country</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
    </div>
</body>

</html>