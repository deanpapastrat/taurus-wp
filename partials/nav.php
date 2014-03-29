<?php

$taurusheadnav = array(
  'theme_location'  => 'header-menu',
  'menu'            => '',
  'container'       => 'div',
  'container_class' => 'navbar navbar-inverse navbar-fixed-top',
  'container_id'    => '',
  'menu_class'      => 'nav navbar-nav',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);

wp_nav_menu( $taurusheadnav );

?>