<?php
// include('advance.php');

// echo readfile('myInfo.txt');
// echo "<br>";
// echo file_get_contents('myInfo.txt');


$file = fopen('myInfo.txt', "a") or die("Can't open file");

echo fread($file,filesize("myInfo.txt"));

// echo $file;
