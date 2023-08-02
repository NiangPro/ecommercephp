<div class="container-fluid mt-5" >
    <div class="col-lg-12 col-md-12 mt-5" style="margin-top: 150px!important;">
        <div class="row pb-3 mt-5">
            <div class="col-12 pb-1 ">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recherche par nom">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-success">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if(count($prods)>0): ?>
            <?php foreach($prods as $p): ?>
            <div class="col-lg-3 col-md-3 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid"  width="100%" style="height: 210px;" src="images/<?= $p->image ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $p->nom ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $p->prix ?> fcfa</h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="?site=produit&id=<?= $p->id ?>" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-eye text-warning mr-1"></i></a>&nbsp;
                        <a href="?cart&idprod=<?= $p->id ?>" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-shopping-cart text-warning mr-1"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                    <h2>Aucun produit pour le moment</h2>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
