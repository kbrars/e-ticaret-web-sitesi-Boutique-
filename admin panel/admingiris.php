<?php  

require_once 'işlem/işlem.php';

?>

<html>

<head>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqusery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



<link rel="stylesheet" href="admingiris.css">

</head>

<body>
    admin paneline girebilmeniz için <br>
kullanıcı adı:kbraarsl <br>
sifre: 5095

    <div id="login">
        <h3 class="text-center text-white pt-5">BOUTIQUE Admin Giriş</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="işlem/işlem2.php" method="post">
                            <h3 class="text-center text-info">BOUTIQUE Admin Giriş</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Kullanıcı Adı:</label><br>
                                <input type="text" name="kullanici_adi" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Şifre:</label><br>
                                <input type="password" name="kullanici_sifre" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="admingiris_yap" class="btn btn-info btn-md" value="Giriş Yap">
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>