<?php session_start()?>
<?php require "config.php"?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $_SESSION['applicantName'] = $_POST['applicantName'];
    $_SESSION['applicantEmail'] = $_POST['applicantEmail'];
    $_SESSION['applicantPass'] = $_POST['applicantPass'];
    $_SESSION['applicantAge'] = $_POST['applicantAge'];
    $_SESSION['applicantexp'] = $_POST['applicantexp'];
    echo "<script>alert('Your request has been submited successfully')</script>";
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
    <title>Signin</title>

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
<form method="post" action="insert.php">
    <img class="mb-4" src="./public/img/Fairy-Clean.jpg" alt="" width="88" height="88">
    <h1 class="h3 mb-3 fw-normal">Please Enter Your Data</h1>

    <div class="form-floating mb-3">
    <input name="applicantName" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Fullname</label>
    </div>
    <div class="form-floating mb-3">
    <input name="applicantEmail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
    <input name="applicantPass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
    <input name="applicantAge" type="text" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Age</label>
    </div>
    <div class="form-floating mb-3">
    <input name="applicantexp" type="text" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Years of Experience</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
</form>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
