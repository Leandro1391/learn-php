<?php

 
/* Variables are data values that can change when the user is asked a question, for example, their age. Variables may change during program execution.

A variable is a memory location. It has a name that is associated with that location. The memory location is used to hold data. The key difference when comparing a constant to a variable is that the value associated with a variable name may change during program execution. For example 'highScore' would need to be variable to change throughout a game. */

$myFirstVariable = 'Hello world in variable';
$number = 45;
$boolean = true;

$number = 77;

echo $myFirstVariable;

echo '<h1>'.$myFirstVariable.'</h1>';
echo '<p>number is: '. $number.'<br>';

$number = 120;

echo $number;