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
        <img src="./style/imgs/equip.svg" alt="" srcset="">
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
            <div class="custom-select1">
              <select id="my_select">
                <option defaultSelected value="0">Almaq</option>
                <option value="0">Almaq</option>
                <option value="0">Satmaq</option>
                <option value="1">Arenda</option>
                <option value="2">Snos</option>


              </select>
            </div>

            <!--Варианты категорий полные---->
            <div class="custom-select2">
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
              <div class="custom-select3">
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
<script>
  /**********Скрипт для выбора варианта покупки ************** */
  /**********Скрипт для выбора варианта покупки ************** */
  /**********Скрипт для выбора варианта покупки ************** */
  /**********Скрипт для выбора варианта покупки ************** */
  /**********Скрипт для выбора варианта покупки ************** */
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select1");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected1");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items1 select-hide1");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected1");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected1");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect1(this);
      this.nextSibling.classList.toggle("select-hide1");
      this.classList.toggle("select-arrow-active1");
    });
  }

  function closeAllSelect1(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items1");
    y = document.getElementsByClassName("select-selected1");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active1");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide1");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect1);

  /**********Скрипт для выбора варианта категорий ************** */
  /**********Скрипт для выбора варианта категорий ************** */
  /**********Скрипт для выбора варианта категорий ************** */
  /**********Скрипт для выбора варианта категорий ************** */
  /**********Скрипт для выбора варианта категорий ************** */
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select2");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;



    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected2");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);



    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items2 select-hide2");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected2");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected2");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide2");
      this.classList.toggle("select-arrow-active2");
    });
  }

  function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items2");
    y = document.getElementsByClassName("select-selected2");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active2");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide2");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect);


  /**********Скрипт для выбора варианта статуса ************** */
  /**********Скрипт для выбора варианта статуса ************** */
  /**********Скрипт для выбора варианта статуса ************** */
  /**********Скрипт для выбора варианта статуса ************** */
  /**********Скрипт для выбора варианта статуса ************** */
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select3");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected3");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items3 select-hide3");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected3");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected3");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect3(this);
      this.nextSibling.classList.toggle("select-hide3");
      this.classList.toggle("select-arrow-active3");
    });
  }

  function closeAllSelect3(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items3");
    y = document.getElementsByClassName("select-selected3");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active3");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide3");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect3);











  /************Скрипт очищающий форму от надписей**************** */
  let btnClear = document.querySelector('.clear_form');
  let form = document.querySelector('form');

  btnClear.addEventListener('click', function() {
    form.reset();
    // Look for a default selected option
    // for (var i = 0, iLen = options.length; i < iLen; i++) {

    //   if (options[i].defaultSelected) {
    //     selectElement.selectedIndex = i;
    //     return;
    //   }
    // }
    // If no option is the default, select first or none as appropriate
    //selectElement.selectedIndex = 0; // or -1 for no option selected
    var options = document.querySelectorAll('#my_select option');
    for (var i = 0, l = options.length; i < l; i++) {
      options[i].selected = options[i].defaultSelected;
    }
  });







  /************Динамическое изменение размера INPUT************** */
  var input = document.querySelector('input'); // get the input element
  input.addEventListener('input', resizeInput); // bind the "resizeInput" callback on "input" event
  resizeInput.call(input); // immediately call the function

  function resizeInput() {
    this.style.width = this.value.length + "1ch" + "ch";
  }
</script>