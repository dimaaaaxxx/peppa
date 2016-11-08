 <div id="colTwo">
   
        <h2>Pages</h2>
   
<?php wp_nav_menu(array('theme_location'=>'menu' , 'menu_class'=>'', 'container'=>'false') ); ?>

 <?php if ( ! dynamic_sidebar('sidebar') ) : ?>
   
  <?php endif; ?>
