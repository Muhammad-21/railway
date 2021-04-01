<?php session_start();
require 'ex.php';

$mysql=new mysqli('localhost','root','','zd-baza');
$result2=$mysql->query("SELECT * FROM `mesto` WHERE `number_vagon`='$number_vagon' AND `number_mesto`='$number_mesto'");
$mesto2= $result2 -> fetch_assoc();
$m=$mesto2['id_mesto'];
$result4=$mysql->query("SELECT * FROM `passanger`");
$mesto4= $result4 -> fetch_assoc();
do {
if($mesto4['id_mesto']==$m){
  echo "Это место уже занято";?>
  <a href="us.php">нажмите для возврата на главную</a>
  <?php
  $mysql->close();
  exit();
}
}
while ($mesto4= $result4 -> fetch_assoc());
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Форма оплаты</title>
</head>
<body>
  <div class="container aa">
    <br><br><br>
  <?php
  $c=$_COOKIE['user'];
  $vs=$_SESSION['vs'];
  $cena=$_SESSION['cena'];
 $total=$vs-$cena;
 if($total<0){
   echo "для покупки недостаточно средств";
?>
   <a href="#" onclick="history.back();return false;">вернуться назад</a>
   <?php exit();
 }
 if($total==0){
   echo "Сдача не требуется";
 }
 if($total>0) {?>
   <strong>Сдача=<?php echo $total; ?> сомони</strong>
 <?php }?>
 </div>
 <br>
 <form action="scr.php" method="post">
 <input type="submit" class="btn btn-primary aa container" value="завершить"></form><br>
 <a class="link-secondary ph container aa" href="/user.php">отменить покупку</a>
</body>
<style>
.aa{
  width: 40%;
  margin-left: 20%;
}
</html>
