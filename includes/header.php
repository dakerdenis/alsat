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
              <img class="header_button-img" src="./style/imgs/cancel.png" alt="" srcset="">
            </div>
          </div>
          <!---Блок АККАУНТА--->
          <div href="#" class="header__desc_block header__desc_block-account">
              <img src="./style/imgs/user.png" alt="">
              <p>Aleksey Navalniy</p>           <a class="log_out" href="">Çixiş</a>
          </div>

          <!---Блок Новое обьявление--->
          <a href="index.php?source=add" class="header__desc_block header__desc_block-new">
            <img src="./style/imgs/add_white.png" alt="">
            <p>Yeni elan</p>
          </a>
          <!---Блок информативный--->
          <a href="#" class="header__desc_block">
            <img src="./style/imgs/add_white.png" alt="">
            <p>Francayzinqlər</p>
          </a>
          <!---Блок информативный--->
          <a class="header__desc_block">
            <img src="./style/imgs/add_white.png" alt="">
            <p>İnvestisiyalar</p>
          </a>
          <!---Блок информативный--->
          <a class="header__desc_block">
            <img src="./style/imgs/add_white.png" alt="">
            <p>Hazir biznes</p>
          </a>
          <!---Блок информативный--->
          <a class="header__desc_block">
            <img src="./style/imgs/add_white.png" alt="">
            <p>Avadanliqlarin satişi</p>
          </a>
          <!---Блок информативный--->
          <a href="#" class="header__desc_block">
            <img src="./style/imgs/add_white.png" alt="">
            <p>Əlavə xidmətlər</p>
          </a>
          <!---Блок информативный 2--->
          <a href="#" class="header__desc_block-small">
            <img src="./style/imgs/arrow_right.svg" alt="">
            <p>kapital qiymıtlındirimase</p>
          </a>
          <!---Блок информативный 2--->
          <a href="#" class="header__desc_block-small">
            <img src="./style/imgs/arrow_right.svg" alt="">
            <p>HR</p>
          </a>
          <!---Блок информативный 2--->
          <a href="index.php?source=page" class="header__desc_block-small">
            <img src="./style/imgs/arrow_right.svg" alt="">
            <p>Audit</p>
          </a>
          <!---Блок информативный 2--->
          <a href="#" class="header__desc_block-small">
            <img src="./style/imgs/arrow_right.svg" alt="">
            <p>Market reserch</p>
          </a>



          <!---Блок информативный--->
          <a href="#" class="header__desc_block">
            <img src="" alt="">
            <p>Layihə haqda</p>
          </a>
          <!---Блок информативный--->
          <a href="index.php?source=contact" class="header__desc_block">
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
      <a href="./index.php?source=main">
        <img src="./style/imgs/logo.png" alt="#" srcset="" />
      </a>
    </div>
    <!--LOGIN /   LANGUAGE / REGISTRATION   -  form -->
    <div class="header__form">
      <!-- Add buisness -->
      <div class="header__add_buisness">
        <a href="index.php?source=add">
          <img src="./style/imgs/add.png" alt="" srcset="">

          <p>Biznesi elave edin</p>
        </a>
      </div>
      <!--registration
      <div class="header__form_registration">
        
      <a href="#">
          <p>Registrasiya</p>
        </a>
      </div> -->
      <!--login-->
      <div class="header__form_login">
        <a href="">
          <p>Daxil ol</p>
        </a>
      </div>
      <!--Язык-->
      <div class="header__form_language">
        <button onclick="language()" class="dropbtn_language">AZ</button>
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
</script>