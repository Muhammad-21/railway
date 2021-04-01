<?php require 'ex.php' ?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title> Обратная связь </title>
 </head>
 <body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
   <p class="h5 my-0 me-md-auto fw-normal">ЖД Билеты</p>
   <nav class="my-2 my-md-0 me-md-3 my_nav">
    <a class="p-2 text-dark" href="us.php">Главная</a>
    <a class="p-2 text-dark" href="napr1.php">Направления</a>
  </nav>
  </div>
   <div class="container mt-5">
   <h5>Обратная связь</h5>
   <form id="mailform">
    <input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" placeholder="Введите ваше сообщения"></textarea><br>
    <button type="button" id="sendmail" class="btn btn-success">Отправить</button>
   </form>
   <div id="errormess"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/formMail.js"></script>
<?php require 'usfooter.php' ?>
</body>
</html>
