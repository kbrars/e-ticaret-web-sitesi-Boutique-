
<?php
require_once 'baglanti.php';

if(isset($_GET['tamamlandi'])){

    $siparissil=$baglanti->prepare("DELETE from siparisler where siparis_id=:siparis_id");
 
    $siparissil->execute(array(
        'siparis_id'=>$_GET['id']
    ));
 
 if($siparissil){
     header("Location:../siparisler.php?durum=basarili");
 }
 else{
     header("Location:../siparisler.php?durum=basarisiz");
 }
 }
 