<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!--header вход выход styles-->
    <link rel="stylesheet" href="../includes/header.css">
    <!--search styles форма поиска--->
    <link rel="stylesheet" href="../includes/search.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!--text page2---->
    <link rel="stylesheet" href="./text_page.css">


    <link rel="stylesheet" href="../style/style.css" />
    <!---Форма поиска на сайте---->
    <link rel="stylesheet" href="../includes/search.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--footer styles-->
    <link rel="stylesheet" href="../includes/footer.css">
    <title>AlBiz</title>
</head>
<!--------->

<body>
    <!---забыл куда до этого пихал стили для отдельной страницы без больших надписей---->
    <style>
        .header_nav_wrap{
    padding-left: 10.5%;
}
    </style>


    <!--!Общий шаблон для всех страниц ,тут единый для всех footer,поиск форма, главный контейнер и header-->
    <div class="main__wrapper">
        <!-- header-->
        <!--* верхний header с логин регистрацией и языком и логотипом-->
        <div class="header__wrapper">



            <!--container UP - LOGO / LOGIN / REgistration / LAnguage-->
            <div class="header_container_form">

                <!--ONLY mobile burger-->
                <div class="burger__mobile burger__mobile-burger">
                    <!--//////////////////////////////////-->
                    <!--//////////////////////////////////-->
                    <!--//////////////////////////////////-->
                    <a class="header__logo-burger">
                        <div class="menu-burger_icon">
                            <span></span>
                        </div>
                    </a>
                    <div class="menu__body">
                        <div class="menu__wrapper">
                            <!--Смена языка-->
                            <div class="header__language_button">
                                <div class="header__language">
                                    <!--RU-->
                                    <div class="header_language_change">
                                        <p class="header_language_change-a" href="#">RU</p>
                                    </div>
                                    <!--EN-->
                                    <div class="header_language_change">
                                        <p class="header_language_change-a" href="#">EN</p>
                                    </div>
                                    <!--AZ-->
                                    <div class="header_language_change header_language_change_active">
                                        <p class="header_language_change-a" href="#">AZ</p>
                                    </div>
                                </div>
                                <div class="header_button">
                                    <img class="header_button-img" src="../style/imgs/cancel.png" alt="" srcset="">
                                </div>
                            </div>
                            <!---Блок АККАУНТА--->
                            <div href="#" class="header__desc_block header__desc_block-account">
                                <img src="../style/imgs/user.png" alt="">
                                <a class="header__account_link" href="../index.php?source=account">Aleksey Navalniy</a> <a class="log_out" href="">Çixiş</a>
                            </div>

                            <!---Блок Новое обьявление--->
                            <a href="index.php?source=add" class="header__desc_block header__desc_block-new">
                                <img src="../style/imgs/add_white.png" alt="">
                                <p>Yeni elan</p>
                            </a>
                            <!---Блок информативный--->
                            <a href="#" class="header__desc_block">
                                <img src="../style/imgs/france.svg" alt="">
                                <p>Francayzinqlər</p>
                            </a>
                            <!---Блок информативный--->
                            <a class="header__desc_block">
                                <img src="../style/imgs/invest2.svg" alt="">
                                <p>İnvestisiyalar</p>
                            </a>
                            <!---Блок информативный--->
                            <a class="header__desc_block">
                                <img src="../style/imgs/ready_buisness2.svg" alt="">
                                <p>Hazir biznes</p>
                            </a>
                            <!---Блок информативный--->
                            <a class="header__desc_block">
                                <img src="../style/imgs/avadanliq2.svg" alt="">
                                <p>Avadanliqlarin satişi</p>
                            </a>






                            <!---Блок информативный--->
                            <div id="menu_1" class="header__desc_block header__desc_block_menu">
                                <img src="../style/imgs/additional2.svg" alt="">
                                <p>Əlavə xidmətlər</p>
                            </div>
                            <div class="header__small__element">
                                <!---Блок информативный 2--->
                                <a href="#" class="header__desc_block-small">
                                    <img src="../style/imgs/arrow_right.svg" alt="">
                                    <p>kapital qiymıtlındirimase</p>
                                </a>
                                <!---Блок информативный 2--->
                                <a href="#" class="header__desc_block-small">
                                    <img src="../style/imgs/arrow_right.svg" alt="">
                                    <p>HR</p>
                                </a>
                                <!---Блок информативный 2--->
                                <a href="index.php?source=page" class="header__desc_block-small">
                                    <img src="../style/imgs/arrow_right.svg" alt="">
                                    <p>Audit</p>
                                </a>
                                <!---Блок информативный 2--->
                                <a href="#" class="header__desc_block-small">
                                    <img src="../style/imgs/arrow_right.svg" alt="">
                                    <p>Market reserch</p>
                                </a>
                            </div>





                            <!---Блок информативный--->
                            <a href="#" class="header__desc_block">
                                <img src="" alt="">
                                <p>Layihə haqda</p>
                            </a>
                            <!---Блок информативный--->
                            <a href="../index.php?source=contact" class="header__desc_block">
                                <img src="" alt="">
                                <p>Əlaqə</p>
                            </a>


                        </div>
                    </div>
                    <!--//////////////////////////////////-->
                    <!--//////////////////////////////////-->
                    <!--//////////////////////////////////-->

                </div>
                <!--LOGO-->
                <div class="header__logo">
                    <a href="../index.php?source=main">
                        <img src="../style/imgs/logo.png" alt="#" srcset="" />
                    </a>
                </div>
                <!--LOGIN /   LANGUAGE / REGISTRATION   -  form -->
                <div class="header__form">
                    <!-- Add buisness -->
                    <div class="header__add_buisness">
                        <a href="../index.php?source=add">
                            <img src="../style/imgs/add2.svg" alt="" srcset="">

                            <p>Biznesi elave edin</p>
                        </a>
                    </div>
                    <!--registration
      <div class="header__form_registration">
        
      <a href="#">
          <p>Registrasiya</p>
        </a>
      </div> -->


                    <!--Язык-->
                    <div class="header__form_language">
                        <p onclick="language()" class="dropbtn_language">
                            AZ
                            
                        </p>
                        <div id="myDropdown_language" class="dropdown-content_language">
                            <a href="#">RU</a>
                            <a href="#">EN</a>
                        </div>
                    </div>
                </div>


                <!--ONLY mobile burger placeholder-->
                <div class="burger__mobile"></div>
            </div>
        </div>




        <!--форма поиска на сайте --->
        <!--*search  контейнер с формой поиска-->
        <div class="search__wrapper   search__wrapper_float">
            <!--контейнер с навигацией наверху-->
            <div class="header_container_nav">
                <div class="header_nav_wrap">
                    <!--navigation element-->
                    <div class="header_nav_element">
                        <img src="../style/imgs/franceise.svg" alt="" srcset="">
                        <a href="../index.php?source=main&content=avadanliq">Francayzinqler</a>
                    </div>
                    <!--navigation element-->
                    <div class="header_nav_element">
                        <img src="../style/imgs/invest.svg" alt="" srcset="">
                        <a href="../index.php?source=main&content=avadanliq">Investisiyalar</a>
                    </div>
                    <!--navigation element-->
                    <div class="header_nav_element">
                        <img src="../style/imgs/ready_buisness.svg" alt="" srcset="">
                        <a href="../index.php?source=main&content=avadanliq">Hazir biznes</a>
                    </div>
                    <!--navigation element-->
                    <div class="header_nav_element ">
                        <img src="../style/imgs/equip.svg" alt="" srcset="">
                        <a href="../index.php?source=main&content=avadanliq">Avadanliqlarin satisi</a>
                    </div>


                    <!--navigation element-->
                    <div class="header_nav_element header_nav_element_dropdown">
                        <img src="../style/imgs/idea.svg" alt="" srcset="">
                        <a href="#">Əlavə Xidmətlər</a>
                        <div class="dropdown-content1">
                            <a href="../index.php?source=page">Audit</a>
                            <a href="../index.php?source=page">Проверка стоимости</a>
                            <a href="../index.php?source=page">Размещение рекламы</a>
                        </div>
                    </div>

                </div>
            </div>

            <!--фоновое изображение--->
            <div class="search__image__block">
                <!---->
                <img class="search__background_image" src="../style/imgs/background.png" alt="">
            </div>



            <!--форма поиска на сайте--->
            <div class="search_container">
                <div class="search_name_desc">
                    Hazır biznes almaq və satmaq &nbsp; | &nbsp; Satış üçün biznes təklifi
                </div>
                <form class="searc_form" id="my-form" action="">
                    <div class="search_block_wrapper">
                        <div class="search__block_container_2">
                            <!--Стандартный блок на 2 элемента--->
                            <div class="search__block_block">


                                <div class="search__how_tobuy">
                                    <!--Варианты покупки полные---->
                                    <div class="custom-select">
                                        <select id="">
                                            <option defaultSelected value="0">Almaq</option>
                                            <option value="0">Almaq</option>
                                            <option value="0">Satmaq</option>
                                            <option value="1">Arenda</option>
                                            <option value="2">Snos</option>
                                        </select>
                                    </div>
                                </div>

                                <!--Варианты категорий полные---->
                                <div class="search__how_tobuy">
                                    <div class="custom-select">
                                        <select id="my_select">
                                            <option defaultSelected value="0">Kategoriyalar</option>
                                            <option value="0">Kategoriyalar</option>
                                            <option value="1">Restoran</option>
                                            <option value="2">Kafe</option>
                                            <option value="3">Studia</option>
                                            <option value="4">Zavod</option>
                                        </select>
                                    </div>
                                </div>




                            </div>
                            <!--Стандартный блок на 1 элемент--->
                            <div class="search__block_block2">
                                <!-- ввод поиска -->
                                <div class="search_buy_input">
                                    <input class="search_buy_input-input" type="text" name="" id="" placeholder="Almaq">
                                </div>

                            </div>
                        </div>
                        <div class="search__block_square_price">

                            <!-- Цена и наличие -->
                            <div class="search__block_block3">
                                <!--Цена-->
                                <div class="search__block__price">
                                    <p class="price__name_search">Qiymət</p>
                                    <!--минимальная цена-->
                                    <div class="search__price__min">
                                        <input type="number" placeholder="min">
                                        <p>azn</p>
                                    </div>

                                    <!--максимальная цена-->
                                    <div class="search__price__max">
                                        <input type="number" placeholder="max">
                                        <p>azn</p>
                                    </div>
                                </div>
                                <!---Наличие --->
                                <div class="search__block__active">
                                    <p>Status</p>
                                    <div class="status__container__wrapper">
                                        <div class="custom-select">
                                            <select id="my_select">
                                                <option defaultSelected value="0">Aktiv</option>
                                                <option value="0">Aktiv</option>
                                                <option value="0">Baglidir</option>
                                                <option value="1">Planda</option>
                                                <option value="2">Snos</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Блок с вариантами локацией и кнопкой поиска -->
                        <div class="search__block__map_button1">
                            <!---доп поиск все обнулить запомнить поиск--->
                            <div class="search__block__additional">
                                <div class=" additional__show_hide">
                                    <p>Ətraflı axtarış</p> <img class="additional_show__image" src="../style/imgs/arrow-down.svg" alt="">
                                </div>
                                <div class="clear_form" style="color: #EB1B3D;">
                                    Hamısını sıfırla
                                </div>
                            </div>

                            <!--- локация на карте и кнопка поиска--->
                            <div class="search__block__map_button">
                                <!---локация на карте--->
                                <div class="search__block__map">
                                    <a href="#popup_3" id="popup__search_map" class="popup-link">
                                        <img src="../style/imgs/location.png" alt="#">
                                        <p>Xəritədə baxın</p>
                                    </a>
                                </div>
                                <!-----кнопка поиска-->
                                <div class="search__block__button">
                                    <button><span>12</span> Təklifi göstərin</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!------popup вывести в топ блок---->
            <div id="popup_3" class="popup">
                <div class="popup__body">
                    <div class="popup__content">
                        <a href="#header" class="popup__close close-popup">✖</a>
                        <div class="popup__wrapper_content">
                            <div class="popup__map_container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!----!----------тут контент на сайте----------------------->
        <!----!----------тут контент на сайте----------------------->
        <!----!----------тут контент на сайте----------------------->
        <div style="display: flex;">
            <a style="color:red; padding-left: 15px;" href="../index.php?source=main">главный контент</a> <br>
            <a style="color:red; padding-left: 15px;" href="../index.php?source=account">Личный кабинет</a> <br>
            <a style="color:red; padding-left: 15px;" href="../index.php?source=search_all">Поиск всего</a> <br>
            <a style="color:red; padding-left: 15px;" href="../index.php?source=login">страница входа</a> <br>
            <a style="color:red; padding-left: 15px;" href="../index.php?source=text_page">Шаблон text page</a> <br>
        </div>


        <!----!----------тут контент на сайте----------------------->
        <!----!----------тут контент на сайте----------------------->
        <div class="textpage__wrapper">
            <!--SITIMAP NAME---->
            <div class="textpage__name_wrapper">
                <!---->
                <div class="textpage_name_block">
                    <div class="textpage__name">
                        Istifadəçi Razilaşma
                    </div>
                    <div class="textpage__border"></div>
                </div>
                <!---->
            </div>


            <div class="textpage__content__container">

                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!
                    Quisquam laborum est ducimus nostrum accusantium, aspernatur quibusdam optio dolores et impedit! Praesentium, dicta, cumque iusto fugit eos ex autem hic ullam voluptatem quo atque iure maiores nam error veniam!
                    Est iste officia libero. Tempora voluptatem iure fuga maxime ex laboriosam quidem eos hic natus aperiam nisi dolore modi, obcaecati, asperiores neque quae alias dolorem dignissimos quo! Quasi, iusto sunt.
                </p>


                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!
                    Quisquam laborum est ducimus nostrum accusantium, Lorem ipsum dolor sit amet consectetur adipisicing elit. At ea laudantium debitis soluta incidunt nulla tempore, quaerat ipsam, corporis numquam saepe exercitationem enim harum iste reprehenderit magnam adipisci! Deleniti, esse.
                    Sit doloremque ipsum, in nobis perferendis hic quibusdam quia aspernatur alias laudantium. Error placeat odio, beatae obcaecati ratione quasi soluta, distinctio enim doloribus reprehenderit commodi nihil pariatur? Quas, dignissimos accusamus?
                    Inventore illum suscipit corrupti nam ex reiciendis voluptas, quo vero quisquam dolore at nisi quas, blanditiis odit hic et eius voluptates, similique aliquam dolores autem excepturi laudantium vel. Ex, omnis?
                    Expedita magni amet necessitatibus atque quaerat? Ut eaque quasi quae, aspernatur nobis impedit dolores ipsam! Fugiat officia est fuga ut illo architecto in odit laboriosam, explicabo quaerat ducimus unde incidunt. aspernatur quibusdam optio dolores et impedit! Praesentium, dicta, cumque iusto fugit eos ex autem hic ullam voluptatem quo atque iure maiores nam error veniam!
                    Est iste officia libero. Tempora voluptatem iure fuga maxime ex laboriosam quidem eos hic natus aperiam nisi dolore modi, obcaecati, asperiores neque quae alias dolorem dignissimos quo! Quasi, iusto sunt.
                </p>
                <!--Блок картинки--->
                <p>
                    <img src="../style/imgs/123456.jpg" alt="">
                </p>

                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!

                </p>

                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!
                    Quisquam laborum est ducimus nostrum accusantium, aspernatur quibusdam optio dolores et impedit! Praesentium, dicta, cumque iusto fugit eos ex autem hic ullam voluptatem quo atque iure maiores nam error veniam!
                    Est iste officia libero. Tempora voluptatem iure fuga maxime ex laboriosam quidem eos hic natus aperiam nisi dolore modi, obcaecati, asperiores neque quae alias dolorem dignissimos quo! Quasi, iusto sunt.
                </p>


                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!
                    Quisquam laborum est ducimus nostrum accusantium, aspernatur quibusdam optio dolores et impedit! Praesentium, dicta, cumque iusto fugit eos ex autem hic ullam voluptatem quo atque iure maiores nam error veniam!
                    Est iste officia libero. Tempora voluptatem iure fuga maxime ex laboriosam quidem eos hic natus aperiam nisi dolore modi, obcaecati, asperiores neque quae alias dolorem dignissimos quo! Quasi, iusto sunt.
                </p>
                <!--Блок картинки--->
                <p>
                    <img src="../style/imgs/768.png" alt="">
                </p>
                <!--Блок текста-->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab earum quibusdam inventore sapiente similique, commodi consequuntur reiciendis maiores aut, assumenda cupiditate perspiciatis reprehenderit voluptates molestias, obcaecati dolor. Quasi, neque!
                    Quisquam laborum est ducimus nostrum accusantium, aspernatur quibusdam optio dolores et impedit! Praesentium, dicta, cumque iusto fugit eos ex autem hic ullam voluptatem quo atque iure maiores nam error veniam!
                    Est iste officia libero. Tempora voluptatem iure fuga maxime ex laboriosam quidem eos hic natus aperiam nisi dolore modi, obcaecati, asperiores neque quae alias dolorem dignissimos quo! Quasi, iusto sunt.
                </p>

            </div>
        </div>
        <!----!----------тут контент на сайте----------------------->

        <!-- Футер -->
        <?php include '../includes/footer.php' ?>
    </div>
    <script src="../js/script.js"></script>
    <script>
        /********Скрипт языка ********** */
        function language() {
            document.getElementById("myDropdown_language").classList.toggle("show_language");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn_language')) {
                var dropdowns = document.getElementsByClassName("dropdown-content_language");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show_language')) {
                        openDropdown.classList.remove('show_language');
                    }
                }
            }
        }
        /********Скрипт выпадаюшего меню***********/
        var acc = document.getElementsByClassName("header__desc_block_menu");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>