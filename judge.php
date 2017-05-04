<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 16:04
 * Template name: Жюри
 */
?>

<?php get_header('custom'); ?>
<main class="judge_page">
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>


    <div class="judge_list">
        <div class="container">
            <div class="row">

<?php $loop = new WP_Query(array('post_type' => 'judge', 'orderby' => 'menu_order', 'order' => 'asc'));
if ($loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post();
        $thumbId = get_post_thumbnail_id();
        $thumbURL = wp_get_attachment_image_src($thumbId, 'small', true);
        $thumbURL = $thumbURL[0];
        ?>

                <div class=" col-xs-12 col-md-12 judge_person">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-2 thumb">
                        
                        <img src="<?=$thumbURL?>" class="img-responsive" />
                    </div>
                    <div class="col-xs-6 col-sm-8 col-md-9 text">
                        <p class="black"><strong class="person_name"><?php the_title(); ?></strong> <span class="hidden-xs hidden-sm black">
                                -</span>
                        <span class="black hidden-xs hidden-sm"><?=get_the_content();?></span>
                        </p>
                    </div>
                    <div class="col-xs-12 visible-xs visible-sm">
                        <p class="black"><?=get_the_content();?></p>
                    </div>
                </div>
                </div>
        <?php
        endwhile;
        endif;
        ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>