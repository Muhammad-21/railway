<?php require 'ex.php' ?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
 </head>
<?php
$mysql=new mysqli('localhost','root','','zd-baza');
$user=$_COOKIE['user'];
$result1=$mysql->query("SELECT * from `kassir` WHERE `name`='$user'");
$id=$result1 -> fetch_assoc();
$kassir=$id['id'];
//echo $user;
$result=$mysql->query("SELECT
passanger.name,passanger.l_name,passanger.m_name,poezd.p_name,mesto.number_mesto,mesto.number_vagon,reis.date_otpr,reis.date_prih
FROM passanger
Join mesto on passanger.id_mesto=mesto.id_mesto
JOIN poezd  on mesto.id_poezd=poezd.id
JOIN reis  on poezd.id=reis.id_poezd
WHERE passanger.id_kassir=$kassir");
$mesto= $result -> fetch_assoc();
?>
<body>

<table class="table">
<tr>
  <th>Имя пассажира</th>
  <th>Фамилия пассажира</th>
  <th>Отчество пассажира</th>
  <th>Номер поезда</th>
  <th>Номер вагона</th>
  <th>Номер место</th>
  <th>Дата отправки</th>
  <th>Дата прибытия</th>
</tr>
<?php
 do {?>
<tr>
    <td><?php echo $mesto[name];?></td>
    <td><?php echo $mesto[l_name];?></td>
    <td><?php echo $mesto[m_name];?></td>
    <td><?php echo $mesto[p_name];?></td>
    <td><?pHp echo $mesto[number_vagon];?></td>
    <td><?php echo $mesto[number_mesto];?></td>
    <td><?php echo $mesto[date_otpr];?></td>
    <td><?php echo $mesto[date_prih];?><br></td>
</tr>
<?php }
while ($mesto= $result -> fetch_assoc());?>
</table>
</body>
<style>
.table {
  margin-left: 80px;
  font font-family: sans-serif;
  text-align: left;
  border-collapse: separate;
  border-spacing: 5px;
  background: #ece9e0;
  border: 16px solid #ece9e0;
  border-radius: 20px;
}
</style>
 </html>
