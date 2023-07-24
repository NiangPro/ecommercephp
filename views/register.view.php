<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-8 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="row">
                  <h4 class="col-md-6">Compte</h4>
                  <div class=" col-md-6 text-right">

                    <a href="?" class="font-weight-light">Retour a l'accueil</a>
                  </div>

                </div>
                <form class="pt-3" method="POST">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="">Prenom</label>
                      <input type="text" required class="form-control form-control" name="prenom">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Nom</label>
                      <input type="text" required class="form-control form-control" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Tel</label>
                      <input type="text" required class="form-control form-control" name="tel">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Adresse</label>
                      <input type="text" required class="form-control form-control" name="adresse">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Email</label>
                      <input type="text" required class="form-control form-control" name="email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Mot de passe</label>
                      <input type="password" required class="form-control form-control" name="mdp">
                    </div>
                  </div>

                  <div class="mt-3">
                    <button class="btn btn-block btn-primary  font-weight-medium auth-form-btn" name="ajouter" type="submit">S'inscrire</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Avez-vous déjà un compte ? <a href="?page=login" class="text-primary">Connecter</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>