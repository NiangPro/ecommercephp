<?php 
require_once("models/database.php");

if (isset($_GET["page"])) {
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
        
        default:
            require_once("controllers/dashboardController.php");
            break;
    }
    require_once("themes/footer.php");
}else{
    $cats = categories();

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
            default:
                require_once("controllers/homeController.php");

                break;
        }
    }else{
        require_once("controllers/homeController.php");
    }
    require_once("partials/footer.php"); 
}

