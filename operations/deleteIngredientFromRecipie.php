<?php
require_once("./../controller.php");
$IDRecipie=$_GET["IDRecipie"];
$IDIngredient=$_GET["IDIngredient"];

$titleRecipie=$_GET["titleRecipie"];

$controller= new controller();
$controller->deleteIngredientFromRecipieController($IDRecipie,$IDIngredient);
header("location:./../modifierRecette.php?titleRecipie=".$titleRecipie);
?>