<?php 
/*
Template Name: Home Page
*/

get_header();?>		
			<?php 
				$sliders = new WP_Query(array(
					'post_type'		=> 'post',
					'category_name'		=> 'Sliders',
					'posts_per_page'=> 15,
				));
			?>
			<?php if ($sliders->have_posts()) : ?>
			<div class="slider fix">
				<div class="left_slider floatleft">
					<div class="slider-wrapper theme-bar">
						<div class="nivoSlider" id="slider">

						<?php if ($sliders->have_posts()) : ?><?php while($sliders->have_posts()) : ?><?php $sliders->the_post();?>
							<?php 
								$slider_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image' );
							?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $slider_src[0]; ?>" alt="<?php the_title();?>" title="<?php the_title();?>"/></a>					
						
						<?php endwhile; ?>
						<?php endif;?>
							
						
						</div>
					 
					</div>
				</div>
				<div class="right_video floatright">
					<?php dynamic_sidebar('slider-right-ads');?>				
					
					
					
					<!--<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri();?>/images/single_video.png" alt="" />
						<h3><a href="">Domain Name Registration, Web hosting, Web Design and Development</a></h3>
					</div>
					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri();?>/images/single_video.png" alt="" />
						<h3><a href="">Domain Name Registration, Web hosting, Web Design and Development</a></h3>
					</div>
					<div class="single_video_right">
						<img src="<?php echo get_template_directory_uri();?>/images/single_video.png" alt="" />
						<h3><a href="">Domain Name Registration, Web hosting, Web Design and Development, .</a></h3>
					</div>
			

					<div class="video_more floatright">
						<a href="">More</a>
					</div>-->
				</div>
			</div>
			<?php endif;?>
			
			<div class="maincontent fix">
				<div class="left_content floatleft">
					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>			

					<?php the_content(); ?>


					<?php endwhile; ?>

					<?php else : ?>

					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>

					<?php endif; ?>
<!--
					<div class="gallery_left  floatleft">				
						<a href="#" class="gallery_more floatright">More</a>
						<h3 class="gallery_tilte">Gallery Title</h3>						
						<div class="gallery_content">
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
							<a href=""><img src="<?php echo get_template_directory_uri();?>/images/single_gallery.png" alt="" /></a>
						</div>
					</div>
-->

					<div class="no_border"></div>
				</div>
				<div class="middle_content floatleft">
					<?php dynamic_sidebar('index-small-right-sidebar');?>

					
				</div>
				
			<?php get_sidebar();?>
			</div>
			
			
			<?php if ($redux_demo['footer-ads']) : ?>
				<div class="maincontent_bottom fix">
					<?php echo $redux_demo['footer-ads'];?>
				</div>
			<?php endif; ?>
			
			
<?php get_footer();?>