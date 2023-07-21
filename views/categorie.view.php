<div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title">Categories</h4>
                            <p class="card-description">La liste des categories
                            </p>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="?page=categorie&type=add" class="btn btn-success">Ajouer</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Nom</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($cats as $cat): ?>
                        <tr>
                          <td> <?= $cat->nom ?> </td>
                          <td> 
                          <a href="" class="btn btn-dark btn-rounded btn-icon">
                            <i class="mdi mdi-eye"></i>
                          </a>
                          <a href="" class="btn btn-danger btn-rounded btn-icon">
                            <i class="mdi mdi-close"></i>
                          </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>