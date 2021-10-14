<?php

$kuladi = $_POST["kuladi"];
$sifre =  $_POST["sifre"];
$dosyaAdi = "kullanicilar.txt";
$kontrol = 0;

echo "<body background = 'resim/background.jpg'></body>";

if(empty($kuladi))
{
 
   $message = "Kullanıcı Adı Boş Bırakılamaz";
   echo "<script type='text/javascript'> window.alert('$message'); window.location='index.html';window.location.href='index.html'</script>" ;
}

else if(empty($sifre ))
{
   $message = "Şifre Boş Bırakılamaz";
   echo "<script type='text/javascript'>window.alert('$message'); window.location.href='index.html'</script>" ;
}
else
{

$dosya = fopen($dosyaAdi, 'r');


while ($veri = fscanf($dosya, "%s\t%s\n")) 
{
    list ($username , $password ) = $veri;
   
  
  if("$kuladi"=="$username")
  {
   if( "$sifre"=="$password")
   {
      $kontrol = 1;
      break;

   }
 }

  

} 

fclose($dosya);

}

if($kontrol==1)
{
  header("Location: anasayfa.html");
}
if($kontrol==0)
{

   $message = "Yanlış Kullanıcı Adı veya Şifre Girdiniz.";
   echo "<script type='text/javascript'>window.alert('$message'); window.location.href='index.html'</script>" ;
	
}

?>