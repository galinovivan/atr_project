<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 18.04.2017
 * Time: 15:00
 */
?>

<?php get_header('custom'); ?>

<main class="single_news_page">

    <?php while(have_posts()): the_post(); ?>

    <h2 class="black"><?php the_title();?></h2>


    <?php endwhile; ?>


    
</main>


<?php get_footer(); ?>
