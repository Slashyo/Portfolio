<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lien.css">
    <script src="js/script.js" defer></script>
    <title>Mes Liens</title>
</head>
<body>
<div id="gridmenu">
    <?php
include 'include/menuDarkMode.php';
    ?>
    <h3>LIENS UTILES</h3>
<div id="lienGlobal">
<?php
// Affichage des liens
foreach($afficheLien as $item):
?>

    <div class='liens'>
    <a href="<?=$item['url']?>" target="_blank"><img src="<?=$item['image']?>" width="100px" height="auto" alt=""></a>
        <h3><?=$item['titre']?> </h3>
        <p><?=$item['description']?></p>
        
    </div>

<?php
endforeach;
?>
</div>
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>