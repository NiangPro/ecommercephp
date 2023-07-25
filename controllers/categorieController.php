<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);
    if (ajouterCategorie($nom)) {
        unset($_GET["type"]);
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (modifierCategorie($_GET["id"],$nom)) {
        unset($_GET["id"]);
        unset($_GET["type"]);
    }
}

if(isset($_GET["delete"])){
    supprimerCategorie($_GET["delete"]);
    unset($_GET["delete"]);
}


$cats = categories();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $cat = getCategorieById($_GET["id"]);
    }
    require_once("views/ajouts/addCategorie.php");
}else{
    require_once("views/categorie.view.php");
}