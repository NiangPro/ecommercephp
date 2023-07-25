<?php 

$prod = getProduitById($_GET["id"]);

$produits = getProduitsByCategorie($prod->categorie_id);
visited($prod->id);
require_once("views/product.view.php");