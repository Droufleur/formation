<?php

$chaine = (string) readline('donner moi une chaine de caractere :');
function compteVoyelle($chaine){

    $chaine = preg_split('//', $chaine, -1, PREG_SPLIT_NO_EMPTY);
    $voyA = null;
    $voyE = null;
    $voyI = null;
    $voyO = null;
    $voyU = null;
    foreach($chaine as $lettre){
        
        switch($lettre){

            case $lettre === 'a' || $lettre === 'A':
                $voyA++;
                break;

            case $lettre === 'e' || $lettre === 'E':
                $voyE++;
                break;

            case $lettre === 'i' || $lettre === 'I':
                $voyI++;
                break;

            case $lettre === 'o' || $lettre === 'O':
                $voyO++;
                break;

            case $lettre === 'u' || $lettre === 'U':
                $voyU++;
                break;

        }
    
    }
    $voy = $voyA + $voyE + $voyI + $voyO + $voyU;
    $chaine = ["nombre de voyelles" , $voy ,"nombre de a " , $voyA ,"nombre de e " , $voyE ,"nombre de i " , $voyI ,"nombre de o ", $voyO ,"nombre de u " , $voyU];
    return $chaine;

}

print_r(compteVoyelle($chaine));