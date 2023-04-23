
<?php
require_once 'baglanti.php';

if(isset($_POST['admingiris_yap'])){
$sifre=$_POST['kullanici_sifre'];
$guclusifre=md5($sifre);
$kullanici_adi=htmlspecialchars($_POST['kullanici_adi']);

$kullanici_sifre=htmlspecialchars($_POST['kullanici_sifre']);


$kullanicisor=$baglanti->prepare("SELECT *from kullanicihesabi where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre");
$kullanicisor->execute(array(
    'kullanici_adi' => $kullanici_adi,
    'kullanici_sifre'=>$guclusifre
 
));
$var=$kullanicisor->rowCount();

if($var>0){
    echo "kullanıcı var";  //kullanıcı var dediği zaman admin paneline bağlanma yapamadım,
    header("Location:../anasayfa.php?yuklenme=basarili");

}
else{
  
echo "kullanıcı yok";
}


}



