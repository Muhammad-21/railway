<?php
session_start();
$st_otpr=filter_var(trim($_POST['st_otpr']),FILTER_SANITIZE_STRING);
$st_prih=filter_var(trim($_POST['st_prih']),FILTER_SANITIZE_STRING);
$date_otpr=filter_var(trim($_POST['date_otpr']),FILTER_SANITIZE_STRING);
if(isset($_SESSION['st_otpr'])){
unset($_SESSION['st_otpr']);}
if(isset($_SESSION['st_prih'])){
unset($_SESSION['st_prih']);}
if(isset($_SESSION['date_otpr'])){
unset($_SESSION['date_otpr']);}
$_SESSION['st_otpr']=$st_otpr;
$_SESSION['st_prih']=$st_prih;
$_SESSION['date_otpr']=$date_otpr;
header('Location: /user/usreis.php');
 ?>
