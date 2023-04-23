
<?php
require_once 'baglanti.php';

if(isset($_POST['uyekaydet'])){

$sifre=$_POST['kullanici_sifre'];
$guclusifre=md5($sifre);
$kullanici_adi=htmlspecialchars($_POST['kullanici_adi']);
$kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']);
$kullanici_sifre=htmlspecialchars($_POST['kullanici_sifre']);







$kullanicisor=$baglanti->prepare("SELECT *from kullanicihesabi where kullanici_adi=:kullanici_adi");
$kullanicisor->execute(array(
    'kullanici_adi' => $kullanici_adi,
 
));
$var=$kullanicisor->rowCount();

if($var>0){

}
else{

    $kullanici_ekle=$baglanti->prepare("INSERT INTO kullanicihesabi SET


kullanici_adsoyad=:kullanici_adsoyad,
kullanici_adi=:kullanici_adi,
kullanici_sifre=:kullanici_sifre
");

$insert= $kullanici_ekle->execute(array(

   'kullanici_adsoyad'=>$_POST['kullanici_adsoyad'],
   'kullanici_adi'=>$_POST['kullanici_adi'],
   'kullanici_sifre'=>$guclusifre
    

    
));
}





if($insert){
header("Location:../uyeler.php?yuklenme=basarili");
}
else{
    header("Location:../uyeler.php?yuklenme=basarisiz");
}

}



if(isset($_GET['kullanicisil'])){

   $kullanicisil=$baglanti->prepare("DELETE from kullanicihesabi where kullanici_id=:kullanici_id");

   $kullanicisil->execute(array(
       'kullanici_id'=>$_GET['id']
   ));

if($kullanicisil){
    header("Location:../uyeler.php?durum=basarili");
}
else{
    header("Location:../uyeler.php?durum=basarisiz");
}
}








