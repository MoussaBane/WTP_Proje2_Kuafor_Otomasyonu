<?php

    include("sessionKontrol.php");//oturum kontrolu

    error_reporting(0); //Notice'leri gosterilmemesi için 
    
    require('database_baglan.php');



    $mysql_query = "DELETE FROM randevutable WHERE ID=".$_GET['id'];

    $cevap = mysqli_query($MySql_Baglanti,$mysql_query);

    echo "<html>";

        echo "<meta http-equiv='Content-Type'content='text/html; charset=UTF-8' /> ";
        if($cevap ){//Silinmişse
            echo "Randevu Silme Islemi Basariyla Tamamlanmistir!!!</br>";
            echo "<p style='font-family: cooper black;'> Ana Sayfaya Donmek Icin <a href='index.php'> Tiklayiniz</a> </p>";
        }
        else{
            echo '<br>Hata Mesaji:' . mysqli_error($baglanti);
        }

    echo "</html>";
  
?>