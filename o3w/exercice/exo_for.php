<?php

$nb_itera = (int) readline('combien de facture tu vas saisir nigaud : ');
$factures = 0;

for ( $i = 0 ; $i < $nb_itera ; $i++ ) {

    $facture = (int) readline('facture : ');
    $factures += $facture;

}
echo $factures;