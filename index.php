<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="./style/style.css" />
  <!--header вход выход styles-->
  <link rel="stylesheet" href="./includes/header.css">
  <!--search styles форма поиска--->
  <link rel="stylesheet" href="./includes/search.css">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

  <!--footer styles-->
  <link rel="stylesheet" href="./includes/footer.css">
  <title>AlBiz</title>
</head>
  <!--------->
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
    <div style="display: flex;">
    <a style="color:red; padding-left: 15px;" href="./index.php?source=main">главный контент</a> <br>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=account">Личный кабинет</a> <br>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=search_all">Поиск всего</a> <br>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=login">страница входа</a> <br>
    <a style="color:red; padding-left: 15px;" href="./index.php?source=element">страница Элемента</a> <br>
    </div>
  <?php 
    if (isset($_GET['source'])){
      $source = $_GET['source'];
    } else {
      $source = '';}
      switch($source){
        case 'main';
        include './content/main.php';
        break;

        case 'pass_changed';
        include './content/change_password/new_pass.php';
        break;

        case 'fill_password';
        include './content/change_password/fill_password.php';
        break;

        case 'element';
        include './content/element.php';
        break;

        case 'account';
        include './content/account__page/account.php';
        break;

        case 'page';
        include './content/page.php';
        break;

        case 'account__settings';
        include './content/account__page/settings.php';
        break;

        case 'change_userpass';
        include './content/change_password/change_user_password.php';
        break;

        case'login';
        include './content/login.php';
        break;

        case'about';
        include './content/page_about.php';
        break;

        case'add';
        include './content/add.php';
        break;

        case'contact';
        include './content/contact.php';
        break;

        case 'search_all';
        include './content/search_elements.php';
        break;

        case 'change_password';
        include './content/change_password/change_password.php';
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