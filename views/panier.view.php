<!-- Cart Start -->
    <div class="container-fluid pt-5 mt-5">
        <?php if(isset($user)): ?>
        <div class="row px-xl-5 mt-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>quantité</th>
                            <th>Prix Total</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach($prodsPanier as $p): ?>
                        <tr>
                            <td class="align-middle"><img src="images/<?= $p->image ?>" alt="" style="width: 50px;"> <?= $p->nom ?></td>
                            <td class="align-middle"><?= $p->prix ?> fcfa</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?= $p->qte ?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?= $p->prix*$p->qte ?> fcfa</td>
                            <td class="align-middle"><a href="?site=panier&deleteprod=<?= $p->produit_id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Résumé du panier</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Sous Total</h6>
                            <h6 class="font-weight-medium">36000 fcfa</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">36000 fcfa</h5>
                        </div>
                        <button class="btn btn-block btn-success my-3 py-3">Valider la commande</button>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="alert mt-5 text-center alert-warning alert-dismissible fade show" role="alert">
                <strong>Veuillez-vous <a href="?page=login">connecter</a> d'baord</strong> .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        <?php endif; ?>

    </div>
<!-- Cart End -->
