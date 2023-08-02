<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <h4 class="card-title">Clients</h4>
            <p class="card-description">La liste des clients
            </p>
        </div>
        <div class="col-md-4 text-right">
            <!-- <a href="?page=produit&type=add" class="btn btn-success">Ajouer</a> -->
        </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Prenom</th>
          <th> Nom</th>
          <th> Tel</th>
          <th> Adresse</th>
          <th> Email </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($clients as $cli): ?>
        <tr>
          <td> <?= $cli->prenom ?> </td>
          <td> <?= $cli->nom ?> </td>
          <td> <?= $cli->tel ?> </td>
          <td> <?= $cli->adresse ?> </td>
          <td> <?= $cli->email ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>