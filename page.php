<?php get_header(); ?>
 <?php if ( have_posts() ):  while ( have_posts() ) :the_post();?>
                        
  <div id="colOne">
    <div id="latest-post">
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
     <h3 class="posted"><spawn>Date:</spawn> <?php the_date('d.m.y'); ?> <spawn>Time:</spawn> <?php the_time('G:i'); ?></h3>
      <div class="story"><?php the_post_thumbnail(); ?>
       
     <?php the_tags(); ?>
                       <?php the_content () ?>
                  <?php comments_template('', true); ?>
    
 <?php endwhile; ?>

<?php else :?>

<?php endif; ?>
      </div>
    </div>
  </div>                         
    
<?php get_footer(); ?>