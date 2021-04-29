<?php

    //Constants
    //They are variables can't never change the value in the execution program (define)

    define('name', 'Leandro');
    define('web', 'leandroweb.ar');

    //error because name is a constant variable
    // name = "hola";
    
    echo '<h1>'.name.'</h1>';
    echo '<h1>'.web.'</h1>';
    
    $web = "leandroweb.ar";
    $web = "leandroweb.arroba.jp";
    echo '<h1>'.$web.'</h1>';

    //predifined constante

    echo PHP_OS;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    echo PHP_EXTENSION_DIR;
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';

    function helloWorld(){
        echo __FUNCTION__;
    }

    helloWorld();

    // CLASS METHOD NAMESPACE

?>