<div class="card">
    <div class="card-body">
    <h4 class="card-title">Categories</h4>
    <p class="card-description"> Formulaire d'<?= $_GET["type"] == "add" ? "ajout" : 'edition' ?> categorie </p>
    <form class="forms-sample" method="POST">
        <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?= isset($cat)? $cat->nom : '' ?>" required name="nom" id="exampleInputUsername2" placeholder="Entrer le nom de la categorie">
        </div>
        </div>
        <?php if($_GET["type"] == "add"): ?>
        <button type="submit" name="ajouter" class="btn btn-success mr-2">Ajouter</button>
        <?php else: ?>
            <button type="submit" name="modifier" class="btn btn-warning mr-2">Modifier</button>
        <?php endif; ?>
        <a href="?page=categorie" class="btn btn-light">Retour</a>
    </form>
    </div>
</div>