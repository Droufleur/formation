<?php

$a = (int) readline('saisir une premiere valeur entiere : ');
$b = (int) readline('saisir une deuxieme valeur entiere : ');

if($a<0 && $b<0){
    echo 'valeur positive' . PHP_EOL;
}elseif($a>0 && $b>0){
    echo 'valeur positive' . PHP_EOL;
}else{
    echo 'valeur negative' . PHP_EOL;
}


// si a plus grands et  b plus grands c'est bon si 

if (($a>0 && $b<0)||($a<0 && $b>0)){
    echo 'valeur negative';
}else{
    echo 'valeur positive';
}