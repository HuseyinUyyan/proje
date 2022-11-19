<?php
session_start();
ob_start();
include("baglan2.php");

include("kutuphane.php");
include("header.php");


?>

<head>
  <link rel="stylesheet" href="css/overlay.css">
</head>

<body>
  <style>
    body {
      background-color: whitesmoke;
    }
  </style>


  <!-- Unilancer Tanıtım -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 img-fluid"></div>
      <div class="col-md-6">
        <h1 class="animate__animated animate__bounceInRight"> Unılancer</h1>
        <p class="animate__animated animate__bounceInLeft">Lorem ipsum dolor sit amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit aspernatur accusamus necessitatibus voluptatum, dolore iusto?</p>
      </div>
    </div>
  </div>
  <!-- Neler Yapıyoruz -->








  <!-- Web Grafik Yazı -->

  <div class="container-fluid web">
    <?php
    $sorgu = $bd->prepare("SELECT * FROM `hizmet` WHERE id=1");
    $sorgu->execute();
    $row = $sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5 p-3">


        <h2><?php echo $row['ad']; ?></h2>
        <p> <?php echo $row['tanim']; ?> </p>
        <br>
        <p> <?php echo $row['aciklama']; ?> </p>
        <button>Detaylı Bilgi İçin..</button>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-4 p-3">
        <img src="videolar/sobesoft-calisma-1536x1025.jpg" alt="">
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
  
  <div class="container diger  ">
  
    <div class="row ">
    <?php
                $sorgu= $bd->prepare("SELECT * FROM `hizmet` ");
                $sorgu->execute();
                $rows=$sorgu->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row): ?>
      <div class="col-md-4">

        <div class="seo seo1">
          <i class="fa-solid fa-house fa-2x " style="color:#4169E1 ;"></i>
          <h3><?php echo $row['ad']; ?></h3>
          <p>
          <?php echo $row['tanim']; ?>  </p>
          <p style="font-size:larger ;">Detaylı Bilgi İçin Tıklayınız</p>
          <a href=""></a>

          </p>

        </div>
      </div>
<br><br>
   
      <?php endforeach ?>
    </div>
   
  </div>
  
 

  <div class="container-fluid grafik">
    <?php
    $sorgu = $bd->prepare("SELECT * FROM `hizmet` WHERE id=2");
    $sorgu->execute();
    $row = $sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-4 p-3">
        <img src="videolar/sobesoft-calisma-1536x1025.jpg" alt="">
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 p-3">
        <h2><?php echo $row['ad']; ?></h2>
        <p><?php echo $row['tanim']; ?></p>
        <br>
        <p><?php echo $row['aciklama']; ?></p>
        <button>Detaylı Bilgi İçin..</button>
      </div>

      <div class="col-md-1">

      </div>
    </div>
  </div>


  <!-- Diger Hizmetler Bitişi -->

  <!-- Örnek Projeler  -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="overlay-fade">
          <img src="images/huseyin.png">
          <div>
            <a href="#">Satın Al</a>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="overlay-fade">
          <img src="images/huseyin.png">
          <div>
            <a href="#">Satın Al</a>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="overlay-fade">
          <img src="images/huseyin.png">
          <div>
            <a href="#">Satın Al</a>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="overlay-fade">
          <img src="images/huseyin.png">
          <div>
            <a href="#">Satın Al</a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Örnek Projeler Bitişi -->




  <!-- Tercih Sebepleri -->
  <div class="container neden ">
    <h3 style="text-align:center ;"> Neden Unilancer?</h3>
    <p> Geleceğin "çalışma" modeliyle bugünden tanışın.</p>
    <div class="row ">
      <div class="col-md-4 ">
        <img src="videolar/contact-order_bi.png" alt="">
        <h3 class="neden-h3">Sınırsızlık, Özgürleştirir</h3>
        <p class="aciklama">Sınırsız düşünebilmen için bütün sınırları kaldırdık. Artık yalnızca bulunduğun bölgeden değil dünyanın her yerinden global yeteneklerle, özgürce çalışabilmen için...</p>
      </div>
      <div class="col-md-4 ">
        <img src="videolar/done_bi.png" alt="">
        <h3 class="neden-h3">Bakış Açını Genişlet</h3>
        <p class="aciklama">El elden, göz gözden üstündür. Hedef kitleni ne kadar genişletmek istersen, o kadar farklı gözle bakmayı öğrenirsin. Biz senin için her pencereyi açtık, bakmak sana kaldı.</p>
      </div>
      <div class="col-md-4 ">
        <img src="videolar/search_bi.png" alt="">
        <h3 class="neden-h3">Aklın Yolu Free</h3>
        <p class="aciklama">Becerikli bir işveren, kaynaklarını en verimli nasıl kullanacağını bilen iş verendir. Kaynaklarını olabildiğince verimli kullanmak adına freelancer’lara şans verin; göreceksin ki her akıl, her işe değer katar.</p>

      </div>
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
  <br><br><br>
  <div class="container neden">
    <div class="row">
      <h2>İletişim</h2>
    </div>
    <div class="row sebep">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_gfgnjnyb.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Mail:sanane0221@gmail.com</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_u3ascu0i.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>+90 552 804 7962</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_UgZWvP.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <p>Bir Tık Uzağınızda:)</p>
      </div>
    </div>
  </div>
  <!-- İletişim lottie  -->

  <?php
  include("footer.php");
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>