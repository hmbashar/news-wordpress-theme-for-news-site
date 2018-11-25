<?php
/**
 * The template for displaying post excerpts. 
 *
 * @package WordPress
 * @subpackage bilanti
 */
?>



		<!--single post start -->
		<article class="single_post fix">
			<div class="post_content_area fix">
				<div class="post_contents">						
				<div class="index_post_thum floatleft">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-thum');?></a>
				</div>
					<div class="post_title">
						<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
					</div>													
					<div class="post_info">
						<p><i class="fa fa-eye"></i> <?php if(function_exists('the_views')) { the_views(); } ?> |  <i class="fa fa-folder-open"> </i> <?php the_category(','); ?> | <i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> | <i class="fa fa-comment"></i> <?php comments_popup_link('No', '1', '%'); ?> </p>
					</div>
					
					<div class="post_content">
						<p><?php the_excerpt();?></p>
					</div>
				</div>
			</div>
			
			<div class="post_updates fix">
				<p class="post_update"><?php _e('Last Update: ', 'up_text_domain');?><i class="fa fa-calendar"></i> <?php echo get_the_modified_date( ); ?> | <i class="fa fa-clock-o"></i> <?php echo get_the_modified_time( ); ?></p>
			</div>
			
		</article>

