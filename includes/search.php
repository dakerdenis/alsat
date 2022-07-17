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
    <form class="searc_form" action="">
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
            Metro Rayon Küçə
          </div>
        </div>




        <!--Блок с вариантами локацией и кнопкой поиска -->
        <div class="search__block__map_button">
          <!---доп поиск все обнулить запомнить поиск--->
          <div class="search__block__additional">
            <div class="search__block__additional_element">
              Ətraflı axtarış
            </div>
            <div class="search__block__additional_element">
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
              Xətirə baxın
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