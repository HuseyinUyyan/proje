<?php

ob_start();
include("baglan2.php");
include("kutuphane.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/kullanicikayit.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 background">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                  <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Kayıt Ol</h5>
                  <form action="" method="POST">

                    <div class="form-floating mb-3">
                      <input type="hidden" name="login" value="1001">
                      <input type="text" class="form-control"  name="adSoyad" placeholder="myusername" >
                      <label for="floatingInputUsername">Ad Soyad</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control"  name="eMail" placeholder="name@example.com">
                      <label for="floatingInputEmail">Email address</label>
                    </div>

                    <hr>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="telefonNo" placeholder="name@example.com">
                      <label for="floatingInputEmail">Telefon Numarası</label>
                    </div>

                    <hr>

                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="sifre" placeholder="Password">
                      <label for="floatingPassword">Şifre</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="password" class="form-control"  name="sifreTekrar" placeholder="Confirm Password">
                      <label for="floatingPasswordConfirm">Şifre Tekrar</label>
                    </div>

                    <div class="d-grid mb-2">
                      <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="kayitol">Giriş</button>
                    </div>

                    <a class="d-block text-center mt-2 small" href="kullanicigiris.php">Hesabınız Varmı? Giriş Yap</a>

                    <hr class="my-4">



                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>


</body>






</html>
<?php

$adSoyad        =@$_POST["adSoyad"];
  $eMail        =@$_POST["eMail"];
  $telefonNo    =@$_POST["telefonNo"];
  $sifre=       @$_POST["sifre"];
  $sifretekrar  =@$_POST["sifreTekrar"] ;

  

  if ($sifre==$sifretekrar) {
    $save = $bd->prepare("INSERT INTO musteri SET
  adSoyad      =:adSoyad,
  eMail        =:eMail,
  telefonNo   =:telefonNo,
  sifre        =:sifre
  ");

  $insert = $save->execute(
    array(
    "adSoyad"   => $adSoyad,
    "eMail"     => $eMail,
    "telefonNo"     => $telefonNo,
    "sifre"   => $sifre
  ));

  if ($insert) {
    echo "Form Kaydedildi.";
  } else {
    echo "Hata Var";
  }
  }else {
    echo"Bu mail adresi daha önceden kullanılmış";
  }

  
?>

