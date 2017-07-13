<?php
if (is_user_logged_in()):
  $current_user = wp_get_current_user(); ?>
   
<?php else: ?>

<div class="login auth_form">
    <div class="form_description text-center">
        <p class="black text-center">
            <?=lang('if you have already registered, sign in, so that we can recognize you', true);?>
        </p>
    </div>
    <div class="login_form">
        <?=do_shortcode('[wpuf-login]');?>
    </div>
</div>
<?php endif; ?>