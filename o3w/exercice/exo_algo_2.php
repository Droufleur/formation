<?php


const MAX = 20;
const MIN = 10;


    do{
        $a = (int) readline('donne une valeur chacal : ');
        
        // echo $a <= MIN ? 'Plus grands nigaud !' . PHP_EOL : ( $a >= MAX ? 'Plus petit ignare !' . PHP_EOL :  'win') ;
        if($a<= MIN){
            echo "Plus grands nigaud !" . PHP_EOL;
        }elseif($a>= MAX){
            echo "Plus petit ignare !" . PHP_EOL;
        }else{
            echo 'win';
        }
    }while(($a<=MIN) || ($a>=MAX));
    
?>