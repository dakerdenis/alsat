<style>
    <?php include './content/login.css'; ?>
    <?php include './content/change_password/change_password.css'; ?>
    <?php include './content/change_password/fill_pass.css'; ?>
</style>

<div class="change__password_wrapperr">
    <div class="change__password__text">
        Parolu deyismek
    </div>
    <div class="change__password__content">
        <!---Описание элемента-->
        <div class="change__password__container">
            <div class="change__password__desc">
                <div class="change__password_desc_text">
                    <span>
                        Если письмо со смной пароля запрашивали не вы,свяжитесь с нами !
                    </span>
                </div>
            </div>
        </div>
        <!---форма сброса пароля-->
        <form action="" class="change__password__form">
            <!--новый пароль-->
            <div class="log_reg_element__wrapper">
                <div class="log_reg_element_wraper_desc">
                    Новый пароль*
                </div>
                <div class="log_reg_element_wraper_input">
                    <input class="log_reg_element_wraper_input-input" type="text">
                </div>
            </div>
            <!--подтвердите пароль-->
            <div class="log_reg_element__wrapper">
                <div class="log_reg_element_wraper_desc">
                    Подтвердите пароль*
                </div>
                <div class="log_reg_element_wraper_input">
                    <input class="log_reg_element_wraper_input-input" type="text">
                </div>
            </div>
            <!--Buttons submit-->
            <div class="submit_login_wrapper">
                <div class="submit_login_container">
                    <button type="submit" class="submit_login_container-button">Отправить</button>
                </div>
            </div>
            <div class="password__changing__succesfull">
                    Ваш пароль успешно изменён !
            </div>
        </form>
    </div>
</div>