<?php 
    $user = "root";
    $pass = "root";
    $connection = new PDO('mysql:host=localhost;dbname=jordan', $user, $pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>