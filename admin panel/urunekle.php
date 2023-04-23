
<?php include 'adminheader.php'; 
require_once 'adminsidebar.php';
require_once 'işlem/baglanti.php';

?>


  <br>
    <div   class="content-wrapper">

    <section class="content">
      <div class="container">
    
        <div class="row">


      
        <div class="card card-dark col-md-12">
              <div class="card-header">
                <h3 class=" card-title">Ürün Ekle</h3>
                


              </div>
            
              <form action="urunekle.php" method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ürün fotoğtafı giriniz</label>
                    <input name="urun_foto" type="file" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori 1</label>
                  <select name="urun_kat1" id="">
<option name="urun_kat1" value="Kadın">Kadın</option>
<option name="urun_kat1" value="Erkek">Erkek</option>
<option name="urun_kat1" value="Çocuk">Çocuk</option>
<option name="urun_kat1" value="İndirim">İndirim</option>

                  </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori 2</label>
                  <select name="urun_kat2" id="">
<option name="urun_kat2" value="Pantalon">Pantalon</option>
<option name="urun_kat2" value="T-shirt">T-shirt</option>
<option name="urun_kat2" value="Sweatshirt">Sweatshirt</option>
<option name="urun_kat2" value="Ayakkabı">Ayakkabı</option>
<option name="urun_kat2" value="Çanta">Çanta</option>

                  </select>
                  </div>







                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ürün Açıklaması</label>
                    <input name="urun_aciklama" type="text" class="form-control" placeholder="Lütfen ürün açıklamasını giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fiyat</label>
                    <input name="urun_fiyat" type="text" class="form-control"  placeholder="Lütfen ürün fiyatını giriniz.">
                  </div>
                  
                  
                    
  
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button name="urunekle" type="submit" class="btn btn-info">Ürün ekle</button>
                </div>
              </form>
            </div>
   
    
</div>

</div>
</section>
</div>

<?php

if(isset($_FILES['urun_foto'])){
   $hata = $_FILES['urun_foto']['error'];
   if($hata != 0) {
      echo 'Yüklenirken bir hata gerçekleşmiş.';
   } else {
      $boyut = $_FILES['urun_foto']['size'];
      if($boyut > (1024*1024*3)){
         echo 'Dosya 3MB den büyük olamaz.';
      } else {
         $tip = $_FILES['urun_foto']['type'];
         $isim = $_FILES['urun_foto']['name'];
         $uzanti = explode('.', $isim);
         $uzanti = $uzanti[count($uzanti)-1];
         if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
         } else {
            $dosya = $_FILES['urun_foto']['tmp_name'];
            copy($dosya, 'eklenenresimler/'. $_FILES['urun_foto']['name']);
           
            echo 'Dosyanız upload edildi!';
         }
      }
   }
}
?>

<?php


if(isset($_POST['urunekle'])){

 
   $urun_kat1=$_POST['urun_kat1'];
   $urun_kat2=$_POST['urun_kat2'];
 
   $urun_aciklama=$_POST['urun_aciklama'];
   $urun_fiyat=$_POST['urun_fiyat'];
 
   $urun_ekle=$baglanti->prepare("INSERT INTO urunekle SET
 
 
   urun_foto=:urun_foto,
   urun_kat1=:urun_kat1,
   urun_kat2=:urun_kat2,

   urun_aciklama=:urun_aciklama,
   urun_fiyat=:urun_fiyat
 
 
 
   ");
   
   $insert= $urun_ekle->execute(array(
   
    'urun_foto'=> "eklenenresimler/" .$isim,
      'urun_kat1'=>$_POST['urun_kat1'],
      'urun_kat2'=>$_POST['urun_kat2'],
   
      'urun_aciklama'=>$_POST['urun_aciklama'],
      'urun_fiyat'=>$_POST['urun_fiyat']
      
   
   ));
       
     }
 
 ?>
