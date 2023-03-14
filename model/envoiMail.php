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


$afficheVal = '';
$afficheErr = '';


# si il existe les variables POST = formulaire envoyé
if(isset($_POST['nom'], $_POST['email'], $_POST['message'] )){
    # traitement des champs contre injection SQL (Sécurité!)
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['email'])),ENT_QUOTES);

    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    if (!$mail) {
        $afficheErr = "L'adresse e-mail est invalide";
    } else {

    
    

    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);

    # débugage des champs traités
    # var_dump($nom,$mail,$message);

    # si les champs sont bons (ici vide, donc une seule erreur générale)
    if(!empty($nom)&&!empty($mail)&&!empty($message)){
        
        # insertion partie SQL
        $sqlInsert = "INSERT INTO `contacts` (`nom`, `email`, `message`) VALUES ('$nom','$mail','$message');";

        # requête avec try catch
        try{
            # requête
            mysqli_query($dbconnect,$sqlInsert);
            
// DEMANDER A MIKKKKKKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA

            # envoi du mail
            $destinataire = 'tom.bik@hotmail.be'; // remplacer par l'adresse mail souhaitée
            $sujet = 'Nouveau message du formulaire de contact';
            $corps_message = "Nom: $nom\nEmail: $mail\nMessage: $message";
            mail($destinataire, $sujet, $corps_message);
            
            # si pas d'erreur création du texte
            $afficheVal ="Merci pour votre message !";

        }catch(Exception $e){
           # echo $e->getCode();

           # avec le code erreur SQL on peut faire des erreurs différentes, idem avec le $e->getMessage() etc...
            if($e->getCode()==1406){
                # création de l'erreur
                $afficheErr = "Le champ 'nom' est trop long";

            }elseif($e->getCode()==1062){
                # création de l'erreur
                $afficheErr = "Vous êtes déjà inscrit avec ce mail";
            }else{
                $afficheErr = "Erreur incconu";
            }
            
        }


    # sinon erreur
    }else{
        # erreur lors de l'inscription
        $afficheErr = "Il y a eu un problème lors de l'envoi de votre message, veuillez réessayer";
    }
}
}

# fermeture de connexion  (bonnes pratiques)
mysqli_close($dbconnect);