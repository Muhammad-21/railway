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
  <title> Направления </title>
 </head>
 <body>

   <?php require 'usheader.php' ?>
   <form action="secret/secbron.php" method="post">
     <select class="form-control form_one" name="st_otpr" size="1">
     <option selected disabled>Откуда</option>
     <option>Душанбе</option>
     <option>Худжанд</option>
     <option>Куляб</option>
     <option>Курган-Тюбе</option>
     </select>


   <select class="form-control form_two" name="st_prih" size="1">
   <option selected disabled>Куда</option>
   <option>Душанбе</option>
   <option>Худжанд</option>
   <option>Куляб</option>
   <option>Курган-Тюбе</option>
   </select>
   <input type="date" class="form-control form_three" name="date_otpr" placeholder="Дата отправления">
     <button class="btn btn-primary form_four" type="submit">найти билеты</button>

   </form>
   <br><br><br><br><br><br>
   <?php require 'usfooter.php' ?>

</body>
 <style>
 .my_nav{
   position: relative;
   width: 70%;
 }
 .my_btn{
   position: absolute;
   margin-left: 100%;
   margin-bottom: 90%;
 }
 .form_one {
   position:absolute;
   bottom: 70%;
   width: 20%;
   margin-left: 10%;
 }
 .form_two {
   position:absolute;
   bottom: 70%;
   width: 20%;
   margin-left: 30%;
 }
 .form_three {
   position:absolute;
   bottom: 70%;
   width: 20%;
   margin-left: 50%;
 }
 .form_four {
   position:absolute;
   bottom: 70%;
   width: 20%;
   margin-left: 70%;
 }
 </style>

</html>
