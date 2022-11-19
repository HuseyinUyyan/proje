<?php
try {
   $db= new PDO("mysql:host=localhost; dbname=blog; charset=utf8", 'root', '');
   echo"Veritabanı baglantısı basarılı";
} catch (Exception $e) {
    echo $e->getMessage();
} 
?>