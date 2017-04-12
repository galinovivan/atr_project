<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 16:54
 * Template name: Партнеры
 */
?>

<?php get_header('custom'); ?>

<main class="partners_page">
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="partners_list">
        <div class="container">
            <div class="row">
                <?php $loop = new WP_Query(array('post_type' => 'partners', 'orderby' => 'menu_order', 'order' => 'asc'));
                if ($loop->have_posts()): ?>
                <?php while($loop->have_posts()): $loop->the_post();?>
                <?php
                $thumbId = get_post_thumbnail_id();
                $thumbURL = wp_get_attachment_image_src($thumbId, 'small', true);
                $thumbURL = $thumbURL[0];
                ?>
                <div class="col-md-12 partner_item">
                    <div class="row">
                        <div class="col-md-2 thumb">
                            <img src="<?=$thumbURL?>" class="img-responsive" />
                        </div>
                        <div class="col-md-10 text">
                        <p class="black bold_font"><?php the_title(); ?></p>
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
