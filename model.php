<?php
    require_once("controller.php");
    class model{
        private $servername = "localhost:3306";
        private $dbname = "projetdb";
        private $username = "root";
        private $password = "";

        private function connexion($dbname,$servername,$username,$password)
        {
                try{
                    $conn = new PDO(
                        "mysql:host=$servername; dbname=$dbname",
                        $username, $password
                    );
                    
                $conn->setAttribute(PDO::ATTR_ERRMODE,
                                PDO::ERRMODE_EXCEPTION);
                $conn->exec("set names utf8mb4");
            }
                
                catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                exit();
                }
                return $conn;
        }

        private function deconnexion(&$conn){
            $conn=null;
        }

        private function sqlQuery($conn,$sql,$args=[]){
            $query=$conn->prepare($sql);
             
            $query->execute($args);
            return $query;
        }

        public function getRecipiesByCategoryModel($category){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM recipie WHERE Category=?";
            $args=array($category);
            $query = $this->sqlQuery($conn,$sql,$args); 
            $this->deconnexion($conn);
            return $query;
        }

        public function getRecipieByTitleModel($title){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM recipie WHERE TitleRecipie=?";
            $args=array($title);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getRecipieIngredientsModel($title){
            $recipieResults=$this->getRecipieByTitleModel($title);
            $recipie= $recipieResults->fetch();
            $recipieID=$recipie["IDRecipie"];
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM ingredientinrecipie INNER JOIN ingredient ON ingredientinrecipie.IDIngredient=ingredient.IDIngredient WHERE IDRecipie= $recipieID";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getRecipieStepsModel($title){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM step INNER JOIN recipie ON step.IDRecipie=recipie.IDRecipie WHERE TitleRecipie=? ORDER BY StepOrder ";
            $args=array($title);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function sortRecipiesByColumn($column){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM recipie ORDER BY ? ";
            $args=array($column);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getIngredientsModel(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM ingredient";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getIngredientMicronutrientsByNameModel($Name){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM ingredient INNER JOIN micronutrientiningredient ON ingredient.IDIngredient=micronutrientiningredient.IDIngredient WHERE NameIngredient=?";
            $args=array($Name);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getIngredientByNameModel($ingredientName){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM ingredient WHERE NameIngredient=?";
            $args=array($ingredientName);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function getRecipiesByIngredientListModel($ingredientNames){

            //get a table that contains the ingredient IDs from their names

            $InnerSql="SELECT IDIngredient FROM ingredient WHERE NameIngredient IN (";
            foreach ($ingredientNames as $ingredientName) {
            $InnerSql=$InnerSql."?,";
            }

            $InnerSql=substr($InnerSql, 0, -1).")";


            //*getting the recipies that contain the ingredient IDs of the ingredients in the list
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT COUNT(IDIngredient) AS count, TitleRecipie FROM recipie INNER JOIN ingredientinrecipie ON ingredientinrecipie.IDRecipie=recipie.IDRecipie WHERE IDIngredient IN ( $InnerSql) GROUP BY TitleRecipie";
            $args=$ingredientNames;
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getMicronutrientByIDModel($ID){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM micronutrient WHERE IDMicronutrient=?";
            $args=[$ID];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getRecipiesInFestivityModel($IDFestivity){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM recipie INNER JOIN recipieinfestivity ON recipie.IDRecipie=recipieinfestivity.IDRecipie WHERE IDFestivity=?";
            $args=[$IDFestivity];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getRecipiesAsNewsModel(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT TitleRecipie AS Title, DescriptionRecipie AS Content FROM recipie ";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getNewsModel(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT TitleNews AS Title, DescriptionNews AS Content, ImageLinkNews, VideoLinkNews FROM news";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function getUsers(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM user ";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function validateUserLoginModel($email,$password){
            $query=$this->getUsers();
            $users = $query->fetchAll();
        
            foreach($users as $user) {
                
                if(($user['email'] == $email) &&
                    ($user['Password'] == $password)) {
                        return true;
                }
                else {
                    return false;
                }
            }
        }

        public function getAdmins(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM admin ";
            $args=[];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function validateAdminLoginModel($name,$password){
            $query=$this->getAdmins();
            $admins = $query->fetchAll();
        
            foreach($admins as $admin) {
                
                if(($admin['NameAdmin'] == $name) &&
                    ($admin['Password'] == $password)) {
                        return true;
                }
                else {
                    return false;
                }
            }
        }

        public function getAprrovedRecipiesModel(){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM recipie WHERE IsApproved=? ORDER BY IDRecipie ";
            $args=[1];
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function deleteRecipieModel($id){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "DELETE FROM recipie WHERE IDRecipie=? ";
            $args=[$id];
            $query = $this->sqlQuery($conn,$sql,$args);
            //delete recipie ingredients---------
            $sql= "DELETE FROM ingredientinrecipie WHERE IDRecipie=? ";
            $args=[$id];
            $query = $this->sqlQuery($conn,$sql,$args); 
            //delete recipie steps---------   
            $sql= "DELETE FROM step WHERE IDRecipie=? ";
            $args=[$id];
            $query = $this->sqlQuery($conn,$sql,$args);
            //delete recipie cooking methods---------   
            $sql= "DELETE FROM cookingmethodinrecipie WHERE IDRecipie=? ";
            $args=[$id];
            $query = $this->sqlQuery($conn,$sql,$args); 
            //delete recipie festivities---------   
            $sql= "DELETE FROM recipieinfestivity WHERE IDRecipie=? ";
            $args=[$id];
            $query = $this->sqlQuery($conn,$sql,$args);

            //disconnect
            $this->deconnexion($conn);
            return $query; 
        }

        public function modifyRecipieModel($title,$category,$description,$prepTime,$cookTime,$restTime,$difficulty,$id){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "UPDATE recipie SET `TitleRecipie`=?,`Category`=?, `DescriptionRecipie`=?, `PrepTime`=?,`CookTime`=?, `RestTime`=?, `Difficulty`=? WHERE `IDRecipie`=?";
            $args=array($title,$category,$description,$prepTime,$cookTime,$restTime,$difficulty,$id);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function addIngredientToRecipieModel($idRecipie,$idIngredient,$quantity,$unit){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "INSERT INTO `IngredientInRecipie` (`IDRecipie`, `IDIngredient`, `Quantity`, `Unit`) VALUES
            (?, ?, ?, ?)";
            $args=array($idRecipie,$idIngredient,$quantity,$unit);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function addStepToRecipieModel($idRecipie,$order,$description){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "INSERT INTO `step` (`IDRecipie`,`StepOrder`,`DescriptionStep`) VALUES
            (?, ?, ?)";
            $args=array($idRecipie,$order,$description);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query;
        }

        public function deleteStepFromRecipieModel($IDRecipie,$IDStep){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "DELETE FROM step WHERE IDRecipie=? AND IDStep=? ";
            $args=array($IDRecipie,$IDStep);
            $query = $this->sqlQuery($conn,$sql,$args);
            $this->deconnexion($conn);
            return $query;
        }

        public function deleteIngredientFromRecipieModel($IDRecipie,$IDIngredient){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "DELETE FROM IngredientInRecipie WHERE IDRecipie=? AND IDIngredient=? ";
            $args=array($IDRecipie,$IDIngredient);
            $query = $this->sqlQuery($conn,$sql,$args);
            $this->deconnexion($conn);
            return $query;
        }

        public function modifyIngredientInRecipieModel($IDRecipie,$IDIngredient,$quantity,$unit){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "UPDATE ingredientinrecipie SET `Quantity`=?,`Unit`=? WHERE `IDRecipie`=? AND IDIngredient=? ";
            $args=array($quantity,$unit,$IDRecipie,$IDIngredient);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function modifyStepInRecipieModel($IDRecipie,$IDStep,$description,$order){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "UPDATE step SET `StepOrder`=?,`DescriptionStep`=? WHERE `IDRecipie`=? AND IDStep=? ";
            $args=array($order,$description,$IDRecipie,$IDStep);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function modifyIngredientModel($IDIngredient,$NameIngredient,$Season,$CategoryIngredient,$IsHealthy,$CaloriesIngredient,$FatsIngredient,$CarbsIngredient,$ProtienIngredient){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "UPDATE ingredient SET `NameIngredient`=?,`Season`=?,`CategoryIngredient`=?,`IsHealthy`=?,`CaloriesIngredient`=?,`TotalFatIngredient`=?,`TotalCarbsIngredient`=?,`TotalProtienIngredient`=? WHERE `IDIngredient`=? ";
            $args=array($NameIngredient,$Season,$CategoryIngredient,$IsHealthy,$CaloriesIngredient,$FatsIngredient,$CarbsIngredient,$ProtienIngredient,$IDIngredient);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function getMicronutrientByNameModel($name){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM micronutrient WHERE NameMicronutrient=?";
            $args=array($name);
            $query = $this->sqlQuery($conn,$sql,$args); 
            $this->deconnexion($conn);
            return $query;
        }

        public function addMicronutrientModel($micronutrientName,$type,$percentage,$NameIngredient){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            //adding the micronutrient itself-----------
            $sql= "INSERT INTO `Micronutrient` (`NameMicronutrient`, `Type`) VALUES
            (?, ?)";
            $args=array($micronutrientName,$type);
            $query = $this->sqlQuery($conn,$sql,$args); 
            //adding the micronutrient to the ingredient 
            $idIngredient=$this->getIngredientByNameModel($NameIngredient)->fetch()["IDIngredient"];
            $idMicronutrient=$this->getMicronutrientByNameModel($micronutrientName)->fetch()["IDMicronutrient"];
            $sql= "INSERT INTO `MicronutrientInIngredient` (`IDMicronutrient`, `IDIngredient`,`DailyValue`) VALUES
            (?, ?, ?)";
            $args=array($idMicronutrient,$idIngredient,$percentage);
            $query = $this->sqlQuery($conn,$sql,$args); 
            $this->deconnexion($conn);
            return $query; 
        }

        public function modifyMicronutrientInIngredientModel($idIngredient,$idMicronutrient,$percentage){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "UPDATE micronutrientiningredient SET `DailyValue`=? WHERE `IDIngredient`=? AND `IDMicronutrient`=?";
            $args=array($percentage,$idIngredient,$idMicronutrient);
            $query = $this->sqlQuery($conn,$sql,$args);  
            $this->deconnexion($conn);
            return $query; 
        }

        public function deleteMicronutrientFromIngredientModel($IDIngredient,$IDMicronutrient){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "DELETE FROM micronutrientiningredient WHERE IDIngredient=? AND IDMicronutrient=? ";
            $args=array($IDIngredient,$IDMicronutrient);
            $query = $this->sqlQuery($conn,$sql,$args);
            $this->deconnexion($conn);
            return $query;
        }
    }
?>