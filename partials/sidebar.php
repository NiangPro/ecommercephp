<div class="card mb-3">
    <div class="card-header">
        <h2>Catégories</h2>
    </div>
    <div class="card-body card1">
        <div class="navbar-nav w-100 overflow-hidden">
            <?php foreach($cats as $key=>$cat): ?>
              <?php if($key <9): ?>
                <a href="?site=category&id=<?= $cat->id ?>" class="nav-item nav-link"><?= ucfirst($cat->nom) ?></a>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="card mb-3 card2">
    <div class="card-header">
        <span class="float-left text-bold title">HOT DEALS</span>
        <span class="float-right text-info">man</span>
    </div>
    <div class="card-body">
        <img class="d-flex justify-content-center m-auto" src="images/cat-1.jpg" alt="" width="200" height="200">
    </div>
    <div class="card-footer">
        <div class="d-flex w-100 justify-content-between">
            <div class="float-left group" style="line-height: 1rem;">
                <h5>Tshirt</h5>
                <p>
                    <i class="fa fa-star text-warning"></i> 
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                </p>
                <p>5000 fr</p>
            </div>
            <div class="float-right" style="margin-top: 71px;">
                <span>SIZE</span>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 card2">
    <div class="card-header">
        <strong class="float-left text-bold title">Les plus visités</strong>
        <span class="float-right text-info">man</span>
    </div>
    <div class="card-body new-product">
        <div class="d-flex w-100 justify-content-between mb-2">
                <div class="float-left" style="line-height: 1rem;">
                    <img class="img-fluid w-100" src="images/product-3.jpg" alt="">  
                </div>
                <div class="float-right group mt-4">
                    <h5>Tshirt</h5>
                    <p class="star">
                        <i class="fa fa-star text-warning"></i> 
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </p>
                    <p class="text-danger">5000 fr</p>
                </div>
            </div>
            <div class="d-flex w-100 justify-content-between mb-2">
                <div class="float-left" style="line-height: 1rem;">
                    <img class="img-fluid w-100" src="images/product-3.jpg" alt="">  
                </div>
                <div class="float-right group mt-4">
                    <h5>Tshirt</h5>
                    <p class="star">
                        <i class="fa fa-star text-warning"></i> 
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </p>
                    <p class="text-danger">5000 fr</p>
                </div>
            </div>
            <div class="d-flex w-100 justify-content-between mb-2">
                <div class="float-left" style="line-height: 1rem;">
                    <img class="img-fluid w-100" src="images/product-3.jpg" alt="">  
                </div>
                <div class="float-right group mt-4">
                    <h5>Tshirt</h5>
                    <p class="star">
                        <i class="fa fa-star text-warning"></i> 
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </p>
                    <p class="text-danger">5000 fr</p>
                </div>
            </div>
    </div>
</div>