<?php 
    include("models/basket.php");
    if(!isset($_GET["filtrer"])){
        $baskets = getAllBaskets();
    }
    else {
        if(isset($_GET["public"])){
            $baskets = getBasketsFiltrerPublic($_GET["public"]);
        }
        
    }

    

    include("views/pages/boutique/voir.php");
?>