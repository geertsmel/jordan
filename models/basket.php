<?php 
    function getAllBaskets(){
        include("models/connection.php");
        $requete = "SELECT * FROM basket";
        
        $stmt = $connection->prepare($requete);

        $array = array();
        $stmt->execute($array);
		$data = $stmt->fetchAll();
		// var_dump($data);
		return $data;
    }

    function getBasketsFiltrerPublic($public){
        include("models/connection.php");
        $requete = "SELECT * FROM basket WHERE public = :public";
        
        $stmt = $connection->prepare($requete);

        $array = array(
            ":public" => $public
        );
        $stmt->execute($array);
		$data = $stmt->fetchAll();
		// var_dump($data);
		return $data;
    }

    function getBasket($id){
        include("models/connection.php");
        $requete = "SELECT * FROM basket WHERE basket_id = :id";
        
        $stmt = $connection->prepare($requete);

        $array = array(
            ":id" => $id
        );
        $stmt->execute($array);
		$data = $stmt->fetchAll();
		// var_dump($data);
		return $data[0];
    }

    function addBasket($basket){
        
        include("models/connection.php");
        $requete = "INSERT INTO basket (image, nom, prix, matiere, public, couleur, modele, sport) VALUES (:image, :nom, :prix, :matiere, :public, :couleur, :modele, :sport)";
        $stmt = $connection->prepare($requete);
        $stmt->execute($basket);
        return $connection->lastInsertId();

    }

    function updateBasket($basket){
        include("models/connection.php");
        $requete = "UPDATE basket SET image = :image, nom = :nom, prix = :prix, matiere = :matiere, public = :public, couleur = :couleur, modele = :modele, sport = :sport WHERE basket_id = :id";
        $stmt = $connection->prepare($requete);
        $stmt->execute($basket);
        return true;

    }


    function deleteBasket($id){
        include("models/connection.php");
        $requete = "DELETE FROM basket  WHERE basket_id = :id";
        $stmt = $connection->prepare($requete);
        $array = array(
            ":id" => $id
        );
        $stmt->execute($array);
        return true;

    }




?>