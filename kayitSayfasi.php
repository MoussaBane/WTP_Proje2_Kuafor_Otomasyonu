<?php 
    error_reporting(0); //Notice'leri gosterilmemesi için
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kuafor Otomasyona KayitSayfasi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
    </head>
    <body style="background-color:antiquewhite;">
      <center>
        <div class="container d-flex align-items-center">
            <div class="row">
                    <a href="index.php">
                        <img src="Images/Simge2.jpg" width="300" height="250" class="logo" alt="AnaSayfa">
                    </a>
            </div>
            
            <p style="font-family: Arial Black; font-size:xx-large">"KING AND QUEEN BERBER" KAYIT FORMU</p>
            
            <div class="row">
                
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form action="kayitKaydet.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Ad Soyad" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-Mail" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tel" class="form-control" placeholder="Telefon Numarasi" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="cinsiyet" class="form-control" placeholder="Erkek/Kadin" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Sifre" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="KAYDET" >
                        </div>
                        <div class="form-group" style="font-family: cooper black;">
                            <span>Zaten Hesabim Var? </span>
                            <a href="GirisSayfasi.php"><b>Giris Yap</b></a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
      </center>
    </body>
</html>