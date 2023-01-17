<?php
require_once("./../controller.php");
$controller=new controller();
if($_POST["isAdmin"]=="YES"){
    $controller->validateAdminLoginController($_POST["email"],$_POST["password"]);
}else{
    $controller->validateUserLoginController($_POST["email"],$_POST["password"]);
}
?>