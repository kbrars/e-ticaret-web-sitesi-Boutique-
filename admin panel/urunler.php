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
      <th scope="col">Ürün fotoğrafı</th>
      <th scope="col">Ürün kategori 1</th>
      <th scope="col">Ürün kategori 2</th>
   
      <th scope="col">Ürün açıklama</th>
      <th scope="col">Ürün fiyat</th>
      <th scope="col">Ürün durum</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $urunler = $baglanti->prepare("SELECT *FROM urunekle order by urun_id ASC");
    $urunler->execute();
    
    while(  $urunlercek = $urunler->fetch(PDO::FETCH_ASSOC)){ ?>
  
    <tr>
      <th scope="row"><?php echo  $urunlercek['urun_id'] ?></th>
      <td> <img style="width:30%;  "  src="<?php echo  $urunlercek['urun_foto'] ?>" alt=""> </td>
      <td><?php echo  $urunlercek['urun_kat1'] ?></td>
      <td><?php echo  $urunlercek['urun_kat2'] ?></td>
      
      <td><?php echo  $urunlercek['urun_aciklama'] ?></td>
      <td><?php echo  $urunlercek['urun_fiyat'] ?></td>
      <td> <a href="işlem/islem6.php?urunsil&id=<?php echo $urunlercek['urun_id']?>"><button name="urunsil" type="button" class="btn btn-danger">Sil</button></a></td>
    </tr>
   <?php }?>



  </tbody>
</table>
<div>
 <a href="urunekle.php"><button type="submit" class="btn btn-info  btn-lg" >Yeni Ürün Ekle</button></a>
 </div>


 