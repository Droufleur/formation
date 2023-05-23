<?php

function alphabet($a){
    if($a === 'a' || $a === 'A'){
        $lettre = $a;
        $tab = array();
        $i = 0;
        while($i < 26){
        $tab[$i] = $lettre;
        $i++;
        $lettre++;
        }   
    }
    return $tab;
}
$alphabet_min = alphabet('a');
$alphabet_maj = alphabet('A');

$alphabet = ['maj'=> $alphabet_maj, 
    'min'=> $alphabet_min];

print_r($alphabet_min);
print_r($alphabet_maj);
print_r($alphabet);



//                  exo avec Thibault
/*
function random_password_v2(){
    $random_lower_case = (int)readline('Choisissez combien vous-voulez de caractères en minuscule : ');
    $random_upper_case = (int)readline('Choisissez combien vous-voulez de caractères en Majuscule : ');
    $random_numbers = (int)readline('Choisissez combien vous-voulez de caractères en chiffres : ');
    $nbr_symbols = (int)readline('Choisissez combien vous-voulez de symboles : ');

    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
    $random_symbols = NULL;

    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);

    $repeat=($nbr_symbols)/8;

    while ($repeat>0) {
        $random_symbols .= str_shuffle($symbols);
        $repeat--;
    }

    $random_password = substr($lower_case, 0, $random_lower_case);
    $random_password .= substr($upper_case, 0, $random_upper_case);
    $random_password .= substr($numbers, 0, $random_numbers);
    $random_password .= substr($random_symbols, 0, $nbr_symbols);

    return  str_shuffle($random_password);
}

echo 'votre mot de passe est : ' . random_password_v2() . PHP_EOL;
 */