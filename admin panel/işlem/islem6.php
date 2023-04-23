

 <?php



require_once 'baglanti.php';




if(isset($_GET['urunsil'])){

    $urunsil=$baglanti->prepare("DELETE from urunekle where urun_id=:urun_id");
    
    $urunsil->execute(array(
        'urun_id'=>$_GET['id']
    ));
    
    if($urunsil){
     header("Location:../urunler.php?durum=basarili");
    }
    else{
     header("Location:../urunler.php?durum=basarisiz");
    }
    }
    

      
  



?>