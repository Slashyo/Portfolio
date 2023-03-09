<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menuDarkMode.css">
    <script src="js/script.js" defer></script>
    <title>Formulaire de contact</title>
</head>
<body>
<div id="gridmenu">
    <?php
include 'include/menuDarkMode.php';
    ?>
    <h3>CONTACTEZ MOI</h3>

    <div id="affichval"><?=$afficheVal?></div>
    <div id="afficherr"><?=$afficheErr?></div>
<form action="#" method="POST">
		<label for="nom">Nom</label>
		<input type="text" id="nom" name="nom" placeholder="Votre nom" required>

		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Votre adresse email" required>

		<label for="message">Message</label>
		<textarea id="message" name="message" placeholder="Votre message" required></textarea>

		<input type="submit" value="Envoyer">
</form>
<div id="childBlock">
    <h2>HEHEHEHE</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque labore minima debitis enim vitae, voluptas dicta ab aperiam rem! Et.</p>
    </div>
<div id="childBlock1">
    <h2>HEHEHEHE</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, mollitia ratione fugiat esse similique voluptatum! Dolorem error unde vero perferendis!</p>
</div>
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>