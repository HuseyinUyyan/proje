<?php
include("../kutuphane.php");
require '../baglan2.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kullanici.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="POST">
        <h3>Admin Panel</h3>

        <label for="username">E Posta </label>
        <input type="text" placeholder="E-Posta" id="username" name="eMail">

        <label for="password">Şifre</label>
        <input type="password" placeholder="Şifre" id="password" name="sifre">

        <button name="giris" type="submit">Giriş</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
        
    <?php
    $eMail=@$_POST["eMail"];
    $sifre=@$_POST["sifre"];

    $user = $bd->query("SELECT * FROM `admin` WHERE eMail='$eMail' AND sifre='$sifre'")->fetch();
    if ($user) {
        $_SESSION['user']=$user;
      header("location:adminpanel.php");
    }else {
    echo"Bilgiler Yanlış";
    
    }
    ?> 

    
   


</html>