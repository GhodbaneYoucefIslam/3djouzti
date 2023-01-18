<?php
require_once("./../controller.php");

$micronutrientName=$_POST["micronutrientName"];
$type=$_POST['micronutrientType'];
$percentage=$_POST["percentage"];
$NameIngredient=$_POST["nameIngredient"];


$controller=new controller();
$controller->addMicronutrientController($micronutrientName,$type,$percentage,$NameIngredient);

header("location:./../gestionIngredient.php?ingredient=".$NameIngredient);
?>