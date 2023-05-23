<?php

$note = null;
$somme = null;
$iteration = null;
while ($note != -1){
    $note = (int) readline('donnner la note : ');
    if ($note !=-1){
        $somme = $somme + $note;
        $iteration = $iteration + 1 ;
    }
}
echo 'somme des notes : ' . $somme . PHP_EOL . 'nombre de note : ' . $iteration;
