<?php 
    $msg = "";
    if(isset($_POST["login"], $_POST["mdp"])){
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        if($login == "admin" && $mdp == "admin"){
            $_SESSION["user"] = "admin";
            header("Location:?section=boutique");
        }
        else {
            $msg = '<p class="error">Login/Mot de passe non valide</p>';
        }

    }

    include("views/pages/connexion.php");

?>