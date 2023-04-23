

<?php
require_once 'baglanti.php';

if(isset($_GET['musterisil'])){

$kullanicisil=$baglanti->prepare("DELETE from musteribilgi where m_id=:m_id");

$kullanicisil->execute(array(
    'm_id'=>$_GET['id']
));

if($kullanicisil){
 header("Location:../kullanicilar.php?durum=basarili");
}
else{
 header("Location:../kullanicilar.php?durum=basarisiz");
}
}