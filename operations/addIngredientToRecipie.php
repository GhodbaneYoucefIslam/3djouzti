<?php
require_once("./../controller.php");
$idRecipie=$_POST["idRecette"];
$idIngredient=$_POST["idIngredient"];
$quantity=$_POST["quantityIngredient"];
$unit=$_POST["unitIngredient"];

$titleRecipie=$_POST["titleRecipie"];

$controller=new controller();
$controller->addIngredientToRecipieController($idRecipie,$idIngredient,$quantity,$unit);
header("location:./../modifierRecette.php?titleRecipie=".$titleRecipie);
?>