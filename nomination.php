<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 30.03.2017
 * Time: 18:00
 * Template name: Номинация
 */
?>

<?php get_header('custom'); ?>
<div class="category_heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="up white"><?php wp_title('');?></h4>
            </div>
        </div>
    </div>
</div>
<main class="nomination_page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub_heading">
                        <h3 class="black"><?=get_field('subheader');?></h3>
                </div>
                    <div class="text">
                        <?php if (have_posts()):
                            while(have_posts()):
                                the_post(); ?>
                                <p class="black"><?=get_the_content();?></p>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 submit_row">
                    <a href="<?=get_field('template_link');?>" target="_blank" class="button base black medium">
                        <?=lang('download template');?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>




