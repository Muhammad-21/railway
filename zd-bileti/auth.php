<?php
$login=filter_var(trim($_GET['login']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_GET['pass']),FILTER_SANITIZE_STRING);
$mysql=new mysqli('localhost','root','','zd-baza');
$result=$mysql->query("SELECT * FROM `kassir` WHERE `login`='$login' AND `password`='$pass'");
$user= $result -> fetch_assoc();
if(count($user) == 0){
 echo "there is no such user";
  exit();
}
setcookie('user', $user['name'], time() + 480,"user.php");
$mysql->close();
header('Location: user.php')
 ?>
