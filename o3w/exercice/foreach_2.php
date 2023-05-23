 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
 </head>
 <body>
 
 <div class="container"></div>
 
 
 


 
 
 
 <?php
 for($i = 0 ; $i < 20 ; $i++){
    $nombre = rand(-100,100);
    $nombres [] = $nombre;
    if($nombre >= 0){
        $positif [] = $nombre;
    }else{
        $negatif [] = $nombre;
    }
}
?>
<table>

    <?php
    print_r($nombres);
    // echo 'nombre positif ' . PHP_EOL;
    // foreach($positif as $value){
    //     echo $value . " ";
    // }
    
    //  $vehicules = [
        
    //      'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
    //      'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']
        
    //      ];
        
    //  foreach($vehicules as $typesVehicules => $listesDeMarques){
    //      echo "le types de vehicule est : $typesVehicules \n";
    //      foreach($listesDeMarques as $marque){
    //          echo "- $marque \n";
    //      }
    //  }
    ?>

</table>
<table>
    <tr>
        <?php
        echo 'nombre positif ' . PHP_EOL;
        foreach($positif as $value){
            echo "<td>$value<td>";
        }
        ?>
    </tr>
 </table>
<table>
    <tr>
        <?php
        echo PHP_EOL .'nombre negatif ' . PHP_EOL;
        foreach($negatif as $value){
            echo "<td>$value<td>";
        }
        ?>
    </tr>
 </table>
    
 </body>
 </html>
 
 
