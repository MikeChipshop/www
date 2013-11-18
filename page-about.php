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
					<div class=" grid_4 omega three clearfix"><img src="img/about_diagram.gif"></div>

			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>