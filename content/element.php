<style>
    <?php include './content/block.css'; ?><?php include './content/element.css'; ?>
</style>

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
                            Kategoriya:
                        </div>
                        <div class="produkt__category_block_type">
                            SPA SALON
                        </div>
                    </div>
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
                            Kategoriya:
                        </div>
                        <div class="produkt__category_block_type">
                            SPA SALON
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
                    Fealliyet: Aktiv
                </div>
                <div class="product__monthincome_block">
                    Ayliq gelir: 10 000 azn
                </div>
                <div class="product__percentage">
                    Biznes% (serik): Tam 100%
                </div>
            </div>
        </div>
    </div>
</div>

<!---4 похожие рекомендации--->
<div class="recomendation__wrapper">
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
</div>


<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>