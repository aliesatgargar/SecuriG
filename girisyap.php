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
                        <h2 class="form-title">Giriş Yap</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="kullaniciadi" id="kullaniciadi" placeholder="Kullanıcı Adınız" required/>
                            </div>
                           
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="sifre" id="sifre" placeholder="Şifreniz" required/>
                            </div>
                          
							<p id="cikti" name="cikti"></p>
							<br>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Kayıt Ol"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/guvenlik-kamerasi.png" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Hesabınız mı var? Oturum Başlat!</a>
                    </div>
                </div>
            </div>
        </section>

    

    </div>
	<?php
session_start();

		if(isset($_POST["submit"])){
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "esat";
			
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $baglanti = mysqli_connect($servername,$username,$password,$dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
        
        $username=$_POST['kullaniciadi'];
        $password=$_POST['sifre'];
        
        //kullanıcı adı ve şifeyi sorguluyoruz
        
        $sql="SELECT * FROM uyeler WHERE kullaniciadi='$username' and sifre='$password'";
        $result=mysqli_query($baglanti,$sql);
        if(mysqli_num_rows($result) == 1)
{
$_SESSION['kullaniciadi'] = $username; // Initializing Session
header('location: index.php'); // Redirecting To Other Page
echo isset($_SESSION['kullaniciadi']);
}else
{
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>".""."</center>";
}
        //Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
        //Yok ise hata verdiriyoruz.
        
           
		
          
         }
	
        
      ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>