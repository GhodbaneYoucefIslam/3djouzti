<?php
require_once("./../controller.php");

$IDRecipie=$_POST["IDRecipie"];
$IDIngredient=$_POST["IDIngredient"];
$quantity=$_POST["quantity"];
$unit=$_POST["unit"];

$titleRecipie=$_POST["titleRecipie"];

$controller= new controller();
$controller->modifyIngredientInRecipieController($IDRecipie,$IDIngredient,$quantity,$unit);


header("location:./../modifierRecette.php?titleRecipie=".$titleRecipie);
?>