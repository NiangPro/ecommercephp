<div class="container mt-5" style="margin-top: 130px!important;">
      <div class="row">
        <div class="col-md-4">
          <?php require_once("partials/sidebar.php"); ?>
        </div>
        <div class="col-md-8">
           <!-- slider -->
           <div id="carouselExampleControls" class="carousel slide card-carousel" data-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px!important;">
                  <div class="carousel-item active">
                    <img src="images/collection.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 700px;">
                          <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de reduction pour nos clients</h4>
                          <h3 class="display-4 text-white font-weight-semi-bold mb-4">Tshirt Homme</h3>
                          <a href="" class="btn btn-light py-2 px-3">Panier</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/accueil.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 700px;">
                          <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de reduction pour nos clients</h4>
                          <h3 class="display-4 text-white font-weight-semi-bold mb-4">Tshirt Homme</h3>
                          <a href="" class="btn btn-light py-2 px-3">Panier</a>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/accueil.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 700px;">
                          <h4 class="text-light text-uppercase font-weight-medium mb-3">10% de reduction pour nos clients</h4>
                          <h3 class="display-4 text-white font-weight-semi-bold mb-4">Tshirt Homme</h3>
                          <a href="" class="btn btn-light py-2 px-3">Panier</a>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev btn btn-dark" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-dark" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
              <!-- fin slider -->
              <!-- Collection -->
              <div class="card card-product mt-3 my-card" style="background-color: black; ">
                  <img src="images/a-collection.jpg" class="d-block w-100" height="300" style="opacity: 0.5; ;"  >
                  <div class="d-flex flex-column align-items-center justify-content-center collection mt-5 ml-5" >
                      <div class="p-3 text-center" style="max-width: 700px; z-index: 100;">
                          <h3 class="text-info text-uppercase font-weight-bold mb-3">Nouvelle Collection</h4>
                          <h5 class="text-danger mb-4">Tshirt Homme et Femme</h5>
                          <a href="panier.view.php" class="btn btn-warning text-uppercase font-weight-bold text-black py-1 px-1">Voir panier</a>
                      </div>
                  </div>
              </div>
              <!-- fin collection -->
              <div class="card mt-3 my-card">
                <div class="card-header">
                  <h3 class="text-bold">Vetements</h3>
                </div>
                <div class="card-body">
                  <div class="row px-xl-5 pb-3">
                    <?php foreach($prodsCat as $key=>$p): ?>
                      <?php if($key <3): ?>
                      <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                          <div class="card product-item border-0 mb-4">
                              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                  <img class="img-fluid" width="100%" style="height: 200px;" src="images/<?= $p->image ?>" alt="">
                              </div>
                              <div class="card-body border-left border-right text-center p-0 pt-2 pb-2 group">
                                  <h6 class="text-truncate mb-3"><?= $p->nom ?></h6>
                                  <p>
                                      <i class="fa fa-star text-warning"></i> 
                                      <i class="fa fa-star text-warning"></i>
                                      <i class="fa fa-star text-warning"></i>
                                      <i class="fa fa-star text-warning"></i>
                                      <i class="fa fa-star text-warning"></i>
                                  </p>
                                  <div class="d-flex justify-content-center">
                                      <h6><?= $p->prix ?> fcfa</h6>
                                  </div>
                              </div>
                              <div class="card-footer d-flex justify-content-between bg-light border">
                                  <a href="?site=produit&id=<?= $p->id ?>" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-eye text-warning mr-1"></i></a>&nbsp;
                                  <a href="" class="btn btn-outline-info btn-sm text-dark"><i class="fas fa-shopping-cart text-warning mr-1"></i></a>
                              </div>
                          </div>
                      </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>