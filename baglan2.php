<?php
try {
   $bd= new PDO("mysql:host=localhost; dbname=proje; charset=utf8", 'root', '');
   echo"Veritabanı baglantısı basarılı";
} catch (Exception $e) {
    echo $e->getMessage();
} 
?>