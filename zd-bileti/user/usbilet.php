<?php
session_start();
require 'ex.php';
$id=$_SESSION['id'];
$number_vagon=$_SESSION['number_vagon'];
$mysql=new mysqli('localhost','root','','zd-baza');
$result=$mysql->query("SELECT * FROM `mesto` WHERE `id_reis`=$id AND `number_vagon`=$number_vagon");
$mesto= $result -> fetch_assoc();
?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title> Выбор место </title>
  </head>
  <body>
<?php require 'usheader.php' ?>
<br><br>
<img src="/img/kupe.png" class="container kupe">
<br><br><br><br><br><br>
<form action="secret/secuspay.php" method="post">
  <select required class="form-control form_two" name="number_mesto" size="1">
  <option selected disabled value="">Выберите номер место</option>
  <?php
do {
  if($mesto['status'] == 0) { ?>
    <option disabled class="aa" title="занято"> <?php echo $mesto['number_mesto']?></option>
  <?php }
  else {
echo "<option>",$mesto['number_mesto'],"</option>";
}
}
while ($mesto= $result -> fetch_assoc());
?>
  </select>
<div class="container ac">
<strong>Введите данных о пассажире</strong>
</div>
<br>
<div class="container">
  <input required type="text" class="form-control" name="name" placeholder="Имя пассажира"><br>
  <input required ype="text" class="form-control" name="last_name" placeholder="Фамилия пассажира"><br>
  <input required type="text" class="form-control" name="middle_name" placeholder="Отчество пассажира"><br>
  <input required type="text" class="form-control" name="number_pas" placeholder="Номер паспорта"><br>
  <button class="btn btn-primary" type="submit">далее</button>
</form>
<br><br>
</div>
<?php  $mysql->close();
require 'usfooter.php' ?>
 </body>
 <style>
 .kupe {
   margin-left: 5%;
 }
 .form_one {
   position: absolute;
   bottom: 45%;
   width: 20%;
   margin-left: 20%;
 }
 .form_two {
   position: absolute;
   bottom: 45%;
   width: 20%;
   margin-left: 40%;
 }
 .form_three {
   position: absolute;
   bottom: 35%;
   width: 10%;
   margin-left: 80%;
 }
 .ac{
  margin-left:10%;
 }
 .aa{
   background-color: #A4A4A4;
 }
 </style>
 </html>
