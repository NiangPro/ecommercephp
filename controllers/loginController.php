<?php 


if (isset($_POST["connecter"])) {
    extract($_POST);
    $user = connecter($email, $mdp);
    if ($user) {
        $_SESSION["user"] = $user;
        if ($user->role =="admin") {
            return header("Location:?page=dashboard");
        }else{
            return header("Location:?site=profil");
        }
    }else{
        return header("Location:?page=login&message='Email ou mot de passe incorrect'");
    }
}
require_once("views/login.view.php");