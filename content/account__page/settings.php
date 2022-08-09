<style>
    <?php include './settings.css' ?><?php include './content/login.css'; ?><?php include './content/account__page/settings.css'; ?>
</style>
<div class="account_settings_wrapper">
    <div class="account__settings_container">
        <div class="account__settings__container_wrap">
            <!--Имя фотка и информация-->
            <div class="account__settings__block account__settings__block2">
                <!---фото профиля-->
                <div class="account__profile__photo">
                    <img src="./style/imgs/account_photo.png" alt="" srcset="">
                </div>
                <!---Информация о профиле--->
                <div class="account__information">
                    <!--Имя пользователя-->
                    <div class="account__info__block account__info__block2">
                        Mamedov Ruslan
                    </div>
                    <!--Кол во обьектов-->
                    <div class="account__info__block">
                        Количество объявлений: 15
                    </div>
                    <!--Кол во закладок-->
                    <div class="account__info__block">
                        Количество закладок: 25
                    </div>
                    <!--Дата регистрации на сайте-->
                    <div class="account__info__block">
                        Дата регистрации на сайте: 25.12.2022
                    </div>
                </div>
            </div>

            <!--Эмейл телефон о себе пароль-->
            <div class="account__settings__block">

                <!----Email--->
                <div class="log_reg_element__wrapper">
                    <div class="log_reg_element_wraper_desc">
                        Email*
                    </div>
                    <div class="log_reg_element_wraper_input">
                        <input class="log_reg_element_wraper_input-input" type="password">
                    </div>
                </div>
                <!----phone--->
                <div class="log_reg_element__wrapper">
                    <div class="log_reg_element_wraper_desc">
                        phone*
                    </div>
                    <div class="log_reg_element_wraper_input">
                        <input class="log_reg_element_wraper_input-input" type="password">
                    </div>
                </div>
                <!----password--->
                <div class="log_reg_element__wrapper">
                    <div class="log_reg_element_wraper_desc">
                        Şifrə*
                    </div>
                    <div class="log_reg_element_wraper_input">
                        <input class="log_reg_element_wraper_input-input" type="password">
                    </div>
                </div>
                <div class="account__change__password__">
                    <a href="./index.php?source=change_userpass">Изменить пароль</a>
                </div>
            </div>
        </div>
        <div class="account__save_changes__button">
            <div class="submit_login_wrapper">
                <div class="submit_login_container">
                    <button type="submit" class="submit_login_container-button">Сохранить измнения</button>
                </div>
            </div>
        </div>
    </div>
</div>