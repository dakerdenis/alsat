<style>
    <?php include './content/add.css';?>
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
                            <div class="custom-select">
                                <select id="my_select">
                                    <option defaultSelected value="0">Seher</option>
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

                    <!---Добавление изображения-->
                    <div class="add_buisness__element">
                        <div class="add_buisness__element-desc">
                            Verifikaciya sekilleri elave et<br>
                        </div>


                        <div class="add_buisness_photo_add">
                            <div class="add_photodesc">
                                Bir dəfəli zaqruzka 10 dənə maksimum
                            </div>
                        </div>
                    </div>
                    <div class="add_buisness__accept">
                        <label class="container">Нажимая это я подтверждаю что кроме администрации файлы подтверждающие мой бизнес увидят другие пользователи
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
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
                            <div class="custom-select">
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
                            <div class="custom-select">
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
                            Sahə(m<sup>2</sup>)*
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
                            <div class="custom-select">
                                <select>
                                    <option value="0">test1</option>
                                    <option value="0">test1</option>
                                    <option value="1">test2</option>
                                    <option value="2">test3</option>
                                    <option value="3">test4</option>
                                    <option value="4">test5</option>
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
                            <div class="add__buisness_text_area__maxsymbols">
                                maximum 1000 symbols
                            </div>
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
