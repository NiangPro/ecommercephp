<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  </head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-success" style="border-bottom: 1px solid white;">
      <div class="row w-100 ml-auto">
        <div class="col-md-4">
          <a href="#" class="text-uppercase navbar-brand">SUNU<span style="color: red;">SHOP</span></a>
        </div>
        <div class="col-md-4">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class="col-md-4">
          <div class="float-right">
            <button class="btn btn-sm circle btn-light rounded-pill">Pannier</button>
            <a class="btn btn-light rounded-circle" href="" title="connecter"><i class="fa fa-user"></i></a>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-4">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-header">
              <h2>Catégories</h2>
            </div>
            <div class="card-body card1">
              <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                <a href="" class="nav-item nav-link">Shirts</a>
                <a href="" class="nav-item nav-link">Jeans</a>
                <a href="" class="nav-item nav-link">Swimwear</a>
                <a href="" class="nav-item nav-link">Sleepwear</a>
                <a href="" class="nav-item nav-link">Sportswear</a>
                <a href="" class="nav-item nav-link">Jumpsuits</a>
                <a href="" class="nav-item nav-link">Blazers</a>
                <a href="" class="nav-item nav-link">Jackets</a>
                <a href="" class="nav-item nav-link">Shoes</a>
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
              <div class="d-flex">
                <div>
                  <h3>Tshirt</h3>
                  <span><i class="fa fa-etoile"></i></span>
                  <p>5000 fr</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
           <!-- slider -->
           <div id="carouselExampleControls" class="carousel slide card-carousel" data-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px!important;">
                  <div class="carousel-item active">
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
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>