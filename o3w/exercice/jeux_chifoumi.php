<?php
echo '1 : cisaux  ' . '2 : feuille  ' . '3 : pierre  '. PHP_EOL;
$wu = 0;
$wo = 0;
$nul = 0;
do{
    $user = (int) readline('selection :');
    $ordi = random_int(1,3);
    switch ($user){
        case $user === $ordi:
            echo 'match nul' . PHP_EOL;
            $nul = $nul + 1;
        break;
        case $user === 1 && $ordi === 2:
            echo 'user win' . PHP_EOL;
            $wu = $wu + 1;
        break;
        case $user === 2 && $ordi === 1:
            echo 'ordi win' . PHP_EOL;
            $wo = $wo + 1;
        break;
        case $user === 1 && $ordi === 3:
            echo 'ordi win' . PHP_EOL;
            $wo = $wo + 1;
        break;
        case $user === 3 && $ordi === 1:
            echo 'user win' . PHP_EOL;
            $wu = $wu + 1;
        break;
        case $user === 2 && $ordi === 3:
            echo 'user win' . PHP_EOL;
            $wu = $wu + 1;
        break;
        case $user === 3 && $ordi === 2:
            echo 'ordi win' . PHP_EOL;
            $wo = $wo + 1;
        break;
    }
    
}while($user != -1);
echo 'user : ' . $wu . ' ordi : ' . $wo . ' nul : ' . $nul;


