<?php 

/*------------------------------------------
Theme Version
--------------------------------------------*/
$news = 1.0;

/*-----------------------------------------------
Theme Style and jquery register
-------------------------------------------------*/
function style_and_jqyery(){
	global $news;
/*------------------------Style--------------------*/
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $news );		
	wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/fonts/font.css', array(), $news );	
	wp_enqueue_style( 'naver-css', get_template_directory_uri() . '/css/jquery.fs.naver.css', array(), $news );	
	wp_enqueue_style( 'awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), $news );	
	wp_enqueue_style( 'bar-css', get_template_directory_uri() . '/css/bar/bar.css', array(), $news );		
	wp_enqueue_style( 'nivo-slider-css', get_template_directory_uri() . '/css/nivo-slider.css', array(), $news );	
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.css', array(), $news );	
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), $news );	
	wp_enqueue_style( 'cb-main-css', get_stylesheet_uri(), array(), $news );	
	
/*-----------------jQuery----------------------*/
	wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array( 'jquery' ), $news, true );
	wp_enqueue_script( 'naver-js', get_template_directory_uri() . '/js/jquery.fs.naver.min.js', array( 'jquery' ), $news, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), $news, true );
	wp_enqueue_script( 'marquee-js', get_template_directory_uri() . '/js/jquery.marquee.min.js', array( 'jquery' ), $news, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), $news, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	wp_enqueue_script( 'jquery' );	
}
add_action('wp_enqueue_scripts', 'style_and_jqyery');



/*----------------------------------------------
register text domain
------------------------------------------------*/
if ( function_exists('load_theme_textdomain') ){
load_theme_textdomain('coding', get_template_directory_uri().'/languages');

}

/*---------------------------------------------
Thumbnails Support
-----------------------------------------------*/
add_theme_support( 'post-thumbnails', array( 'post') );
add_image_size( 'slider-image', 660, 300, true );
add_image_size( 'index-image', 145, 100, true );




/*-------------------------------------
	Add Common <head> Items
--------------------------------------*/
function news_meta_charset() {
	echo '<meta charset="' . get_bloginfo( 'charset' ) . '" />' . "\n";
}

function news_meta_viewport() {
	echo '<meta name="viewport" content="initial-scale=1.0" />' . "\n";
}

function news_link_profile() {
	echo '<link rel="profile" href="http://gmpg.org/xfn/11" />' . "\n";
}

function news_link_pingback() {
	echo '<link rel="pingback" href="' . get_bloginfo( 'pingback_url' ) . '" />' . "\n";
}
function news_favicon() {
	echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() ) .'/img/logo.png" type="image/x-icon" />' . "\n";
}
	

/*----------------------------------------------
Setup Theme Functions
------------------------------------------------*/
function setup_theme_functions(){	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form' ) );
	add_filter('widget_text', 'do_shortcode');	
	add_action( 'wp_head', 'news_meta_charset', 0 );
	add_action( 'wp_head', 'news_meta_viewport', 0 );
	add_action( 'wp_head', 'news_link_profile', 1 );
	add_action( 'wp_head', 'news_link_pingback', 1 );
	add_action( 'wp_head', 'news_favicon', 1 );
	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'main_menu', __( 'Main Menu', 'news' ) );
		register_nav_menu( 'footer_menu', __( 'Footer Menu', 'news' ) );
		register_nav_menu( 'header_menu', __( 'Header Menu', 'news' ) );
	}
}
add_action('after_setup_theme', 'setup_theme_functions');


/*--------------------------------------------
Default Menu 
----------------------------------------------*/
function my_theme_default_menu() {
    echo '<ul>';
    if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
        echo '</ul>';
}
function theme_default_mainmenu() {
    echo '<ul id="nav">';
    if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
        echo '</ul>';
}



/** remove redux menu under the tools **/
add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}



/*----------------------------------- 
This code for readmore 
--------------------------------------*/

function excerpt($num) {

$limit = $num+1;

$excerpt = explode(' ', get_the_excerpt(), $limit);

array_pop($excerpt);

$excerpt = implode(" ",$excerpt);

echo $excerpt;

}




/*---------------------------------
Other Page incloud
-----------------------------------*/
require_once('inc/shortcodes.php');
require_once('inc/widgets.php');
require_once('theme-options/ReduxCore/framework.php');
require_once('theme-options/sample/theme-functions.php');




?>