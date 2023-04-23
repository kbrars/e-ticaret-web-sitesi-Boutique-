<!DOCTYPE html>
<html>
<head>
	<title>Kayıt Ol</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>

body{
            background-color: black ;
            background-image: url("logom.jpg");
            
        }
        button:hover{
            
            width: 20%;
            height: 5%;
            background-color:black;
            
                    }

</style>


<body>
     <form  style="background-color: rgba(0, 0, 0, 0.735);" action="uyeislem.php" method="post">
     	<h2 style="color: white;" >Kayıt Ol</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
<label style="color: white;" for="">Ad-Soyad:</label>
          <?php if (isset($_GET['m_adisoyadi'])) { ?>
               <input type="text" 
                      name="m_adisoyadi" 
                      placeholder="Ad Soyad"
                      value="<?php echo $_GET['m_adisoyadi']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="m_adisoyadi" 
                      placeholder="Ad Soyad"><br>
          <?php }?>
<label style="color: white;" for="">E-mail:</label>
          <?php if (isset($_GET['m_mail'])) { ?>
               <input type="text" 
                      name="m_mail" 
                      placeholder="Kullanıcı Adı"
                      value="<?php echo $_GET['m_mail']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="m_mail" 
                      placeholder="E-mail"><br>
          <?php }?>
<label style="color: white;" for="">Şifre:</label>
     	<input type="password" 
                 name="m_sifre" 
                 placeholder="Şifre"><br>
<label style="color: white;" for="">Telefon</label>
                 <?php if (isset($_GET['m_telefon'])) { ?>
               <input type="text" 
                      name="m_telefon" 
                      placeholder="Ad Soyad"
                      value="<?php echo $_GET['m_telefon']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="m_telefon" 
                      placeholder="Telefon"><br>
          <?php }?>
<label style="color: white;" for="">Adres:</label>
          <?php if (isset($_GET['m_adres'])) { ?>
               <input type="text" 
                      name="m_adres" 
                      placeholder="Adres"
                      value="<?php echo $_GET['m_adres']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="m_adres" 
                      placeholder="Adres"><br>
          <?php }?>

          <?php if (isset($_GET['m_cinsiyet'])) { ?>
               <input type="text" 
                      name="m_cinsiyet" 
                      
                      value="<?php echo $_GET['m_cinsiyet']; ?>"><br>
          <?php }else{ ?>
            <label style="color: white;" for="">Cinsiyet:</label>
               <input  style="float: left;"  type="radio" 
                      name="m_cinsiyet" 
                      value="Kadın"> <label  style="float: left; color: white;" for="">Kadın</label>

                      <input style="float: left;" type="radio" 
                      name="m_cinsiyet" 
                      value="Erkek"> <label style="float: left; color: white;" for="">Erkek</label> <br>  <br>
               
          <?php }?>




          

     	<button type="submit">Kayıt Ol</button>
        
     </form>
</body>
</html>

