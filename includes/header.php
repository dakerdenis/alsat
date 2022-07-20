<!--* верхний header с логин регистрацией и языком и логотипом-->
<div class="header__wrapper">



  <!--container UP - LOGO / LOGIN / REgistration / LAnguage-->
  <div class="header_container_form">

    <!--ONLY mobile burger-->
    <div class="burger__mobile burger__mobile-burger">
      <!--//////////////////////////////////-->
      <!--//////////////////////////////////-->
      <!--//////////////////////////////////-->
      <a href="#" class="header__logo-burger">
        <div class="menu-burger_icon">
          <span></span>
        </div>
        <div class="menu__body">
          <div class="menu__wrapper">
            <!--Смена языка-->
            <div class="header__language_button">
              <div class="header__language">
                <!--RU-->
                <div class="header_language_change">
                  RU
                </div>
                <!--EN-->
                <div class="header_language_change">
                  EN
                </div>
                <!--AZ-->
                <div class="header_language_change">
                    AZ
                </div>
              </div>
              <div class="header_button">
                <img class="header_button-img" src="./style/imgs/cancel.png" alt="" srcset="">
              </div>
            </div>
            <ul class="menu__list">

              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">
                  <img src="" alt="" class="menu__link-image">
                  Lorem Ipsum 1</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 2</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 3 </a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 4</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 5</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 6</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 7</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 8</a>
              </li>
              <!--ссылка-->
              <li>
                <a href="#" class="menu__link">Lorem Ipsum 9</a>
              </li>


            </ul>
          </div>
        </div>
      </a>
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
        <a href="#">
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
        <a href="#">
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