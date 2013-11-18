<?php get_header(); ?>
			<!-- MAIN BANNER AREA -->
			
			<div class="container" >
			<div  class="clearfix no_image grey" id="banner">
			</div>
			</div>

			<!-- MAIN CONTENT AREA --> 
			
			<div class="grid_12 omega">
			<div class="container clearfix content"> 
            <?php if ( have_posts() ) {  ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h5><?php the_title(); ?></h5>
				<div class="grid_4">
                <?php the_content()?>
                </div>
                <?php endwhile; ?>
		<?php }; ?>
				<div id="partners" class="group">
					<div class="col">
						<img src="img/no_image.jpg">
						<h4>Eastern Enterprise Hub</h4>
						<h6><a href="http://www.eehub.co.uk/">www.eehub.co.uk</a></h6>
						<p>Some early stage businesses need support to become investment ready. We have links with a rang eof partners who are able to assist early stage businesses.</p>
					</div>
					<div class="col">
						<img src="img/no_image.jpg">
						<h4>NWES</h4>
						<h6><a href="http://www.nwes.org.uk/">www.nwes.org.uk</a></h6>
						<p>Some early stage businesses need support to become investment ready. We have links with a rang eof partners who are able to assist early stage businesses.</p>
					</div>
					<div class="col">
						<img src="img/no_image.jpg">
						<h4>MENTA</h4>
						<h6><a href="http://www.menta.org.uk/">www.menta.org.uk</a></h6>

						<p>Some early stage businesses need support to become investment ready. We have links with a rang eof partners who are able to assist early stage businesses.</p>
					</div>
					<div class="col">
						<img src="img/no_image.jpg">
						<h4>NAC</h4>
						<h6><a href="http://www.newangliacapital.co.uk/">www.newangliacapital.co.uk</a></h6>
						<p>Some early stage businesses need support to become investment ready. We have links with a rang eof partners who are able to assist early stage businesses.</p>
					</div>					

					
					
					
				</div>
			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>