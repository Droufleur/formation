<?php

/*      tableau indexe      */
$notes = [12 , 11 , 11 , 12 , 15 , 14 ];

// $_notes = array(20,18,16,19); ancienne version pour decla tableau

// echo $notes[ 5 ];
// 5 est l'index de la valeur dans le tableau
$studen = ['Dhéya' , 'Kardache' , [ 14 , 16 , 18 , ['adrien' , 'arturo' , [ 5, 6 , 8 , 12 , 687 , [ 'salut' , 'toi' , 'coquin']]]]];

// echo $student [2][3][2][5][2];

/*      tableau associatif       */
// clef = prenom
$student = [
    'prenom' => 'Dhéya',
    'nom' => 'Kardache',
    'note' => [16,13,18]
];
// echo $student['note'][2];

$students = [

    [
    'prenom' => 'Dhéya',
    'nom' => 'Kardache',
    'note' => [16,13,18]
    ],
    [
        'prenom' => 'Arturo',
        'nom' => 'Collado',
        'note' => [17,19,20]
    ],
    [
        'prenom' => 'Rayan',
        'nom' => 'Moro',
        'note' => [1,9,2]
    ]
];
// echo $students[2]['nom'];
print_r($students[2][nom]);