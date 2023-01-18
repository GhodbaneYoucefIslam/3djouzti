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
        public function getIngredientMicronutrientsByNameController($Name){
            $model = new model();
            $result = $model->getIngredientMicronutrientsByNameModel($Name);
            return $result;
        }

        public function getIngredientByNameController($ingredientName){
            $model = new model();
            $result = $model->getIngredientByNameModel($ingredientName);
            return $result;
        }

        public function getMicronutrientByIDController($ID){
            $model = new model();
            $result = $model->getMicronutrientByIDModel($ID);
            return $result;
        }

        public function getRecipiesInFestivityController($IDFestivity){
            $model = new model();
            $result = $model->getRecipiesInFestivityModel($IDFestivity);
            return $result;
        }

        public function getRecipiesAsNewsController(){
            $model = new model();
            $result = $model->getRecipiesAsNewsModel();
            return $result;
        }

        public function getNewsController(){
            $model = new model();
            $result = $model->getNewsModel();
            return $result;
        }

        function testInput($data) {
     
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function validateUserLoginController($email,$password){
            $email=$this->testInput($email);
            $password=$this->testInput($password);

            $model= new model();
            if($model->validateUserLoginModel($email,$password)==true){
                echo "<script language='javascript'>";
                echo "alert('Correct INFORMATION user')";
                echo "</script>"; 
            }else{
                echo "<script language='javascript'>";
                echo "alert('WRONG INFORMATION user')";
                echo "</script>";
            }
        }

        public function validateAdminLoginController($name,$password){
            $email=$this->testInput($name);
            $password=$this->testInput($password);

            $model= new model();
            if($model->validateAdminLoginModel($name,$password)==true){
                header("location:./../admin.php");
            }else{
                echo "<script language='javascript'>";
                echo "alert('WRONG INFORMATION admin')";
                echo "</script>";
            }
        }

        public function getAprrovedRecipiesController(){
            $model = new model();
            $result = $model->getAprrovedRecipiesModel();
            return $result;
        }

        public function deleteRecipieController($id){
            $model = new model();
            $result = $model->deleteRecipieModel($id);
            return $result;
        }

        public function modifyRecipieController($title,$category,$description,$prepTime,$cookTime,$restTime,$difficulty,$id){
            $model = new model();
            $result = $model->modifyRecipieModel($title,$category,$description,$prepTime,$cookTime,$restTime,$difficulty,$id);
            return $result;
        }

        public function addIngredientToRecipieController($idRecipie,$idIngredient,$quantity,$unit){
            $model = new model();
            $result = $model->addIngredientToRecipieModel($idRecipie,$idIngredient,$quantity,$unit);
            return $result;
        }

        public function addStepToRecipieController($idRecipie,$order,$description){
            $model = new model();
            $result = $model->addStepToRecipieModel($idRecipie,$order,$description);
            return $result;
        }

        public function deleteStepFromRecipieController($IDRecipie,$IDStep){
            $model = new model();
            $result = $model->deleteStepFromRecipieModel($IDRecipie,$IDStep);
            return $result;
        }

        public function deleteIngredientFromRecipieController($IDRecipie,$IDIngredient){
            $model = new model();
            $result = $model->deleteIngredientFromRecipieModel($IDRecipie,$IDIngredient);
            return $result;
        }

        public function modifyIngredientInRecipieController($IDRecipie,$IDIngredient,$quantity,$unit){
            $model = new model();
            $result = $model->modifyIngredientInRecipieModel($IDRecipie,$IDIngredient,$quantity,$unit);
            return $result;
        }

        public function modifyStepInRecipieController($IDRecipie,$IDStep,$description,$order){
            $model = new model();
            $result = $model->modifyStepInRecipieModel($IDRecipie,$IDStep,$description,$order);
            return $result;
        }

        public function modifyIngredientController($IDIngredient,$NameIngredient,$Season,$CategoryIngredient,$IsHealthy,$CaloriesIngredient,$FatsIngredient,$CarbsIngredient,$ProtienIngredient){
            $model = new model();
            $result = $model->modifyIngredientModel($IDIngredient,$NameIngredient,$Season,$CategoryIngredient,$IsHealthy,$CaloriesIngredient,$FatsIngredient,$CarbsIngredient,$ProtienIngredient);
            return $result;
        }

        public function addMicronutrientController($micronutrientName,$type,$percentage,$NameIngredient){
            $model = new model();
            $result = $model->addMicronutrientModel($micronutrientName,$type,$percentage,$NameIngredient);
            return $result;
        }

        public function modifyMicronutrientInIngredientController($idIngredient,$idMicronutrient,$percentage){
            $model = new model();
            $result = $model->modifyMicronutrientInIngredientModel($idIngredient,$idMicronutrient,$percentage);
            return $result;
        }

        public function deleteMicronutrientFromIngredientController($IDIngredient,$IDMicronutrient){
            $model = new model();
            $result = $model->deleteMicronutrientFromIngredientModel($IDIngredient,$IDMicronutrient);
            return $result;
        }
    }
?>