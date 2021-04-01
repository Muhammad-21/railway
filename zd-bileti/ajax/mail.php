<?php
$email=$_POST['email'];
$message=$_POST['message'];

$subject="=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
$headers="form:$email\r\nReply-to:$email\r\nContent-type: text/html; charset=utf-8\r\n";

$success=mail("maga21052000@gmail.com",$subject,$message,$headers);
echo $success;
 ?>
