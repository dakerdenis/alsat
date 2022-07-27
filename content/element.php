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