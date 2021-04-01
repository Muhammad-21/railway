<?php
 require 'ex.php';
?>
<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-
   scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title> Данные о пассажире </title>
 </head>
 <body>
<?php require 'usheader.php' ?>
<br><br>
<div class="container ac">
<strong>Выберите номер вагона</strong>
</div>
<br>
<div class="container">
  <form action="secret/secusbilet.php" method="post">
    <select required class="form-control form_one" name="number_vagon" size="1">
    <option selected disabled value="">Выберите номер вагона</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    </select><br>
    <input class="btn btn-primary" type="submit" value="далее">
  </form>
<br><br>
</div>
<?php require 'usfooter.php' ?>
</body>

<style>
.ac{
 margin-left:5%;
}
</style>

</html>
