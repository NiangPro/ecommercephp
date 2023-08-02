<div class="container mt-5" style="margin-top: 130px!important;">
    <div class="row">
        <div class="card col-md-8 mt-3 my-card">
            <div class="card-header">
                <div class="row">

                    <h3 class="text-bold col-md-10">Information compte</h3>
                    <div class="col-md-2">
                        <a href="?site=logout" class="btn btn-warning">Deconnecter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 h3">
                        Prenom:
                    </div>
                    <div class="col-md-8 h4"><?= $user->prenom ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4 h3">
                        Nom:
                    </div>
                    <div class="col-md-8 h4"><?= $user->nom ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4 h3">
                        Tel:
                    </div>
                    <div class="col-md-8 h4"><?= $user->tel ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4 h3">
                        Email:
                    </div>
                    <div class="col-md-8 h4"><?= $user->email ?></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php require_once("partials/sidebar.php"); ?>
        </div>
    </div>
</div>