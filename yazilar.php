
<?php
$id= htmlspecialchars($_GET['id']);
echo $id;
ob_start();

require 'baglan.php';
include("kutuphane.php");
include("header.php");
?>
<?php 
  
            $getir= $db->prepare("SELECT * FROM `post` WHERE id= '$id' ");
             $getir->execute();
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css">
    <title>Document</title>
</head>

<body>
   <div class="container">
   <?php 
             
             $yaz2 = $getir->fetch(PDO::FETCH_ASSOC);
            
                 ?>
    <div class="row">
    
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <h3><?php echo $yaz2['baslik']; ?></h3>
          </div>
          <div class="col-md-6"> <?php echo $yaz2['id']; ?></div>
        </div>
        <img src=" <?php echo $yaz2['photo']; ?>" alt="">
        <h2> <?php echo $yaz2['aciklama']; ?></h2>
        <br>
        <h3> <?php echo $yaz2['body']; ?></h3>
        <br>
        <p> <?php echo $yaz2['tarih']; ?></p>
      </div>
      <div class="col-md-2"></div>
     
    </div>
   </div> -->

    

</body>

</html>