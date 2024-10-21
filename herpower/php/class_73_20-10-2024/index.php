<?php
// function x_debug($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// $i = 1;

// do {
//     if ($i == 3) break;
//     echo $i;
//     echo "<br/>";
//     $i++;
// } while ($i < 6);



// $colors = ["red", "green", "blue"];



// $sn = 1;
// foreach ($colors as  $x) {

//     if ($x == "green") {
//         continue;
//     }

//     echo "$sn - $x <br>";
//     $sn++;
// }

// $x = 10;

// function myMessage($x, $y = 2)
// {
//     return $x * $y;
// }

// echo myMessage(7,3);


// $num = 5;
// function add(&$num)
// {
//     $num += 3;
// }
// add($num);

// echo $num;




// function myFunction($first, ...$value)
// {
//     echo $first;


//     foreach ($value as $f) {
//         echo "Value: $f <br>";
//     }
// }
// myFunction(2, 3, 5, 'tonu', 'onu');


// function addNumbers(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers(5, "5 days");



// $cars = ["Volvo", "BMW", "Toyota"];
// $cars = ["name" => "Volvo", "model" => 2020, "price" => "20 Lakhs"];
// $cars["made_country"] = "US";
// echo $cars["name"];
// $cars[1] = "Tesla";
// array_push($cars, "Lamborghini");

// $cars = array("Volvo", "BMW", "Toyota");
// $cars = array("lambourgini", "BMW", "Toyota");
// array_splice($cars, 1);
// unset($cars[1], $cars[2]);


// array_pop($cars);
// array_pop($cars);


// print_r($cars);

// foreach ($cars as $key => $value) {
//     echo $key .":" .  $value . "<br>";
// }



$cars = ["name" => "Volvo", "model" => 2020, "price" => "20 Lakhs"]; 






exit();
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