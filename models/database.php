<?php 

try {
    $db = new PDO("mysql:dbname=ecommercephp;host=localhost", "root", "");
} catch (\PDOException $th) {
    die("Erreur : ".$th->getMessage());
}


function inscrire($prenom, $nom, $adresse, $tel, $email, $mdp){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO user VALUES(null, :prenom, :nom, :tel, :adresse, :email, :mdp)");
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

function ajouterPanier($user_id, $produit_id){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO panier VALUES(null, :user_id, :produit_id)");
        return $q->execute([
            "user_id" => $user_id,
            "produit_id" => $produit_id
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

function ajouterProduit($nom, $prix, $qteStock, $image, $categorie_id, $visted){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produit VALUES(null, :nom, :prix, :qteStock, :visted, :image, :categorie_id)");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "qteStock" => $qteStock,
            "visted" => $visted,
            "image" => $image,
            "categorie_id" => $categorie_id
        ]);
    } catch (\PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}