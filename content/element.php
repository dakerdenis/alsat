<style>
    <?php include './content/block.css'; ?><?php include './content/element.css'; ?>
</style>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<div class="product_wrapper">
    <!-- навигация и номер обьявления--->
    <div class="product__desc">
        <!---навигация элемента-->
        <div class="product__navigation">
            Hazır biznes > SPA salon
        </div>
        <!---номер элемента в бд и закладка-->
        <div class="product__number">
            <p>Elan N 2455341</p>
            <img src="https://placehold.jp/3d4070/ffffff/25x30.png" alt="" srcset="">
        </div>
    </div>
    <!-- Галлерея и описание товара--->
    <div class="product__content_wrapper">
        <!-----галлерея часть 1 --->
        <div class="photo-gallery-part1">
            <div class="gallery-part1-image">
                <img id="img-Box" src="./content/images/img1.jpg" alt="">
                <i id="zoom" class="fa-solid fa-magnifying-glass-plus"></i>
            </div>
        </div>
        <!--Галлерея часть 2-->
        <div class="photo-gallery-part2">

            <!---PC VERSION---->
            <div class="photo_gallery__wrapper-pc">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img1.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img2.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img3.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img4.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img5.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img6.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img1.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img2.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img5.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img6.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img1.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>
                            <div class="gallery-part2-blocks">
                                <img src="./content/images/img2.jpg" alt="click here" onclick="myImageFunction(this)" />
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>

        </div>
    </div>

    <!---Описание товара ПК---->
    <div class="product__content__desc">
        <!-------карта тип цена даьа и категории ---->
        <div class="product__price__map">
            <!--Цена и площадь + кол во просмотров и дата добавления--->
            <div class="product__price_square">
                <!---Цена и площадь---->
                <div class="product__price__wrap1">
                    <div class="product__price__block">
                        2 000 000 AZN
                    </div>
                    <div class="product__square__block">
                        300m<sup>2</sup>
                    </div>
                </div>
                <!--кол во просмотров и дата--->
                <div class="product__views_data">
                    <div class="product__views_block">
                        Baxislarin sayi: 10621
                    </div>
                    <div class="product__data_block">
                        Yenlendi: 29 Aprel 2022
                    </div>
                </div>
            </div>
            <!---Раздел и категория товара + карта--->
            <div class="product__type__map">
                <!--описание и категория--->
                <div class="product__type_block">
                    <div class="produkt__category_block_wrap">
                        <div class="produkt__category_block_type">
                            Kategoriya:
                        </div>
                        <div class="produkt__category_block_type">
                            SPA SALON
                        </div>
                    </div>
                    <div class="produkt__category_block_wrap">
                        <div class="produkt__category_block_type">
                            Seher:
                        </div>
                        <div class="produkt__category_block_type">
                            Baki
                        </div>
                    </div>
                    <div class="produkt__category_block_wrap">
                        <div class="produkt__category_block_type">
                            Unvan:
                        </div>
                        <div class="produkt__category_block_type">
                            Neftciler pr-ti 115
                        </div>
                    </div>
                    <div class="produkt__category_block_wrap">
                        <div class="produkt__category_block_type">
                            Rayon:
                        </div>
                        <div class="produkt__category_block_type">
                            Sebayil (m/s Sahil)
                        </div>
                    </div>
                </div>
                <!--карта-->
                <div class="product__map_block">
                    <div class="product__map_block-map">

                    </div>
                </div>
            </div>

            <!--связь с обьектом-->
            <div class="product__contact__block">
                Etrafli melumat: +994 50 555 55 55
            </div>
        </div>
        <!-----Описание товара + его название +его доход--->
        <div class="product__desc__name">
            <!----имя этого обьекта---->
            <div class="product__desc__name_block">
                Spa Salon, ela veziyyetde
            </div>

            <!---Описание полное от клиента--->
            <div class="product__fulldesc__block">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit exercitationem nobis recusandae id qui, vitae adipisci et delectus dolorem quisquam? Vero unde soluta, dolorum quidem cupiditate quaerat alias et ea?
                    Fugiat laboriosam et expedita. Ratione corporis itaque delectus vitae unde possimus sed corrupti sit in id reiciendis illo nulla molestiae temporibus aperiam ipsum magnam repellendus, ipsa soluta. Dolore, ducimus. Corrupti!
                    Itaque, sed quasi! Tempora accusamus deserunt expedita ipsam, quo excepturi sint iste. Ratione placeat obcaecati autem, dolore fugit, voluptate eveniet ullam porro nobis ad, explicabo omnis. Eos necessitatibus quidem doloremque!
                </p>
            </div>
            <!--его доходность маржа и прибыль--->
            <div class="product__price__money">
                <div class="product__openclose_block">
                    <div class="product__desc__addstyle">Fealliyet:</div>
                    <div class="product__price__money-div">Aktiv</div>
                </div>
                <div class="product__monthincome_block">
                    <div class="product__desc__addstyle">Ayliq gelir:</div>
                    <div class="product__price__money-div">10 000 azn</div>
                </div>
                <div class="product__percentage">
                    <div class="product__desc__addstyle">Biznes% (serik):</div>
                    <div class="product__price__money-div">Tam 100%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---4 похожие рекомендации--->



<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>