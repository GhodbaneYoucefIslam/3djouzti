<?php
require_once("./../controller.php");

$NameIngredient=$_POST["NameIngredient"];
$Seasons=$_POST['favorite_pet'];
$CategoryIngredient=$_POST["CategoryIngredient"];
$IsHealthy=$_POST["IsHealthy"];
$CaloriesIngredient=$_POST["CaloriesIngredient"];
$FatsIngredient=$_POST["FatsIngredient"];
$CarbsIngredient=$_POST["CarbsIngredient"];
$ProtienIngredient=$_POST["ProtienIngredient"];
$IDIngredient=$_POST["IDIngredient"];

$Season="";
$N= count($Seasons);
for ($i=0;$i<$N;$i++){
    echo $Seasons[$i];
    $Season=$Season."/".$Seasons[$i];
}

$controller=new controller();
$controller->modifyIngredientController($IDIngredient,$NameIngredient,$Season,$CategoryIngredient,$IsHealthy,$CaloriesIngredient,$FatsIngredient,$CarbsIngredient,$ProtienIngredient);

header("location:./../gestionIngredient.php?ingredient=".$NameIngredient);

?>