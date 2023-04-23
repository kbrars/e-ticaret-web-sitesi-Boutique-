<?php include 'adminheader.php'; 
require_once 'adminsidebar.php';
require_once 'işlem/baglanti.php';


?>


 <div class="content-wrapper">
 
<section class="content">
  
  <div class="container">
    
<div class="row">

<table class="table">
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Şifre</th>
      <th scope="col">Durum</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $uyeler = $baglanti->prepare("SELECT *FROM kullanicihesabi order by kullanici_id ASC");
    $uyeler->execute();
    
    while(  $uyelercek = $uyeler->fetch(PDO::FETCH_ASSOC)){ ?>
  
    <tr>
      <th scope="row"><?php echo  $uyelercek['kullanici_id'] ?></th>
      <td><?php echo  $uyelercek['kullanici_adsoyad'] ?></td>
      <td><?php echo  $uyelercek['kullanici_adi'] ?></td>
      <td><?php echo  $uyelercek['kullanici_sifre'] ?></td>
      <td> <a href="işlem/işlem.php?kullanicisil&id=<?php echo $uyelercek['kullanici_id']?>"><button type="button" class="btn btn-danger">Sil</button></a></td>
    </tr>
   <?php }?>



  </tbody>
</table>
<div>
 <a href="uyeekle.php"><button type="submit" class="btn btn-info  btn-lg" >Yeni Kullanıcı Ekle</button></a>
 </div>


