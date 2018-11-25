<?php 

function news_shortcodes($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'count' => 3,
		'posttype' => 'post',		
		'link' => '#',		
	), $atts, 'news' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $posttype, 'category_name' => $category)
        );		
		if ($category) {
			$title = $category;
		}
		else {
			$title = "Latest News";
		}
		
	$list = '<div class="latest_from_category fix"><a href="'.$link.'" class="latest_cat_more_link floatright">More</a><h2 class="latest_cat_title">'.$title.'</h2>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$index_img = wp_get_attachment_image_src( get_post_thumbnail_id($idd), 'index-image' );
		$list .= '					
			<div class="single_cat_post floatleft">
				<img src="'.$index_img[0].'" alt="" />
				<a href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>
				<p>'.get_the_excerpt().'</p>
				<a href="'.get_permalink().'" class="readmore">Read More</a>
			</div>			
		';        
	endwhile;
	$list.= '</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('news', 'news_shortcodes');	




function tech_shortcodes($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'count' => 3,
		'posttype' => 'post',		
		'link' => '',		
	), $atts, 'news' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $posttype, 'category_name' => $category)
        );		
		
		
	$list = '<div class="tech_news_cat floatleft"><a href="'.$link.'" class="tech_more floatright">More</a>	<h3 class="tech_news_title">'.$category.'</h3>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();		
		$list .= '	
			<div class="single_post_tech  floatleft">
				<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
				<p>'.get_the_excerpt().'</p>							
			</div>
		';        
	endwhile;
	$list.= '</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('news-two', 'tech_shortcodes');	



function news_three_shortcodes($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'count' => 3,
		'posttype' => 'post',		
		'link' => '',		
	), $atts, 'news' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $posttype, 'category_name' => $category)
        );		
		
		
	$list = '<div class="from_the_desk"><h2 class="desk_title">'.$category.'</h2>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();		
		$list .= '	
				<div class="single_post_desk">
					<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
					<p>'.get_the_excerpt().'</p>
					<p class="post_meta"><a href="'.get_permalink().'" id="readmore_b">Read More</a> '.get_the_time("M j, Y", $idd).'</p>
				</div>
		';        
	endwhile;
	$list.= '</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('news-three', 'news_three_shortcodes');	





function news_four_shortcodes($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'count' => 3,
		'posttype' => 'post',		
		'link' => '',		
	), $atts, 'news' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $posttype, 'category_name' => $category)
        );		
		
		
	$list = '<div class="editorial_section"><h2 class="editorial_section_title">'.$category.'</h2>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();		
		$index_img = wp_get_attachment_image_src( get_post_thumbnail_id($idd), 'index-image' );
		$list .= '	
			<div class="single_post_editorial_section">
				<img src="'.$index_img[0].'" alt="" />
				<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>							
			</div>
		';        
	endwhile;
	$list.= '</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('news-four', 'news_four_shortcodes');	





?>