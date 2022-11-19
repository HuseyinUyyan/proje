<?php
include("baglan2.php");
include("kutuphane.php");
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/overlay.css">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <title>Hakkımızda</title>
</head>

<body style="background-color:whitesmoke ;">


  <div class="container hak">
    <div class="row">
      <img src="images/logo.png" alt="">
      <h2>Unilancer/Hakkımızda</h2>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4>&rarr; Biz Kimiz?
          
        </h4>
        <?php
                $sorgu= $bd->prepare("SELECT * FROM `hakkimizda` where id=1 ");
                $sorgu->execute();
                $row = $sorgu->fetchAll(PDO::FETCH_ASSOC);
                ?>
        <p> <?php echo $row['biz']; ?></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4>&rarr; Neden Biz</h4>
        <p> <?php echo $row['neden']; ?></p>
      </div>
    </div>
    <br><br><br><br><br>
    <div class="row">


      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4>&rarr; Biz Kimiz</h4>
        <p> <?php echo $row['misyon']; ?></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4>&rarr; Bize Katılın</h4>
        <p> <?php echo $row['bize']; ?></p>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <button><a href="#">Bize Katılın</a></button>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_tx07bxt8.json" background="whitesmoke" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
    <?php
                $sorgu= $bd->prepare("SELECT * FROM `calisanlar` ");
                $sorgu->execute();
                $rows=$sorgu->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row): ?>
      <div class="col-md-3">
        <div class="overlay-slide">
          <img src="https://via.placeholder.com/220x280">
          <div>
            <h2><?php echo $row['ad_soyad']; ?></h2>
            <p><?php echo $row['calisan_aciklama']; ?></p>
          </div>
        </div>
      </div>
     
  
     
    </div>
    <?php endforeach ?>

  </div>
  </div>
  <div class="container neden ">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>Neden Unilancer?</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <lottie-player class="lottie" src="https://assets10.lottiefiles.com/packages/lf20_ygqrrhc4.json" background="transparent" speed="1" style="width: 250px; height: 150px;" loop autoplay></lottie-player>
      </div>
    </div>
    <div class="row sebep">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_sKosyw.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Uzman ve güvenilir bir yol arkadaşı</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_x7n9if7n.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Geniş acente ve banka kanalı ile kolay erişilebilir</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_bq9xezfr.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Hızlı ve yüksek standartlarda hizmet</p>
      </div>
    </div>
    <div class="row sebep">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_zzbz9na6.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Her ihtiyacınıza yönelik paranızın karşılığını veren geniş ürün skalası</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_x3iibsyx.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Yenilikçi anlayışıyla tasarım sektöründe öncü, global bir lider</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_bdlrkrqv.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Sürekli iyileştirilen dijital çözümler ile her zaman yanınızda</p>
      </div>
    </div>
  </div>



  <?php
  include("footer.php");
  ?>
</body>

</html>