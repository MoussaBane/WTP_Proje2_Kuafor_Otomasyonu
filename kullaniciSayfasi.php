<?php 
    require('sessionKontrol.php');

    error_reporting(0); //Notice'leri gosterilmemesi için
?>

<!DOCTYPE html>
<html >
<head>
    <title>KULLANICI RANDEVU SAYFASI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body style="background-color: antiquewhite;">
    <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="jumbotron">
            <img src="Images/Simge2.jpg" class="rounded float-start" align="right" width="250" height="250">
            <img src="Images/Simge2.jpg" class="rounded float-end" align="left" width="250" height="250">
            <h1 align="center" style="font-family: Arial Black; font-size:xx-large">KING AND QUEEN BERBER</h1>
            <a class="btn btn-outline-light btn-lg m-2" href="randevuSayfasi.php" role="button" style="background-color: rgba(0, 0, 0, 0.8)">HEMEN RANDEVU AL</a> 
            
            <br> <br> <br> <br>


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a class="btn btn-outline btn-lg m-2" href="index.php"> <b>Ana Sayfa</b> </a> </li>
                        <li class="active"><a class="btn btn-outline btn-lg m-2" href="kullaniciSayfasi.php"> <b>KULLANICI SAYFASI</b> </a> </li>
                        <li> <a class="btn btn-outline btn-lg m-2" href="sessionSonlandir.php"> <b> Oturum Kapat | Cikis Yap  </b> </a> </li>
                        <li> <a class="btn btn-outline btn-lg m-2" href="randevuSayfasi.php"> <b> Randevu Al</b> </a> </li>
                    </ul>
                </div>
            </nav>
        
        </div>

        <div class="container align-items-center justify-content-center text-center h-100">
            <h1> <?php echo $_SESSION['username']; ?> Ozel Sayfaniza Hos Geldiniz...</h1>

            <br><br><br>

            <?php 
                require('database_baglan.php');
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];

                $mysql_query = "SELECT * FROM kullanicitable WHERE AdSoyad = '$username' ";
                $cevap = mysqli_query($MySql_Baglanti,$mysql_query);
                
                
                echo "<html>";
                    //türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.
                    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /> ";
                    echo "<body>";
                    
                        echo '<table border=1 class="table table-dark table-striped">';
                        
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<td colspan='8'>"."<h2> Kullanici Bilgileri</h2>"."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th>Kullanici_ID</th>";
                                    echo "<th>Ad_Soyad</th>";
                                    echo "<th>Mail</th>";
                                    echo "<th>Tel</th>";
                                    echo "<th>Cinsiyet</th>";
                                    echo "<th>Password</th>";
                                    echo "<th colspan = '2'>Islemler</th>";
                                echo "</tr>";
                            echo "</thead>";
                                if($cevap){
                                    $gelen = mysqli_fetch_array($cevap);
                                    // veritabanından gelen değerlerle tablo satırları oluşturalım
                                    echo "<tbody>";
                                        echo "<tr>";
                                            echo "<td>".$gelen['ID']."</td>";
                                            echo "<td>".$gelen['AdSoyad']."</td>";
                                            echo "<td>".$gelen['Mail']."</td>";
                                            echo "<td>".$gelen['Tel']."</td>";
                                            echo "<td>".$gelen['Cinsiyet']."</td>";
                                            echo "<td>".$gelen['Pass_word']."</td>";
                                            //sil linki .
                                            echo "<td><a href=kayitSil.php?id=".$gelen['ID'].">KayitSil</a></td>";
                                            //gunceleme linki 
                                            echo "<td><a href=kayitGuncelle.php?id=".$gelen['ID'].">KayitGuncelle</a></td>";
                                        echo "</tr>";
                                    echo "</tbody>";
                                }
                        echo "</table>";
                    
                    echo "</body>";    
                echo "</html>";
            ?>

            <br><br><br>
            
            <?php 
               error_reporting(0);
                

                $mysql_query_r = "SELECT * FROM randevutable WHERE Kullanici_ID = ".$gelen['ID']."";
                
                
                if($cevap_r = mysqli_query($MySql_Baglanti,$mysql_query_r)){ //Randevusu varsa 
                    echo "<html>";
                        echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /> ";
                        echo "<body>";
                    
                            echo "<table border=1 class='table table-dark table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                    echo "<td colspan='7'>"."<h2> Kullanici Randevu Bilgileri </h2>"."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th>Randevu_ID</th>";
                                    echo "<th>Kullanici_ID</th>";
                                    echo "<th>Model</th>";
                                    echo "<th>Randevu Tarih</th>";
                                    echo "<th>Randevu Saat</th>";
                                    echo "<th colspan = '2'>Islemler</th>";
                                echo "</tr>";
                                echo "</thead>";
                                if($cevap_r){
                                    $gelen_r = mysqli_fetch_array($cevap_r);
                                    // veritabanından gelen değerlerle tablo satırları 
                                    echo "<tbody>";
                                        echo "<tr>";
                                            echo "<td>".$gelen_r['ID']."</td>";
                                            echo "<td>".$gelen_r['Kullanici_ID']."</td>";
                                            echo "<td>".$gelen_r['Model']."</td>";
                                            echo "<td>".$gelen_r['RandevuTarih']."</td>";
                                            echo "<td>".$gelen_r['RandevuSaat']."</td>";
                                            //silme linki .
                                            echo "<td><a href=randevuSil.php?id=".$gelen_r['ID'].">Randevu Sil</a></td>";
                                            //gunceleme linki 
                                            echo "<td><a href=randevuGuncelle.php?id=".$gelen_r['ID'].">Randevu Guncelle</a></td>";
                                        echo "</tr>";
                                    echo "</tbody>";
                                }
                                else{//Randevu alınmamıssa
                                    echo "<tbody>";
                                        echo "<tr>";
                                            echo "<th colspan = '7'> ---Bir Randevunuz Bulunmamaktadir--- </th>";
                                        echo "</tr>";
                                    echo "</tbody>";
                                }
                            echo "</table>";
                    
                        echo "</body>";
                    echo "</html>";
                }
            ?>



        </div>

      

        

        <div class="well well-sm" style="font-family: cooper black;">
            <p align="center"><b>KING AND QUEEN BERBER</b>  
                <br> Hiç şüphe yok ki bu güzellik endüstrisi çok büyük. Kuaförlükle ilgili en iyi şey, müşteriyi elde tutma fırsatlarıdır.<br>
                <b>"Saçınızı daha iyi süslemenizi sağlar."</b> &copy 2022.
            </p>
        </div>
    </div>
    
</body>
</html>
