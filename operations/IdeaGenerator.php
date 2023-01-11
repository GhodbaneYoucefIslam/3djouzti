<?php
   require_once("./../controller.php");
   require_once("./../view.php");
   $view=new view();
   $IngredientNames =isset($_GET['list'])?$_GET['list']:'not yet';
   $NumberOfIngredients=count($IngredientNames)*0.7;
   $controller=new controller();
   $view=new view();
   foreach($controller->getRecipiesByIngredientListController($IngredientNames) as $row){
      //filtrage des recettes qui contiennent 70% et plus des ingrediants
      if ($row['count']>$NumberOfIngredients){
         $recipie=$view->getRecipieByTitleView($row["TitleRecipie"])->fetch();
         $view->RecipieCard($recipie);
      }
  }  
?>