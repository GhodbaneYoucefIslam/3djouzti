<?php
require_once("./../controller.php");

$idMicronutrient=$_POST["IDMicronutrient"];
$idIngredient=$_POST['IDIngredient'];
$percentage=$_POST["DailyValue"];
$NameIngredient=$_POST["nameIngredient"];


$controller=new controller();
$controller->modifyMicronutrientInIngredientController($idIngredient,$idMicronutrient,$percentage);

header("location:./../gestionIngredient.php?ingredient=".$NameIngredient);
?>