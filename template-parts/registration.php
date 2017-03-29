<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 29.03.2017
 * Time: 11:14
 */

?>

<div class="registration auth_form">
    <div class="form_description text-center">
        <p class="black">Пожалуйста, зарегистрируйтесь, чтобы иметь возможность
            принять участие в конкурсе.</p>
        <p class="black">
            Введите адрес электронной почты, и мы отправим
            вам пароль от личного кабинета.</p>
    </div>
    <div class="reg_form">
        <form class="base_form userform" method="post" action="">
            <div class="row">
                <div class="col-md-12 field_item">
                    <input type="text" name="user_name" placeholder="Имя Фамилия" required />
                </div>
                <div class="col-md-12 field_item">
                    <input type="email" name="user_email" placeholder="Email" required />
                </div>
                <div class="col-md-12 checkbox_field">
                    <input type="checkbox" name="confirm" id="authrConfirm" required/>
                    <label for="authrConfirm">Я согласен на обработку своих персональных данных</label>
                </div>
                <div class="col-md-12 submit_field">
                    <input type="submit" class="button base medium black" placeholder="Регистрация"/>
                </div>
                <input type="hidden" name="redirect_to" value="<?=$_SERVER['REQUEST_URI'];?>"/>
                <input type="hidden" name="nonce" value="<?=wp_create_nonce('register_me_nonce')?>"/>
                <input type="hidden" name="action" value="register_me" />
                <div class="response black"></div>
            </div>
        </form>
    </div>
</div>
