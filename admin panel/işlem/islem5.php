<?php
$baglan=mysqli_connect("localhost","root","","boutique");
if(!$baglan){
    die("connection failed:".mysqli_connect_error());
}
else{
    echo "baglanti basarili";
}

if(isset($_GET['urunekle'])){

    $sql="insert into urunekle(urun_fiyat) values ($_GET['urun_fiyat'])";

$sonuc=mysqli_query($baglan,$sql);






if($sonuc){
echo "veri gitii";
}
else{
   echo "veri gitmedi";
}

}







