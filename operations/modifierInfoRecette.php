<?php
require_once("./../controller.php");

$title=$_POST["titreRecette"];
$category=$_POST["categorieRecette"];
$description=$_POST["descriptionRecette"];
$prepTime=$_POST["tempsPreparation"];
$cookTime=$_POST["tempsCuisson"];
$restTime=$_POST["tempsRepos"];
$difficulty=$_POST["difficulteRecette"];
$id=$_POST["idRecette"];

$controller=new controller();
$controller->modifyRecipieController($title,$category,$description,$prepTime,$cookTime,$restTime,$difficulty,$id);

header("location:./../modifierRecette.php?titleRecipie=".$title);

?>