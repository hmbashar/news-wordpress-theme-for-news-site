<?php 

function news_widgets(){
	
	register_sidebar( array(
		'name' => __( 'Slider Right Ads', 'coding' ),
		'id' => 'slider-right-ads',
		'before_widget' => '<div class="slider_ads_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2 style="display:none;">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'coding' ),
		'id' => 'right-sidebar',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Index Small Right Sidebar', 'coding' ),
		'id' => 'index-small-right-sidebar',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
}



add_action('widgets_init', 'news_widgets');








?>