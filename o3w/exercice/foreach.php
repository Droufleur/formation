<?php
//              exo 0

// $vehicules = [

//     'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
//     'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']

//     ];

// foreach($vehicules as $typesVehicules => $listesDeMarques){
//     echo "le types de vehicule est : $typesVehicules \n";
//     foreach($listesDeMarques as $marque){
//         echo "- $marque \n";
//     }
// }

//              exo 1


// $note = null;

// for($i = 0 ; $note != -1 ; $i++){
//     $note = (int) readline('rentrez une note : ');
//     $notes [$i] = $note;
//     $retenue = $i;
// }
// unset($notes[$retenue]);
// foreach($notes as $valeur){
//     echo "- $valeur\n";
// }

//              exo 1 bis

// $note = null;
// $somme = null;
// for($i = 0 ; $note != -1 ; $i++){
//     $note = (int) readline('rentrez une note : ');
//     $notes [$i] = $note;
//     $retenue = $i;
// }
// unset($notes[$retenue]);

// foreach($notes as $valeur){
//     echo "- $valeur\n";
//     $somme += $valeur;
// }
// $moyenne = $somme / ($retenue);
// echo " la somme des notes donne : $somme \n" . "Aussi la moyenne est egale a : $moyenne \n";

//              exo 2

$positif = null;
$negatif = null;

for($i = 0 ; $i < 20 ; $i++){
    $nombre = rand(-100,100);
    $nombres [] = $nombre;
    if($nombre >= 0){
        $positif [] = $nombre;
    }else{
        $negatif [] = $nombre;
    }
}

print_r($nombres);
echo 'nombre positif ' . PHP_EOL;
foreach($positif as $value){
    echo $value . " ";
}
echo PHP_EOL .'nombre negatif ' . PHP_EOL;
foreach($negatif as $value){
    echo $value . " ";
}
