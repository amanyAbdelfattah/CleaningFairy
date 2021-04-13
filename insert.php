<?php session_start()?>
<?php require "config.php"?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $applicantName = $_POST['applicantName'];
    $applicantEmail = $_POST['applicantEmail'];
    $applicantPass = $_POST['applicantPass'];
    $applicantAge = $_POST['applicantAge'];
    $applicantExp = $_POST['applicantexp'];
    $stmt = $con -> prepare("INSERT INTO requests (username,email,password,age,experience) VALUES (?,?,?,?,?)");
    $stmt -> execute(array($applicantName,$applicantEmail,$applicantPass,$applicantAge,$applicantExp));
    header("location:singup.php");
}
?>