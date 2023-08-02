<?php 

$prods = getProduitsByCategorie($_GET["id"]);
require_once("views/category.view.php");