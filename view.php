<?php
    header('Content-type: text/html; charset=UTF-8');
    require_once("controller.php");
    class view{

        // fonction qui se repettent dans toutes les pages-----------------------------------------------------------

        function PageHead($PageTitle){ 
            ?>
                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <!-- Bootstrap 5 CSS -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <link rel="stylesheet" href="./styles/style.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                    <title><?php echo $PageTitle ?></title>
                </head>
            <?php   
        }

        function SideMenu(){
            ?>
                <button class="side-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="side-menu" aria-labelledby="offcanvasExampleLabel">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="side-menu-body">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">Options</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="./login" class="nav-link text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="./login"/></svg>
                                Se connecter
                                </a>
                            </li>
                            <li>
                                <a href="./signup" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="./signup"/></svg>
                                Créer un compte
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropup">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
        }

        function NavBar(){
            ?>
                <!-- navbar -->

                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <div class="container-fluid">
                        <?php
                        $this->SideMenu();
                        ?>
                        <a class="navbar-brand" href="./index.php">
                            3djouzti
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Acceuil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./news.php">News</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./idees.php">Idées de recettes</a>
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
                            <a class="nav-link active" aria-current="page" href="./nutrition">Nutrition</a>
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
            <?php
        }

        function PageFooter(){
            ?>
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
            <?php
        }

        // fonctions pour la page acceuil--------------------------------------------------

        function IndexAcceuil(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="3djouzti";
                    $this->PageHead($title);
                    ?>
                    <body>

                        <?php
                        $this->NavBar();
                        $this->Diaporama();
                        $this->ContentZoneAcceuil();
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/acceuil.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function Diaporama(){
            ?>
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
                                    <img src="https://media.nutrition.org/wp-content/uploads/2019/01/Non-Dairy-Milk-S.Ferreira-2.jpg" class="d-block w-100" alt="...">
                                    <div class="container">
                                        <div class="carousel-caption text-start">
                                            <h1 style="font-weight:bolder; color:black;">First headline.</h1>
                                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://static.toiimg.com/photo/89025572.cms" class="d-block w-100" alt="...">
                                    <div class="container">
                                        <div class="carousel-caption text-start">
                                            <h1 style="font-weight:bolder; color:black;">Second headline.</h1>
                                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cuisine.nessma.tv/uploads/1/2019-03/a1604ac51f318358c324580ce8174241.jpg" class="d-block w-100" alt="...">
                                    <div class="container">
                                        <div class="carousel-caption text-start">
                                            <h1 style="font-weight:bolder; color:black;">Third headline.</h1>
                                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                        </div>
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

            <?php
        }

        function ContentZoneAcceuil(){
            ?>
            <section id="zone-de-contenu">
                <div class="container-fluid">
                    <?php
                    $this->CategoryMenu();
                    $this->CategoryContent();
                    ?>
                </div>
            </section>
            <?php
        }

        function CategoryMenu(){
            ?>
                <!-- menu pour basculer entre les catégories -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="entrees"><i class="fa-solid fa-plate-wheat categorie-icon"></i></i>Entrées</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="plats"><i class="fa-solid fa-drumstick-bite categorie-icon"></i>Plats</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="desserts"><i class="fa-solid fa-cake-candles categorie-icon"></i>Desserts</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="boissons"><i class="fa-solid fa-martini-glass-citrus categorie-icon"></i>Boissons</button>
                    </li>
                </ul>
            <?php
        }

        function RecipieCard($recipie){
            $title=$recipie["TitleRecipie"];
            $description=$recipie["DescriptionRecipie"];
            $description=mb_substr($description, 0, 60, 'UTF-8')."...";
            $imageLink = "./DB/images/recipies/".$title.".jpg";
            ?>
            <div class="col">
                <div class="card shadow-sm recipie-card">
                    <img class="bd-placeholder-img card-img-top" src="<?php echo $imageLink ?>"></img>

                    <div class="card-body">
                        <h5><?php echo $title ?></h5>
                        <p class="card-text"><?php echo $description ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" class="btn btn-sm btn-outline-secondary" href="./recette.php?recette=<?php echo $title ?>">Afficher la suite</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        function getRecipiesByCategoryView($category){
            $controller = new controller();
            $result =$controller->getRecipiesByCategoryController($category);
            return $result;
        }

        function CategoryContent(){
            ?>
                <!-- Contenue de la catégorie entrees -->
                <section class="category-content" id="entrees">
                    <h1>Découvrir des Entrées</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesByCategoryView("entrées");
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>    
                    <div id="buttonHolder">
                        <a class="btn btn-lg btn-primary" href="./categorie.php?category=entrées">Voir toutes les entrées<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>

                <!-- Contenue de la catégorie plats -->
                <section class="category-content" id="plats" style="display:none;">
                    <h1>Découvrir des Plats</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesByCategoryView("plats");
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div> 
                    <div id="buttonHolder">
                        <a class="btn btn-lg btn-primary" href="./categorie.php?category=plats">Voir toutes les boissons<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>

                <!-- Contenue de la catégorie desserts -->
                <section class="category-content" id="desserts" style="display:none;">
                    <h1>Découvrir des Desserts</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesByCategoryView("desserts");
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div> 
                    <div id="buttonHolder">
                        <a class="btn btn-lg btn-primary" href="./categorie.php?category=desserts">Voir toutes les desserts<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>

                <!-- Contenue de la catégorie boissons -->
                <section class="category-content" id="boissons" style="display:none;">
                    <h1>Découvrir des Boissons</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesByCategoryView("boissons");
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div> 
                    <div id="buttonHolder">
                        <a class="btn btn-lg btn-primary" href="./categorie.php?category=boissons">Voir toutes les boissons<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>
            <?php    
        }
        //fonctions pour la page acceil ---------------------end

        //fonctions pour la page categorie---------------------

        function IndexCategorie(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title=$_GET["category"];
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar();
                        ?>
                            <section id="zone-de-contenu">
                            <?php
                                $this->CategoryPageHeader($title);
                                $this->ContentZoneCategory($title);
                            ?>
                            </section> 
                        <?php   
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/acceuil.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function CategoryPageHeader($category){
            ?>
            <section class="py-5 container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto text-center">
                        <h1 >Explorer nos <?php echo $category ?></h1>
                        <p >Une liste exhaustive de touts nos <?php echo $category ?>, vous pouvez filtrer les recettes selon la notation la saison le temps de cuisson, de préparation et de repos ainsi que le contenue calorifiques, vous pouvez aussi trier les recette selon la notation le temps de cuisson, de préparation et de repos </p>
                    </div>
                    <div id="sort-and-filter" class="row">
                        <?php
                        $this->FilterForm();
                        ?>
                        <hr class="col-lg-1" id="Specialhr">
                        <?php
                        $this->SortForm();
                        ?>
                    </div>
                </div>
            </section>
            <?php
        }

        function FilterForm(){
            ?>
                <div id="filter" class="col-lg-5">
                    <button class="btn  accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-filter">
                        <span>Filtrer les recettes</span>
                    </button>
                    <form action="" method="post" class="collapse" id="collapse-filter">
                        <fieldset class="row ">
                            <legend class="col-form-label col-sm-2 pt-0">Saison</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                    Hiver
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck2">
                                    Printemps
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck3">
                                    Eté
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck3">
                                    Autumn
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Temps de préparation</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="min">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Temps de cuisson</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="min">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Temps totale</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="min">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Notation</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="min">
                                    <input type="text" class="form-control col" id="temps-min" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Calories totales</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <input type="text" class="form-control col" id="calories-min" placeholder="min">
                                    <input type="text" class="form-control col" id="calories-max" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary" value="Filtrer">
                    </form>
                </div>
            <?php
        }

        function SortForm(){
            ?>
                <div id="sort" class= "col-lg-5">
                    <button  class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-sort">
                        <span>Trier les recettes<span>
                    </button>
                    <form action="" method="post" id="collapse-sort" class="collapse">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Critère</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
                                    <label class="form-check-label" for="gridRadios1">
                                    Notation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Temps de préparation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Temps de cuisson
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Temps totale
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                                    <label class="form-check-label" for="gridRadios3">
                                    Calories totales
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <input type="submit" class="btn btn-lg btn-secondary" value="Trier">
                    </form>
                </div>
            <?php
        }

        function ContentZoneCategory($category){
            ?>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        <?php
                        $recipies= $this->getRecipiesByCategoryView($category);
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>
                </div>
            </div>
        <?php    
        }

        //fonctions pour la page categorie ---------------------end

        //fonctions pour la page recette---------------------
        function IndexRecette(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title=$_GET["recette"];
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar(); 
                        ?>
                        <div style="height:100px;"></div>
                        <?php
                        $this->ContentZoneRecette($title); 
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/acceuil.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function getRecipieByTitleView($title){
            $controller = new controller();
            $result =$controller->getRecipieByTitleController($title);
            return $result;
        }

        function ContentZoneRecette($recette){
            foreach($this->getRecipieByTitleView($recette) as $row){
                $recipie=$row;
            }   
            $title=$recipie["TitleRecipie"];
            $description=$recipie["DescriptionRecipie"];
            $imageLink = "./DB/images/recipies/".$title.".jpg";
            $rating=$recipie["Rating"];
            $videoLink=$recipie["VideoLink"];
            $prepTime=$recipie["PrepTime"];
            $cookTime=$recipie["CookTime"];
            $restTime=$recipie["RestTime"];
            $totalTime=$prepTime+$cookTime+$restTime;
            $difficulty=$recipie["Difficulty"];
            $servings=$recipie["NumberOfServings"];
            $calories=$recipie["CaloriesRecipie"];
            $fat=$recipie["TotalFatRecipie"];
            $protien=$recipie["TotalProtienRecipie"];
            $carbs=$recipie["TotalCarbsRecipie"];
            ?>
            <section id="zone-de-contenu">
                <div class="container-fluid">
                    <!-- recette -->
                    <div id="recipie-container">
                        <div id="recipie-title-container"><h1><?php echo $recette ?></h1></div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div id="recipie-rating">
                                    <?php
                                    $this->RatingStars($rating);
                                    ?>
                                </div>
                                <img src="<?php echo $imageLink ?>" class=" recipie-page-img">
                            </div>
                            <div class="col-lg-2"></div>
                            <?php
                                $this->NutritionCardRecipie($calories,$fat,$protien,$carbs);
                            ?>
                        </div>
                        <div id ="recipie-info">
                            <span><i class="fa-solid fa-clock"></i><?php echo $totalTime ?> min</span>
                            <span><i class="fa-solid fa-dumbbell"></i><?php echo $difficulty ?></span>
                            <span><i class="fa-solid fa-people-group"></i></i><?php echo $servings ?> personnes</span>
                        </div>
                        <?php
                        $this->RecipieIngrediants($title);
                        $this->RecipiePreparation($title,$totalTime,$prepTime,$cookTime,$restTime);
                        ?>
                        <section id="video">
                            <h2>Voir une video</h2>
                            <iframe width="956" height="538" src="https://www.youtube.com/embed/xEOBgGJyWHk" title="مطبخ ام وليد محاجب الفرينة فيديو مشترك مع قناة يسرى" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </section>
                    </div>
                </div>
            </section>    
            <?php
        }

        function RatingStars($rating){
            $numberOfFilled = floor($rating);
            for ($x = 1; $x <= $numberOfFilled; $x++) {
                ?>
                <i class="fa-solid fa-star"></i>
                <?php
            }
            for ($x = 1; $x <= 5- $numberOfFilled; $x++) {
                ?>
                <i class="fa-regular fa-star"></i>
                <?php
            }
            ?>
                <span><?php echo $rating ?>/5</span>
            <?php
        }

        function NutritionCardRecipie($calories,$fat,$protien,$carbs){
            ?>
                <div class='card  recipie-nutrition-info col'>
                    <div class='card-header'><h3>Informations nutritionelles</h3></div>
                    <div class='card-body'>
                        <h2>Calories: <?php echo $calories ?></h2>
                        <p>Glucides: <?php echo $carbs ?> g</p>
                        <p>Lipides: <?php echo $fat ?> g</p> 
                        <p>Protéines: <?php echo $protien ?> g</p>
                    </div>    
                </div>
            <?php
        }

        function getRecipieIngredientsView($title){
            $controller = new controller();
            $result =$controller->getRecipieIngredientsController($title);
            return $result;
        }

        function RecipieIngrediants($title){

        ?>
            <section id="ingrediants">
                <div id="line-separator">
                    <h4><i class="fa-solid fa-basket-shopping"></i>Ingrédiants</h4>
                    <hr>
                </div>
                <?php
                foreach($this->getRecipieIngredientsView($title) as $row){
                    $this->IngredientSquare($row);
                }
                ?>
            </section>
        <?php

        }
        function IngredientSquare($ingredient){
            $name=$ingredient["NameIngredient"];
            $imageLink = "./DB/images/ingredients/"."$name".".webp";
            $quantity=$ingredient["Quantity"];
            $unit= $ingredient["Unit"];
            ?>
            <div class="ingrediant-square">
                <div class="ingrediant-img-square">
                    <img src="<?php echo $imageLink ?>" alt="ingredient picture">
                </div>
                <div class="ingrediant-and-quantity">
                    <h6><?php echo $quantity." ".$unit ?><span class="filler">1</span></h6>
                    <p><?php echo $name ?></p>
                </div>
            </div>
            <?php
        }
        function RecipiePreparation($title,$totalTime,$prepTime,$cookTime,$restTime){
            ?>
            <section id="preparation">
                <div id="line-separator">
                    <h4><i class="fa-solid fa-spoon"></i>Préparation</h4>
                    <hr>
                </div> 
                <?php
                $this->RecipieTime($totalTime,$prepTime,$cookTime,$restTime);
                $this->RecipieSteps($title);
                ?>
            </section>
            <?php
            
        }

        function RecipieTime($totalTime,$prepTime,$cookTime,$restTime){
            ?>
            <div id="time-info">
                <h6>Temps totale: </h6>
                <span><?php echo $totalTime ?></span>
                <hr>
                <div id="time-items">
                    <span>
                        <h6>Préparation: </h6><br>
                        <span><?php echo $prepTime ?></span>
                    </span>
                    <span>
                        <h6>Cuisson: </h6><br>
                        <span><?php echo $cookTime ?></span>
                    </span>
                    <span>
                        <h6>Repos: </h6><br>
                        <span><?php echo $restTime ?></span>
                    </span>
                </div>
            </div>
            <?php
        }

        function getRecipieStepsView($title){
            $controller = new controller();
            $result =$controller->getRecipieStepsController($title);
            return $result;
        }

        function RecipieSteps($title){
            ?>
            <ul id="step-list">
            <?php
                foreach($this->getRecipieStepsView($title) as $row){
                    ?>
                    <li>
                        <div>
                            <h5>Etape <?php echo $row["StepOrder"] ?></h5>
                            <p><?php echo $row["DescriptionStep"] ?></p>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }


        //---------------------------fonction pour la page recette end-----

        //fonctions pour la page idées

        function IndexIdees(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Idées de recettes";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar();
                        ?>
                            <section id="zone-de-contenu">
                            <?php
                                $this->IdeaPageHeader();
                                $this->ContentZoneIdea();
                            ?>
                            </section> 
                        <?php   
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php       
        }

        function getIngredientsView(){
            $controller = new controller();
            $result =$controller->getIngredientsController();
            return $result;

        }

        function IdeaPageHeader(){
            ?>
            <section class="py-5 container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto text-center">
                        <h1 >Vous savez pas quoi préparer?</h1>
                        <p >Introduisez les ingrédiants disponibles chez vous et trouvez les meilleurs recettes qui les contients</p>
                    </div>
                    <div id="trouver-ajouter-checher-ingrediants" class="row">
                        <div class="col-lg-1"></div>
                        <div class="dropdown col-lg-3">
                            <button onclick="myFunction()" class="btn btl-lg btn-primary find-ingrediant-btn">Ajouter un ingrédiant</button>
                            <div id="myDropdown" class="dropdown-content">
                                <input type="text" placeholder="Rechercher..." id="myInput" onkeyup="filterFunction()">
                                <?php
                                foreach($this->getIngredientsView() as $row){
                                    ?>
                                    <a class="ingrediant"><?php echo $row["NameIngredient"] ?></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- where the ingrediant list will show up -->
                            <h5 id="liste-des-ingrediant-title">Liste des ingrédiants</h5>
                            <ul id="liste-des-ingrediants">
                            </ul>
                        </div>
                        <div class="col-lg-3" id="trouver-recettes-div">
                            <button class="btn btl-lg btn-primary find-ingrediant-btn" id="trouver-recettes-btn">Trouver des recettes</button>
                            <script>
                                /* When the user clicks on the button,
                                toggle between hiding and showing the dropdown content */
                                function myFunction() {
                                    document.getElementById("myDropdown").classList.toggle("show");
                                }
                                
                                function filterFunction() {
                                    var input, filter, ul, li, a, i;
                                    input = document.getElementById("myInput");
                                    filter = input.value.toUpperCase();
                                    div = document.getElementById("myDropdown");
                                    a = div.getElementsByTagName("a");
                                    for (i = 0; i < a.length; i++) {
                                        txtValue = a[i].textContent || a[i].innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                        a[i].style.display = "";
                                        } else {
                                        a[i].style.display = "none";
                                        }
                                    }
                                }

                                /*ajouter un ingrédiant a la liste*/
                                let ingrediantList=[];
                                $(document).ready(function(){
                                    let ingrediantOptionChoisi = $(".ingrediant"); 
                                    ingrediantOptionChoisi.click(function(event){
                                        let ingrediant= event.target.textContent;
                                        if (!ingrediantList.includes(ingrediant)){
                                        ingrediantList.push(ingrediant);
                                        let actualListe=$("#liste-des-ingrediants");
                                        actualListe.empty();
                                        for (let i = 0; i < ingrediantList.length; i++){

                                            let ingrediantListItem = document.createElement("li");
                                            ingrediantListItem.innerText=ingrediantList[i];
                                            let supprimerIngrediantButton = document.createElement("button");
                                            supprimerIngrediantButton.innerText="Suprimer";
                                            supprimerIngrediantButton.classList.add("btn-secondary");
                                            supprimerIngrediantButton.classList.add("btn");
                                            supprimerIngrediantButton.addEventListener("click",function(){
                                                ingrediantList.splice(ingrediantList.indexOf(ingrediantList[i]),1);
                                                supprimerIngrediantButton.parentElement.remove();
                                            })

                                            ingrediantListItem.appendChild(supprimerIngrediantButton);
                                            actualListe.append(ingrediantListItem);
                                        }
                                        }
                                    })

                                    
                                })

                                    $("#trouver-recettes-btn").click(function(){
                                        $.ajax(
                                            {
                                            url: "./operations/IdeaGenerator.php",
                                            type: "GET",

                                            data: { list: ingrediantList},
                                            success: function (data) {
                                                $("#idea-generator-row").append(data)
                                            }
                                        });     
                                    });
                            </script>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </section>
            <?php
        }

        function ContentZoneIdea(){
            ?>
            <div class="album py-5 bg-light" id="idea-results">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" id="idea-generator-row">
                    </div>
                </div>
            </div>
            <?php
        }

        //-----------------page ideés de  recettes fin

        //page nutrition début---------------------------
        function IndexNutrition(){

            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Nutrition";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar();
                        ?>
                            <section id="zone-de-contenu">
                            <?php
                                $this->NutritionHeader();
                                $this->ContentZoneNutrition();
                            ?>
                            </section> 
                        <?php   
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php       

        }

        function NutritionHeader(){
            ?>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Nutrition</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">La nutrition s’intéresse aux rôles des nutriments dans l’organisme humain et à leurs interactions ainsi qu’aux besoins nutritionnels des individus et des populations. Elle prend également en considération les éléments qui influencent les choix alimentaires tels les comportements alimentaires et l’environnement alimentaire façonné par les facteurs socioéconomiques, technologiques ou autres. Les professionnels formés en nutrition contribuent par leurs interventions à promouvoir et à rétablir la santé</p>
                </div>
                <div class="d-flex search-ingredient-form">
                    <input class="form-control me-2" type="search" placeholder="Trouver un ingrédiant" id="trouver-ingredient-input" onkeyup="getIngredient()">
                    <button  class="btn btn-md btn-outline-secondary" id="trouver-ingredient-btn">Rechercher</button>
                </div>
            </div>
            <script>
                let input;
                let ingredientName;
                function getIngredient() {
                    input = document.getElementById("trouver-ingredient-input");
                    ingredientName = input.value;
                }
                let id=5;
                $("#trouver-ingredient-btn").click(function(){
                    $.ajax(
                        {
                        url: "./operations/SearchIngredient.php",
                        type: "POST",

                        data: { name: ingredientName},
                        success: function (data) {
                            $("#search-results").empty();
                            $("#search-results").html(data);

                        }
                    }); 
                });    
            </script>
            <?php
        }

        function ContentZoneNutrition(){
            ?>
            <div class="container marketing" id="search-results">
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
            <?php
        }

        function IngredientInfoTitle($Name,$Category,$IsHealthy){
            ?>
            <div class="row">
                <div class="col centerer"><h4>Nom:  <?php echo $Name?></h4></div>
                <div class="col centerer"><h4>Catégorie:  <?php echo $Category?></h4></div>
                <?php
                if ($IsHealthy==1){
                    ?>
                    <div class="col centerer"><h4>Healthy:  <i class="fa-solid fa-circle-check"></i></h4></div>
                    <?php
                }else{
                    ?>
                    <div class="col centerer"><h4>Healthy:  <i class="fa-solid fa-circle-xmark"></i></h4></div>
                    <?php
                }
                ?>
            </div>
            <?php
        }

        //page nutrition fin---------------------------

        //page fetes-------------------------------debut

        function IndexFetes(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Fetes";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar();
                        ?>
                            <section id="zone-de-contenu">
                            <?php
                                $this->FetesHeader();
                                $this->ContentZoneFetes();
                            ?>
                            </section> 
                        <?php   
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/acceuil.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php       
        }

        function FetesHeader(){
            ?>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Fêtes</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4">Choisissez une des fêtes et trouvez les meilleurs plats qui lui conviennent</p>
                </div>
            </div>
            <?php
        }
        function FetesMenu(){
            ?>
                <!-- menu pour basculer entre les catégories -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="mariage"><i class="fa-solid fa-plate-wheat categorie-icon"></i></i>Mariage</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="circoncision"><i class="fa-solid fa-drumstick-bite categorie-icon"></i>Circoncision</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="aid-el-fitre"><i class="fa-solid fa-cake-candles categorie-icon"></i>Aid El Fitre</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn  nav-link category-button" name="aid-el-adha"><i class="fa-solid fa-martini-glass-citrus categorie-icon"></i>Aid EL Adha</button>
                    </li>
                </ul>
            <?php
        }

        function getRecipiesInFestivityView($IDFestivity){
            $controller = new controller();
            $result =$controller->getRecipiesInFestivityController($IDFestivity);
            return $result;
        }

        function ContentZoneFetes(){
            $this->FetesMenu();
            ?>
            <div class="fetes">
                <!-- mariage -->
                <section class="category-content" id="mariage" style="display:none;">
                    <h1>Recettes mariage</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesInFestivityView(1);
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>    
                </section>

                <!-- circonsion -->
                <section class="category-content" id="circoncision" style="display:none;">
                    <h1>Recettes circonsion</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesInFestivityView(2);
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>    
                </section>

                <!-- aid el fitre -->
                <section class="category-content" id="aid-el-fitre" style="display:none;">
                    <h1>Recettes aid el fitre</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesInFestivityView(3);
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>    
                </section>

                <!-- aid el adha -->
                <section class="category-content" id="aid-el-adha" style="display:none;">
                    <h1>Recettes aid el adha</h1>
                    <div class="row">
                        <?php
                        $recipies= $this->getRecipiesInFestivityView(4);
                        foreach($recipies as $row){
                            $this->RecipieCard($row);
                        }    
                        ?>
                    </div>    
                </section>

            </div>
            <?php    
        }
        //page fetes-------------------------------fin

        //page News-------------------------------debut

        function IndexNews(){

            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="News";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                        $this->NavBar();
                        ?>
                            <section id="zone-de-contenu">
                            <?php
                                $this->ContentZoneNews();
                            ?>
                            </section> 
                        <?php   
                        $this->PageFooter();
                        ?>

                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/acceuil.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php       

        }

        function ContentZoneNews(){
            ?>
            <div id="nav-separator"></div>
            <div class="container">
                <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <?php
                    foreach ($this->getRecipiesAsNewsView() as $row){
                        $image="./DB/images/recipies/".$row["Title"].".jpg";
                        $title = $row["Title"];
                        $filler="";
                        $filler=str_pad($title,60-strlen($title)," 1");
                        $this->NewsCard("Recette",$title,$row["Content"],$image,$filler);
                    }
                    foreach ($this->getNewsView() as $row){
                        $this->NewsCard("Article",$row["Title"],$row["Content"],$row["ImageLinkNews"],"");
                    }

                    ?>
                </div>
            </div>

            <?php
        }

        function NewsCard($type,$title,$description,$image,$filler){
            $description=mb_substr($description, 0, 100, 'UTF-8')."...";
            ?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $type ?></strong>
                        <h3 class="mb-0"><?php echo $title ?><span class="filler"><?php echo $filler ?></span></h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto"><?php echo $description ?></p>
                        <a href="./recette.php?recette=<?php echo $title ?>" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <img width="250" height="100%" src="<?php echo $image?>"</svg>
                
                        </div>
                    </div>
                </div>
            <?php
        }

        function getRecipiesAsNewsView(){
            $controller = new controller();
            $result =$controller->getRecipiesAsNewsController();
            return $result;  
        }

        function getNewsView(){
            $controller = new controller();
            $result =$controller->getNewsController();
            return $result;  
        }

        //page News-------------------------------end 

        //login ------------------------------
        function IndexLogin(){
            ?>
            <!doctype html>
                <html class="login" lang="fr">
                    <?php
                    $title="Se connecter";
                    $this->PageHead($title);
                    ?>
                    <body class="text-center login">
                        <?php $this->LoginForm(); ?>
                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php         
        }

        function LoginForm(){
            ?>
            <main class="form-signin">
                <form method="POST" action="./operations/validate.php">
                    <h3>3djouzti</h3>
                    <h1 class="h3 mb-3 fw-normal">Se connecter</h1>
                
                    <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Adresse mail</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Mot de passe</label>
                    </div>
                
                    <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="isAdmin" value="YES"> Se connecter en tent qu'administrateur
                    </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
                    <p class="mt-5 mb-3 text-muted">Vous n'avez pas un compte? <a href="./signup">S'inscrire</a></p>
                </form>
            </main>
            <?php
        }

        //login ------------------------------end 
        //Sign up ------------------------------start

        function IndexSignUp(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Créer un compte";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php $this->SignUpForm(); ?>
                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function SignUpForm(){
            ?>
            <div class="container" id="sign-up-container">
                <main>
                    <div class="py-5 text-center">
                        <h3>3djouzti</h3>
                        <h2>Créer un compte</h2>
                        <p class="lead">Créer un compte pour profiter aux maximum des fonctionalité du site.</p>
                    </div>
                    <div>
                        <div>
                            <h4 class="mb-3">Informations personelles</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                    </div>

                                    <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                    </div>
                                </div>

                                <div class="row gy-3">
                                    <div class="my-3 col-md-6">
                                        <h6>Sexe</h6>
                                        <div class="form-check">
                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="credit">Male</label>
                                        </div>
                                        <div class="form-check">
                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                        <label class="form-check-label" for="debit">Femele</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                    <label for="cc-expiration" class="form-label">Date de naissance</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                    </div>

                                    <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <button class="w-100 btn btn-primary btn-lg" type="submit">Créer mon compte</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
            <?php
        }

        //----------------------admin home Gestion de recettes --------start
        function IndexAdmin(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Admin Home";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                         $this->NavBarAdmin();
                         ?>
                         <main class="flex-shrink-0">
                            <div class="container administration">
                            <?php
                            $this->GestionRecettes();
                            ?>
                            </div>
                        </main>
                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="./scripts/sideMenu.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function NavBarAdmin(){
            ?>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <?php $this->SideMenuAdmin(); ?>
                <div class="container-fluid">
                    <span class="navbar-brand">3djouzti</span>
                </div>
                <div class="text-muted">Administration</div>
            </nav>
            <?php
        }

        function SideMenuAdmin(){
            ?>
                <button class="side-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="side-menu" aria-labelledby="offcanvasExampleLabel">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="side-menu-body">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">Administration</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link active text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
                                Gestion des recettes
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
                                Gestion des news
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
                                Gestion des utilisateurs
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
                                Gestion de nutrition
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href=""/></svg>
                                Paramètre
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropup">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>Admin1</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php      
        }

        function GestionRecettes(){
            ?>
            <h1>Gérer les recettes publiées</h1>
            <table class="table table-hover table-bordered">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Difficulté</th>
                        <th scope="col">Portions</th>
                        <th scope="col">Proposé par</th>
                        <th scope="col">Validée</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($this->getAprrovedRecipiesView() as $row){ 
                        ?>
                        <tr>
                            <td><?php echo $row["IDRecipie"] ?></td>
                            <td><?php echo $row["TitleRecipie"] ?></td>
                            <td><?php echo $row["Category"] ?></td>
                            <td><?php echo $row["Difficulty"] ?></td>
                            <td><?php echo $row["NumberOfServings"] ?></td>
                            <td><?php echo $row["IDUser"] ?></td>
                            <td><?php echo $row["IsApproved"] ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="./modifierRecette.php?id=<?php echo $row["IDRecipie"] ?>" type="button" class="btn btn-warning">Modifier<i class="fa-solid fa-pen-to-square action-button"></i></a>
                                    <a href="./operations/deleteRecipie.php?id=<?php echo $row["IDRecipie"] ?>" type="button" class="btn btn-danger">Supprimer<i class="fa-solid fa-trash-can action-button"></i></a>
                                </div>
                            </td>          
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }

        function getAprrovedRecipiesView(){
            $controller = new controller();
            $result =$controller->getAprrovedRecipiesController();
            return $result; 
        }

        //admin home Gestions de recettes ------------------------------end

        //admin modifier recette-------------------------------start
        function IndexModifierRecette(){
            ?>
            <!doctype html>
                <html lang="fr">
                    <?php
                    $title="Modifier recette";
                    $this->PageHead($title);
                    ?>
                    <body>
                        <?php
                         $this->NavBarAdmin();
                         ?>
                         <main class="flex-shrink-0">
                            <div class="container administration">
                            <?php
                            $recette=$this->getRecipieByTitleView("Brik")->fetch();
                            $this->ModifierRecetteBody($recette);
                            ?>
                            </div>
                        </main>
                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    </body>
                </html>
            <?php
        }

        function ModifierRecetteBody($recette){
            $title=$recette["TitleRecipie"];
            $id=$recette["IDRecipie"];
            ?>
                <h1>Modifier la recette: <?php echo $title ?></h1>
                <?php $this->ModifierRecetteForm($recette);?>
                <hr class="my-4">
                <?php $this->ModifierIngredientsRecette($title,$id)?>  
                <hr class="my-4">
                <?php $this->ModifierEtapesRecette($title,$id)?> 
                <hr class="my-4">
            <?php    
        }

        function ModifierRecetteForm($recette){
            $title=$recette["TitleRecipie"];
            $description=$recette["DescriptionRecipie"];
            $category=$recette["Category"];
            $prepTime=$recette["PrepTime"];
            $cookTime=$recette["CookTime"];
            $restTime=$recette["RestTime"];
            $difficulty=$recette["Difficulty"];
            $id=$recette["IDRecipie"];
            ?>
            <form class="needs-validation" novalidate method="POST" action="./operations/modifierInfoRecette.php">
                <h3>Informations de la recette</h3>
                <div class="row g-3">
                    <div class="col-lg-4">
                        <label class="form-label">Titre</label>
                        <input name="titreRecette" type="text" class="form-control" value="<?php echo $title ?>" required>
                    </div>

                    <div class="col-lg-4">
                        <label class="form-label">Catégorie</label>
                        <select name="categorieRecette" class="form-select" aria-label="Default select example">
                            <option selected><?php echo $category?></option>
                            <option value="entreés">entrées</option>
                            <option value="plats">plats</option>
                            <option value="desserts">desserts</option>
                            <option value="boissons">boissons</option>
                        </select>
                    </div>

                    <div class="col-lg-8">
                        <label class="form-label">Description</label>
                        <textarea name="descriptionRecette" class="form-control" cols="30" rows="5" required><?php echo $description ?></textarea>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-lg-3">
                        <label class="form-label">Temps de préparation</label>
                        <input name="tempsPreparation" type="number" class="form-control" value=<?php echo $prepTime ?> required>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label">Temps de cuisson</label>
                        <input name="tempsCuisson" type="number" class="form-control" value=<?php echo $cookTime ?> required>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label">Temps de repos</label>
                        <input name="tempsRepos" type="number" class="form-control" value=<?php echo $restTime ?> required>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label">Difficulté</label>
                        <select name="difficulteRecette" class="form-select" aria-label="Default select example">
                            <option selected><?php echo $difficulty?></option>
                            <option value="Facile">Facile</option>
                            <option value="Moyenne">Moyenne</option>
                            <option value="Difficile">Difficile</option>
                        </select>
                    </div>
                </div>
                <input name="idRecette" type="hidden" value=<?php echo $id ?>>
                <input style="margin-top:2%" class="btn btn-primary btn-md" value="Modifier la recette" type="submit">
            </form>
            <?php 
        }

            function ModifierIngredientsRecette($title,$id){
                ?>
                <h3>Ingrédients de la recette</h3>
                <table class="table table-hover table-bordered " style="width: 60%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Unité</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        foreach($this->getRecipieIngredientsView($title) as $row){
                        ?>
                            <tr>
                                <form action="./operations/modifyIngredientInRecipie.php" method="POST">
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row["NameIngredient"]?></td>
                                    <td><input name="quantity" type="number" value=<?php echo $row["Quantity"]?>></td>
                                    <td><input name="unit" type="text" value="<?php echo $row["Unit"]?>"></td>
                                    <td style="width: 20%;">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <input type="hidden" name="IDRecipie" value=<?php echo $row["IDRecipie"] ?>>
                                            <input type="hidden" name="IDIngredient" value=<?php echo $row["IDIngredient"] ?>>
                                            <input type="submit" class="btn btn-warning" value="Modifier">
                                            <a href="./operations/deleteIngredientFromRecipie?IDRecipie=<?php echo $row["IDRecipie"] ?>&IDIngredient=<?php echo $row["IDIngredient"] ?>" type="button" class="btn btn-danger">Supprimer<i class="fa-solid fa-trash-can action-button"></i></a>
                                        </div> 
                                    </td> 
                                </form>
                            </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </tbody>
                </table>
                <form action="./operations/addIngredientToRecipie.php" method="POST">
                    <div class="row gy-3">
                        <h5>Ajouter un ingrédient à cette recette</h5>
                        <div class="col-lg-3">
                            <label class="form-label">Nom de l'ingrédient</label>
                            <select name="idIngredient" class="form-select" aria-label="Default select example">
                                <option selected>Choisir un ingrédient</option>
                                <?php
                                foreach($this->getIngredientsView() as $row){
                                    ?>
                                <option value=<?php echo $row["IDIngredient"]?>><?php echo $row["NameIngredient"]?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">Quantité</label>
                            <input name="quantityIngredient" type="text" class="form-control" value="" required>
                        </div>
                        <div class="col-lg-2">
                            <label class="form-label">Unité</label>
                            <input name="unitIngredient" type="text" class="form-control" value="" required>
                        </div> 
                    </div>
                    <input name="idRecette" type="hidden" value=<?php echo $id?>>
                    <input type="submit" style="margin-top:2%" class="btn btn-md btn-outline-secondary" value="Ajouter un ingrédient">
                </form>
                <?php
            }

            function ModifierEtapesRecette($title,$id){
                ?>
                <h3>Etapes de la recette</h3>
                <table class="table table-hover table-bordered " style="width: 60%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($this->getRecipieStepsView($title) as $row){
                        ?>
                            <tr>
                                <td><input type="text" value="<?php echo $row["StepOrder"]?>"></td>
                                <td><textarea cols="50" rows="4"><?php echo $row["DescriptionStep"]?></textarea></td>
                                <td style="width: 20%;"><a href="./operations/deleteStepFromRecipie?IDRecipie=<?php echo $row["IDRecipie"] ?>&IDStep=<?php echo $row["IDStep"] ?>" type="button" class="btn btn-sm btn-danger">Enlever de cette recette<i class="fa-solid fa-trash-can action-button"></i></a></td>    
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <form method="POST" action="./operations/addStepToRecipie.php">
                    <div class="row gy-3">
                        <h5>Ajouter une étape à cette recette</h5>
                        <div class="col-lg-2">
                            <label class="form-label">Numéro d'ordre</label>
                            <input name="order" type="number" class="form-control" value="" required>
                        </div>
                        <div class="col-lg-9">
                            <label class="form-label">Déscription</label><br>
                            <textarea name="descriptionStep" cols="70" rows="2"></textarea>
                        </div>
                    </div>
                    <input name="idRecette" type="hidden" value=<?php echo $id?>>
                    <input type="submit" class="btn btn-md btn-outline-secondary" value="Ajouter une étape">
                </form>
                <?php
            }
    }?>