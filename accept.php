<?php include "config.php";?>
<?php
$id = $_GET['id'];
$stmt = $con -> prepare("SELECT * FROM requests WHERE id = $id");
$stmt -> execute();
$users = $stmt -> fetchAll();
foreach($users as $user)
{
    $username = $user['username'];
    $password = $user['password'];
    $email = $user['email'];
    $stmt = $con -> prepare("INSERT INTO `users` (`id`, `username`, `password`, `email`, `groupid`) VALUES (NULL, '$username', '$password', '$email', 1)");
    $stmt -> execute();
    $stmt2 = $con -> prepare("DELETE FROM `requests` WHERE id  = $id");
    $stmt2  -> execute();
    header("location:requests.php");
}
?>