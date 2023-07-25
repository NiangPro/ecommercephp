<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <h4 class="card-title">Produits</h4>
            <p class="card-description">La liste des produits
            </p>
        </div>
        <div class="col-md-4 text-right">
            <a href="?page=produit&type=add" class="btn btn-success">Ajouer</a>
        </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th> Nom</th>
          <th> Prix unitaire</th>
          <th> Quantite en stock</th>
          <th> Description </th>
          <th> Categorie </th>
          <th> Action </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($prods as $prod): ?>
        <tr>
          <td> <?= $prod->nom ?> </td>
          <td> <?= $prod->prix ?> FCFA </td>
          <td> <?= $prod->qteStock ?> </td>
          <td> <?= $prod->description ?> </td>
          <td> <?= $prod->categorie_id ?> </td>
          <td> 
          <a href="?page=produit&type=edit&id=<?= $prod->id ?>" class="btn btn-dark btn-rounded btn-sm">
            <i class="mdi mdi-eye"></i>
          </a>
          <a href="" class="btn btn-danger btn-rounded btn-sm">
            <i class="mdi mdi-close"></i>
          </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>