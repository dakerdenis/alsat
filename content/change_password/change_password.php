<style>
    <?php include './content/login.css'; ?>
    <?php include './content/change_password/change_password.css'; ?>
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
                    Укажите свой эмейл,который вы указывали при регистрации на него будет выслан код подтверждения ,который будет необходимо ввести в поле.
                    <br> <span>
                        Ни в коем случае не передавайте этот код третьим лицам !
                    </span>
                </div>
            </div>
        </div>
        <!---форма сброса пароля-->
        <form action="" class="change__password__form">
            <!--emaiL-->
            <div class="log_reg_element__wrapper">
                <div class="log_reg_element_wraper_desc">
                    E-mail*
                </div>
                <div class="log_reg_element_wraper_input">
                    <input class="log_reg_element_wraper_input-input" type="text">
                </div>
            </div>
            <!---Kaptcha-->
            <div class="change__password__captcha_container">
                <div class="change__password__capthca">
                    капча
                </div>
            </div>
            <!--Buttons submit-->
            <div class="submit_login_wrapper">
                <div class="submit_login_container">
                    <button type="submit" class="submit_login_container-button">Mektub gondermek</button>
                    <a href="./index.php?source=fill_password">отправили письмо</a>
                </div>
            </div>
        </form>
    </div>
</div>