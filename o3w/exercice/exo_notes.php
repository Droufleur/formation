<?php

$notes = [12 , 8 , 9 , 13 , 15 , 11 ];


const MENTPAS = 10;

const ASSBIE = 12;

foreach($notes as $note){

    if ($note >= ASSBIE){
        
        echo 'Recu avec mention Assez bien '. $note . PHP_EOL;
        
    }elseif ($note>MENTPAS && $note<ASSBIE) {

        echo 'Recu avec mention Passable ' . $note . PHP_EOL;
        
    }else{
        
        echo 'Insufisant ' . $note . PHP_EOL;
        
    }
}
