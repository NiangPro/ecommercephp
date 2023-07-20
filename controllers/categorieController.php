<?php 

$cats = categories();
if (isset($_POST["ajouter"])) {
    extract($_POST);
    if (ajouterCategorie($nom)) {
        return header("Location: ?page=categorie");
    }
}

if (isset($_GET["type"])) {
    require_once("views/ajouts/addCategorie.php");
}else{
    require_once("views/categorie.view.php");
}