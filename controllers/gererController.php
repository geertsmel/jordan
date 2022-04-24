<?php 
    include("models/tabPublic.php");
    include("models/tabModele.php");
    include("models/tabSport.php");
    include("models/basket.php");

    if(isset($_GET["action"])){
        $tabAction = array("ajouter", "modifier", "supprimer");
        if(in_array($_GET["action"], $tabAction)){
            if(isset($_GET["id"])){
                $basket = getBasket($_GET["id"]);
            }

            include("views/pages/boutique/" .$_GET["action"]. ".php");


            if(!empty($_POST)){
                $basket = array(
                    ":id" => $_POST["id"],
                    ":nom" => $_POST["nom"],
                    ":image" => $_POST["image"],
                    ":prix" => $_POST["prix"],
                    ":matiere" => $_POST["matiere"],
                    ":public" => $_POST["public"],
                    ":couleur" => $_POST["couleur"],
                    ":modele" => $_POST["modele"],
                    ":sport" => $_POST["sport"]
                );
                
                switch($_POST["action"]){
                    case "Ajouter":
                        try{
                            array_shift($basket);
                            $id = addBasket($basket);
                            header("Location:?section=basket&id=$id");
                        }
                        catch(PDOException $e){
                            var_dump($e);
                            die;
                        }
                        break;
                    case "Modifier" : 
                        try{
                            updateBasket($basket);
                            $id = $_GET["id"];
                            header("Location:?section=basket&id=$id");
                        }
                        catch(PDOException $e){
                            var_dump($e);
                            die;
                        }
                        break;

                    case "Supprimer" :
                        try{
                            $id = $_GET["id"];
                            deleteBasket($id);
                            
                            header("Location:?section=boutique");
                        }
                        catch(PDOException $e){
                            var_dump($e);
                            die;
                        }
                        break;
                }
            }
        }
        else {
            include("views/errors/404.php");
        }
        
    }
?>