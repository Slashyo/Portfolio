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
<h3>MES TUTORIELS</h3>

<div class="container boite1">
		<h4>SQL: phpMyAdmin comment créer une base de données, créer des tables et des champs de différents type</h4>
		<p class="hidden">Tout d'abord, assurez-vous que WAMP est installé et que vous avez accès à phpMyAdmin en ouvrant votre navigateur et en saisissant "localhost/phpmyadmin" dans la barre d'adresse. Si vous ne pouvez pas accéder à phpMyAdmin, vous devrez peut-être vérifier les paramètres de votre pare-feu ou redémarrer WAMP.
</br></br><a href="https://www.wampserver.com/#wampserver-64-bits-php-5-6-25-php-7" target="blank">Liens de téléchargement de WAMP</a>
        </br></br>Dans la fenêtre d'accueil de phpMyAdmin, cliquez sur "Nouvelle base de données" pour créer une nouvelle base de données. Donnez un nom à votre base de données dans le champ "Nom de la base de données" et sélectionnez le jeu de caractères et le classement de votre choix. Ensuite, cliquez sur "Créer" pour créer la base de données.</br></br>Une fois que votre base de données est créée, vous pouvez créer des tables en cliquant sur le nom de la base de données dans le menu de gauche, puis en cliquant sur "Nouvelle table". Donnez un nom à votre table dans le champ "Nom de la table" et spécifiez le nombre de champs que vous souhaitez ajouter à la table.</br></br>Dans la section "Champs" de la page de création de table, vous pouvez spécifier les différents types de champs que vous souhaitez ajouter à votre table. Par exemple, pour ajouter un champ de type texte, sélectionnez "VARCHAR" dans la liste déroulante "Type" et entrez le nombre maximum de caractères autorisé dans le champ "Longueur/Valeurs".</br></br>Vous pouvez également ajouter d'autres types de champs, tels que des champs de type entier, flottant, date, heure, etc. en sélectionnant le type approprié dans la liste déroulante "Type" et en spécifiant les paramètres supplémentaires requis, tels que la longueur, les valeurs par défaut, les commentaires, etc.</br></br>Une fois que vous avez ajouté tous les champs que vous souhaitez à votre table, cliquez sur "Enregistrer" pour enregistrer la table. Vous pouvez maintenant commencer à ajouter des données à votre table en cliquant sur le nom de la table dans le menu de gauche, puis en cliquant sur l'onglet "Insérer" pour ajouter une nouvelle ligne de données à la table.</br></br>Enfin, vous pouvez également modifier la structure de votre table en cliquant sur le nom de la table dans le menu de gauche, puis en cliquant sur l'onglet "Structure". Ici, vous pouvez ajouter ou supprimer des champs, modifier les types de champs existants, modifier les paramètres de champ, etc.</br></br></p>
	</div>
    <div class="container boite2">
		<p>Cliquez pour voir plus de texte</p>
		<p class="hidden">Voici le texte supplémentaire qui s'affiche lorsque vous cliquez sur la boîte. Vous pouvez ajouter autant de texte que vous le souhaitez ici.</p>
	</div>
    <div class="container boite3">
        <p>Cliquez pour voir plus de texte</p>
        <p class="hidden">Voici le texte supplémentaire de la troisième boîte qui s'affiche lorsque vous cliquez sur la boîte. Vous pouvez ajouter autant de texte que vous le souhaitez ici.</p>
    </div>
    <div class="container boite4">
        <p>Cliquez pour voir plus de texte</p>
        <p class="hidden">Voici le texte supplémentaire de la quatrième boîte qui s'affiche lorsque vous cliquez sur la boîte. Vous pouvez ajouter autant de texte que vous le souhaitez ici.</p>
    </div>
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>