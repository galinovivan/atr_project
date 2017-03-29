<?php
if (is_user_logged_in()):
  $current_user = wp_get_current_user(); ?>
    <div class="user_name"><p class="black"><?=$current_user->display_name;?></p></div>
    <a href="#" class="logout black" data-nonce="<?php echo wp_create_nonce('logout_me_nonce')?>">Выйти</a>
<?php else: ?>

<div class="login auth_form">
    <div class="form_description text-center">
        <p class="black text-center">Если вы уже зарегистрировались, войдите,
            чтобы мы вас узнали.</p>
    </div>
    <div class="login_form">
        <form class="base_form userform" name="loginform" id="loginform" method="post" action="">
            <div class="row">
                <div class="col-md-12 field_item">
                    <input type="email" name="auth_email" placeholder="Email" />
                </div>
                <div class="col-md-12 field_item">
                    <input type="password" name="auth_pass" placeholder="Пароль" />
                </div>
                <div class="col-md-12 checkbox_field">
                    <input type="checkbox" name="rememberme" id="authRemember" value="forever"/>
                    <label for="authRemember">Запомнить меня</label>
                </div>
                <div class="submit_field">
                    <input type="submit" class="button base medium black" value="Войти" />
                </div>
                <input type="hidden" name="redrect_to" value="<?=$_SERVER['REQUEST_URI'];?>" />
                <input type="hidden" name="nonce" value="<?=wp_create_nonce('login_me_nonce');?>" />
                <input type="hidden" name="action" value="login_me"/>
                <div class="response response_message"></div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>