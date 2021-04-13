<?php session_start()?>
<?php require "config.php"?>
<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $con -> prepare("SELECT * FROM users WHERE email=? AND password=? AND groupid=0");
    $stmt -> execute(array($email , $password));
    $count = $stmt -> rowCount();
    $row = $stmt -> fetch();
    $in_DB = 1;
    if($count == $in_DB)
    {
        $_SESSION['USERID'] = $row['id'];
        $_SESSION['USERNAME'] = $row['username'];
        $_SESSION['GROUP_ID'] = $row['groupid'];
        header("location:requests.php");
        exit();
    }
    else
    {
        echo "<script>alert('Please, check email and password')</script>";
        exit();
    }
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
    <title>Login</title>

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
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
    </style>
</head>
<body class="text-center">
    
<main class="form-signin">
<div class="container">
<form method="post">
    <img class="mb-4" src="./public/img/Fairy-Clean.jpg" alt="" width="88" height="88">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating mb-3">
    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <a href="singup.php" class="mt-5 text-muted text-decoration-none">Apply for job?</a>
</form>
</div>
</main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
