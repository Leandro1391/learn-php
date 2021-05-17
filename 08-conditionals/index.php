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

//No es muy recomendable realizar tantos if
if ($age >= MAYORAGE) {

    echo "<h1>$name es mayor de edad</h1>";

    if($continent == "Europe") {
        echo "<h2>Y es de $city</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h2>$name NO es mayor de edad</h2>";
}

echo "<br>";
echo "<hr>";

// Example 4
$day = 3;

//Se también se puede aplicar swithc

if ($day == 1) {
    echo "Es Lunes";
} else if($day == 2) {
    echo "Es Martes";
} else if ($day == 3){
    echo "Es Miercoles";
} else if ($day == 4){
    echo "Es Jueves";
} else if ($day == 5){
    echo "Es Viernes";
} else if ($day == 6){
    echo "Es Sabado";
} else if ($day == 7){
    echo "Es Domingo";
}




?>