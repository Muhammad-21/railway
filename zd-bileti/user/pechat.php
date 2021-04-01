<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
</head>
<?php
//$mysql=new mysqli('localhost','root','','zd-baza');
$result5=$mysql->query("SELECT * FROM `passanger` WHERE `id_mesto`='$m'");
$mesto5= $result5 -> fetch_assoc();
$result6=$mysql->query("SELECT * FROM `mesto` WHERE `id_mesto`='$m'");
$mesto6= $result6 -> fetch_assoc();
$nomer=$mesto6['id_poezd'];
$result7=$mysql->query("SELECT * FROM `poezd` WHERE `id`='$nomer'");
$mesto7= $result7 -> fetch_assoc();
$id_kassir=$mesto5['id_kassir'];
$result8=$mysql->query("SELECT * FROM `kassir` WHERE `id`='$id_kassir'");
$mesto8= $result8 -> fetch_assoc();
echo "<br>","|-------------------ЖД Билеты------------","<br>";
echo "| Билет c номером ",$m," <br>";
echo "| Имя пассажира - ",$mesto5['name'],"<br>";
echo "| Фамилия пассажира - ",$mesto5['l_name'],"<br>";
echo "| Отчество пассажира - ",$mesto5['m_name'],"<br>";
echo "| номер паспорта - ",$mesto5['passport_number'],"<br>";
echo "| номер поезда - ",$mesto7['p_name'],'<br>';
echo "| номер вагона - ",$mesto6['number_vagon'],"<br>";
echo "| номер место - ",$mesto6['number_mesto'],"<br>";
echo "| оплатил - ",$vs,"сомони<br>";
echo "| стоимость билета - ",$cena,"сомони<br>";
echo "| имя кассира - ",$mesto8['name'],"<br>";
echo "|------------------------------------- Статус:оплачено";
$mysql->close();
 ?>
 <button onclick="window.print();">Печать</button></br><br>
 <a href="us.php" class="aa">на главную</a>
 <style type="text/css" media="print">
button {display: none; }
.aa{
 display: none;
}
</style>
 </html>
