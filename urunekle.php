<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecuriG / Kayit Ol</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/wef.css">
</head>
<body>

    <div class="main">

        <!-- Kayıt Ol Formu -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Ürün Ekle</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">  
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="UrunAdi" id="UrunAdi" placeholder="Ürün Adı" required/>
                            </div> 
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="UrunAciklama" id="UrunAciklama" placeholder="Ürün Açıklaması" required/>
                            </div>
                            <div class="form-group"> 
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="UrunFiyat" id="UrunFiyati" placeholder="Ürün Fiyatı" required/>
                            </div>
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="UrunDetay" id="UrunDetay" placeholder="Ürün Detayı" required/>
							</div>
                         <?php   $string = "This my <code>awesome</code> code"; ?>
							<p id="cikti" name="cikti"></p>
                            <?php 


		if(isset($_POST["submit"])){
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "esat";
			
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 


            $sql = "INSERT INTO urunler(UrunAdi,UrunAciklama,UrunFiyat,UrunDetay)VALUES ('".$_POST["UrunAdi"]."','".$_POST["UrunAciklama"]."','".$_POST["UrunFiyat"]."','".$_POST["UrunDetay"]."')";
           

			if($_POST['sifre'] !== $_POST['t_sifre']){
				echo "sifreler birbirini tutmuyor";
			}
			else{

				if (mysqli_query($conn, $sql)) {
					
                    echo "Urun Olusturuldu";
                    header('location: urunekle.php');
				 } else {
					echo "Error: " . $sql . "" . mysqli_error($conn);
				 }
				 $conn->close();
			}
          
         }
	
        
      ?>
							<br>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Ürünü Ekle"/>
                            </div>
                        </form>
                    </div>
                 
                        
                    
                    </div>
                </div>
            </div>
        </section>
         
    

    </div>
	
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>