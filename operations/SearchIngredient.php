<?php
   require_once("./../controller.php");
   require_once("./../view.php");
   $controller=new controller();
   $a =isset($_POST['name'])?$_POST['name']:'not yet';
   $ingredient= $controller->getIngredientByNameController($a);
   $name= $ingredient->fetch()["NameIngredient"];
   $category= $ingredient->fetch()["CategoryIngredient"];
   $isHealthy= $ingredient->fetch()["IsHealthy"];
   $calories=$ingredient->fetch()["CaloriesIngredient"];
   $carbs=$ingredient->fetch()["TotalCarbsIngredient"];
   $fat=$ingredient->fetch()["TotalFatIngredient"];
   $protien=$ingredient->fetch()["TotalProtienIngredient"];
   $view= new view();
   $view->IngredientInfoTitle($name,$category,$isHealthy);
      ?>
         <div class = "centerer">
         <div class='card  ingredient-nutrition-info'>
              <div class='card-header'><h3>Informations nutritionelles</h3></div>
              <div class='card-body'>
                  <h2>Calories: <?php echo $calories ?></h2>
                  <p>Glucides: <?php echo $carbs ?> g</p>
                  <p>Lipides: <?php echo $fat ?> g</p> 
                  <p>Protéines: <?php echo $protien ?> g</p>
                  <?php
                  foreach($controller->getIngredientByNameController($a) as $row){
                     $micronutrient=$controller->getMicronutrientByIDController($row["IDMicronutrient"])->fetch()["NameMicronutrient"];
                     ?>
                     <p><?php echo $micronutrient ?>: <?php echo $row["DailyValue"] ?> %</p>
                     <?php
                 }  
                  ?>
              </div>    
          </div>
         </div>
      <?php
?>