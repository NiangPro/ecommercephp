<!-- Shop Detail Start -->
<div class="container-fluid py-5 mt-5">
        <div class="row px-xl-5 mt-5">
            <div class="col-lg-5 pb-5">
                <div class="text-center">
                    <img class="w-80" height="250"  src="images/<?= $prod->image ?>" alt="Image">
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?= $prod->nom ?></h3>
                <div class="d-flex mb-3">
                    <div class="text-warning mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                </div>
                <h3 class="font-weight-semi-bold mb-4"><?= $prod->prix ?> fcfa</h3>
                <p class="mb-4"><?= $prod->description ?>.</p>
                
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" onclick="editQuantite('qteProd', '-')" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" id="qteProd" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus" onclick="editQuantite('qteProd', '+')">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" name="addPanier" class="btn btn-success px-3"><i class="fa fa-shopping-cart mr-1"></i> Ajouter Pannier</button>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Suivre</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5 mt-5">
            <div class="col-md-12">
                <h1 class="text-center mb-4">Produits Similaires</h1>
                <div class="d-flex justify-content-center">
                    <?php foreach($produits as $key=>$p): ?>
                    <?php if($key < 4): ?>
                        <div class="product-item border-0 mr-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid " style="width: 100%;height:250px;" src="images/<?= $p->image ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?= $p->nom ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?= $p->prix ?> fcfa</h6><h6 class="text-muted ml-2"></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="?site=produit&id=<?= $p->id ?>" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-eye text-warning mr-1"></i></a>&nbsp;
                                <a href="?cart&idprod=<?= $p->id ?>" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-shopping-cart text-warning mr-1"></i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->