<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    if (inscrire($prenom, $nom, $adresse, $tel, $email, $mdp)) {
        return header("Location:?page=login&message=ajout compte avec succes");
    }
}

require_once("views/register.view.php");