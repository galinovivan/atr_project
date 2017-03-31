<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 31.03.2017
 * Time: 16:00
 * Template name: новости
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
            <div class="col-md-12">
                <div class="text">
                    <h3 class="black">
                        Новостей пока нет
                    </h3>
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>
