<?php

    function nameFunction($argument1, $argument2, /*etc...*/){
        // instruction

    }

    function nameFunction2($parametre1, $parametre2, /*etc...*/){
        // instruction
        
    }


    // function sayHello($name){
    //     echo "bonjour $name \n";
    //     $name = 'sony';
    //     echo "bonjour $name\n";
    // }
    
    
    // $name = 'adrien';
    
    // sayHello($name); 

    function majorite($age){
        if($age >= 18){
            echo 'tu es majeur';
        }else{
            echo 'tu travail dans les mines';
        }
    }

    $age = readline('entrez votre age : ');
    majorite($age);
    