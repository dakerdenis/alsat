<style>
  <?php
  include './search.css'
  ?>
</style>
<!--*search  контейнер с формой поиска-->
<div class="search__wrapper">
  <!--контейнер с навигацией наверху-->
  <div class="header_container_nav">
    <div class="header_nav_wrap">
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/franceise.svg" alt="" srcset="">
        <a href="./index.php?source=main&content=avadanliq">Françayzinqlər</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/invest.svg" alt="" srcset="">
        <a href="./index.php?source=main&content=avadanliq">Investisiyalar</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/ready_buisness.svg" alt="" srcset="">
        <a href="./index.php?source=main&content=avadanliq">Hazir biznes</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element ">
        <img src="./style/imgs/equip.svg" alt="" srcset="">
        <a href="./index.php?source=main&content=avadanliq">Avadanliqlarin satisi</a>
      </div>


      <!--navigation element-->
      <div class="header_nav_element header_nav_element_dropdown">
        <img src="./style/imgs/idea.svg" alt="" srcset="">
        <a href="#">Əlavə Xidmətlər</a>
        <div class="dropdown-content1">
          <a href="./index.php?source=page">Audit</a>
          <a href="./index.php?source=page">Проверка стоимости</a>
          <a href="./index.php?source=page">Размещение рекламы</a>
        </div>
      </div>

    </div>
  </div>

  <!--фоновое изображение--->
  <div class="search__image__block">
    <!---->
    <img class="search__background_image" src="./style/imgs/background.png" alt="">
  </div>

  <!--Промо текст на картинке---->
  <div class="search__promotext_block">
    <div class="search__promotext_text">
      Azərbaycanda hazır biznes alın
    </div>
    <!--кнопки промо-->
    <div class="search__promotext_buttons">
        <a href="#" class="search__promo_button_add">Biznesi əlavə edin</a>
        <a href="#" class="search__promo_button_buy">Biznes al</a>
    </div>
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
                  <option value="0">Сдача помещений в аренду</option>
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
                  <option value="1">Образовательный центр даунов</option>
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
            <div class="search__block__active" id="search__block__active">
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
              <p>Ətraflı axtarış</p> <img class="additional_show__image" src="./style/imgs/arrow-down.svg" alt="">
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
                <img src="./style/imgs/location.png" alt="#">
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