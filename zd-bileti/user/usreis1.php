<?php require 'ex.php' ?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title> Продажа билетов </title>
  <body>
<?php require 'usheader.php' ?>
<br><br><br>
</head>
<div class="container">
<?php
$st_otpr=filter_var(trim($_POST['st_otpr']),FILTER_SANITIZE_STRING);
$st_prih=filter_var(trim($_POST['st_prih']),FILTER_SANITIZE_STRING);
$date_otpr=filter_var(trim($_POST['date_otpr']),FILTER_SANITIZE_STRING);
$mysql=new mysqli('localhost','root','','zd-baza');
$result=$mysql->query("SELECT * FROM `reis` WHERE `st_otpr`='$st_otpr' AND `st_prih`='$st_prih' AND `date_otpr`='$date_otpr'");
$user= $result -> fetch_assoc();
if(count($user) == 0){
 echo "УПС такого рейса не существует";
 require 'usfooter.php';
  exit();
}
else do{
  echo $st_otpr," - ",$st_prih," - ",$date_otpr,"-",$user['time_otpr']," - " ,$user['date_prih'],"-",$user['time_prih']," - ",$user['cena']," сомони","<br><br>";
}
while ($user= $result -> fetch_assoc());
$mysql->close();
 ?>
</div>
<?php require 'usfooter.php' ?>
 </body>
 </html>
