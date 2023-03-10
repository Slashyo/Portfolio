<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menuDarkMode.css">
    <script src="js/script.js" defer></script>
    <title>Mes Liens</title>
</head>
<body>
<div id="gridmenu">
    <?php
include 'include/menuDarkMode.php';
    ?>
<h3>MES LIENS</h3>
<?php
// Affichage des liens
foreach($afficheLien as $item):
?>
<div id="lienGlobal">
    <div id='titre'><h4><?=$item['titre']?></h4></div>

    <div id="description"><p><?=$item['description']?></p></div>

    <div id="imageLien">
    <a href="<?=$item['url']?>" target="_blank"><img src="<?=$item['image']?>" width="75px" height="auto" alt=""></a>
    </div>
</div>
<?php
endforeach;
?>
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>