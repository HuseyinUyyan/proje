<?php

-require 'baglan.php';
include("kutuphane.php");
include("header.php");
?>
<div class="container">
  <div class="row">
  <?php
                $sorgu= $db->prepare("SELECT * FROM `post` ");
                $sorgu->execute();
                $rows=$sorgu->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row):?>
                
    
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">
            <h3><?php echo $row['baslik']; ?> </h3>
            <p><?php echo $row['aciklama']; ?> </p>
            <br>
            <p><?php echo $row['yazaId']; ?> </p>
            <br>
            <a href="yazilar.php?id=<?php echo $row['id']; ?>">Git</a>
            
          </div>
        </div>
      </div>

      <?php endforeach ?>
    
  </div>
</div>