<?php


try{
    $baglanti=new PDO("mysql:host=localhost; dbname=boutique", 'root', ''  );


}
catch(Exception $e){
    echo $e->getMessage();
}


  
  