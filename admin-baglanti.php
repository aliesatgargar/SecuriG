<?php
/*
Veritabanı bağlantımızı yapıyoruz
*/

$hostadresi = "localhost:3306";
$kullaniciadi = "root";
$sifre = "";
$veritabani = "uyeler";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL baðlantýsý baþarýsýz: " . mysqli_connect_error();
}
?>