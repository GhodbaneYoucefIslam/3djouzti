<?php
require_once("./../model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nutrition</title>
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
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Nutrition</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">La nutrition s’intéresse aux rôles des nutriments dans l’organisme humain et à leurs interactions ainsi qu’aux besoins nutritionnels des individus et des populations. Elle prend également en considération les éléments qui influencent les choix alimentaires tels les comportements alimentaires et l’environnement alimentaire façonné par les facteurs socioéconomiques, technologiques ou autres. Les professionnels formés en nutrition contribuent par leurs interventions à promouvoir et à rétablir la santé</p>
                </div>
                    <form class="d-flex search-ingredient-form">
                        <input class="form-control me-2" type="search" placeholder="Rechercher les ingrédients" aria-label="Search">
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer tous les ingrédients</a>
                    </form>
                <!-- <div class="overflow-hidden" style="max-height: 30vh;">
                  <div class="container px-5">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2F1578698236%2FBalanced%20Diet.jpg%3Fitok%3DBma9DcZ_" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                  </div>
                </div> -->
            </div>
            <!-- <div class="container px-4 py-5" id="custom-cards">

                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://cdn.britannica.com/17/196817-050-6A15DAC3/vegetables.jpg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Légumes</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2013/07/wholeGrainProducts-842797430-770x533-1-650x428.jpg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Céréales</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://images.ctfassets.net/3s5io6mnxfqz/5GlOYuzg0nApcehTPlbJMy/140abddf0f3f93fa16568f4d035cd5e6/AdobeStock_175165460.jpeg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Viandes</h2>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/9685/iStock-544807136.jpg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Produits létiers</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/assortment-of-colorful-ripe-tropical-fruits-top-royalty-free-image-995518546-1564092355.jpg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Fuits</h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg category-card">
                            <img src="https://s30386.pcdn.co/wp-content/uploads/2020/02/p1cufi6apbjc69n13sp1th01doj6.jpg.optimal.jpg">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold category-title">Légumineuses</h2>
                        </div>
                    </div>
                </div>
            
            </div> -->

            <div class="container marketing">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">Légumes.</span></h2>
                        <p class="lead">Ils sont plus savoureux et aussi plus riches en vitamines. Les légumes contiennent aussi des polyphénols dont les propriétés antioxydantes pourraient jouer un rôle protecteur pour notre santé</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer toutes les légumes</a>
                    </div>
                    <div class="col-md-5">
                        <img src="https://cdn.britannica.com/17/196817-050-6A15DAC3/vegetables.jpg" width="450px" height="350px">
        
                    </div>
                </div>
        
                <hr class="featurette-divider">
        
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">fruit.</span></h2>
                        <p class="lead">Gorgés d'eau, de vitamines, d'oligo-éléments ou encore de fibres ils apportent à l'organisme des éléments indispensable à son bon fonctionnement.</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer toutes les fruits</a>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/assortment-of-colorful-ripe-tropical-fruits-top-royalty-free-image-995518546-1564092355.jpg" width="450px" height="350px">
        
                    </div>
                </div>
        
                <hr class="featurette-divider">
        
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">Viandes</span></h2>
                        <p class="lead">Une des meilleures sources alimentaires de fer avec une forte proportion de fer héminique - la forme de fer la mieux absorbée par l'organisme. Une richesse en protéines indispensables pour nous</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer toutes les viandes</a>
                    </div>
                    <div class="col-md-5">
                        <img src="https://images.ctfassets.net/3s5io6mnxfqz/5GlOYuzg0nApcehTPlbJMy/140abddf0f3f93fa16568f4d035cd5e6/AdobeStock_175165460.jpeg" width="450px" height="350px">
        
                    </div>
                </div>
        
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">Céréales</span></h2>
                        <p class="lead">Très riches en fibres elles apportent à la fois des vitamines (B et E), des minéraux (fer, magnésium, zinc, potassium, sélénium) mais aussi des acides gras essentiels. Les céréales complètes sont des protéines végétales.</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer touts les céréales</a>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2013/07/wholeGrainProducts-842797430-770x533-1-650x428.jpg" width="450px" height="350px">
        
                    </div>
                </div>

                <hr class="featurette-divider">
        
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">Légumineuses</span></h2>
                        <p class="lead">Pauvres en matières grasses et riches en fibres, les légumineuses sont excellentes dans la gestion du cholestérol, de la santé digestive et la régulation des niveaux d'énergie.</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer toutes les légumineuses</a>
                    </div>
                    <div class="col-md-5">
                        <img src="https://s30386.pcdn.co/wp-content/uploads/2020/02/p1cufi6apbjc69n13sp1th01doj6.jpg.optimal.jpg" width="450px" height="350px">
        
                    </div>
                </div>
        
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Catégorie des <span class="text-muted">Produits létiers</span></h2>
                        <p class="lead">Indispensables tout au long de la vie et plus particulièrement au moment de la croissance chez l'enfant et chez les personnes âgées. Ils apportent du calcium indispensable à la fabrication de l'os et au maintien de sa solidité.</p>
                        <a type="button" class="btn btn-md btn-outline-secondary" href="">Explorer toutes les Produits létiers</a>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/9685/iStock-544807136.jpg" width="450px" height="350px">
        
                    </div>
                </div>
        
                <hr class="featurette-divider">

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
        <script src="./../scripts/idees.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>