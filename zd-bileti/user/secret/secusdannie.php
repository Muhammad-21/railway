<?php
session_start();
$id=filter_var(trim($_POST['id']),FILTER_SANITIZE_STRING);
if($id==0) {
  echo "Выбирите рейс";
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
</head>
<a href="/user/usreis.php">нажмите для возврата</a>
</html>
<?php
exit();
}
if(isset($_SESSION['id'])){
unset($_SESSION['id']);}
$_SESSION['id']=$id;
header('Location: /user/usdannie.php');
?>
