<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
				
		<?php wp_head(); global $redux_demo;?>
	</head>
	
	<body <?php body_class();?>>
	
	<div class="body_bg">			
		<div class="column">
			<div class="header fix">			 
				<div class="logo floatleft">
					<a href="<?php echo esc_url(site_url());?>"><img src="<?php echo $redux_demo['logo-id']['url']?>" alt=""/></a>
				</div>
				<div class="headermenu floatleft">
					<?php
						if (function_exists('my_theme_default_menu')) {
							wp_nav_menu(array('theme_location' => 'header_menu', 'fallback_cb' => 'my_theme_default_menu'));
						}
						else {
							my_theme_default_menu();
						}
					?>					
				</div>				
				<div class="header_right floatright">
					<div class="socia_share">
						<a href="<?php echo $redux_demo['facebook'];?>"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt="" />	</a>				
						<a href="<?php echo $redux_demo['twitter'];?>"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt="" /></a>
						<a href="<?php echo esc_url(site_url());?>/feed"><img src="<?php echo get_template_directory_uri();?>/images/feed.png" alt="" /></a>	
						
						<?php if ($redux_demo['linkedin']) : ?>
							<a href="<?php echo $redux_demo['linkedin'];?>"><img src="<?php echo get_template_directory_uri();?>/images/linkeding.png" alt="" /></a>	
						<?php endif;?>
						
					</div>
					<div class="news_search">
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
							<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
						</form>						
					</div>
				</div>				
			</div>
			
			<div class="mainmenu">
					<?php
						if (function_exists('theme_default_mainmenu')) {
							wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id'=> 'nav', 'fallback_cb' => 'theme_default_mainmenu'));
						}
						else {
							theme_default_mainmenu();
						}
					?>			

				<div class="mobile_menu_area">
					<nav>
						<?php
							if (function_exists('theme_default_mainmenu')) {
								wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id'=> 'Mobile_menu', 'fallback_cb' => 'theme_default_mainmenu'));
							}
							else {
								theme_default_mainmenu();
							}
						?>	
					</nav>
				</div>
				
			</div>
			
			<div style="clear:both"></div>
			<div class="braking_news_area fix">
				<h3 class="braking_news floatleft"><?php _e('Braking News', 'news');?></h3>			
				<p class="marquee">	

					<?php 
						$braking_news = new WP_Query(array(
							'post_type'		=> 'post',
							'category_name'		=> 'Braking News',
							'posts_per_page'=> 15,
						));
					?>
					<?php if ($braking_news->have_posts()) : ?><?php while($braking_news->have_posts()) : ?><?php $braking_news->the_post();?>
						
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
						
					<?php endwhile; ?>
					<?php endif;?>
					
				</p>
		
			</div>
	