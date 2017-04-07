<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Arh_project
 */

get_header('custom'); ?>
<main>
	<div class="registration_modal modal fade" id="successSendProject">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-hidden="true">
						<span></span><span></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login auth_form">
						<div class="text text-center">
							<p class="black">Спасибо, ваша работа работа направлена на модерацию.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="category_heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="up white"><?php wp_title('');?></h4>
				</div>
			</div>
		</div>
		
	</div>
	<div id="primary" class="container">
		<div id="main" class="row" role="main">
<div class="col-md-12">
<?php if (!is_user_logged_in()): ?>
	<script>
		$('registrationModal').modal('show');
	</script>
<?php endif; ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
</div>
		</div><!-- #main -->
	</div>
</main>
<?php
get_footer();
?>
