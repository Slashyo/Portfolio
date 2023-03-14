<?php

# Essai de connexion
try{
    # connexion mysqli
    $dbconnect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    # charset
    mysqli_set_charset($dbconnect,DB_CHARSET);

# capture l'erreur
}catch(Exception $e){

    # arrêter le script et afficher l'erreur
    exit(utf8_encode($e->getMessage()));

}

// POUR LES LIENS 

// requête en variable texte contenant du MySQL
$sqlLien = "SELECT `titre`, `description`, `image_url`, `url` FROM `travaux` ORDER BY `id` ASC; ";

// exécution de la requête avec un try / catch
try {
    $queryLien = mysqli_query($dbconnect, $sqlLien);
}catch(Exception $e){
    # arrêter le script et afficher l'erreur (de type SQL)
    exit(utf8_encode($e->getMessage()));
}


# on convertit les liens récupérés en tableaux associatifs intégrés dans un tableau indexé
$afficheTravaux = mysqli_fetch_all($queryLien,MYSQLI_ASSOC);

// var_dump($afficheLien);

# on efface les données récupérées pas un SELECT (bonnes pratiques)
mysqli_free_result($queryLien);

# fermeture de connexion  (bonnes pratiques)
mysqli_close($dbconnect);