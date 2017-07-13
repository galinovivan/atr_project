<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 17.05.2017
 * Time: 17:26
 */


function pagination($pages = '', $range = 4) {
    $showItems = ($range * 2) + 1;

    global $paged;
    
    if (empty($paged)) $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
        if ($pages != 1) {
            echo "<ul class=\"pagination\">";
         if($paged > 2 && $paged > $range+1 && $showItems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo; First</a></li>";
         if($paged > 1 && $showItems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>Предыдущая</a></li>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if ($pages != 1 && (!($i >= $pages + $range + 1 || $i <= $paged - $range -1)
                    || $pages <= $showItems)) {
//                echo ($paged == $i)? "<li class=\"active\">".$i."</li>":"<li><a href='"
//                    .get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";


            }
        }
    if ($paged < $pages && $showItems < $pages) {
        echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">Следущая</a></li>";
    }
    echo "</ul>\n";

}
