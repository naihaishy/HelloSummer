<?php get_header(); ?>
<div class="container-fluid ">
  <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
      <div class="container homepage">
        <div class="post col-md-12" id="post-<?php the_ID(); ?>">
          <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>


          
          <div class="entry col-md-12 img-thumbnail">
            <?php the_excerpt(); ?>
            <p class="postmetadata">
                <?php _e('Sorted under&#58;'); ?><?php the_category(', ') ?>
                <?php _e('by'); ?>  <?php  the_author_posts_link(); ?> <br/>
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                <?php edit_post_link('Edit', ' &#124; ', ''); ?>
            </p>
          </div>

        </div>
      </div>


    <?php endwhile; ?>
    <div class="container">
      <div class="navigation col-md-12">
        <h2><?php posts_nav_link('当前页','上一页','下一页');?></h2>
      </div>
      </div>



 <?php else:?>
  <div class="post col-md-12">
    <h2><?php _e('Not Found');?></h2>
  </div>
  <?php endif; ?>
</div>




<?php get_footer(); ?>
