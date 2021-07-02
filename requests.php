<?php session_start()?>
<?php require "config.php"?>
<?php 
$do = "";
if(isset($_GET['do']))
{
    $do = $_GET['do'];
}
else
{
    $do = "manage";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Admin Pannel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
    </style>
</head>
<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <h3 style="color:white"><srtong>Hi, <?php echo $_SESSION['USERNAME']?></strong></h3>
    <a href="index.php" class="btn btn-danger">Logout
    </a>
    </div>
    </div>
    <div class="container">
    <?php
    $stmt = $con -> prepare("SELECT * FROM requests");
    $stmt -> execute();
    $count = $stmt->rowCount();
    $requests = $stmt -> fetchAll();
    ?>
    <?php 
    $in_DB = 1;
    if($count == $in_DB):?>
    <h1 class="text-center mt-5">Pending Requests</h1>
    <table class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Years of Experience</th>
            <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($requests as $request):?>
        <tr>
            <td><?php echo $request['username']?></td>
            <td><?php echo $request['email']?></td>
            <td><?php echo $request['age']?></td>
            <td><?php echo $request['experience'];?></td>
            <td>
                <a href="accept.php?id=<?php echo $request['id']?>" class="btn btn-success">Accpet</a >
                <a href="reject.php?id=<?php echo $request['id']?>" class="btn btn-danger">Reject</a >
            </td>
        </tr>
        <?php endforeach?>
        <?php else:?>
        <h3 class="text-center mt-3" style="color:red; font-weight:bold">No pending requests</h3>
        <?php endif?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
