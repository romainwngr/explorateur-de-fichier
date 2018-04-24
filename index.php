<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
<?php
        //Nom du dossier à scanner
        $dossier = (empty($_GET['dossier'])) ? '.' : $_GET['dossier'];
        //scandir — Liste les fichiers et dossiers dans un tableau
        $tableau = scandir($dossier);
        //On boucle
        foreach($tableau as $valeur)
        {
            echo '<a href="'. $valeur .'">'. $valeur .'</a><br/>';
        }    
?>


    <script src="js/script.js"></script>
</body>
</html>