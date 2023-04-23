<?php 


require_once "uyeheader.php";

try{
  $baglanti=new PDO("mysql:host=localhost; dbname=boutique", 'root', ''  );


}
catch(Exception $e){
  echo $e->getMessage();
}


if (isset($_SESSION['m_id']) && isset($_SESSION['m_mail']) && isset($_SESSION['m_telefon'])) {


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="inde.css">
    <link rel="stylesheet" href="urun.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Shippori+Antique&display=swap"
      rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<style>
    a{
        text-decoration: none;
    }
</style>


</head>
<body>  

  <div    class="content-wrapper">

<section class="content">
  <div class="container">

    <div class="row">


  
    <div style="margin-top: 300px;" class="card card-dark col-md-12">
          <div   class="card-header">
            <h3  class=" card-title">Profil Bilgilerim</h3>
            


          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Ad-Soyad:   </label>
               <label name="m_adisoyadi" for=""> <?php echo  $_SESSION['m_adisoyadi']; ?> </label>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">E-mail: </label>
                <label name="m_mail" for=""><?php echo $_SESSION['m_mail']; ?> </label>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Telefon: </label>
              <label name="m_telefon" for=""><?php echo $_SESSION['m_telefon']; ?> </label>
              </div>
            
              <div class="form-group">
                <label for="exampleInputPassword1">Adres: </label>
              <label name="m_adres" for=""><?php echo $_SESSION['m_adres']; } ?> </label>
              </div>
                  
</div>

</div>
</section>
</div>

  

 
        
       

 


