<?php



$chaine = (string) readline('donner moi une phrase :');
function invChaine($chaine){
    $chaine = preg_split('/ /', $chaine, -1, PREG_SPLIT_NO_EMPTY);
    $i = count($chaine);
    for($i-- ; $i >= 0 ; $i-- ){
        $invChaine[]=$chaine[$i];
    }
    print_r($invChaine);
}

