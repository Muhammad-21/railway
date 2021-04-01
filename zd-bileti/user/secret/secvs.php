<?php
session_start();
$vs=filter_var(trim($_POST['sdacha']),FILTER_SANITIZE_STRING);
if(isset($_SESSION['vs'])){
unset($_SESSION['vs']);}
$_SESSION['vs']=$vs;
header('Location: /user/vs.php');
 ?>
