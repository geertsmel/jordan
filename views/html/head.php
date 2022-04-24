<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Jordan AIR</title>
    <link rel="icon" type="image/x-icon" href="public/images/favicon.png">
</head>
</head>
<body>
    <?php 
        if(!isset($_SESSION["user"])){
            include("views/menu/menu-anonyme.php");
        }
        else {
            include("views/menu/menu-connecte.php");
        }
    ?>
<div class="container">

