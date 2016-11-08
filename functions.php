<?php

//thumbnails
add_theme_support( 'post-thumbnails' );

//headermenu
register_nav_menu('menu','headermenu');


$args = array(
	'name'          => __( 'Сайдбар', 'theme_text_domain' ),
	'id'            => 'sidebar',
	'description'   => 'Добавляємо віджети сайдбара',
	'before_widget' => ' <div id="colTwo">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar ($args);

?>