<?php get_header(); ?>
<div class="container" >
	<div  class="clearfix" id="banner" style="background-color: #8BBAC7">
		<?php if ( have_posts() ) {  ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php 
                	if ( has_post_thumbnail() ) the_post_thumbnail('full-size');
                ?>   
            <?php endwhile; ?>
		<?php }; ?>
	</div>
</div>
<div class="grid_12 omega">
	<div class="container clearfix content seeking ops"> 
		<?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
				<div class=" grid_4 omega one clearfix">
					<h5><?php the_title(); ?></h5>
                    <?php the_content()?>
				</div>
			<?php endwhile; ?>
        <?php }; ?>
		<div class=" grid_8 omega two clearfix">
        	<!-- -->
            	<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination

    $the_query = new WP_Query( array( 
        'post_type' => 'case-studies',
        'paged' => $paged,
        'posts_per_page' => 6) 
    );
	
    while ( $the_query->have_posts() ) : $the_query->the_post(); { ?>
            <!-- -->
			
			<div  id="post-<?php the_ID(); ?>" <?php post_class('opportunity'); ?>>
				<div class="opportunity_container">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					<?php 
                    	if ( has_post_thumbnail() ) the_post_thumbnail('featured-thumb');
                    	else {
					?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/no_image.jpg" width="149px" height="138px" alt="<?php bloginfo( 'name' ); ?> Placeholder" title="<?php bloginfo( 'name' ); ?> Placeholder" />
					<?php }	?>
					</a>
					<div class="right">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p class="oppexcerpt"><?php 
							$content = get_the_content();
							$trimmed_content = wp_trim_words( $content, 18 );
							echo $trimmed_content; 
						?></p>
						<span><a href="<?php the_permalink(); ?>"> Read more</a></span>
					</div>
				</div>
			</div>
            <?php } endwhile; ?>
			<nav class="pagination-links clearfix">
                <div class="pagination-links-left"><?php echo get_previous_posts_link('&laquo; View previous', $the_query->max_num_pages)?></div>
    			<div class="pagination-links-right"><?php echo get_next_posts_link('View more &raquo;', $the_query->max_num_pages) ?></div>
    		</nav>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>