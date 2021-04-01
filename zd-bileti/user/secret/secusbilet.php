<?php
session_start();
$number_vagon=filter_var(trim($_POST['number_vagon']),FILTER_SANITIZE_STRING);
if(isset($_SESSION['number_vagon'])){
  unset($_SESSION['number_vagon']);
}
$_SESSION['number_vagon']=$number_vagon;
header('Location: /user/usbilet.php');
 ?>
