<?php
require_once("./../controller.php");
$idRecipie=$_POST["idRecette"];
$order=$_POST["order"];
$description=$_POST["descriptionStep"];

$controller=new controller();
$controller->addStepToRecipieController($idRecipie,$order,$description);
header("location:./../modifierRecette.php");
?>