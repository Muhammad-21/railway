<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Форма авторизации</title>
 </head>
 <body>
   <?php
   if($_COOKIE['user'] == ''):
    ?>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom shadow-sm">
   <p class="h5 my-0 me-md-auto fw-normal">ЖД Билеты</p>
   <nav class="my-2 my-md-0 me-md-3 my_nav">
    <a class="p-2 text-dark" href="index.php">Главная</a>
    <a class="p-2 text-dark" href="napr.php">Направления</a>
  </div>
<div class="container" mt-4>
<h1>Форма авторизации</h1>
<form action="auth.php" method="GET">
  <input type="text" class="form-control" name="login"  placeholder="Введите логин"><br>
  <input type="password" class="form-control" name="pass"  placeholder="Введите пароль"><br>
  <button class="btn btn-success" type="submit">Войти</button>
</form>
</div>
<?php require 'blocks/footer.php';?>
<?php else: ?>
  <a href="user.php"></a>
<?php endif; ?>
 </boby>
 </html>
