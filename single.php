<?php get_header(); ?>
<div class="container-fluid">
  <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
      <div class="post container" id="post-<?php the_ID(); ?>">
        <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
        <div class="entry col-md-12">
          <?php the_content(); ?>
          <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
          <p class="postmetadata">
              <?php _e('Filed under&#58;'); ?><?php the_category(', ') ?>
              <?php _e('by'); ?> <?php  the_author(); ?>
              <?php edit_post_link('Edit', ' &#124; ', ''); ?>
          </p>
        </div>
        <div class="comments-template col-md-12">
          <?php comments_template(); ?>
        </div>

      </div>


  <?php endwhile; ?>
  <div class="navigation col-md-12">
  <?php previous_post_link('%link') ?> <?php next_post_link('%link') ?>
  </div>

<?php else:?>
  <div class="post col-md-12">
    <h2><?php _e('Not Found');?></h2>
  </div>
  <?php endif; ?>
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
