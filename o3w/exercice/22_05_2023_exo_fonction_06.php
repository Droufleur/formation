<?php

// prendre les photos pour simuler laffichage du livre sur une autre page avec un url de fichier html



function filtered($author,$books){
    
    foreach($books as $book){
        
        if($book['author'] === $author){
            
            $bookAuthor[] = $book;
            
        }elseif($book['releaseYear']){
            
        }
        
    }
    return $bookAuthor;
}

// print_r($bookAuthor);
// print_r($books);
$author = (string) readline('veulliez saisir l\'auteur voulue : ' );
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/23_05_2023_exo_fonction_06/style.css">
    <title>Document</title>
</head>


<body>

    <form action="22_05_2023_exo_fonction_06.php" method="post">
        recherche  :  <input type="text" name="author" />
        <input type="submit" name="submit" value="Envoie!" />
    </form>
    
    <?php  
    include 'books_Tabl.php';
    echo $_POST['author'];
    $author = $_POST['author'];
    $bookAuthor = filtered($author,$books);
    print_r($bookAuthor); 
    ?>
    
    





</body>
</html>