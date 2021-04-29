<?php
    /* 
    Data Types 
    Entero (int/integer) = natural numbers
    Type Float (float / double) = rational numbers
    Cadenas (string) = "Hello i am a string"
    Boolean (bool) = true or false
    null = object without reference instance
    Array (Coleccion de datos)
    Objects

    * PHP is soft type, 
    */

    //never start a variable with number, not insert '-', keyword, special characters

    $number = 100;
    // $decimal = 27,9; error
    $decimal = 27.9;
    $text = "I am a text";
    $boolean = true;
    $referenceObject = null;


    echo gettype($number) .' -> number: '. $number;
    echo "</br>";
    echo gettype($decimal).' -> decimal: '. $decimal;
    echo "</br>";
    echo gettype($text).' -> text: '. $text;
    echo "</br>";
    echo gettype($boolean).' -> boolean: '. $boolean;
    echo "</br>";
    echo gettype($referenceObject).' -> referenceObject: '. $referenceObject;
    
    echo "</br>";
    
    //Debug
    
    echo "<p>Debug</p>";
    $my_name = "Leandro Julian Iadanza";
    
    //inspector
    var_dump($my_name);
    
    echo "</br>";
    $myArray[] = "Leandro";
    $myArray[] = "Carlos";
    $myArray[] = "Esteban";

    var_dump($myArray);

    echo "<br>";
    $text = "I am a text in double quotes $number";
    echo $text;
    echo "<br>";
    $text = 'I am a text in single quotes '.$number;
    echo $text;

?>
