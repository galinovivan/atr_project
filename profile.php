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
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
    <div class="hel_block">
        <div class="heading">
        <h4 class="black">Здравствуйте, Петя!</h4>
            </div>
        <div class="text">
            <p class="black">
                Здесь вы можете загрузить свою работу для участия во Всероссийском профессиональном студенческом конкурсе
                архитектурных и дизайнерских проектов «АРХпроект».
            </p>
        </div>
        <div class="down_row">
            <a href="<?=get_page_link(68);?>" class="button base medium black">Загрузить работу</a>
        </div>
    </div>
    <div class="actions_list">
        <h4 class="black">Активности</h4>
    </div>
            </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>