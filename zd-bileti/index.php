<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title> Продажа билетов </title>
 </head>
 <body>
<?php require 'blocks/header.php' ?>
   <div class="img_text">
<img src="img/fon.png" class="img" >
<span>Добро пожаловать на сайт по продаже ж/д билетов</span><br>
</div>
<h1 class="mesto">Поиск билетов</h1><br>

<form action="reis.php" method="GET">
  <select class="form-control form_one" name="st_otpr" id="st_otpr" size="1">
  <option selected disabled>Откуда</option>
  <option>Душанбе</option>
  <option>Худжанд</option>
  <option>Куляб</option>
  <option>Курган-Тюбе</option>
  </select>


<select class="form-control form_two" name="st_prih" id="st_prih" size="1">
<option selected disabled>Куда</option>
<option>Душанбе</option>
<option>Худжанд</option>
<option>Куляб</option>
<option>Курган-Тюбе</option>
</select>
<input type="date" class="form-control form_three" name="date_otpr" id="date_otpr" placeholder="Дата отправления">
  <button class="btn btn-primary form_four" type="submit">найти билеты</button>

</form>


<?php require 'blocks/footer.php' ?>

</body>
<style>
.img_text {
     text-align: center;
    position: relative;
    display: inline-block;
}

.img_text img {
    height: 120%;
    width: 129.5%;
}
.tr{
  border-left: 100%;
}
.img_text span {
    background: rgb(105, 105, 105);
    color: #fff;
    border-radius: 100px;
    position:absolute;
    right: 1px;
    bottom: 70%;
    font-size: 30px;
    padding:10px;
}
.mesto{
  background: rgb(105, 105, 105);
  color: #fff;
  border-radius: 100px;
  position:absolute;
  right: 40%;
  bottom: 30%;
  font-size: 30px;
  padding:10px;


}

.form_one {
  position:absolute;
  bottom: 10%;
  width: 20%;
  margin-left: 10%;
}
.form_two {
  position:absolute;
  bottom: 10%;
  width: 20%;
  margin-left: 30%;
}
.form_three {
  position:absolute;
  bottom: 10%;
  width: 20%;
  margin-left: 50%;
}
.form_four {
  position:absolute;
  bottom: 10%;
  width: 20%;
  margin-left: 70%;
}
</style>


</html>
