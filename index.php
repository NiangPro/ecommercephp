<?php 
session_start();
require_once("models/database.php");

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}

if (isset($_GET["page"])) {
    if($_GET["page"] == "logout"){
        unset($_SESSION["user"]);
        session_destroy();
        return header("Location:?site=home");
    }

    require_once("themes/header.php");
    switch ($_GET["page"]) {
        case 'categorie':
            require_once("controllers/categorieController.php");
            break;
        case 'produit':
            require_once("controllers/produitController.php");
            break;
        case 'login':
            require_once("controllers/loginController.php");
            break;
        
        case 'register':
            require_once("controllers/registerController.php");
            break;
        case 'dashboard':
            require_once("controllers/dashboardController.php");
            break;
        case 'user':
            require_once("controllers/userController.php");
            break;
        
        default:
            require_once("controllers/dashboardController.php");
            break;
    }
    require_once("themes/footer.php");
}else{
    $cats = categories();

    if (isset($_GET["cart"])) {
        if (isset($user)) {
            if (getProduitPanier($user->id, $_GET["idprod"])) {
                modifierProduitPanier($user->id, $_GET["idprod"],1);
            }else{
                ajouterPanier($user->id, $_GET["idprod"], 1);
            }
        }
        return header("Location:?site=panier");
    }

    if(isset($_GET["deleteprod"])){
        supprimerProduitPanier($user->id, $_GET["deleteprod"]);
    }

    if(isset($user)){
        $nbreProduit = count(getPanier($user->id));
    }

    require_once("partials/header.php"); 

    if (isset($_GET["site"])) {
        switch ($_GET["site"]) {
            case 'panier':
                require_once("controllers/panierController.php");
                break;
            case 'produit':
                require_once("controllers/productController.php");
                break;
            case 'category':
                require_once("controllers/categoryController.php");
                break;
            case 'profil':
                require_once("controllers/profilController.php");
                break;
            case 'logout':
                unset($_SESSION["user"]);
                session_destroy();
                return header("Location:?site=home");
                // require_once("controllers/homeController.php");
                break;
            default:
                require_once("controllers/homeController.php");

                break;
        }
    }else{
        require_once("controllers/homeController.php");
    }
    require_once("partials/footer.php"); 
}

