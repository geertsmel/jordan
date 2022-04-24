<?php 
    include("models/basket.php");
    include("models/tabPublic.php");
    

    if(isset($_GET["id"])){
        $basket = getBasket($_GET["id"]);
        // var_dump($basket);
        include("views/pages/boutique/basket.php");
    }

    
?>