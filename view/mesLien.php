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

    <div class='liens'><?=$item['titre']?> <?=$item['description']?> 
    <a href="<?=$item['url']?>" target="_blank"><img src="<?=$item['image']?>" width="100px" height="100px" alt=""></a>
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