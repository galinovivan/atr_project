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
    <div class="registration_modal modal fade" id="modalPublishProject">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-hidden="true">
                        <span></span><span></span>
                    </button>
                </div>
                <div class="modal-body">
                   <p class="black">Спасибо, ваша работа отправлена на модерацию!</p>
                </div>
            </div>
        </div>
    </div>
<main>
    <?php if (!is_user_logged_in()) {
      wp_redirect('/');
    }
    ?>
    <div class="category_heading with_logout">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 clearfix">
                    <div class="pull-left">
                    <h4 class="up white"><?php wp_title('');?></h4>
                        </div>
                    <div class="pull-right logout_link">
                        <a class="white" href="<?=wp_logout_url('/');?>">
                            <?=lang('logout');?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="alert alert-success" id="userMessages" style="display: none;">
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
    <div class="hel_block">
        <div class="heading">
            </div>
        <div class="text">
            <?php
            $user = wp_get_current_user();
            $userUrl = $user->user_url;
            ?>
            <h5>
                <?=lang('hello');?>,
                <?=$user->user_lastname;?>!</h5>
            <p class="black">
                <?=lang('profile hello message');?>
            </p>

        </div>
        <div class="down_row">
            <a href="<?=get_page_link(68);?>" class="button base medium black">
                <?=lang('download the work');?>
            </a>
        </div>
    </div>
                <div class="user_info_block">
                    <div class="block_heading">
                    <h4 class="black">
                        <?=lang('activity');?>
                        :</h4>
                        </div>
                    <div class="info_list">
                        <ul>
                            <li class="black">
                                <?=lang('date of registration on the site');?>:
                                <span class="black data"><?=getUserRegistered($user->ID);?></span>
                            </li>

                                <?php
                                $args = [
                                    'post_type' => 'projects',
                                    'author' => $user->ID,
                                    'post_status' => array('future', 'pending', 'publish', 'draft')
                                ];
                                $query = new WP_Query($args);

                                if ($query->have_posts()): ?>
                                    <script>
                                        jQuery(document).ready(function () {

                                            var sessionStorage = window.sessionStorage;
                                            if (sessionStorage) {
                                                if (sessionStorage.getItem('project-publish-status') === 'create') {
                                                    jQuery('#modalPublishProject').modal('show');
                                                    sessionStorage.setItem('project-publish-status', '');
                                                    console.log(sessionStorage.getItem('project-publish-status'));
                                                }
                                            }



                                        })
                                    </script>
                                    <?php while($query->have_posts()): $query->the_post(); ?>
                            <li class="black">
                                        <span class="black data">
                                            <?php the_date('d.m'); ?>
                                                <?=lang('work is loaded');?>:
                                            <?=do_shortcode('[wpuf-meta name="project_name"]');?>
                                            <?=lang('in nomination');?>:
                                            <?=do_shortcode('[wpuf-meta name="nomination"]');?>
                                        </span>
                            </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                        </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5">
                        <form id="updateUserInfo" class="base_form update_user_form" method="post"
                              action="<?php echo esc_url(admin_url('admin-post.php'));?>">
                            <input type="hidden" value="update_user" name="action" id="formAction" />
                            <input type="hidden" value="<?=$user->ID;?>" name="user_id" id="userId" />
                            <input type="hidden" name="lang" value="<?=qtrans_getLanguage();?>" id="currentLang" />
                            <label for="userName"><?=lang('your name');?></label>
                            <input name="user_name" id="userName" type="text" value="<?=$user->user_lastname;?>" />
                            <label for="userUrl">
                                <?=lang('im in social networks');?>
                            </label>
                            <input type="text" placeholder="<?=lang('link to profile in social networks');?>"
                             name="user_url" id="userUrl" value="<?=$userUrl?>" />
                            <button class="button base transparent medium black">
                                <?=lang('save');?>
                            </button>
                        </form>
                    </div>
            </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>