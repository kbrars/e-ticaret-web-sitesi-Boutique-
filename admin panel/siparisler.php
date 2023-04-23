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
      
      <th scope="col">Ürün Foto</th>
      
      <th scope="col">Ürün Kat1</th>
      <th scope="col">Ürün Kat2</th>
      <th scope="col">Ürün Açıklama</th>
      <th scope="col">Ürün Fiyat</th>
      <th scope="col">İsim Soyad</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
      <th scope="col">Durum</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $siparisler = $baglanti->prepare("SELECT *FROM siparisler order by  siparis_id ASC");
    $siparisler->execute();
    
    while(  $sipariscek = $siparisler->fetch(PDO::FETCH_ASSOC)){ ?>
  
    <tr>
      <th scope="row"><?php echo  $sipariscek['siparis_id'] ?></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo  $sipariscek['sepet_id'] ?></td>
      <td><?php echo $sipariscek['durumu'] ?></td>
     
      <td> <a href="işlem/islem7.php?tamamlandi&id=<?php echo $sipariscek['siparis_id']?>"><button  type="button" class="btn btn-danger">Tamamlandı</button></a></td>
    </tr>
   <?php }?>



  </tbody>
</table>



