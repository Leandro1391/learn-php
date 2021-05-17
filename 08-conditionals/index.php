<?php

/*
 CONDITIONALS

 if(condition) {
     instructions
 }else {
    other instructions
 }

 COMPARISON OPERATORS
 
 == Equals
 === same type primitive or object
 != distinct
 <> different
 !== not Equal type
 < minor than
 > mayor than
 <= minor or equal than
 >= major or equal than
*/

//Example 3

// $color = "red";
$color = "green";

if ($color == "red") {
    echo "The color is red";
} else{
    echo "The color is not red";
}
echo "<br>";

//Example 2

$year = 2021;

if($year == 2021) {
    echo "We are in 2021";
} else{
    "We are not in 2021";
}

//Example 3
$name = "Pepe Farrel";
$city = "Madrid";
$continent = "Europe";
$age = 49;
const MAYORAGE = 18;

if ($edad >= MAYORAGE) {
    if($continent == "Europe") {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h2>$nombre NO es mayor de edad</h2>";
}


?>