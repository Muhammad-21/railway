<?php
session_start();
$number_mesto=filter_var(trim($_POST['number_mesto']),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$l_name=filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$m_name=filter_var(trim($_POST['middle_name']),FILTER_SANITIZE_STRING);
$number_pas=filter_var(trim($_POST['number_pas']),FILTER_SANITIZE_STRING);
if(isset($_SESSION['number_mesto'])){
unset($_SESSION['number_mesto']);}
if(isset($_SESSION['name'])){
unset($_SESSION['name']);}
if(isset($_SESSION['l_name'])){
unset($_SESSION['l_name']);}
if(isset($_SESSION['m_name'])){
unset($_SESSION['m_name']);}
if(isset($_SESSION['number_pas'])){
unset($_SESSION['number_pas']);}
$id_reis=$_SESSION['id'];
$_SESSION['name']=$name;
$_SESSION['l_name']=$l_name;
$_SESSION['m_name']=$m_name;
$_SESSION['number_pas']=$number_pas;
$_SESSION['number_mesto']=$number_mesto;
$a=$_COOKIE['user'];
$mysql1=new mysqli('localhost','root','','proverka');
$mysql=new mysqli('localhost','root','','zd-baza');
$result3=$mysql->query("SELECT * FROM `kassir` WHERE `name`='$a'");
$mesto3= $result3 -> fetch_assoc();
$id_kassir=$mesto3['id'];
$number_vagon=$_SESSION['number_vagon'];
$mysql1->query("INSERT INTO `proverka`(`id_kassir`, `id_reis`,`number_vagon`, `number_mesto`) VALUES('$id_kassir','$id_reis','$number_vagon','$number_mesto')");
$mysql->close();
$mysql1->close();
header('Location: /user/uspay.php');
 ?>
