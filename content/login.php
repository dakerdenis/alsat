<style>
    <?php include './content/login.css'; ?>
</style>

<div class="login_registration_mainwrapper">

    <div class="login_registration_container">
        <!---только для ПК---->
        <div class="login__registration_pc_name">
            <div class="login_reg_pc_name_block">
                Şəxsi hesaba giriş
            </div>
            <div class="login_reg_pc_name_block">
                Qeydiyyatdan keçmək
            </div>
        </div>
        <!--контейнер для регистрации и логина-->
        <div class="login__registration_wrapper">
            <div class="password__changing__succesfull">
                Ваш пароль успешно изменён !
            </div>
            <!--контейнер логина-->
            <div class="login__container_form">
                <div class="login_onlymobile_name">
                    Şəxsi hesaba giriş
                </div>
                <form class="login__container_form-form" action="">
                    <!--emaiL-->
                    <div class="log_reg_element__wrapper">
                        <div class="log_reg_element_wraper_desc">
                            E-mail*
                        </div>
                        <div class="log_reg_element_wraper_input">
                            <input class="log_reg_element_wraper_input-input" type="text">
                        </div>
                    </div>
                    <div class="required__field_login">
                        <p style="visibility:hidden;">*Это поле обязательно</p>
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
                    <div class="required__field_login">
                        <p>*Это поле обязательно</p>
                    </div>
                    <!--Buttons submit-->
                    <div class="submit_login_wrapper">
                        <div class="submit_login_container">
                            <a href="./index.php?source=change_password">Şifrəni unutdun ?</a>
                            <button type="submit" class="submit_login_container-button">Daxil olmaq</button>
                        </div>
                    </div>

                </form>
            </div>
            <!--контейнер регистрации--->
            <div class="registration__container_form">
                <!--только для телефона-->
                <div class="login_onlymobile_name">
                    Qeydiyyatdan keçmək
                </div>
                <form class="registration__container_form-form" action="">
                    <!--name-->
                    <div class="log_reg_element__wrapper">
                        <div class="log_reg_element_wraper_desc">
                            Ad soyad*
                        </div>
                        <div class="log_reg_element_wraper_input">
                            <input class="log_reg_element_wraper_input-input" type="text">
                        </div>
                    </div>
                    <div class="required__field_login">
                        <p>*Это поле обязательно</p>
                    </div>
                    <!--emaiL-->
                    <div class="log_reg_element__wrapper">
                        <div class="log_reg_element_wraper_desc">
                            E-mail*
                        </div>
                        <div class="log_reg_element_wraper_input">
                            <input class="log_reg_element_wraper_input-input" type="text">
                        </div>
                    </div>
                    <div class="required__field_login">
                        <p style="visibility: hidden;">*Это поле обязательно</p>
                    </div>
                    <!--Telefon-->
                    <div class="log_reg_element__wrapper">
                        <div class="log_reg_element_wraper_desc">
                            Telefon*
                        </div>
                        <div class="log_reg_element_wraper_input">
                            <input class="log_reg_element_wraper_input-input" type="number">
                        </div>
                    </div>
                    <div class="required__field_login">
                        <p>*Это поле обязательно</p>
                    </div>
                    <!----password--->
                    <div class="log_reg_element__wrapper">
                        <div class="log_reg_element_wraper_desc">
                            E-mail*
                        </div>
                        <div class="log_reg_element_wraper_input">
                            <input class="log_reg_element_wraper_input-input" type="password">
                        </div>
                    </div>
                    <div class="required__field_login">
                        <p>*Это поле обязательно</p>
                    </div>
                    <!--Buttons submit-->
                    <div class="submit_login_wrapper">
                        <div class="submit_login_container">
                            <button type="submit" class="submit_login_container-button">Daxil olmaq</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>