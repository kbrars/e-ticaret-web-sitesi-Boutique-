<?php
include 'baglanti.php';

{

    if (isset($_POST['sepeteekle'])) {

        $sepeteekle = $baglanti->prepare("INSERT INTO musterisepet SET 
        
        m_id=:m_id,
        urun_id=:urun_id,
        hesap=:hesap");

        $islem = $sepeteekle->execute(array(
            'm_id' => $_POST['m_id'],
            'urun_id' => $_POST['urun_id'],
            'hesap' => $_POST['hesap']
        ));
        if ($islem) {
            header("Location:../sepet.php?durum=ok");
        } else {
            header("Location:../../kategori.php?durum=no");
        }
    }
}
