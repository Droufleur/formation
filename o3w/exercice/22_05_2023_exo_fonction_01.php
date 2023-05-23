<?php

    $nombre = readline("donner moi un nombre :");
    
    function valeurAbsolu($nombre){
    
        if($nombre<0){
    
            $nombre *= -1;
    
        }
        echo "voici la valeur absolu de votre nombre " . $nombre;

    }

    valeurAbsolu($nombre);
