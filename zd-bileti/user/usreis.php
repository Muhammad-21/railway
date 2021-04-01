<?php
session_start();
require 'ex.php' ?>
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
  </head>
  <body>
<?php require 'usheader.php' ?>
<br><br><br>
<div class="container">
<?php
$st_otpr=$_SESSION['st_otpr'];
$date_otpr=$_SESSION['date_otpr'];
$st_prih=$_SESSION['st_prih'];
$mysql=new mysqli('localhost','root','','zd-baza');
$result=$mysql->query("SELECT * FROM `reis` WHERE `st_otpr`='$st_otpr' AND `st_prih`='$st_prih' AND `date_otpr`='$date_otpr'");
$user= $result -> fetch_assoc();
if(count($user) == 0){
 echo "УПС такого рейса не существует";
 require 'usfooter.php';
  exit();
}
else do {
  $id=$user['id'];
  ?>
  <form action="secret/secusdannie.php" method="post">
    <input type="radio" required="" name="id" value="<?php echo $id; ?>">
  <?php
  echo  $st_otpr," - ",$st_prih," - ",$date_otpr,"-",$user['time_otpr']," - " ,$user['date_prih'],"-",$user['time_prih']," - ",$user['cena']," сомони","<br><br>";
}
while ($user= $result -> fetch_assoc());
$mysql->close();
 ?>
 <input class="btn btn-primary form_four" type="submit" value="далее">
 </form>
</div>
<?php require 'usfooter.php' ?>
</body>
</html>
