<?php
require 'ex.php';
//ob_start();
session_start();
$number_vagon=$_SESSION['number_vagon'];
$number_mesto=$_SESSION['number_mesto'];
$mysql=new mysqli('localhost','root','','zd-baza');
$result2=$mysql->query("SELECT * FROM `mesto` WHERE `number_vagon`='$number_vagon' AND `number_mesto`='$number_mesto'");
$mesto2= $result2 -> fetch_assoc();
$m=$mesto2['id_mesto'];
$result4=$mysql->query("SELECT * FROM `passanger`");
$mesto4= $result4 -> fetch_assoc();?>
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
<?php
do {
if($mesto4['id_mesto']==$m){
  echo "Это место уже занято";?>
  <a href="us.php">нажмите для возврата на главную</a>
  <?php
  exit();
}
}
while ($mesto4= $result4 -> fetch_assoc());
$number_pas=$_SESSION['number_pas'];
if(mb_strlen($number_pas)!=9) {
echo "Проверьте правильность номера паспорта";
exit();
}
$id_reis=$_SESSION['id'];
$result1=$mysql->query("SELECT * FROM `reis` WHERE `id`=$id_reis");
$mesto1= $result1 -> fetch_assoc();
?>
<body>
<div class="container aa"><br><br><br><br>
<strong>Оплата билета с номером <?php echo $m;?></strong></div><br>
<form action="secret/secvs.php" method="post">
<input type="number" class="form-control container as" name="sdacha" placeholder="сдача с" required><br>
<div class="aa"><strong>К оплате <?php echo $mesto1['cena']; ?> сомони</strong></div><br>
<input type="submit" class="btn btn-primary ac" value="далее">
<?php
if(isset($_SESSION['cena'])){
unset($_SESSION['cena']);}
$_SESSION['cena']=$mesto1['cena'];
?>
</form>
</body>
<?php $mysql->close();?>
<style>
.aa{
  margin-left: 30%;
}
.as{
  width: 40%;
}
.ac{
  width: 40%;
  margin-left: 30%;
}
</html>
