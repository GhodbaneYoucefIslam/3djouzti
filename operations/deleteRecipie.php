<?php
require_once("./../controller.php");
?>
<script>
    alert("Etes vous sur de supprimer la recette <?php echo $_GET['id'] ?>")
</script>
<?php
$controller= new controller();
$controller->deleteRecipieController($_GET['id']);
header("location:./../admin.php");
?>