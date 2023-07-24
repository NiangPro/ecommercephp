<?php 

if (isset($_POST["connecter"])) {
    extract($_POST);
    if (connecter($email, $mdp)) {
        return header("Location:?page=dashboard");
    }else{
        return header("Location:?page=login&message='Email ou mot de passe incorrect'");
    }
}
require_once("views/login.view.php");