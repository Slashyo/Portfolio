<?php
# Essai de connexion
try{
    # connexion mysqli
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    # charset
    mysqli_set_charset($db,DB_CHARSET);

# capture l'erreur
}catch(Exception $e){

    # arrêter le script et afficher l'erreur
    exit(utf8_encode($e->getMessage()));

}

# si il existe les variables POST = formulaire envoyé
if(isset($_POST['nom'], $_POST['email'], $_POST['message'])){
    # traitement des champs contre injection SQL (Sécurité!)
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])),ENT_QUOTES);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES); // on pourrait vérifier si c'est un mail valide ( filter_var voir la fonction sur php.net)

    # débugage des champs traités
    // var_dump($nom,$mail);

    # si les champs sont bons (ici vide, donc une seule erreur générale)
    if(!empty($nom)&&!empty($email)&&!empty($message)){
        
        # insertion partie SQL
        $sqlInsert = "INSERT INTO `contacts` (`nom`,`email`,`message`) VALUES ('$nom','$email','$message');";

        # requête avec try catch
        try{
            # requête
            mysqli_query($db,$sqlInsert);
            
            # si pas d'erreur création du texte
            $message ="Merci pour votre inscription";

        }catch(Exception $e){
           # echo $e->getCode();

           # avec le code erreur SQL on peut faire des erreurs différentes, idem avec le $e->getMessage() etc...
            if($e->getCode()==1406){
                # création de l'erreur
                $message = "Un champs est trop long";

            }elseif($e->getCode()==1062){
                # création de l'erreur
                $message = "Vous êtes déjà inscrit avec ce mail";
            }
            
        }


    # sinon erreur
    }else{
        # création de la variable $message
        $message = "Il y a eu un problème lors de votre inscription, veuillez réessayer";
    }

}