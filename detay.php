<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SecuriG - Ürünler</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
   


    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css" />
</head>
<style>

.buttons{
    border-radius:20px;
    border-color:red;
}
</style>
<body>
    <!--################### Header Starts Here #########################--->
    
    <header>
        <div class="header-top container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  d-none d-lg-block contact-det">
                        <ul>
                            <li><i class="fas fa-headset"></i> 0535 682 8446</li>
                            <li><i class="far fa-envelope"></i> esatgargar@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 social-link">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Medipol Üniversitesi </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-nav container-fluid">
            <div class="container">
               <div class="row">
                     <div class="col-md-4 logo">
                           <img src="\assets\images\logo.png" alt="" style="height:55px">
                           <a data-toggle="collapse" data-target="#nav-head" href="#nav-head" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="nav-head" class="col-md-8 d-none d-md-block nave">
                        <ul>
                        
                            <li><a href="index.php">Ana Sayfa</a> </li>
                            <li><a href="urunler.php">Ürünler</a></li>
                            <li><a  href="siparis.php">Sipariş</a></li>

                        <li style="color:blue;">
                             <?php session_start();
if (isset($_SESSION['UrunAdi']))
{

    echo ' ' . $_SESSION['UrunAdi'];

    echo '</li> <li><a style="color:red;" href="logout.php">Çıkış Yap</a></li>';

}
else
{
    echo "<li><a style=color:green; href='kayitol.php'>Üye Ol</a></li>";
    echo "<li><a style=color:red; href='girisyap.php'>Giriş Yap</a></li>";

}

?></li>
                                    
                        </ul>
                    </div>
               </div>
              
            </div>
        </div>
    </header>
        
    <div class="slider-detail" style="margin-left:20%">


    <h1 style="margin-top:30px; margin-bottom:30px">Seçtiğiniz Ürün</h1>
    <div class="row">
    <?php
$baglanti = new mysqli("localhost", "root", "", "esat");

$sql = "SELECT * FROM urunler";
$sorgu = mysqli_query($baglanti, $sql);
if(isset($_GET["islem"]))
	{
		$islem=$_GET["islem"];
		
		switch ($islem)
    {
                        case "sil":  
                        $id=$_GET['ID'];
                        $baglan=mysqli_connect("localhost","root","","esat");
  $sonuc=mysqli_query($baglan,"select * from urunler where ID='$id'"); 
  $satirr=mysqli_num_rows($sonuc);
  mysqli_set_charset($baglan, "utf8");
  echo "<h2 align='center'></h2>";
  $satir=mysqli_fetch_array($sonuc);
  {
    echo '<td>
    <a><img src="'.$satir['image'].'.jpg" width="250" height="250" border="0" /><br>
    Ürün Adı:'.$satir['UrunAdi'].'<br>
    Ürün Açıklaması:'.$satir['UrunAciklama'].'<br>
    Ürün Detayı:'.$satir['UrunDetay'].'<br>
 
  <br>'."<form method='post'>
  <input type='submit' name='submit' value='satın al'/>
</form>".'

  </td>';
  }
  echo '</tr></table>';
      break;
    }

  }


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


    $sql = "INSERT INTO sepet(urunID,kullaniciID)VALUES ('".$_POST["urunID"]."','5')";
   


        if (mysqli_query($conn, $sql)) {
            
            echo "Kayıt Olundu";
            header('location: index.php');
         } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
         }
         $conn->close();
    }
  
 

?> 

</div>
    </div>
  

    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">


                    </div>
                    </div>
                    </div>
                    </div>

                
                    </footer>
                        
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>