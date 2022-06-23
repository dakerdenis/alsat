<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./style/style.css" />
  <title>alsat</title>
</head>

<body>
  <!--!Общий шаблон для всех страниц ,тут единый для всех footer,поиск форма, главный контейнер и header-->
  <div class="main__wrapper">
    <!-- header-->
    <?php include './includes/header.php' ?>

    <!--форма поиска на сайте --->
    <?php include './includes/search.php'?>


    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->
    <?php include './content/main.php' ?>
    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->

    <!-- Футер -->
    <?php include './includes/footer.php' ?>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>