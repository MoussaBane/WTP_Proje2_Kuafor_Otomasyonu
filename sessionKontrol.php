<?php 
    session_start();

    if(!(isset($_SESSION['username']) && isset($_SESSION['password']))){//session mevcut degilse
        header("Location: GirisSayfasi.php");
        exit();//Bundan sonrakileri calistirilmasin...
    }
?>