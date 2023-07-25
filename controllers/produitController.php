<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $tmpName = $_FILES['image']['tmp_name'];
    // $name = $_FILES['image']['name'];
    $name = time().".jpg";
    $size = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg', 'jfif'];
    if(in_array($extension, $extensions)){
        move_uploaded_file($tmpName, 'images/'.$name);
        if (ajouterProduit($nom,$prix, $qteStock, $name, $categorie_id, 0, $description)) {
            unset($_GET["type"]);
        }
    }
    else{
        echo "Mauvaise extension";
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);

    if (modifierProduit($_GET["id"], $nom, $prix, $qteStock, $categorie_id,$description)) {
        unset($_GET["type"]);
        unset($_GET["id"]);
    }
}


$prods =produits();
$cats = categories();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $prod = getProduitById($_GET["id"]);
    }
    if($_GET["type"] == "edit"){
        require_once("views/ajouts/editProduit.php");
    }else{
        require_once("views/ajouts/addProduit.php");
    }
}else{

    require_once("views/produit.view.php");
}