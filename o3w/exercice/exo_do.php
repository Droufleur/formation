<?php

//                   do{
//                      instruction
//                   }while(expression);


//                   $i=1;
//                   do{
//                       echo $i;
//                       $i++;
//                   }while($i <=10);



// saisir des donnees et s'arreter dès que leur somme depasse 500

$somme = 0;
do{
    $i= (int) readline('saisir un nombre : ') . PHP_EOL;
    $somme += $i;
    echo $somme <= 500 ? $somme . PHP_EOL . 'rajoute plus' . PHP_EOL : ''; 
    // if($somme <= 500){
    //     echo $somme . PHP_EOL . 'rajoute plus' . PHP_EOL;
    // }
}while($somme <= 500);
echo 'win';