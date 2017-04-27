<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 31.03.2017
 * Time: 16:09
 * Template name: личный кабинет
 */
?>

<?php get_header('custom');?>
<main>
    <?php if (!is_user_logged_in()) {
      wp_redirect('/');
    }

    /**
     * @param $date
     * @return bool|string
     */
    function makeDateFormat($date) {
        return date('d.m', mktime($date));
    }
    ?>
    <div class="category_heading with_logout">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 clearfix">
                    <div class="pull-left">
                    <h4 class="up white"><?php wp_title('');?></h4>
                        </div>
                    <div class="pull-right logout_link">
                        <a class="white" href="<?=wp_logout_url('/');?>">Выйти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
    <div class="hel_block">
        <div class="heading">
            </div>
        <div class="text">
            <?php
            $user = wp_get_current_user();
            ?>
            <h5>Здравствуйте, <?=$user->user_lastname;?> </h5>
            <p class="black">
                Здесь вы можете загрузить свою работу для участия во Всероссийском профессиональном студенческом конкурсе
                архитектурных и дизайнерских проектов «АРХпроект».
            </p>
        </div>
        <div class="down_row">
            <a href="<?=get_page_link(68);?>" class="button base medium black">Загрузить работу</a>
        </div>
    </div>
                <div class="user_info_block">
                    <div class="block_heading">
                    <h4 class="black">Активность:</h4>
                        </div>
                    <div class="info_list">
                        <ul>
                            <li class="black">

                               Дата регистрации на сайте:
                                <span class="black data"><?=makeDateFormat($user->user_registered);?></span>
                            </li>

                        </ul>
                    </div>
                </div>
<!--    <div class="actions_list">-->
<!--        <h4 class="black">Активности</h4>-->
<!--    </div>-->
            </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>