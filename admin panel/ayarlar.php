<?php include 'adminheader.php'; 
require_once 'adminsidebar.php';

?>
  
  <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <div class="content-wrapper">

    <section class="content">
      <div class="container">
    
        <div class="row">


      
        <div class="card card-dark col-md-12">
              <div class="card-header">
                <h3 class=" card-title">Genel Ayarlar</h3>
<?php
if (@$_GET['yuklenme'])=="basar"


              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="işlem/işlem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" type="text" class="form-control"  placeholder="Lütfen site başlığını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama</label>
                    <input name="aciklama" type="text" class="form-control" placeholder="Lütfen sitenizin açıklamasını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                    <input name="anahtarkelime" type="text" class="form-control"  placeholder="Lütfen sitenizin anahtar kelimesini giriniz.">
                  </div>
                  
                    
  
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>










        
      
</div>

</div>
</section>
</div>

        
       

 
        
 <?php require_once 'adminfooter.php'?>

