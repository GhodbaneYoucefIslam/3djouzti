<?php
//Website home page
?>
<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>3djouzti</title>
    </head>
  <body>
        
        <!-- navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                     3djouzti
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">News</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Idées de recettes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Healthy</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Saison</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Fetes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Nutrition</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                </ul>
                <div>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                </div>
            </div>
        </nav>

        <!-- diaporama -->

        <section id="diaporama">
            <div class="container-fluid">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.jamieoliver.com/home/wp-content/uploads/2022/09/DIG_220720_JOCS-Promo_16x9_NB_V7.00_02_01_00.Still002.jpg?tr=w-1430,h-675..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.jamieoliver.com/home/wp-content/uploads/2022/09/DIG_220720_JOCS-Promo_16x9_NB_V7.00_02_01_00.Still002.jpg?tr=w-1430,h-675" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://img.jamieoliver.com/home/wp-content/uploads/2022/09/DIG_220720_JOCS-Promo_16x9_NB_V7.00_02_01_00.Still002.jpg?tr=w-1430,h-675" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>

        <!-- zone de contenue -->

        <section id="zone-de-contenu">
            <div class="container-fluid">
                <!-- menu pour basculer entre les catégories -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link"><i class="fa-solid fa-plate-wheat categorie-icon"></i></i>Entrées</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link"><i class="fa-solid fa-drumstick-bite categorie-icon"></i>Plats</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link"><i class="fa-solid fa-cake-candles categorie-icon"></i>Desserts</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link"><i class="fa-solid fa-martini-glass-citrus categorie-icon"></i>Boissons</button>
                    </li>
                </ul>

                <!-- Contenue de la catégorie -->
                <h1>Découvrir des Entrées</h1>
                <div class="row">
                    <div class="col">
                         <!--  cadres de recettes -->
                        <div class="card recipie-card">
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class="card-img-top" alt="Mhadjeb">
                            <div class="card-body">
                                <h5 class="card-title">Mhadjeb</h5>
                                <p class="card-text">Mhadjeb is a traditional Algerian dish, it is a fine crepe-like semolina based flatbread typically stuffed</p>
                                <a href="recettePage.php" class="btn btn-primary">Afficher la suite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                         <!--  cadres de recettes -->
                        <div class="card recipie-card">
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class="card-img-top" alt="Mhadjeb">
                            <div class="card-body">
                                <h5 class="card-title">Mhadjeb</h5>
                                <p class="card-text">Mhadjeb is a traditional Algerian dish, it is a fine crepe-like semolina based flatbread typically stuffed</p>
                                <a href="#" class="btn btn-primary">Afficher la suite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                         <!--  cadres de recettes -->
                        <div class="card recipie-card">
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class="card-img-top" alt="Mhadjeb">
                            <div class="card-body">
                                <h5 class="card-title">Mhadjeb</h5>
                                <p class="card-text">Mhadjeb is a traditional Algerian dish, it is a fine crepe-like semolina based flatbread typically stuffed</p>
                                <a href="#" class="btn btn-primary">Afficher la suite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="display:none;">
                         <!--  cadres de recettes -->
                        <div class="card recipie-card">
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class="card-img-top" alt="Mhadjeb">
                            <div class="card-body">
                                <h5 class="card-title">Mhadjeb4</h5>
                                <p class="card-text">Mhadjeb is a traditional Algerian dish, it is a fine crepe-like semolina based flatbread typically stuffed</p>
                                <a href="#" class="btn btn-primary">Afficher la suite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                         <!--  cadres de recettes -->
                        <div class="card recipie-card">
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class="card-img-top" alt="Mhadjeb">
                            <div class="card-body">
                                <h5 class="card-title">Mhadjeb5</h5>
                                <p class="card-text">Mhadjeb is a traditional Algerian dish, it is a fine crepe-like semolina based flatbread typically stuffed</p>
                                <a href="#" class="btn btn-primary">Afficher la suite</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="buttonHolder">
                    <button class="btn btn-lg btn-primary">Voir toutes les entrées<i class="fa-solid fa-arrow-right"></i></button>
                </div>
                
            </div>
        </section>

        <!-- pied de page -->

        <footer>
            <div class="container-fluid">
                <span><a href="#">Acceuil</a></span>
                <span><a href="#">News</a></span>
                <span><a href="#">Idées de recettes</a></span>
                <span><a href="#">Healthy</a></span>
                <span><a href="#">Saison</a></span>
                <span><a href="#">Fetes</a></span>
                <span><a href="#">Nutrition</a></span>
                <span><a href="#">Contact</a></span>
            </div>
        </footer>


        <!-- Bootstrap Bundle with Popper -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>