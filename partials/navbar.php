    <div class="fixed-top mb-5">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom: 1px solid white;">
        <div class="row w-100 ml-auto">
          <div class="col-md-4">
            <a href="#" class="text-uppercase navbar-brand">SUNU<span style="color: orange;">SHOP</span></a>
          </div>
          <div class="col-md-4">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
          </div>
          <div class="col-md-4">
          <div class="float-right">
              <!-- <button class="btn btn-sm circle btn-light rounded-pill"> -->
                <a href="?site=panier" class="btn border">
                  <i class="fas fa-shopping-cart text-white"></i>
                  <?php if(isset($user)): ?>
                  <span class="badge text-white"><?= $nbreProduit ?></span>
                  <?php endif; ?>
                </a>
              <!-- </button> -->
              <?php if(isset($user) && $user->role == "user"): ?>
                <a class="btn btn-light rounded-circle" href="?site=profil" title="connecter"><?= $user->prenom ?><i class="fa fa-user"></i></a>
              <?php else: ?>
                <a class="btn btn-light rounded-circle" href="?page=login" title="connecter"><i class="fa fa-user"></i></a>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav ml-4">
            <li class="nav-item active">
              <a class="nav-link" href="?">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php foreach($cats as $key=>$cat): ?>
              <?php if($key <5): ?>
                <li class="nav-item">
                  <a class="nav-link" href="?site=category&id=<?= $cat->id ?>"><?= ucfirst($cat->nom) ?></a>
                </li>
            <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
    </div>
