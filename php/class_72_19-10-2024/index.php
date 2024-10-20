<?php
function x_debug($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// $name = "PHP";
// echo "We are learning " . $name;

// echo "<br>";

// $x = 5;
// $y = 4;
// echo $x + $y;

// var_dump(false);


// $x = $y = $z = "Fruit";

// print $z;

// $x = [5, 6, 8, "Mollika"];
// var_dump($x);

// class StudentInfo
// {
//     public $name = "Tonu";
//     public $email = "tonu@gmail.com";

//     public function __construct($name, $email)
//     {
//         $this->name = $name;
//         $this->email = $email;
//     }
//     public function displayInfo()
//     {
//         return "Name: " . $this->name;
//     }
// }

// $student_inf = new StudentInfo("Mollika", "Hello");
// var_dump($student_inf);

// $x = "Jenifer";
// echo strlen($x);
// echo str_word_count($x);
// echo strpos("Hello world!", "world");
// echo strtoupper($x);
// echo strtolower($x);

// $x = "Hello World!    ";
// echo str_replace("World", "Dolly", $x);
// echo strrev($x);
// echo trim($x);


// $x = [5, 6, 8, "Mollika"];
// $y = "Hello orange";


// $x = "Hello \n Bangladesh";

// echo $x;

// $a = 5;
// $b = 5.34;
// $c = "25";

// var_dump($c);
// echo PHP_INT_MAX;
// echo PHP_INT_MIN;

// var_dump(is_int($c));
// echo PHP_FLOAT_MAX;

// $x = 5985;
// var_dump(is_numeric($x));
// echo "<br>";

// $x = (string)5985;
// $y = (int) "5985";

// // var_dump(is_numeric($y));
// var_dump(is_int($x));

// echo pi();

// echo (min(0, 150, 30, 20, -8, -200));
// echo "<br>";
// echo (max(0, 150, 30, 20, -8, -200));


// echo(abs(-6.7));

// echo(sqrt(64));
// echo pow(10, 2);


// echo(round(5.49));

// echo rand(1000, 2000);
// $x = 5;

// define("NAME", ["TONU", "Vasha", "Mollika"]);

// echo NAME[2];


// const MYCAR = "Volvo";
// echo MYCAR;

// echo __DIR__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";

// function newFunction(){
//     echo __FUNCTION__;
// }

// newFunction();

// echo "<br>";
// echo __LINE__;

// $x = 100;  
// // $y = 50;

// echo $x++;

// var_dump($x != $y);


// $x = "TONU";

// $x .= " IS a Good student";

// echo $x;

// $x = 10;

// echo $x < 20 ? "TRUE" : "FALSE";s
// echo $x ?? "Hello";

// if ($x < 5) {
//     echo "TRUE";
// } else {
//     echo "FALSE";
// }

// $a = 5;

// if ($a < 10) $b = "Hello";

// echo $b;

// $a = 13;

// if ($a > 10) {
//     echo "Above 10";
//     if ($a > 20) {
//         echo " and also above 20";
//     } else {
//         echo " but not above 20";
//     }
// }

// $t = 30;

// if ($t < "50") {
//     echo "true";
// } else {
//     echo "false";
// };


// $i = 10;

// while ($i >= 0):
//     echo $i;
//     echo "<br>";
//     $i--;
// endwhile;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <h1>Herpower All Student</h1>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Savings</th>
        </tr>


        <?php
        $i = 1;

        while ($i < 50) {

        ?>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>$100</td>
            </tr>


        <?php $i++;
        };
        ?>


    </table>
</body>

</html>