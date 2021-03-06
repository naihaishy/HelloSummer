<?php get_header(); ?>
<div class="container-fluid ">
  <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <div class="post col-md-12" id="post-<?php the_ID(); ?>">
          <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
          <div class="entry col-md-12">
            <?php the_excerpt(); ?>
            <p class="postmetadata">
                <?php _e('Sorted under&#58;'); ?><?php the_category(', ') ?>
                <?php _e('by'); ?>  <?php  the_author_posts_link(); ?> <br/>
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                <?php edit_post_link('Edit', ' &#124; ', ''); ?>
            </p>
          </div>

        </div>


    <?php endwhile; ?>
    <?php endif; ?>
      <div class="navigation col-md-12">
        <?php posts_nav_link('Current Page','Previous Page','Next Page');?>
      </div>

</div>




<?php get_footer(); ?>
