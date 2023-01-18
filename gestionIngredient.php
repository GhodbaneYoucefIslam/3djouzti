<?php
require_once("view.php");
$view= new view();
$ingredientName=$_GET["ingredient"];
$view->IndexGestionIngredient($ingredientName,4);
?>