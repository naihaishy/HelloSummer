<?php get_header(''); ?>
<div class="container-fluid"  style="width:100%;padding:0;">
  <div class="post-single container" id="post-<?php the_ID(); ?>" style="width:90%;padding:0;">
    <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>

          <h3 class="block-title"><?php the_title();?></h3>
            <div class="entry col-md-12">
              <?php the_content(); ?>

              <div class="postmetadata col-md-12">
                  <?php _e('分类'); ?><span style="color:green;"><?php the_category(', ') ?></span>
                  <?php _e('作者'); ?>  <?php  the_author_posts_link(); ?>
                  <?php edit_post_link('编辑', ' &#124; ', ''); ?>
              </div>
            </div>


    </div>


    <?php endwhile; ?>
    <?php endif; ?>
      <div class="container-fluid">
          <nav>
            <nav>
            <ul class="pager">
              <li class="previous"> <?php previous_post_link('%link') ?>  </li>
              <li class="next"> <?php next_post_link('%link') ?> </li>
            </ul>
          </nav>
      </div>




    <div class="comments-wrapper col-md-12"  >
      <?php comments_template(); ?>
    </div>



</div>

<div class="container-fluid  " style="width:100%;heigth:30px;"></div>


<?php get_footer(); ?>
