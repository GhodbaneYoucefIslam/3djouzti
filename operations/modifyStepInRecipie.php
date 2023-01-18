<?php
require_once("./../controller.php");
$IDRecipie=$_POST["IDRecipie"];
$IDStep=$_POST["IDStep"];
$description=$_POST["descriptionStep"];
$order=$_POST["order"];

$titleRecipie=$_POST["titleRecipie"];

$controller= new controller();
$controller->modifyStepInRecipieController($IDRecipie,$IDStep,$description,$order);
header("location:./../modifierRecette.php?titleRecipie=".$titleRecipie);
?>