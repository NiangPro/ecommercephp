<?php 

try {
    $db = new PDO("mysql:dbname=ecommercephp;host=localhost", "root", "");
} catch (\PDOException $th) {
    die("Erreur : ".$th->getMessage());
}


function inscrire($prenom, $nom, $adresse, $tel, $email, $mdp){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO user VALUES(null, :prenom, :nom, :tel, :adresse, :email, :mdp, 'user')");
        $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "tel" => $tel,
            "adresse" => $adresse,
            "email" => $email,
            "mdp" => $mdp
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function connecter($email, $mdp){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM user WHERE email =:email AND mdp =:mdp");
        $q->execute([
            "email" => $email,
            "mdp" => $mdp
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}
function produits(){
    global $db;
    try {
        $q = $db->prepare("SELECT p.id as id, p.nom as nom, description, c.nom as nomcat, prix, qteStock, categorie_id, image, visited
         FROM produit p , categorie c WHERE p.categorie_id = c.id");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function getProduitsByCategorie($id){
    global $db;
    try {
        $q = $db->prepare("SELECT p.id as id, p.nom as nom, description, c.nom as nomcat, prix, qteStock, categorie_id, image, visited
         FROM produit p , categorie c WHERE( p.categorie_id = :id AND c.id = :id) ORDER BY id DESC");
        $q->execute(["id"=>$id]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function clients(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM user WHERE role != :role");
        $q->execute(["role" => "admin"]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function categories(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categorie");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function getCategorieById($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categorie WHERE id =:id");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function getProduitById($id){
    global $db;
    try {
        $q = $db->prepare("SELECT p.id as id, p.nom as nom, description, c.nom as nomcat, prix, qteStock, categorie_id, image, visited
        FROM produit p , categorie c WHERE( p.categorie_id = c.id AND p.id = :id)");
        $q->execute([
            "id" => $id
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function getProduitVisited(){
    global $db;
    try {
        $q = $db->prepare("SELECT p.id as id, p.nom as nom, description, c.nom as nomcat, prix, qteStock, categorie_id, image, visited
        FROM produit p , categorie c WHERE( p.categorie_id = c.id AND p.visited = 1) ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}
function getPanier($iduser){
    global $db;
    try {
        $q = $db->prepare("SELECT c.id as id, p.nom as nom, description, qte, prix, qteStock, produit_id, user_id, image, visited
        FROM produit p, panier c WHERE (c.user_id = :iduser AND c.produit_id = p.id) ORDER BY p.id DESC");
        $q->execute([
            "iduser" => $iduser
        ]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function getProduitPanier($iduser, $idproduit){
    global $db;
    try {
        $q = $db->prepare("SELECT c.id as id, p.nom as nom, description, qte, prix, qteStock, produit_id, user_id, image, visited
        FROM produit p, panier c WHERE (c.produit_id = :idproduit AND c.user_id = :iduser)");
        $q->execute([
            "iduser" => $iduser,
            "idproduit" => $idproduit,
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}
function ajouterPanier($user_id, $produit_id, $qte){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO panier VALUES(null, :user_id, :produit_id, :qte)");
        return $q->execute([
            "user_id" => $user_id,
            "produit_id" => $produit_id,
            "qte" => $qte,
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function supprimerProduitPanier($user_id, $produit_id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM panier WHERE user_id =:user_id AND produit_id =:produit_id");
        return $q->execute([
            "user_id" => $user_id,
            "produit_id" => $produit_id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function modifierProduitPanier($user_id, $produit_id, $qte){
    global $db;
    try {
        $q = $db->prepare("UPDATE panier SET qte =:qte WHERE user_id =:user_id AND produit_id =:produit_id");
        return $q->execute([
            "user_id" => $user_id,
            "produit_id" => $produit_id,
            "qte" => $qte
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function ajouterCategorie($nom){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO categorie VALUES(null, :nom)");
        return $q->execute([
            "nom" => $nom
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}
function modifierCategorie($id, $nom){
    global $db;
    try {
        $q = $db->prepare("UPDATE categorie SET nom=:nom WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "id" => $id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function supprimerCategorie($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM categorie WHERE id =:id");
        return $q->execute([
            "id" => $id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function ajouterProduit($nom, $prix, $qteStock, $image, $categorie_id, $visted, $description){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produit VALUES(null, :nom, :prix, :qteStock, :visted, :image, :description, :categorie_id)");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "qteStock" => $qteStock,
            "visted" => $visted,
            "image" => $image,
            "description" => $description,
            "categorie_id" => $categorie_id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function modifierProduit($id , $nom, $prix, $qteStock, $categorie_id, $description){
    global $db;
    try {
        $q = $db->prepare("UPDATE produit 
                    SET nom =:nom, prix =:prix, qteStock =:qteStock, categorie_id =:categorie_id, description =:description
                    WHERE id =:id
        ");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "qteStock" => $qteStock,
            "description" => $description,
            "categorie_id" => $categorie_id,
            "id" => $id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function visited($id){
    global $db;
    try {
        $q = $db->prepare("UPDATE produit 
                    SET visited =:visited
                    WHERE id =:id
        ");
        return $q->execute([
            "visited" => 1,
            "id" => $id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}