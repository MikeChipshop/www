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
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
				'post_type' => 'investments',
					'posts_per_page' => 1,
					'paged' => $paged,
				);
				$newpost_query = new WP_Query( $args );
				if ( $newpost_query->have_posts() ) :
				while ( $newpost_query->have_posts() ) : 
				$newpost_query->the_post(); 
			?>
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
            <?php endwhile; ?>
            <!-- Navigation -->
            
            <!-- End -->
            
            <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
			<?php wp_reset_postdata();?>
            <?php else:  ?>
  				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>