<?php get_header(); ?>
<div class="container-fludi">
  <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>

      <div class="post col-md-12" id="post-<?php the_ID(); ?>">
        <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
        <div class="entry">
          <?php the_excerpt(); ?>
        </div>
      </div>

  <?php endwhile; ?>

  <div class="navigation col-md-12">
    <?php posts_nav_link('Current','Before','After');?>
  </div>

<?php else:?>
  <div class="post col-md-12">
    <h2><?php _e('Not Found');?></h2>
  </div>
  <?php endif; ?>
</div>
 
<?php get_footer(); ?>
