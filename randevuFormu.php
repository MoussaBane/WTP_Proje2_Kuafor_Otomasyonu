<?php 
    
    include("sessionKontrol.php");//oturum kontrolu
    error_reporting(0); //Notice'leri gosterilmemesi için 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RANDEVU ALIM FORMU</title>
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
            
            <h1> <?php echo $_SESSION['username']; ?>  Randevu Sayfasina Hos Geldiniz...</h1>

            <p style="font-family: Arial Black; font-size:xx-large">"KING AND QUEEN BERBER" KULLANICI RANDEVU FORMU</p>

            
            <div class="row">
                
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form action="randevuSayfasi.php" method="POST">
                        
                        <div class="form-group">
                            <input type="text" name="Model" class="form-control" placeholder="...Modelinizi Yaziniz..." required>
                        </div>
                        <div class="form-group">
                            <input type="date" name="RandevuTarih" class="form-control" placeholder="2022-06-22" required>
                        </div>
                        <div class="form-group">
                            <input type="time" name="RandevuSaat" class="form-control" placeholder="00:07" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="GIRIS YAP" >
                        </div>
                        <div class="form-group" style="font-family: cooper black;">
                            <span>KULLANICI Sayfasina Dönemek İçin </span>
                            <a href="kullaniciSayfasi.php"><b>Tiklayiniz</b></a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </div>
    </center>
    </body>
</html>