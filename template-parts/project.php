<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.05.17
 * Time: 12:18
 */
?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
?>

<div class="gallery_item filterable" data-nomination="<?=do_shortcode('[wpuf-meta name="nomination"]');?>">
    <a href="<?php the_permalink(); ?>">
        <div class="item_thumb line_hover">
           <?php
            $postId = get_the_ID();
            ?>
       <?php
       echo get_the_post_thumbnail($postId, array(300, 300), array('class' => 'img-responsive'));
       ?>
                     <div class="thumb_overlay"></div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </a>
    <div class="item_text">
        <p class="black name name"><?php the_title(); ?></p>
        <p class="black project_name"><?php echo do_shortcode('[wpuf-meta name="project_name"]')?></p>
        <?php
        if (function_exists('wp_ulike')) {
            wp_ulike('get');
        }
       // $imageId = get_post_thumbnail_id();
        ?>


    </div>
</div>
