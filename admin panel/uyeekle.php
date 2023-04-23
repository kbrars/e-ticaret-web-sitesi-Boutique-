<?php include 'adminheader.php'; 
require_once 'adminsidebar.php';
require_once 'işlem/işlem.php';

?>

<!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
  <br>
    <div   class="content-wrapper">

    <section class="content">
      <div class="container">
    
        <div class="row">


      
        <div class="card card-dark col-md-12">
              <div class="card-header">
                <h3 class=" card-title">Üye Ekle</h3>
                


              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="işlem/işlem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad-Soyad</label>
                    <input name="kullanici_adsoyad" type="text" class="form-control"  placeholder="Lütfen adınızı ve soyadınızı giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kullanıcı Adı</label>
                    <input name="kullanici_adi" type="text" class="form-control" placeholder="Lütfen kullanıcı adınızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input name="kullanici_sifre" type="password" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  
                  
                    
  
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button name="uyekaydet" type="submit" class="btn btn-info">Üye ekle</button>
                </div>
              </form>
            </div>










        
      
</div>

</div>
</section>
</div>

        
       

 
        
 <?php require_once 'adminfooter.php'?>
