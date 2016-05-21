<?php get_header(); ?>
<div class="container-fluid ">
  <div class="container">
    <p class="user-register-time">
      <?php   echo date( 'Y年m月d日', strtotime( $user_info->user_registered ) );  ?>
     </p>


  </div>

    <div class="container">
      <h3 style="text-align:center"><?php the_author(); ?></h3>
      <h4>作者信息</h4>
      <p>描述:<?php the_author_description(); ?></p>
      <p>Email:<?php the_author_email(); ?></p>
      <p>Blog:<?php the_author_url(); ?></p>
      <p>已发表:<?php the_author_posts(); ?>篇</p>
      <p>所有文章:<?php  the_author_posts_link(); ?></p>
    </div>

    <div class="container">
      <h3 style="text-align:center">文章</h3>
          <div class="col-md-12">
            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
                  <div class="post col-md-12" id="post-<?php the_ID(); ?>">
                    <h4><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h4>
                    <p><?php the_time('Y-m-d H:i:s'); ?>  <?php the_category(', ') ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

                  </div>

              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="navigation col-md-12">
            <?php posts_nav_link('Current Page','Previous Page','Next Page');?>
          </div>

    </div>

    <div class="container">
      <h3 style="text-align:center">收到的评论</h3>
       <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <div class="post col-md-12">
            <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>在<a href="<?php the_permalink();?>"><?php the_title();?></a></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>


    <div class="container">
      <h3 style="text-align:center">私信</h3>

    </div>

    <div class="container">
      <h3 style="text-align:center">已收藏文章</h3>
    </div>

</div>

<?php get_footer(); ?>
