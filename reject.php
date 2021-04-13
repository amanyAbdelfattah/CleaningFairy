<?php include "config.php"?>
<?php 
$id = $_GET['id'];
$stmt = $con -> prepare("DELETE FROM `requests` WHERE id  = $id");
$stmt  -> execute();
header("location:requests.php");
?>