<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tuto.css">
    <script src="js/script.js" defer></script>
    <title>Tutoriels</title>
</head>
<body>
<div id="gridmenu">
    <?php
include 'include/menuDarkMode.php';
    ?>
<h3 id="mes">MES TUTORIELS</h3>
<div class="card" id="card">
        <img src="img/sql.png" alt="Image 1" />
        <div class="card-info">
          <h2>SQL: phpMyAdmin comment créer une base de données, créer des tables et des champs de différents type</h2>
          
          <a href="#" class="more-info">Plus d'informations</a>
          <div class="extra-info">
            <p>Tout d'abord, assurez-vous que WAMP est installé et que vous l'avez bien lancé.</p><a id="wamp" href="https://www.wampserver.com/" target="_blank" >Lien de téléchargement de WAMP</a><p>Une icone verte à du apparaître dans votre barre multi-tache windows</p> <img src="img/multitache.png" alt=""> <p>Faites un clique gauche dessus et ouvrez PhpMyAdmin dans sa version la plus récente</p> <img src="img/Wamp.png" alt=""><p>Vous pouvez maintenant vous connecter, l'identifiant par défaut pour travailler en local est "root" sans mot de passe. <br> (Le choix du serveur n'a pas d'importance)</p><img src="img/myAdmin.png" alt=""><p>Une fois connecté, on va pouvoir maintenant créer une base de donnée en cliquant sur 'Nouvelle base de donnée' dans la fenêtre de phpMyAdmin</p><img src="img/fenetre.png" alt=""><p>Donnez un nom a votre base de données, choisisez le jeu de caractère et le classement de votre choix. Je vous conseil d'utiliser 'utf8mb4_general_ci' en Europe</p><img src="img/utf8.png" alt=""><p>Maintenant que votre nouvelle base de donnée est créer vous devez y ajouter une ou plusieurs tables. <br> Pour créer une table cliquez sur le nom de votre nouvelle DB choisisez un nom à votre table et le nombres de champs que vous avez besoin et appuyez sur 'executer'</p><img src="img/table.png" alt=""><p>Vous allez pouvoir donner des noms à tes 'colonnes' et leurs donner un type, une taille, une valeur par défaut, un interclassemement spécifique, définir si il est 'nul' ou non, choisir un index par défaut, et choisir si il s'auto incrémente ou non <br> (Exemple de remplissage table "contact")</p><img src="img/rempli.png" alt=""><p>Et pour terminer ! Cliquez sur enregistré. <br><br> Vous savez maintenant comment créer une base de données, créer des tables et des champs de différents type </p>
          </div>
        </div>
      </div>
      <h3 id="com">TUTORIELS COMMENTÉ</h3>
<div class="card" id="card1">
        <img src="img/burger.jpg" alt="Image 2" />
        <div class="card-info">
          <h2>HTML/CSS/JS: Menu burger responsive pour débutant</h2>
          <!-- <p class="centre">Description de la carte 2</p> !-->
          <a href="#" class="more-info">Plus d'informations</a>
          <div class="extra-info">
          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/bUzXug3ep94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p>Cette vidéo montre comment créer un menu de navigation responsive simple à l'aide de HTML, CSS et JavaScript.<br><br> Le menu est conçu pour être facilement compréhensible par les débutants et est adapté aux appareils mobiles et aux écrans de bureau.<br><br> Le tutoriel utilise des techniques telles que Flexbox et les positions CSS pour la mise en page et JavaScript pour ajouter des fonctionnalités interactives telles que l'ouverture et la fermeture du menu en cliquant sur un bouton.<br><br> Le tutoriel est destiné à ceux qui cherchent à apprendre les bases du développement front-end et de la conception de sites web.</p>
          </div>
        </div>
      </div>   
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>