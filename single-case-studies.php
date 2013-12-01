<?php get_header(); ?>
			<div class="container" >
				<div  class="clearfix no_image grey" id="banner" ></div>
			</div>

			<!-- MAIN CONTENT AREA --> 
			
			<div class="grid_12 omega">
			<div class="container clearfix content single_opp"> 
					<div class="grid_10 push_1">
						
						<div class="grid_2 omega">
							<a href="#">Back</a>	
						</div>
						<div class="clearfix"></div>
						<h5><?php the_title(); ?></h5>
						<?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
				<div class="grid_12 omega"><?php the_content(); ?></div>
			<?php endwhile; ?>
        <?php }; ?>
						
                       
					</div>
			</div>
			</div>
<?php get_footer(); ?>