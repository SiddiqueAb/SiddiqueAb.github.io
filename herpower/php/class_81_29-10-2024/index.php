<?php
// interface User
// {
//     public function login();
//     public function logout();
// }


// interface Mobile
// {
//     public function welcome();
// }

// class UserClass implements User, Mobile
// {
//     public function login()
//     {
//         echo "login successful";
//     }
//     public function logout()
//     {
//         echo "logout successful";
//     }
//     public function welcome()
//     {
//         echo "Welcome to the application";
//     }
// }

// $newObject = new UserClass();
// echo $newObject->logout();
// echo $newObject->welcome();



// trait User {
//     // public $name = "Tonu";
//     public function showName(){
//         echo "Name: Tonu";
//     }
//     public function login() {
//         echo "Login successful";
//     }
//     public function logout() {
//         echo "Logout successful";
//     }
// }
// trait Mobile {
//     public $brand = "Samsung";
//     // public $name = "Mou";
//     public function showName(){
//         echo "Name: Mou";
//     }
//     public function welcome() {
//         echo "Welcome to the application";
//     }
// }
// class UserClass {
//     use User, Mobile;
//     // public $name = "Vasha";
//     public function displayInfo() {
//         echo "Name: ". $this->name. "<br>";
//         echo "Brand: ". $this->brand;
//     }
//     // public function showName(){
//     //     echo $this->showName();
//     // }
// }

// $newObj = new UserClass();

// echo $newObj->showName();


// class School {
//     // public static $name = 'School';
//     public static function displayInfo() {
//         echo "School Name: ABC High School";
//     }

// }

// class UserClass extends School{
//     public function hello(){
//         echo parent::displayInfo();
//     }
// }
// $namObj = new UserClass();
// // echo School::$name;
// $namObj->hello();
include "first.php";
include "second.php";


$newObj = new First();
echo $newObj->name;
