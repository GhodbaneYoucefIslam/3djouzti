<?php
require_once("./../controller.php");
$IDRecipie=$_GET["IDRecipie"];
$IDStep=$_GET["IDStep"];

$titleRecipie=$_GET["titleRecipie"];

$controller= new controller();
$controller->deleteStepFromRecipieController($IDRecipie,$IDStep);
header("location:./../modifierRecette.php?titleRecipie=".$titleRecipie);

?>