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

 //Logical Operators
 && AND Y
 || OR O
 ! NOT NO
 and, or
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

//SWITCH
$day = 4;

echo "</br>";

switch ($day) {
    case 1:
        echo "MONDAY";
        break;
    case 2:
        echo "TUESDAY";
        break;
    case 3:
        echo "WEDNESDAY";
        break;
    case 4:
        echo "THURSDAY";
        break;
    case 5:
        echo "FRIDAY";
        break;
    case 6:
        echo "SATURDAY";
        break;
    case 7:
        echo "SUNDAY";
        break;
    default:
        echo "not match";
}

//Example 5

echo "<br>";
echo "<hr>";

//Logical Operators

$age1 = 18;
$age2 = 64;
$ageOficial = 20;

if ($ageOficial >= $edad1 && $edadOfitial <= $edad2) {
    echo "This is the age for work";
} else {
    echo "He dosen't work";
}

echo "<br>";
echo "<hr>";

$country = "Mexico";
if($country == "Mexico" || $country == "Span" || $country = "Colombia"){
    echo "In this country speak spanish";
} else {
    echo "Not speak spanish";
}

//GO TO salta de una linea de la ejecucion a la que yo especifico en el codigo
//No se recomienda usarlo

echo "<br>";

goto mark;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
echo "<h3>Instruccion 5</h3>";

mark:
echo "I have been jump to five echos";
?>