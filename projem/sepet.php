<?php require_once 'projemislem/baglanti.php';




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="inde.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&family=Shippori+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>



    <?php require_once 'uyeheader.php' ?>

    <?php $sepetsor = $baglanti->prepare("SELECT * FROM musterisepet s,urunekle u,musteribilgi m WHERE s.m_id=m.m_id AND s.urun_id=u.urun_id and s.m_id=" . $_SESSION['m_id']);

    $sepetsor->execute();
    ?>
    <?php ($sepetal = $sepetsor->fetch(PDO::FETCH_ASSOC)) ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div style="margin-top:150px"></div>
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Alışveriş Sepetim</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="projemislem/siparisislem.php" method="post">
                            <hr>

                            <?php echo $sepetal['hesap'] ?>
                            <div class="row">
                                <div class="col-xs-2"><img class="img-responsive" src="../admin panel/<?php echo  $sepetal['urun_foto'] ?>">
                                </div>
                                <div class="col-xs-4">
                                    <h4 class="product-name"><strong><?php echo $sepetal['urun_aciklama'] ?></strong></h4>
                                    <h4><small><?php echo $sepetal['urun_kat2'] ?></small></h4>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-6 text-right">
                                        <h6><strong>Ürün Fiyat:<?php echo $sepetal['urun_fiyat'] ?> <span class="text-muted">x</span></strong></h6>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control input-sm" value="1">
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="button" class="btn btn-link btn-xs">
                                            <span class="glyphicon glyphicon-trash"> </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                            </div>

                            <div class="panel-footer">
                                <div class="row text-center">
                                    <div class="col-xs-9">
                                        <input type="hidden" name="sepet_id" value="<?php echo $sepetal['sepet_id'] ?>">
                                        <input type="hidden" name="m_id" value="<?php echo $sepetal['m_id'] ?>">
                                        <input type="hidden" name="urun_id" value="<?php echo $sepetal['urun_id'] ?>">
                                        <input type="hidden" name="hesap" value="<?php echo $sepetal['hesap'] ?>">
                                        <input type="hidden" name="durumu" value="Hazırlanıyor">

                                        <h4 class="text-right">TOPLAM <strong><?php echo $sepetal['urun_fiyat'] ?></strong></h4>
                                    </div>
                                    <div class="col-xs-3">
                                        <button name="siparisekle" type="submit" class="btn btn-success btn-block">
                                            TAMAMLA
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php require_once 'footer.php' ?>