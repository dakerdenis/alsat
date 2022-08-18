<!--стили главной страницы-->
<style>
    <?php include './content/main.css'; ?><?php include './content/block.css'; ?>
</style>
<div class="filter__wrapper">
    <div class="filter__container">

        <div class="filter__desc">
            Filtr:
        </div>
        <!------ Фильтр убирается до лучших времён

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
            ---->
        <!--Сортировка по чему либо--->

        <div class="custom-select" style="width:100%;">
            <select>
                <option value="0">Select car:</option>
                <option value="1">Audi</option>
                <option value="2">BMW</option>
                <option value="3">Citroen</option>
                <option value="4">Ford</option>
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
if (isset($_GET['content'])) {
    $main_content = $_GET['content'];
} else {
    $main_content = '';
}
switch ($main_content) {
    case 'avadanliq';
        include './content/categories/categories.php';
        break;

    case 'biznes_satish';
        include './content/categories/search_elements.php';
        break;

    case 'district';
        include './content/districts/districts.php';
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