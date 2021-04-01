<?php
require 'ex.php';
ob_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
</head>
</html>
<?php

require 'uszapis.php';
//$mysql=new mysqli('localhost','root','','zd-baza');
$ad=$mesto2['id_mesto'];
$result=$mysql->query("SELECT * FROM `passanger` WHERE `id_mesto`=$ad");
$mesto= $result -> fetch_assoc();
//$cd=$mesto1['id'];
$b=$mesto['id_passenger'];
$cena=$_SESSION['cena'];
$vs=$_SESSION['vs'];
//if($b="" || $cc="" || $cena="" || $vs=""){
  //echo "Данные не обнаружены!!!";
  //exit();
//}
$mysql1->query("DELETE FROM `proverka` where `id_kassir`=$cc");
$mysql->query("INSERT INTO `oplata`(`id_passanger`, `id_kassir`,`cena`, `sdacha_s`) VALUES('$b', '$cc', '$cena', '$vs')");
//$mysql->close();
session_unset();
session_destroy();
require 'pechat.php';
//header('Location: /user.php');
?>
