<?php

//Simple Arrays
$firstArr = array();

$secondArr = array(11, 16, 4, 9, 12);

echo $secondArr[3];

$secondArr[4] = 20;

$fruitsArr = array('Apple', 'Banana', 'Coconut');


//Associative Arrays
$assocArr = array(
    'Peter' => 11,
    'Jane' => 16,
    'Paul' => 12
);

echo $assocArr['Paul'];


//Simple Multidimensional Arrays
$simpleMDArr = array(
    array(1, 2, 1, 4, 5),
    array(0, 5, 1, 3, 4),
    array(4, 1, 7, 8, 9)
);

//Multidimensional Associative Arrays
$assocMDArr = array(
    "first array"   => array(1, 2, 5, 1, 3),
    "second array"  => array(3, 5, 1, 8, 9),
    "third array"   => array(1, 0, 9, 4, 7)
);

echo "<br/>" . $assocMDArr["first array"][2];

$anotherAssocMDArr = array(
    "first player"  => array("name" => 'John', "age" => 25),
    "second player" => array("name" => 'Tim', "age" => 35)
);

echo "<br>" . $anotherAssocMDArr["first player"]["name"] . "<br>";


//Displaying Contents of an array
$myArray = array(2, 5.1, 'PHP', 105);
var_dump($myArray);
echo "<br>";

var_dump($assocMDArr);
echo "<br>";

print_r($myArray);
echo "<br>";

//Adding Elements to Arrays
$addDemo = array(1, 5, 3, 9);
$addDemo[] = 7;

print_r($addDemo);
echo "<br>";


//Deleting Elements from Arrays
$colors = array("red", "black", "pink", "white");
array_splice(
    $colors,
    2
);

print_r($colors);
echo "<br>";



$awardwinners = array(
    "Gold"      => "Max",
    "Silver"    => "Boots",
    "Brone"     => "Dora"
);

array_splice(
    $awardwinners,
    1
);

print_r($awardwinners);
echo "<br>";

$pets = array(
    "corgi",
    "poodle",
    "golden retriever",
    "jack russell"
);

array_splice(
    $pets,
    1,    2
);
echo "<br>";

print_r($pets);
echo "<br>";

print_r($pets[1]);
echo "<br>";


//Count Function

$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo);
echo "<br>";

//Array Search
$indexArrDemo = array( 11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A' => 12, 'B' => 5, 'C' => 20);
echo array_search(5, $indexArrDemo).'<br>';
echo array_search(20, $assocArrDemo).'<br>';
var_dump(array_search(
    'B', $assocArrDemo
));
echo "<br>";

var_dump(in_array(5,$indexArrDemo));
echo "<br>";

var_dump(in_array(20,$assocArrDemo));
echo "<br>";

var_dump(in_array('B',$assocArrDemo));
echo "<br>";

var_dump(in_array(5,$indexArrDemo));
echo "<br>";

//Merge Arrays
$num1   = array(100, 111, 120);
$num2   = array(100,3,5);
$num3   = array(1, 10);

$newArray1 = array_merge($num1, $num2, $num3);
var_dump ($newArray1);
echo "<br>";

//Merging Associative Arrays
$names1 = array(5 => "Peter", 24 => "Aaron");
$names2 = array(5 => "Zac", 4 => "Alfred", 7 => "Avi");
$newArray2 = array_merge($names1, $names2);
var_dump($newArray2);
echo "<br>";

$str1 = array('A' => 12, 'B' => 5, 'C' => 8);
$str2 = array('A' => 15, 'D' => 10);
$newArray3 = array_merge($str1, $str2);
var_dump($newArray3);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

