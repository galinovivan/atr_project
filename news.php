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
                    <h4 class="up white">
                        <?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="news_list">
            <div class="container">
                <div class="row">
                    <?php $loop = new WP_Query(array('post_type' => 'articles1'));
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
                                        <a href="<?php the_permalink(); ?>">
                                        <img src="<?=$thumbURL?>" class="img-responsive" />
                                            </a>
                                    </div>
                                    <div class="col-md-10 text">
                                        <a href="<?php the_permalink(); ?>" style="text-decoration: none !important;">
                                        <p class="black bold_font"><?php the_title();?></p>
                                            </a>
                                        <p class="black"><?=the_excerpt();?></p>
                                        <a class="black news_link" href="<?php the_permalink();?>">

                                      [Читать]
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endwhile;
                    else:
                        ?>
                    <h4 class="black" style="margin-bottom: 50px;">
                        Ни одной новости пока нет
                    </h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</main>
<?php get_footer();?>
