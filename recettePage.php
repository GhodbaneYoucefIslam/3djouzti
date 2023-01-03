<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Recette</title>
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

        <!-- zone-de-contenu -->
        <section id="zone-de-contenu">
            <div class="container-fluid">
                <!-- recette -->
                <div id="recipie-container">
                    <div id="recipie-title-container"><h1>Mhadjeb</h1></div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div id="recipie-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>0/5</span>
                            </div>
                            <img src="https://i.ytimg.com/vi/33JUUoOAKSk/maxresdefault.jpg" class=" recipie-page-img" alt="Mhadjeb">
                        </div>
                        <div class="col-lg-2"></div>
                        <div class='card  recipie-nutrition-info col'>
                            <div class='card-header'><h3>Informations nutritionelles</h3></div>
                            <div class='card-body'>
                            <h2>Free</h2>
                            <p>5 Matches Per Day</p>
                            <p>10 Messages Per Day</p> 
                            <p>Unlimited App Usage</p>
                            <button class="btn btn-outline-dark" type="button">Sign Up</button>
                        </div>
                    </div>
                    <div id ="recipie-info">
                        <span><i class="fa-solid fa-clock"></i>30 min</span>
                        <span><i class="fa-solid fa-dumbbell"></i>Facile</span>
                        <span><i class="fa-solid fa-house-chimney-medical"></i>healthy</span>
                    </div>

                    <!-- ingrediants -->
                    <section id="ingrediants">
                        <div id="line-separator">
                            <h4><i class="fa-solid fa-basket-shopping"></i>Ingrédiants</h4>
                            <hr>
                        </div>
                        <!-- ingrediant square -->
                        <div class="ingrediant-square">
                            <div class="ingrediant-img-square">
                                <img src="https://assets.afcdn.com/recipe/20170607/67650_w120h120c1cx350cy350.webp" alt="parsley">
                            </div>
                            <div class="ingrediant-and-quantity">
                                <h6>quantité</h6>
                                <p>name</p>
                            </div>
                        </div>
                        <div class="ingrediant-square">
                            <div class="ingrediant-img-square">
                                <img src="https://assets.afcdn.com/recipe/20170607/67650_w120h120c1cx350cy350.webp" alt="parsley">
                            </div>
                            <div class="ingrediant-and-quantity">
                                <h6>quantité</h6>
                                <p>name</p>
                            </div>
                        </div>
                        <div class="ingrediant-square">
                            <div class="ingrediant-img-square">
                                <img src="https://assets.afcdn.com/recipe/20170607/67650_w120h120c1cx350cy350.webp" alt="parsley">
                            </div>
                            <div class="ingrediant-and-quantity">
                                <h6>quantité</h6>
                                <p>name</p>
                            </div>
                        </div>
                        <div class="ingrediant-square">
                            <div class="ingrediant-img-square">
                                <img src="https://assets.afcdn.com/recipe/20170607/67650_w120h120c1cx350cy350.webp" alt="parsley">
                            </div>
                            <div class="ingrediant-and-quantity">
                                <h6>quantité</h6>
                                <p>name</p>
                            </div>
                        </div>
                        <div class="ingrediant-square">
                            <div class="ingrediant-img-square">
                                <img src="https://assets.afcdn.com/recipe/20170607/67650_w120h120c1cx350cy350.webp" alt="parsley">
                            </div>
                            <div class="ingrediant-and-quantity">
                                <h6>quantité</h6>
                                <p>name</p>
                            </div>
                        </div>
                    </section>
                    <!-- préparation -->
                    <section id="preparation">
                        <div id="line-separator">
                            <h4><i class="fa-solid fa-spoon"></i>Préparation</h4>
                            <hr>
                        </div> 
                        <div id="time-info">
                            <h6>Temps totale:</h6>
                            <span> temps</span>
                            <hr>
                            <div id="time-items">
                                <span>
                                    <h6>Préparation:</h6><br>
                                    <span> temps</span>
                                </span>
                                <span>
                                    <h6>Préparation:</h6><br>
                                    <span> temps</span>
                                </span>
                                <span>
                                    <h6>Préparation:</h6><br>
                                    <span> temps</span>
                                </span>
                            </div>
                        </div>
                        <ul id="step-list">
                            <li>
                                <div>
                                    <h5>Etape 1</h5>
                                    <p>Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Etape 1</h5>
                                    <p>Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Etape 1</h5>
                                    <p>Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Etape 1</h5>
                                    <p>Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide Bien nettoyer les cèpes sans les laver en éliminant la partie terreuse, bien les frotter dans un linge humide.</p>
                                </div>
                            </li>
                        </ul> 
                    </section>
                    <section id="video">
                        <h2>Voir une video</h2>
                        <iframe width="956" height="538" src="https://www.youtube.com/embed/xEOBgGJyWHk" title="مطبخ ام وليد محاجب الفرينة فيديو مشترك مع قناة يسرى" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </section>
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