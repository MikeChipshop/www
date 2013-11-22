<?php get_header(); ?>
			<!-- MAIN BANNER AREA -->
			
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

			<!-- MAIN CONTENT AREA --> 
			
			<div class="grid_12 omega">
			<div class="container clearfix content"> 
            <?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
					<div class=" grid_4 omega one clearfix">
						<h5><?php the_title(); ?></h5>
						<?php the_content()?>
					</div>
                    <?php endwhile; ?>
                    <?php }; ?>
					<div class=" grid_4 omega two clearfix">
						<h5><?php the_field('about_column_title'); ?></h5>
						<?php the_field('about_column_two'); ?>
					</div>
					<div class=" grid_4 omega three clearfix"><?php 
						$attachment_id = get_field('about_image');
						$size = "board-members";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						?>
						<img src="<?php echo $image[0]; ?>" />
			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>