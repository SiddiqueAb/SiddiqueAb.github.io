<?php
// class Car
// {
//     public $name = "BMW";
//     public $color;
//     function __construct($name, $favColor)
//     {
//         $this->name = $name;
//         $this->color = $favColor;
//     }
//     function __destruct()
//     {
//         echo "Destructor called";
//     }
// }
// $myObject = new Car("Moushumi", "Red");
// $tomaObject = new Car("Toma", "Green");

// var_dump($myObject instanceof Car);
// echo $myObject->changeValue();
// echo $myObject->name;
// echo "<br>";
// echo $myObject->color;
// echo "<br>";

// echo $myObject->name;
// echo "<br>";
// $myObject->changeValue("VOLVO");
// echo $myObject->name;



// final class Mobile
// {
//     public $brand = "Apple";
//     public $model = "iPhone 16 Plus";
//     protected $price = 999;
//     public function showModel(){
//         echo $this->price;
//     }
// }
// class Laptop extends Mobile
// {
//     public $brandLaptop = "WALTON";

//     public function showPrice(){
//         echo $this->price;
//     }
// }

// $tonuLaptop = new Laptop();

// echo $tonuLaptop->brand;


// class Learning
// {
//     // const COUNTRY_NAME = "BANGLADESH";
//     function showCountry() {
//         // echo "hi";
//     //   echo  self::COUNTRY_NAME;
//     }
// }
// $country = new Learning();
// $country->showCountry();
// echo Learning::COUNTRY_NAME;


abstract class Mobile
{
    public $brand;

    function __construct($brandName)
    {
        $this->brand = $brandName;
    }
    abstract  public function showBrand();
}

class Samsung extends Mobile
{
    public function showBrand()
    {
        return $this->brand;
    }
}

$mobileName = new Samsung("Samsung");
echo $mobileName->showBrand();
