<style>
  <?php
  include './search.css'
  ?>
</style>
<!--*search  контейнер с формой поиска-->
<div class="search__wrapper">


  <!--container DOWN - smal navigation-->
  <div class="header_container_nav">
    <div class="header_nav_wrap">
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/franceise.svg" alt="" srcset="">
        <a href="./index.php?source=main&content=avadanliq">Francayzinqler</a>
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

  <div class="search_container">
    <div class="search_name_desc">
      Hazır biznes almaq və satmaq &nbsp; | &nbsp; Satış üçün biznes təklifi
    </div>
    <form class="searc_form" id="my-form" action="">
      <div class="search_block_wrapper">
        <div class="search__block_container_2">
          <!--Стандартный блок на 2 элемента--->
          <div class="search__block_block">


            <!--Варианты покупки полные---->
            <div class="custom-select">
              <select >
                <option  value="0">Almaq</option>
                <option value="0">Almaq</option>
                <option value="0">Satmaq</option>
                <option value="1">Arenda</option>
                <option value="2">Snos</option>


              </select>
            </div>

            <!--Варианты категорий полные---->
            <div class="custom-select">
              <select >
                <option  value="0">Kategoriyalar</option>
                <option value="0">Kategoriyalar</option>
                <option value="1">Restoran</option>
                <option value="2">Kafe</option>
                <option value="3">Studia</option>
                <option value="4">Zavod</option>

              </select>
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
              <div class="custom-select">
                <select>
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
            <div class="remember_search">
              Axtarışı yadda saxla
            </div>
          </div>

          <!--- локация на карте и кнопка поиска--->
          <div class="search__block__map_button">
            <!---локация на карте--->
            <div class="search__block__map">
              <img src="./style/imgs/location.png" alt="#">
              <p>Xəritədə baxın</p>
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
</div>