<?php get_header(); ?>
<div class="container-fluid ">

    <div class="container">
      <h3 style="text-align:center"><?php the_author(); ?></h3>
      <h4>作者信息</h4>
      <p>昵称:<?php the_author_description(); ?></p>
      <p>Email:<?php the_author_email(); ?></p>
      <p>Blog:<?php the_author_url(); ?></p>
      <p>已发表:<?php the_author_posts(); ?>篇</p>
      <p>所有文章:<?php  the_author_posts_link(); ?></p>
    </div>

    <div class="container">
      <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
            <div class="post col-md-12" id="post-<?php the_ID(); ?>">
              <h4><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
              <p><?php the_time('M d,Y'); ?></p>
            </div>

        <?php endwhile; ?>
      <?php endif; ?>
          <div class="navigation col-md-12">
            <?php posts_nav_link('Current','Before','After');?>
          </div>

    </div>

</div>

<?php get_footer(); ?>
