<div class="card">
    <div class="card-body">
    <h4 class="card-title">Produits</h4>
    <p class="card-description"> Formulaire d'<?= $_GET["type"] == "add" ? "ajout" : 'edition' ?> produit </p>
    <form class="forms-sample" enctype="multipart/form-data" method="POST">
        <div class="row">

            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= isset($prod)? $prod->nom : '' ?>" required name="nom" id="exampleInputUsername2" placeholder="Entrer le nom de la categorie">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Prix unitaire</label>
                <div class="col-sm-9">
                    <input type="number"  class="form-control" value="<?= isset($prod)? $prod->prix : '' ?>" required name="prix" >
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Quantite en stock</label>
                <div class="col-sm-8">
                    <input type="number" value="<?= isset($prod)? $prod->qteStock : '' ?>"  class="form-control" required name="qteStock" >
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Categorie</label>
                <div class="col-sm-9">
                    <select name="categorie_id" class="form-control">
                        <option value="">Selectionner une categorie</option>
                        <?php foreach($cats as $cat): ?>
                            <option value="<?= $cat->id ?>"><?= $cat->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <textarea name="description"  class="form-control" ></textarea>
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                    <input type="file"  class="form-control file-upload-info" required name="image" >
                </div>
            </div>
        </div>
        
        <?php if($_GET["type"] == "add"): ?>
        <button type="submit" name="ajouter" class="btn btn-success mr-2">Ajouter</button>
        <?php else: ?>
            <button type="submit" name="modifier" class="btn btn-warning mr-2">Modifier</button>
        <?php endif; ?>
        <a href="?page=produit" class="btn btn-light">Retour</a>
    </form>
    </div>
</div>