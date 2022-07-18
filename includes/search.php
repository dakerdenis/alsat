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
        <a href="#">Francayzinqler</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/invest.svg" alt="" srcset="">
        <a href="#">Investisiyalar</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/ready_buisness.svg" alt="" srcset="">
        <a href="#">Hazir biznes</a>
      </div>
      <!--navigation element-->
      <div class="header_nav_element">
        <img src="./style/imgs/equip.svg" alt="" srcset="">
        <a href="#">Avadanliqlarin satisi</a>
      </div>
    </div>
  </div>

  <div class="search_container">
    <div class="search_name_desc">
      Hazır biznes almaq və satmaq &nbsp; | &nbsp; Satış üçün biznes təklifi
    </div>
    <form class="searc_form" id="my-form" action="">
      <div class="search_block_wrapper">
        <div class="search__block_container">
          <!--Стандартный блок на 2 элемента--->
          <div class="search__block_block">
            <div class="serach__block__almaq">
              <p>Almaq</p>
            </div>
            <div class="serach__block__category">
              Kateqoriyalar
            </div>
          </div>
          <!--Стандартный блок на 1 элемент--->
          <div class="search__block_block2">
            <!-- ввод поиска -->
            <div class="search_buy_input">
              <input class="search_buy_input-input" type="text" name="" id="" placeholder="Almaq">
            </div>
            <!--выбор станции метро или ориентира-->
            <div class="search_buy_destination">
              <span>Metro</span>
              <span>Rayon</span>
              <span>Küçə</span>
            </div>
          </div>
        </div>
        <div class="search__block_container search__block_container2">
          <!-- Площадь -->
          <div class="search__block_block">
            <div class="search__block__square">
              <p>Sahə</p>
              <!--минимальная площадь--->
              <div class="search__square__min">
                <input type="number" placeholder="min">
                <p>m<sup>2</sup></p>
              </div>
              <!--максимальная площадь-->
              <div class="search__square__max">
                <input type="number" placeholder="max">
                <p>m<sup>2</sup></p>
              </div>
            </div>
          </div>
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
              Qiymət
            </div>
          </div>
        </div>



        <!--Блок с вариантами локацией и кнопкой поиска -->
        <div class="search__block__map_button">
          <!---доп поиск все обнулить запомнить поиск--->
          <div class="search__block__additional">
            <div class="search__block__additional_element">
              Ətraflı axtarış
            </div>
            <div class="search__block__additional_element clear_form" style="color: #EB1B3D;">
              Hamısını sıfırla
            </div>
            <div class="search__block__additional_element">
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
<script>
  /************Скрипт очищающий форму от надписей**************** */
  let btnClear = document.querySelector('.clear_form');
  let form = document.querySelector('form');

  btnClear.addEventListener('click', function() {
    form.reset();
  });
</script>