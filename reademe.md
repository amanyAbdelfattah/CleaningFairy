<?php 
    $username = $_SESSION['applicantName'];
    $email = $_SESSION['applicantEmail'];
    $age = $_SESSION['applicantAge'];
    $exp = $_SESSION['applicantexp'];
test test
    $informations = array($username,$email,$age,$exp);
    ?>
    <?php foreach($informations as $information):?> 
    <?php endforeach?>