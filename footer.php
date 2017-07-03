<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arh_project
 */


?>

<div class="pre_footer"></div>
<footer class="base_background">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 visible-xs visible-sm bottom_separate_mobile">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="contact_mobile">
                            <span class="white">8 800 250 78 40</span> <br />
                            <span class="white">pro@zvezdaudachi.com</span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="social_block mobile">
                            <ul>
                                <li><a href="https://www.facebook.com/pro.zvezdaudachi/" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-fb"></i>
                                    </a></li>
                                <li><a href="https://vk.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-vk"></i>
                                    </a></li>
                                <li><a href="http://instagram.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-inst"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="about_cds_footer_mobile">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3 class="white up"><?=lang('founder and organizer');?></h3>
                        </div>
                        <div class="col-xs-4">
                            <img src="<?=get_template_directory_uri();?>/assets/images/logo_cds.png"
                                 class="img-responsive" alt="cds" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 visible-xs visible-sm">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <h3 class="white up"><?=lang('partners');?></h3>
                    </div>
                    <div class="col-md-4 col-xs-4 col-sm-2">

                        <a href="http://www.architime.ru" target="_blank">
                                <img src="<?=get_template_directory_uri();?>/assets/images/arh_time_logo_mobile.png?>"
                                     class="img-responsive" />
                            </a>
                        </div>
                    <div class="col-md-4 col-xs-4 col-sm-2">
                       <a href="https://www.schueco.com/web2/ru" target="_blank">
                               <img src="<?=get_template_directory_uri();?>/assets/images/schooco_logo_mobile.png" />
                            </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-md-4">
                       <?php $lang = qtrans_getLanguage(); ?>
                        <?php if ($lang == 'ru'): ?>
                        <div class="arh_logo hidden-xs hidden-sm">
                            <a href="/">
                            </a>
                        </div>
                            <?php elseif ($lang == 'en'): ?>
                            <div class="arh_logo en hidden-xs hidden-sm">
                                <a href="/"></a>
                            </div>
                            <?php endif; ?>
                        <div class="copyright bottom_separate_mobile">
                            <div class="copyright_mobile_text visible-xs visible-sm">
                                <h3 class="white up">
                                    <?=lang('site developed by');?>
                                </h3>
                            </div>
                            <div class="logo">
                            <a href="http://kira-all.ru/" target="_blank">
                                </a>
                            </div>
                            <div class="text">
                            <span class="small_text white"><span class="hidden-xs hidden-sm white small_text">
                                    <?=lang('site developed by');?>
                                </span>
                                <?=lang('advertising agency kira alleynova');?>
                            </span>
                            </div>
                            <div class="rules_protection hidden-xs hidden-sm">
                                <span class="white small_text" data-toggle="tooltip" data-placement="top"
                                title="<?=lang('kira footer copyright')?>">
                                    <?=lang('all rights reserved');?>
                                </span>
                                <?php
                                $language = qtrans_getLanguage();
                                ?>
                                <br />
                                <span class="white small_text kseniya_copy">
                                    <?php if ($language == 'en'): ?>
                                        Site translated by <a href="http://vk.com/bubenia" target="_blank" class="kseniya_copy orange_hover_link">
                                            Ksenia Dragunskaya</a> <br />
                                            <a href="mailto:ksenia.bubenia@gmail.com" target="_blank" class="kseniya_copy orange_hover_link">ksenia.bubenia@gmail.com</a>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 visible-xs visible-sm">
                        <div class="mobile_rules_protection text-center">
                            <p class="white">
                                <?=lang('kira footer copyright');?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 contact_block left_separate hidden-xs hidden-sm">
                        <div class="banner_heading">
                            <h2 class="up white">
                                <?=lang('contacts');?>
                            </h2>
                        </div>
                        <div class="top_text">
                            <p class="white">
                                <strong>
                                <?=lang('you can contact us by phone');?>
                                </strong>
                                <br />
                                8(800) 250 78 40<br />
                                <?php if ($lang == 'en'): ?>
                                    (toll free in Russia)
                                <?php endif; ?>
                            </p>
                            <p class="white">
                                <strong>
                                <?=lang('or write to mail');?>
                                </strong>
                                <br />
                                pro@zvezdaudachi.com</p>
                        </div>
                        <div class="bottom_text">
                            <p class="white">
                                <strong>
                                <?=lang('to be aware of the news of the project, subscribe to us in social networks');?>
                                </strong>
                            </p>
                        </div>
                        <div class="social_block">
                            <ul>
                                <li><a href="https://www.facebook.com/pro.zvezdaudachi/" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-fb"></i>
                                    </a></li>
                                <li><a href="https://vk.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-vk"></i>
                                </a></li>
                                <li><a href="http://instagram.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-inst"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 partners_block left_separate hidden-xs hidden-sm">
                <div class="banner_heading">
                    <h2 class="up white">
                        <?=lang('founder and organizer');?>
                    </h2>
                </div>
                <div class="logo">
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds.png" class="img-responsive" />
                        </a>
                </div>
                <div class="banner_heading">
                    <a href="<?=get_page_link(56)?>" >
                    <h2 class="up white"><?=lang('partners');?></h2>
                        </a>
                </div>
                <div class="partners_list">
                    <ul class="clearfix">
                        <li><a href="http://www.graphisoft.ru" target="_blank">
                                <i class="partners_logo partners_logo-graphisoft"></i>
                            </a></li>
                        <li><a href="https://www.schueco.com/web2/ru" target="_blank">
                                <i class="partners_logo partners_logo-schuco"></i>
                            </a></li>
                        <li><a href="http://www.architime.ru" target="_blank">
                                <i class="partners_logo partners_logo-arh_time"></i>
                            </a></li>
                        <li><a href="http://www.rockwool.ru" target="_blank">
                                <i class="partners_logo partners_logo-rockwol"></i>
                            </a></li>
                    </ul>
                </div>

<!--                <div class="banner_heading">-->
<!--                  <h2 class="up white">При поддержке</h2>-->
<!--                </div>-->
<!--                <div class="comitets">-->
<!--                  <img src="--><?//=get_template_directory_uri()?><!--/assets/images/comitatets.png" class="img-responsive" />-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<?php include('template-parts/subscrible-helper.php') ?>
<script src="<?=get_template_directory_uri()?>/assets/js/dist/scripts.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
    w.yaCounter44245474 = new Ya.Metrika({
    id:44245474,
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
    });
    } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
    d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44245474" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
