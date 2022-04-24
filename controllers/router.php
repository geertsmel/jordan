<?php 
    if(!isset($_GET["section"])){
        $_GET["section"]="accueil";
    }

    if(!isset($_SESSION["user"])){
        $tabAnonyme = array("accueil", "boutique", "contact", "connexion", "basket");

        if(in_array($_GET["section"], $tabAnonyme)){
            include("controllers/" . $_GET["section"]. "Controller.php");
        }
        else {
            include("views/errors/404.php");
        }
    }
    else {
        $tabConnecte = array("accueil", "boutique", "contact", "deconnexion", "basket", "gerer");
        if(in_array($_GET["section"], $tabConnecte)){
            include("controllers/" . $_GET["section"]. "Controller.php");
        }
        else {
            include("views/errors/404.php");
        }
    }
       
    
?>