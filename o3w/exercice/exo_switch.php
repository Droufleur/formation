<?php

echo '1 : Monsieur ' . PHP_EOL . '2 : Madame ' . PHP_EOL . '3 : Mademoiselle ' . PHP_EOL . '4 : Autre' . PHP_EOL;
$gcivilite = readline(' entre votre civilité : ');
switch($civilite){

    case 1:
        echo 'Bonjour Monsieur';
    break;

    case 2:
        echo 'Bonjour Madame';
    break;

    case 3:
        echo 'Bonjour Mademoiselle';
    break;

    case 4:
        echo 'Bonjour inconnu(e)';
    break;
}