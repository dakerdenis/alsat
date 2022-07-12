<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="./style/style.css" />
  <!--header styles-->
  <link rel="stylesheet" href="./includes/header.css">
  <!--search styles--->
  <link rel="stylesheet" href="./includes/search.css">
  <!--main content styles-->
  <link rel="stylesheet" href="./content/style.css">
  <!--page стили страницы --->
  <link rel="stylesheet" href="./content/page.css">
  <!-- стили обьявления-->
  <link rel="stylesheet" href="./style/element.css">
  <!--footer styles-->
  <link rel="stylesheet" href="./includes/footer.css">
  <title>AlBiz</title>
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
    <a style="color:red; padding-left: 15px;" href="./index.php?source=main">главный контент</a>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=element">Страница элемента</a>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=account">Личный кабинет</a>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=page">Инфо страницп</a>
  <?php 
    if (isset($_GET['source'])){
      $source = $_GET['source'];
    } else {
      $source = '';}
      switch($source){
        case 'main';
        include './content/main.php';
        break;

        case 'element';
        include './content/element.php';
        break;

        case 'account';
        include './content/account.php';
        break;

        case 'page';
        include './content/page.php';
        break;

        default:
        include './content/content/main.php';
        break;
      }
  ?>

    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->
    <!----!----------тут контент на сайте----------------------->

    <!-- Футер -->
    <?php include './includes/footer.php' ?>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>