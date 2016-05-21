<div id="comments" class="comments-wrapper">
<div class="container">
		<div id="comments-count"><span class="icon-comment"></span>目前共 <?php comments_number('0 条评论', '1 条评论', '% 条评论' );?></div>
		<?php if($comments) : ?><!--如果有评论-->

			<?php if ( function_exists('wp_list_comments') ) : ?><!--评论列表-->
				<div id="commentlist">
					<ul class="commentlist"><?php wp_list_comments(); ?></ul>
					<nav class="commentnav"><?php paginate_comments_links('prev_text=上一页&next_text=下一页');?></nav>
				</div>
			<?php endif; ?>

		<?php endif; ?>


		<?php if(comments_open()) : ?>

			<?php comment_form();?>

		<?php endif; ?>
	</div>
</div><!--end comments-->
