<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.06.17
 * Time: 13:46
 * Template name: System
 */
$users = get_users(['has_publised_posts' => null]);
?>
<?php
wp_reset_query();
$count = 0;
$authors = [];
$args = ['post_type' => 'projects', 'posts_per_page' => -1];
$projects = new WP_Query($args);
?>


<?php
include "classes/UserFilter/UserFilter.php";
include "classes/UserFilter/AbstractTextWritter.php";
include "classes/UserFilter/UsersEmailTextWritter.php";

use classes\UserFilter\UserFilter;

$filter = new UserFilter($projects);
$list = $filter->getIgnoreUsers();?>
<!--<pre>--><?php ///print_r($projects);?><!--</pre>-->
<?php

$users = get_users();
$filter->setUsers($users);
$filter->filterUsers();
?>

<pre><?php print_r($users); ?></pre>

