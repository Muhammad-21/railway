<?php if($_COOKIE['user'] == ''){
setcookie('user',$user['name'],time()-360);
header('Location: bay.php');
exit();
}
?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Личный кабинет</title>
 </head>
 <body>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom shadow-sm">
   <p class="h5 my-0 me-md-auto fw-normal">ЖД Билеты</p>
   <nav class="my-2 my-md-0 me-md-3 my_nav">
    <a class="p-2 text-dark" href="user/us.php">Главная</a>
    <a class="btn btn-outline-primary my_btn" href="exit.php">Выход</a>
  </div>
  <div class="container   pp" >
<p1>Добро пожаловать <?=$_COOKIE['user']?></p></div>
  <a class="link-secondary ph container" href="user/prodan.php">Проданные билеты</a><br><br>
  <a class="link-secondary ph container" href="user/bron.php">Бронирование</a><br><br>
  <a class="link-secondary ph container" href="user/napr1.php">Направлении</a>
<footer class="container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">© 2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Услуги</h5> <!-- В дальнейшем пополняется -->
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="user/us.php">Ж/д билеты</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>О компании</h5><!-- В дальнейшем пополняется -->
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="user/usabout.php">О проекте</a></li>
          <li><a class="link-secondary" href="user/ustrain.php">Поезда</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Помощь и поддержка</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="user/usfeedback.php">Обратная связь</a></li>
          <li><a class="link-secondary" href="user/uscontact.php">Контактная информация</a></li>
        </ul>
      </div>
    </div>
  </footer>
<style>
.ph{
margin-left:40px;

}
.pp {
  margin:70px;
  margin-left: 40px
}
.my_nav{
  position: relative;
  width: 70%;
}
.my_btn{
  position: absolute;
  margin-left: 110%;
  margin-bottom: 80%;
}
</style>
