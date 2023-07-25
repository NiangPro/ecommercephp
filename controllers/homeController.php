<?php 

$prodsCat = getProduitsByCategorie(1);
$visites = getProduitVisited();
require_once("views/home.view.php");