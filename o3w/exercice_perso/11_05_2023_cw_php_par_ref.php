<?php

$n = 2;
function double(&$n){
 $n *= 2;
}
double($n);
echo $n . PHP_EOL;

function halve(&$n){
    $n /= 2;
}
halve($n);

echo $n . PHP_EOL;

$x = 2;
$n = 2;

function enlarges(&$x, $n = 4){
    
    return $x = $x * $n;

}
enlarges($x,$n) .PHP_EOL;
echo $x . PHP_EOL;