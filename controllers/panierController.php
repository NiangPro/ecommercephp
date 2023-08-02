<?php 

if (isset($user)) {
    $prodsPanier = getPanier($user->id);
    // var_dump($user->id);
    // die();
}

require_once("views/panier.view.php");