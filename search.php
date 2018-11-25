<?php get_header(); ?>

<div class="maincontent fix single_page_with_sidebar">
	<div class="left_content floatleft">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'post-excerpt', 'search' );

			// End the loop.
			endwhile; ?>
			<div class="blog_post_pagi">
				<?php the_posts_pagination(array(
					'screen_reader_text' => ' ',
					'end_size'     => 2,    
					'mid_size'     => 4, 
				));?>	
			</div>
		<?php else : ?>
			<h2>404: Sorry! Not found content</h2>

		<?php endif; ?>

	</div>

	
<?php get_sidebar();?>
</div>


<?php get_footer(); ?>
