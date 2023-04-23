<?php require_once 'projemislem/baglanti.php'; 

session_start();
if (isset($_SESSION['m_id']) && isset($_SESSION['m_mail'])) {

 ?>

<header>
<div class="menu">

<a href="uyesayfasi.php"><div style="width:11%" class="menubasliklari">  <p>BOUTİQUE</p> </div></a>
  <div style="width:10%" class="menubasliklari"> <p>Kadın</p> 
    <ul>
      <li class="cv"><a href="uyesayfasikadintshirt.php">T-shirt</a></li>
      <li class="cv"><a href="uyesayfasikadinsweat.php">Sweatshirt </a></li>
      <li class="cv"><a href="uyesayfasikadinpantalon.php">Pantalon/Etek</a></li>
      <li class="cv"><a href="uyesayfasikadinayakkabi.php">Ayakkabı/Bot</a></li>
      <li class="cv"><a href="uyesayfasikadincanta.php">Çanta</a></li>

</ul>
  
  </div>
  <div style="width:10%" class="menubasliklari"><p>Erkek</p> 
    <ul>
      <li class="cv"><a href="uyesayfasierkektshirt.php">T-shirt</a></li>
      <li class="cv"><a href="uyesayfasierkeksweat.php">Kazak/Sweetshirt </a></li>
      <li class="cv"><a href="uyesayfasierkekpantalon.php">Pantalon</a></li>
      <li class="cv"><a href="uyesayfasierkekayakkabi.php">Ayakkabı/Bot</a></li>
      <li class="cv"><a href="uyesayfasierkekcanta.php">Çanta</a></li>
  
  </ul>
  </div>
  <div style="width:10%" class="menubasliklari"><p>Çocuk</p>
    <ul>
      <li class="cv"><a href="uyesayfasicocuktshirt.php">T-shirt</a></li>  
      <li class="cv"><a href="uyesayfasicocuksweat.php">Kazak/Sweetshirt </a></li>
      <li class="cv"><a href="uyesayfasicocukpantalon.php">Pantalon/Etek</a></li>
      <li class="cv"><a href="uyesayfasicocukayakkabi.php">Ayakkabı/Bot</a></li>
      <li class="cv"><a href="uyesayfasicocukcanta.php">Çanta</a></li>
  
  </ul>
  </div>
  <div style="width:10%" class="menubasliklari"> <a href="uyesayfasiindirim.php"><p>İndirimdekiler</p> </a> </div>
  <div style="width:17%" id="aramalani" class="menubasliklari"><input placeholder="Aradığınız ürünü giriniz." class="aramatext" type="text"> 
  <a href=""><i style="font-size:20px;" class="fas fa-search"></i> </a>
  </div>
  <div style="width:11%" class="menubasliklari"> <a href="sepet.php"> <p>Sepetim<i class="fas fa-shopping-cart "></i></p> </a> </div>
  <div style="width:11%" class="menubasliklari"> <a href="uyelik_islemleri/cikis.php"> <p>Çıkış Yap <i class="fas fa-sign-out-alt"></i></p></a>  </div>

<div style="width:7%; margin-top:7px; " class="menubasliklari"><a href="profil.php"><p><?php echo $_SESSION['m_adisoyadi'];} ?></p></a>  </div>

</div>


  </header>   



