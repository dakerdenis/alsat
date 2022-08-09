
    <!--стили главной страницы-->
    <style>
        <?php include './content/main.css'; ?>
        <?php include './content/block.css';?>
    </style>
    <div class="filter__wrapper">
        <div class="filter__container">
            <div class="filter__desc">
                Filtr:
            </div>


            <div class="filter__element">
                Yasayis Binasinda: 150
            </div>
            <div class="filter__element">
                Ayri Objekt: 150
            </div>
            <div class="filter__element">
                Biznes Merkezinde: 150
            </div>
            <div class="filter__element">
                Daha Cox
            </div>

            <!--Сортировка по чему либо--->
            <div class="custom-selectfilter">
                <select>
                  <option value="0">Bahadan Ucuza</option>
                  <option value="0">Ucuzdan Baha</option>
                  <option value="0">По возрастанию популярности</option>
                  <option value="1">По убыванию популярности</option>
                  <option value="2">Snos</option>
                </select>
              </div>
        </div>
    </div>




    <div class="content__wrapper">
        <!-- контейнер -->
        <div class="content_wrapper_4elements">
            <!-- 2 элемента контейнер -->
            <div class="content_wrapper_2elements">
                <!--element block -->
                <?php include './content/block.php'; ?>
                <!--element block -->
                <?php include './content/block.php'; ?>
            </div>
            <div class="content_wrapper_2elements">
                <!--element block -->
                <?php include './content/block.php'; ?>
                <!--element block -->
                <?php include './content/block.php'; ?>
            </div>
        </div>

        <div class="content_wrapper_4elements">
            <!-- 2 элемента контейнер -->
            <div class="content_wrapper_2elements">
                <!--element block -->
                <?php include './content/block.php'; ?>
                <!--element block -->
                <?php include './content/block.php'; ?>
            </div>
            <!-- 2 элемента контейнер -->
            <div class="content_wrapper_2elements">
                <!--element block -->
                <?php include './content/block.php'; ?>
                <!--element block -->
                <?php include './content/block.php'; ?>
            </div>
        </div>

    </div>

    <!--Advertisement block -->
    <div class="advertisement__block">
        <div class="advertisement__img">
            <img class="advertisement__img-img" src="./style/imgs/advertisement_samll.png" alt="">
        </div>
    </div>
        <!----Тут контент меняется ---->
        <?php
        if(isset($_GET['content'])){
            $main_content = $_GET['content'];


        } else {
            $main_content = '';
        }
        switch($main_content){
            case 'avadanliq';
            include './content/categories/categories.php';
            break;
            
            case 'biznes_satish';
            include './content/categories/search_elements.php';
            break;
            

            default:
            include './content/categories/main.php';
            break;
        }
    ?>


    <!-- Advertisement block 2-->

    <div class="advertisement__block2">
        <div class="advertisement__img2">
            <img src="../style/imgs/big_element_back.png" alt="" class="advertisement__img2-img">
        </div>
    </div>


 

<script>
    
  /**********Скрипт для фильтра сортировки ************** */
  /**********Скрипт для фильтра сортировки ************** */
  /**********Скрипт для фильтра сортировки ************** */
  /**********Скрипт для фильтра сортировки ************** */
  /**********Скрипт для фильтра сортировки ************** */
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-selectfilter");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selectedfilter");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-itemsfilter select-hidefilter");
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
            y = this.parentNode.getElementsByClassName("same-as-selectedfilter");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selectedfilter");
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
      this.nextSibling.classList.toggle("select-hidefilter");
      this.classList.toggle("select-arrow-activefilter");
    });
  }

  function closeAllSelect3(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-itemsfilter");
    y = document.getElementsByClassName("select-selectedfilter");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-activefilter");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hidefilter");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelectfilter);



</script>