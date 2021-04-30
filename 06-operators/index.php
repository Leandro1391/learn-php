<?php

    # Arithmetics Operators
    $number1 = 55;
    $number2 = 50;

    echo 'Sum: ' . ($number1+$number2).'<br/>';
    echo 'Minus: ' . ($number1-$number2).'<br/>';
    echo 'Product: ' . ($number1*$number2).'<br/>';
    echo 'Division: ' . ($number1/$number2).'<br/>';
    echo 'Rest or Module: ' . ($number1%$number2).'<br/><br/>';

    # Operators increment and decrement
    $year = 2021;
    
    // Pre-Increment
    echo ++$year . ' Pre-increment <br/>';
    
    // Post-increment

    echo $year++ . ' Post-increment <br/>';
    echo 'Must be 2023: '.$year.'<br/>';
    
    // $year = $year + 1;
    $year += + 1;
    
    echo 'Increment <br/>';
    
    echo "<h1>$year</h1>";
    
    
    // Pre-Decrement
    echo --$year . ' Pre-decrement <br/>';
    
    // Post-decrement
    echo $year-- . ' Post-decrement <br/>';
    echo 'Must be 2022 '.$year.'<br/>';
    
    //$year = $year + 1;
    $year += - 1;
    
    echo 'Decrement';
    echo "<h1>$year</h1>";

    #Asignation

    $age = 45;
    echo $age.'<br/>';

    echo 'Sum <br/>';
    echo ($age+=5).'<br/>';
    var_dump($age);
    echo '<br/>';
    
    echo 'Minus <br/>';
    echo ($age-=15).'<br/>';
    var_dump($age);
    echo '<br/>';
    
    echo 'Product <br/>';
    echo ($age*=5).'<br/>';
    var_dump($age);
    echo '<br/>';
    
    echo 'Division <br/>';
    echo ($age/=5).'<br/>';
    var_dump($age);
    echo '<br/>';
?>