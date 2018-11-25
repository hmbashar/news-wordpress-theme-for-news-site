<?php get_header();?>
			<div class="maincontent fix single_page_with_sidebar">
				<div class="left_content floatleft">
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>		
					<div class="page_title">
						<h2><?php the_title();?></h2>
					</div>						

					<?php the_content(); ?>


					<?php endwhile; ?>

					<?php else : ?>

					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>

					<?php endif; ?>

			
				</div>
	
				
			<?php get_sidebar();?>
			</div>
			
			<?php if ($redux_demo['footer-ads']) : ?>
				<div class="maincontent_bottom fix">
					<?php echo $redux_demo['footer-ads'];?>
				</div>
			<?php endif; ?>
			
<?php get_footer();?>