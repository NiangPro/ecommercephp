<div class="row">
    <div class="card col-md-4 mr-2">
        <div class="card-body">
            <h4 class="card-title">Image du produit</h4>
            <img src="images/<?= $prod->image ?>" width="100%" height="200" alt="">
            <form class="forms-sample" enctype="multipart/form-data" method="POST">
                <div class="form-group mt-2">
                    <input type="file"  class="form-control file-upload-info" required name="image" >
                    
                </div>
                
                <button type="submit" name="modifier" class="btn btn-warning mr-2">Modifier</button>
            </form>
        </div>
    </div>

    <div class="card col-md-7">
    <div class="card-body">
        <div class="row">

            <h4 class="card-title col-md-6">Produits</h4>
            <div class="col-md-6 text-right">
                <a href="?page=produit" class="btn btn-light btn-sm">Retour</a>
            </div>
        </div>
    <p class="card-description"> Formulaire d'edition produit </p>
    <form class="forms-sample" method="POST">
        <div class="row">

            <div class="form-group col-md-12 row">
                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= isset($prod)? $prod->nom : '' ?>" required name="nom" id="exampleInputUsername2" placeholder="Entrer le nom de la categorie">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Prix</label>
                <div class="col-sm-9">
                    <input type="number"  class="form-control" value="<?= isset($prod)? $prod->prix : '' ?>" required name="prix" >
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label for="exampleInputUsername2" class="col-sm-7 col-form-label">Quantite en stock</label>
                <div class="col-sm-5">
                    <input type="number" value="<?= isset($prod)? $prod->qteStock : '' ?>"  class="form-control" required name="qteStock" >
                </div>
            </div>
            <div class="form-group col-md-12 row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Categorie</label>
                <div class="col-sm-9">
                    <select name="categorie_id" class="form-control">
                        <option value="">Selectionner une categorie</option>
                        <?php foreach($cats as $cat): ?>
                            <option value="<?= $cat->id ?>" <?= $cat->id == $prod->categorie_id ? "selected":"" ?> ><?= $cat->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-12 row">
                <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <textarea name="description"   class="form-control" ><?= isset($prod)? $prod->description : '' ?></textarea>
                </div>
            </div>
        </div>
        
            <button type="submit" name="modifier" class="btn btn-warning mr-2">Modifier</button>
        
    </form>
    </div>
</div>
</div>