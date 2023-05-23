<?php

/*
Saisir une valeur entière et afficher son double si cette
valeur donnée est infèrieure à un seuil donné.
seuil = 20

*/
$a = (int) readline('veuillez saisir une valeur entiere : ');
const SEUIL = 20;

if ( $a < SEUIL ){
    echo $a*2;
}
else{
    echo 'la valeur depasse le seuil';
}