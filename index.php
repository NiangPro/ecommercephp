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
    require_once("partials/header.php"); 
        require_once("views/home.view.php");
    require_once("partials/footer.php"); 
}

