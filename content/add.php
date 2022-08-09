<style>
    <?php include './content/add.css'; ?>
</style>

<div class="add_buisness_wrapper">
    <div class="add_buisness_name">
        Elan yerləşdir
    </div>

    <div class="add_buisness_container">
        <form action="">
            <!--wrapper-->
            <div class="add_buisness_container_wrapper">
                <!-----1й контейнер --->
                <!-----1й контейнер --->
                <!-----1й контейнер --->
                <div class="add_buisness_container_1">
                    <!--элемент формы Ad soyad-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Ad Soyad*
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="text">
                        </div>
                    </div>
                    <!--элемент формы Sirketin Adi-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Sirketin Adi
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="text">
                        </div>
                    </div>
                    <!---элемент с выбором Seher -->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Seher*
                        </div>
                        <div class="add_buisness__element-input">
                            <!--выбор города--->
                            <div class="custom-select_city">
                                <select>
                                    <option value="0">Seher</option>
                                    <option value="0">Seher</option>
                                    <option value="1">Baku</option>
                                    <option value="2">Novigrad</option>
                                    <option value="3">Oxenfurt</option>
                                    <option value="4">Ard-Skellige</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--элемент формы Unvan-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Ünvan
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="text">
                        </div>
                    </div>
                    <!--элемент формы Rayon-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Rayon
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="text">
                        </div>
                    </div>
                    <!--КАРТА--->
                    <div class="add_buisness__element add_buisness__element-mapblock">
                        <div class="add_buisness__element-desc">
                            Xetirede Goster
                        </div>
                        <div class="add_buisness__element-map">

                        </div>
                    </div>
                    <!---Добавление изображения-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Sekilleri elave et* <br>
                            <p>Maksimum 30 dənə</p>
                        </div>


                        <div class="add_buisness_photo_add">
                            <div class="add_photodesc">
                                Bir dəfəli zaqruzka 10 dənə maksimum
                            </div>
                        </div>
                    </div>




                    
                </div>
                <!-----2й контейнер --->
                <!-----2й контейнер --->
                <!-----2й контейнер --->
                <div class="add_buisness_container_1">
                    <!---Meqsed-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Meqsed*
                        </div>
                        <div class="add_buisness__element-input">
                            <!--выбор города--->
                            <div class="custom-select_goal">
                                <select>
                                    <option value="0">Biznes satiram</option>
                                    <option value="0">Biznes satiram</option>
                                    <option value="1">Öldü</option>
                                    <option value="2">Bankrot</option>
                                    <option value="3">Yandı</option>
                                    <option value="4">Nalogovaya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!---Категория-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Kategoriya*
                        </div>
                        <div class="add_buisness__element-input">
                            <!--категории--->
                            <div class="custom-select_category">
                                <select>
                                    <option value="0">Kategoriya</option>
                                    <option value="0">Kategoriya</option>
                                    <option value="1">Kafe</option>
                                    <option value="2">Restoran</option>
                                    <option value="3">Aptek</option>
                                    <option value="4">Nalogovaya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--Площадь-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Sahə(m<sub>2</sub>)*
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="text">
                        </div>
                    </div>

                    <!--Fealliyet-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Fealliyet*
                        </div>
                        <div class="add_buisness__element-input">
                            <div class="custom-select_fealliet">
                                <select>
                                    <option value="0">Seher</option>
                                    <option value="0">Seher</option>
                                    <option value="1">Baku</option>
                                    <option value="2">Novigrad</option>
                                    <option value="3">Oxenfurt</option>
                                    <option value="4">Ard-Skellige</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!--Цена-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Qiymet (azn)*
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="number">
                        </div>
                    </div>

                    <!--Месячный доход-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Ayliq qelir (azn)*
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="number">
                        </div>
                    </div>
                    <!--ПРоцент бизнеса-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Biznes& (serik)*
                        </div>
                        <div class="add_buisness__element-input">
                            <input type="number">
                        </div>
                    </div>

                    <!--Дополнительная информация-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Ətraflı məlumat*
                        </div>
                        <div class="add_buisness__element-input">
                            <textarea style="resize:none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!---INfo text--->
            <div class="add_buisness_container_text">
                *Elan yerlesdirerek, Siz saytin Istifadeci razilasmasi ile razi oldugunuzu tesdig edirsiz.
            </div>
            <!--submit-->
            <div class="add_buisness_container-button">
                <button type="submit">Yerləşdirmək</button>
            </div>
        </form>
    </div>
</div>


















<script>
    /**********Скрипт для выбора города ************** */
    /**********Скрипт для выбора города ************** */
    /**********Скрипт для выбора города ************** */
    /**********Скрипт для выбора города ************** */
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select_city");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected_city");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items_city select-hide_city");
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
                        y = this.parentNode.getElementsByClassName("same-as-selected_city");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected_city");
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
            this.nextSibling.classList.toggle("select-hide_city");
            this.classList.toggle("select-arrow-active_city");
        });
    }

    function closeAllSelect1(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items_city");
        y = document.getElementsByClassName("select-selected_city");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active_city");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide_city");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect1);



    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select_goal");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected_goal");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items_goal select-hide_goal");
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
                        y = this.parentNode.getElementsByClassName("same-as-selected_goal");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected_goal");
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
            this.nextSibling.classList.toggle("select-hide_goal");
            this.classList.toggle("select-arrow-active_goal");
        });
    }

    function closeAllSelect1(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items_goal");
        y = document.getElementsByClassName("select-selected_goal");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active_goal");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide_goal");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect1);


    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    /**********Скрипт для выбора цели продажи ************** */
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select_category");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected_category");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items_goal select-hide_category");
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
                        y = this.parentNode.getElementsByClassName("same-as-selected_category");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected_category");
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
            this.nextSibling.classList.toggle("select-hide_category");
            this.classList.toggle("select-arrow-active_category");
        });
    }

    function closeAllSelect1(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items_category");
        y = document.getElementsByClassName("select-selected_category");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active_category");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide_category");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect1);



    /**********Скрипт для выбора fealliyet ************** */
    /**********Скрипт для выбора fealliyet ************** */
    /**********Скрипт для выбора fealliyet ************** */
    /**********Скрипт для выбора fealliyet ************** */
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select_fealliet");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected_fealliet");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items_goal select-hide_fealliet");
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
                        y = this.parentNode.getElementsByClassName("same-as-selected_fealliet");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected_fealliet");
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
            this.nextSibling.classList.toggle("select-hide_fealliet");
            this.classList.toggle("select-arrow-active_fealliet");
        });
    }

    function closeAllSelect1(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items_fealliet");
        y = document.getElementsByClassName("select-selected_fealliet");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active_fealliet");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide_fealliet");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect1);
</script>