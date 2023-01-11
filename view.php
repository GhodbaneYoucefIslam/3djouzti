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

                    <!-- Bootstrap5 CSS -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <link rel="stylesheet" href="./styles/style.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                    <title><?php echo $PageTitle ?></title>
                </head>
            <?php   
        }

        function NavBar(){
            ?>
                <!-- navbar -->

                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <div class="container-fluid">
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
                            <a class="nav-link active" aria-current="page" href="#">News</a>
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
                            <a class="nav-link active" aria-current="page" href="./static screens/nutrition">Nutrition</a>
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
                    <h6><?php echo $quantity." ".$unit ?><span style="visibility: hidden;">1</span></h6>
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


        
    }?>