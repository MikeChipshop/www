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
						<h5>How we work</h5>
						<p>We match innovative businesses seeking to raise finance for growth with private investors looking for new opportunities. Investment may come from a single investment or as a group of investors working together.  The funds secured through private investment are matched with funding through New Anglia LEP.  This means the risk is spread between public and private finance. It also means that we have created a very attractive investment package to stimulate growth and jobs in the region.</p>
						<p>We source businesses looking to raise finance and present opportunities that we think will be attractive to investors.</p>
						<p>Visit the latest <a href="opportunities.php">business opportunites</a></p>
					</div>
					<div class=" grid_4 omega three clearfix"><img src="img/about_diagram.gif"></div>

			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>