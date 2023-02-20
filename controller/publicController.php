<?php
if(isset($_GET['page'])){

    switch($_GET['page']){
        
        case 'travaux': 
            include "../view/mesTravaux.php";
            break;
        
        case 'lien':
            include "../view/mesLien.php";
            break;
        
        case 'tuto':
            include "../view/mesTutoriels.php";
            break;
        
        case 'cv':
            include "../view/monCV.php";
            break;

        case 'contact':
            include "../view/contact.php";
            break;

    default:
        include_once "../view/homePage.php";
        break;
    }
}else{
    include_once "../view/homePage.php";
}