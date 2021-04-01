<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
</head>
<?php
$a=$_COOKIE['user'];
$number_vagon=$_SESSION['number_vagon'];
$number_mesto=$_SESSION['number_mesto'];
$mysql=new mysqli('localhost','root','','zd-baza');
$result2=$mysql->query("SELECT * FROM `mesto` WHERE `number_vagon`=$number_vagon AND `number_mesto`='$number_mesto'");
$mesto2= $result2 -> fetch_assoc();
$result3=$mysql->query("SELECT * FROM `kassir` WHERE `name`='$a'");
$mesto3= $result3 -> fetch_assoc();
$m=$mesto2['id_mesto'];
$cc=$mesto3['id'];
$result4=$mysql->query("SELECT * FROM `passanger`");
$mesto4= $result4 -> fetch_assoc();
do {
if($mesto4['id_mesto']==$m){
  echo "Это место уже занято";?>
  <a href="us.php">нажмите для возврата на главную</a>
  <?php
  exit();
}
}
  while ($mesto4= $result4 -> fetch_assoc());
$id_reis=$_SESSION['id'];
$name=$_SESSION['name'];
$l_name=$_SESSION['l_name'];
$m_name=$_SESSION['m_name'];
$number_pas=$_SESSION['number_pas'];
$number_mesto=$_SESSION['number_mesto'];
$number_vagon=$_SESSION['number_vagon'];
$mysql1=new mysqli('localhost','root','','proverka');
$result9=$mysql1->query("SELECT * from `proverka` WHERE `id_reis`=$id_reis");
$proverka= $result9 -> fetch_assoc();
$i=0;
do {
if($proverka['number_vagon']=$number_vagon || $proverka['number_mesto']=$number_mesto) {
$i=$i+1;
}
}
while ($proverka= $result9 -> fetch_assoc());
if($i>1){
  echo "повторите попытку через несколько секунд или";?>
  <a href="us.php">нажмите для возврата на главную</a>
  <?php
$mysql1->query("DELETE FROM `proverka` where `id_kassir`=$cc");
  exit();
}
$mysql->query("INSERT INTO `passanger`(`id_reis`, `id_mesto`,`id_kassir`, `name`, `l_name`, `m_name`, `passport_number`) VALUES('$id_reis', '$m','$cc', '$name', '$l_name', '$m_name', '$number_pas' )");
//$sql=$mysql->query("UPDATE `mesto` SET `status`=0 WHERE `number_mesto`='$number_mesto' AND `id_reis`=$id_reis AND `number_vagon`=$number_vagon");

?>
</html>
