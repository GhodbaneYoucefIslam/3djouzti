<?php
require_once("./../controller.php");

$IDIngredient=$_GET["IDIngredient"];
$IDMicronutrient=$_GET['IDMicronutrient'];
$NameIngredient=$_GET["ingredient"];


$controller=new controller();
$controller->deleteMicronutrientFromIngredientController($IDIngredient,$IDMicronutrient);

header("location:./../gestionIngredient.php?ingredient=".$NameIngredient);
?>