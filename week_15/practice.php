<?php
// class Iphone
// {
//     public function __call($method, $params)
//     {
//         echo "The method [$method] not accessale or not found";
//     }
// }
// $phone= new Iphone();
// $phone->sayhello();

// class Iphone
// {
//     public $name;
//     public $email;
//     public function __call($method, $params)
//     {
//         echo "The method [$method] not accessale or not found";
//     }
// }
// $phone= new Iphone();
// $phone2=clone $phone;
// $phone->name='loma';
// $phone2->name='sandy';

// echo $phone->name;
// echo $phone2->name;

// class Iphone
// {
//     public static $name='loma';
//     public $email;
//     public static function sayHello()
//     {
//         echo Iphone::$name; // it will be accessed that not $this->name
//         echo "Hello ";
//     }
// }
// Iphone::sayHello();
// echo Iphone::$name;

// class salma
// {
//     public function loma()
//     {
//         echo 'lomty ';
//         return $this;
//     }

//     public function nour()
//     {
//         echo 'nour ';
//         return $this;
//     }

//     public function sandy()
//     {
//         echo 'sandy ';
//         return $this;
//     }

//     public function eman()
//     {
//         echo 'eman ';
//         return $this;
//     }
// }
// $loma = new salma();
// $loma->loma()->nour()->sandy()->eman();

// trait MyFeature1{
//     public function feature()
//     {
//         echo 'feature1';
//     }
// }

// trait MyFeature2{
//     public function feature()
//     {
//         echo 'feature2';
//     }
// }

// class Iphone
// {
//     use MyFeature1,MyFeature2{
//         MyFeature1::feature as feature1;
//         MyFeature2::feature insteadof MyFeature1;
//     }
// }

spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
});

$var = new test();
print_r($var);