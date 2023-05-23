<?php


$lettre = '';
$tab = array();
$i = 0;
while($i < 26){
   $tab[$i] = $lettre;
   $i++;
   $lettre++;
}

print_r($tab);