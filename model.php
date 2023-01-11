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

        public function getIngredientByName($Name){
            $conn=$this->connexion($this->dbname,$this->servername,$this->username,$this->password);
            $sql= "SELECT * FROM ingredient WHERE NameIngredient=?";
            $args=array($Name);
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
    }
?>