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
            echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showItems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showItems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if ($pages != 1 && (!($i >= $pages + $range + 1 || $i <= $paged - $range -1)
                    || $pages <= $showItems)) {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='"
                    .get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }
    if ($paged < $pages && $showItems < $pages) {
        echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
    }
    echo "</div>\n";

}
