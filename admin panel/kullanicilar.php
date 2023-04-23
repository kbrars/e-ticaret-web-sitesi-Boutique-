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
      <th scope="col">E-mail</th>
      <th scope="col">Şifre</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
      <th scope="col">Cinsiyet</th>
      <th scope="col">Kayıt Tarihi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $musteriler = $baglanti->prepare("SELECT *FROM musteribilgi order by m_id ASC");
    $musteriler->execute();
    
    while(  $mustericek = $musteriler->fetch(PDO::FETCH_ASSOC)){ ?>
  
    <tr>
      <th scope="row"><?php echo  $mustericek['m_id'] ?></th>
      <td><?php echo  $mustericek['m_adisoyadi'] ?></td>
      <td><?php echo  $mustericek['m_mail'] ?></td>
      <td><?php echo  $mustericek['m_sifre'] ?></td>
      <td><?php echo  $mustericek['m_telefon'] ?></td>
      <td><?php echo  $mustericek['m_adres'] ?></td>
      <td><?php echo  $mustericek['m_cinsiyet'] ?></td>
      <td><?php echo  $mustericek['m_dtarihi'] ?></td>
      
      <td> <a href="işlem/işlem4.php?musterilerl&id=<?php echo $uyelercek['m_id']?>"></a></td>
    </tr>
   <?php }?>



  </tbody>
</table>



