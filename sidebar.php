<div class="sidebar">
  <div class="container-fludi">
      <ul>

          <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?><!--wige-->
          <?php wp_list_pages('title_li=<h2>Page</h2>');?>

          <li id="search"><!--search-->
            <?php include(TEMPLATEPATH.'/searchform.php');?>
          </li>
          <li id="calendar"><!--calendar-->
            <h2><?php _e('Calendar');?></h2>
            <?php get_calendar();?>
          </li>
          <li>
            <h2><?php _e('Categories');?></h2><!--Categories-->
            <ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=1');?></ul>
          </li>
          
          <li><!--wige-->
            <?php wp_get_archives('type=daily');?>
          </li>

          <h2><?php _e('Meta');?></h2>
          <?php wp_register();?>
          <?php wp_loginout();?>
          <?php wp_meta();?>
          <li>
            <?php ?>
          </li>
        <?php endif; ?>
      </ul>
  </div>
</div>
