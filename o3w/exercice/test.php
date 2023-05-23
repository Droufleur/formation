<?php

// echo 'hello world';

// $title = "l'Histoire";
// $subTitle = 'de la vie';
// $postScriptum = 'est souffrance';
// $comptage = 1;
// $tour = 0;

// declare variable avec $ suivi du nom de variable
// echo $title . ' ' . $subTitle . ' ' . '(' . $postScriptum . ')' ;

// PHP_EOL = saut de ligne

// while ( $comptage > 4 ) {
//     $comptage = $comptage + 1;
//     $tour = $tour + 1;
// }
// echo 'won ';
// echo $tour . ' ';
// echo $comptage;


// $arr = array(1, 2, 3, 4);
// foreach ($arr as &$value) {
//     $value = $value * 2;
// }
// $arr est maintenant array(2, 4, 6, 8)

// sans un unset($value), $value est toujours une référence au dernier élément: $arr[3]

// foreach ($arr as $key => $value) {
//     // $arr[3] sera mis à jour avec chaque valeur de $arr...
//     echo "{$key} => {$value} ";
//     print_r($arr);
// }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="test.php" method="post">
        Nom  :  <input type="text" name="username" /><br />
        Email: <input type="text" name="email" /><br />
        <input type="submit" name="submit" value="Envoie!" />
    </form>

    <?php
        echo $_POST['username'];
        print_r($_POST)
        // echo $_REQUEST['username'];
    ?>

</body>
</html>
















