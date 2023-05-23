<?php


$chaine = ['je suis un noob'];
function consonne($chaine){
    $voyelle = ['a','e','i','o','u'];
    $chaine = str_replace($voyelle , "", $chaine);
    return $chaine;
}
$chaine = consonne($chaine);
print_r($chaine);