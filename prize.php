<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 31.03.2017
 * Time: 15:20
 * Template name: Призы
 */

?>

<?php get_header('custom');?>
<main class="prize_page">
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>
   <div>
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <?php while(have_posts()) : the_post();?>


                   <?php the_content(); ?>

               <?php endwhile; ?>
               </div>
           </div>
       </div>
   </div>
</main>


<?php get_footer();?>


