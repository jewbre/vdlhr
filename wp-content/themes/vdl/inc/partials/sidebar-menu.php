<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 27.9.2015.
 * Time: 19:52
 */

?>

<a href="#" class="hamburger-menu transition-2" data-status="off">
    <span class="transition-1"></span>
    <span class="transition-1"></span>
    <span class="transition-1"></span>
</a>
<div class="sidebar-menu transition-2" data-status="off">
    <?php wp_nav_menu( array( 'main-menu' => 'header-menu' ) );?>
</div>
<div class="menu-overlay"></div>