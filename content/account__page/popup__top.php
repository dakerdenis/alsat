<!------popup вывести в топ блок оплата---->
<div id="popup_2" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a href="#header" style="font-size: 20px;" class="popup__close close-popup">&#10006;</a>
            <div class="popup__wrapper_content">
                <!---публикация нужная-->
                <div class="popup__wrapper_block">
                    <?php include './content/account__page/account__block_maketop.php' ?>
                </div>
                <!----блок с кнопками где выводится цена------>
                <div class="popup__content__container">
                    <!---Поднять в общий топ---->
                    <div class="popup__content__block">
                        <div class="popup__content__block_container">
                            <!---иконка вывода в топ--->
                            <div class="popup__content__block-icon">
                            <img src="./style/imgs/top.svg" alt="">
                            </div>
                            <!---контент с кнопками выбора--->
                            <div class="popup__content__block-block">
                                <!--название категории вывода в топ--->
                                <div class="popup__content__block__title">
                                    Поднять в общий топ
                                </div>
                                <div class="popup__content__block__title-desc">
                                    Ваше объявление будет в ТОПе на главной странице
                                </div>
                                <!---Кнопки с выбором суммы--->
                                <div class="popup__content__block_buttons">
                                    <!--кнопка-->
                                    <div class="popup__content__block-button">
                                        <p class="popup__content__block-daysp">x1 день</p>
                                        <p class="popup__content__block-ammountp">5 <span>AZN</span></p>
                                    </div>
                                    <!--кнопка-->
                                    <div class="popup__content__block-button">
                                        <p class="popup__content__block-daysp">x1 день</p>
                                        <p class="popup__content__block-ammountp">5 <span>AZN</span></p>
                                    </div>
                                    <!--кнопка-->
                                    <div class="popup__content__block-button">
                                        <p class="popup__content__block-daysp">x1 день</p>
                                        <p class="popup__content__block-ammountp">5 <span>AZN</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---данные к оплате--->
                    <div class="popup__payment__desc">
                        <div class="popup__payment_wrapper">
                            <div class="popup__payment_text">Вы оплачиваете:</div>
                            <div class="popup__payment__info">5 дней в топе</div>
                        </div>
                        <div class="popup__payment_wrapper">
                            <div class="popup__payment_text">Сумма:</div>
                            <div class="popup__payment__info">5 AZN</div>
                        </div>
                    </div>
                    <!---оплата ,карта----->
                    <div class="popup__block__container_payment">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>