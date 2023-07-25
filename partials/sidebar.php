<div class="card mb-3 my-card">
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

<div class="card mb-3 card2 my-card">
    <div class="card-header">
        <strong class="float-left text-bold title">Les plus visités</strong>
    </div>
    <div class="card-body new-product">
        <?php foreach($visites as $key=>$v): ?>
            <?php if($key <6): ?>
            <div class="d-flex w-100 justify-content-between mb-2">
                <div class="float-left" style="line-height: 1rem;">
                <a href="?site=produit&id=<?= $v->id ?>">
                    <img class="img-fluid w-100" src="images/<?= $v->image ?>" alt="">  
                </a>
                </div>
                <div class="float-right group mt-4">
                    <h5><a class="text-dark" href="?site=produit&id=<?= $v->id ?>"><?= $v->nom ?></a></h5>
                    <p class="star">
                        <i class="fa fa-star text-warning"></i> 
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </p>
                    <p class="text-danger"><?= $v->prix ?> fr</p>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>