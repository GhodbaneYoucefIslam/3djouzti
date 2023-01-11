<?php
    require_once("model.php");
    require_once("view.php");
    class controller{

        public function getRecipiesByCategoryController($category){
            $model = new model();
            $result = $model->getRecipiesByCategoryModel($category);
            return $result;
        }

        public function getRecipieByTitleController($title){
            $model = new model();
            $result = $model->getRecipieByTitleModel($title);
            return $result;
        }

        public function getRecipieIngredientsController($title){
            $model = new model();
            $result = $model->getRecipieIngredientsModel($title);
            return $result;
        }

        public function getRecipieStepsController($title){
            $model = new model();
            $result = $model->getRecipieStepsModel($title);
            return $result;
        }

        public function getIngredientsController(){
            $model = new model();
            $result = $model->getIngredientsModel();
            return $result;
        }

        public function getRecipiesByIngredientListController($ingredientNames){
            $model = new model();
            $result = $model->getRecipiesByIngredientListModel($ingredientNames);
            return $result;
        }
    }
?>