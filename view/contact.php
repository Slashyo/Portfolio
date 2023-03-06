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
    <h3>Contactez moi</h3>
<form action="#" method="POST">
		<label for="nom">Nom</label>
		<input type="text" id="nom" name="nom" placeholder="Votre nom" required>

		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Votre adresse email" required>

		<label for="message">Message</label>
		<textarea id="message" name="message" placeholder="Votre message" required></textarea>

		<input type="submit" value="Envoyer">
</form>
    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>