
<?php
// selectionner 4 film creer un tableau avec nom du film plus année
// 2 avant 2000 et 2 apres
// afficher les film d’apres 2000 



$films = [
    [
    'titre' =>'Frère des ours',
    'annee' =>2003,
    ],
    [
    'titre' =>'Matrix',
    'annee' =>1999,
    ],
    [
    'titre' =>'La Soupe aux choux',
    'annee' =>1981,
    ],
    [
    'titre' =>'Django Unchained',
    'annee' => 2012
    ],

];

function triFilms($films){
   
    $tri = (string) readline('demander avant ou apres 2000 :');

    if($tri === 'avant'){
        echo "films avant 2000 \n";
        foreach($films as $film){
            if($film['annee'] < 2000){
                echo '  - ' . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
            }
        }
    }
    if($tri === 'apres'){
        echo "films apres 2000 \n";
        foreach($films as $film){
            if($film['annee'] > 2000){
                echo '  - ' . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
            }
        }
        
    }
    
    
    
    foreach($films as $film){
        if($film['annee'] > 2000){
            $annee2000[]= $film;
            // echo "films apres 2000 \n" . '  -' . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
        }else{
            $annee1900[]= $film;
            // echo "films avant 2000 \n" . '  -' . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
        }
    }

    echo PHP_EOL . "films apres 2000 \n";
    foreach($annee2000 as $film){
        echo "- " . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
    }
    echo "films avant 2000 \n";
    foreach($annee1900 as $film){
        echo "- " . $film['titre'] . '(' . $film['annee'] . ')' . PHP_EOL;
    }

}
triFilms($films);



