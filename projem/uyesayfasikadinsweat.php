<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="inde.css">
  <link rel="stylesheet" href="urun.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Shippori+Antique&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>






  <?php require_once 'uyeheader.php';


  try {
    $baglanti = new PDO("mysql:host=localhost; dbname=boutique", 'root', '');
  } catch (Exception $e) {
    echo $e->getMessage();
  }

  ?>

  <?php

  $urunler = $baglanti->prepare("SELECT  *FROM urunekle WHERE urun_kat1='Kadın' and urun_kat2='Sweatshirt'");
  $urunler->execute();

  while ($urunlercek = $urunler->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="urunkart">

      <div style="height: 60%;" class="resim">
        <img id="resim1" width="55%" src="../admin panel/<?php echo  $urunlercek['urun_foto'] ?>" alt=""> <br>
      </div>

      <form action="projemislem/sepetislem.php" method="post">
        <div style="height: 40%;" class="urunbilgi">
          <br> <br>
          <label class="urunismi" name="urunismi" for=""><?php echo  $urunlercek['urun_aciklama'] ?></label> <br> <br>
          <label for="">Fiyat: </label>
          <label name="urunfiyat" for=""><?php echo  $urunlercek['urun_fiyat'] ?></label>
          <input type="hidden" name="m_id" value="<?php echo $_SESSION['m_id'] ?>">
          <input type="hidden" name="urun_id" value="<?php echo $urunlercek['urun_id']?>">
          <input type="hidden" name="hesap" value="<?php echo $urunlercek['urun_fiyat']?>">
          <button name="sepeteekle" type="submit" class="butn">Sepete Ekle</button> <br> <br>
          
        </div>
      </form>
    </div><?php    } ?>










</body>

</html>