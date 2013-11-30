<?php get_header(); ?>
			<div class="container" >
				<div  class="clearfix no_image grey" id="banner" ></div>
			</div>

			<!-- MAIN CONTENT AREA --> 
			
			<div class="grid_12 omega">
			<div class="container clearfix content single_opp"> 
					<div class="grid_10 push_1">
						
						
						
						<div class="">
                        	<?php $attachment_id = get_field('company_logo');
									$size = "featured-thumb";
									$image = wp_get_attachment_image_src( $attachment_id, $size );
								?>
                                <?php if (get_field('company_logo')){?>
									<img src="<?php echo $image[0]; ?>" />
                                <?php } else {?>
                        			<img src="<?php bloginfo( 'template_directory' ); ?>/img/no-image-large.jpg" alt="<?php bloginfo( 'name' ); ?> Placeholder" title="<?php bloginfo( 'name' ); ?> Placeholder" />
                        		<?php } ?>
                        </div>
						<div class="grid_2 omega">
							<a href="#">Back</a>	
						</div>
						<div class="clearfix"></div>
						<h5><?php the_title(); ?></h5>
						<?php if (get_field('investment_location')) {?><h6>Location - <?php the_field('investment_location'); ?></h6><?php } ?>
						<?php if (get_field('investment_required')) {?><h6>Investment needed - &pound;<?php the_field('investment_required'); ?></h6><?php } ?>
						<?php if (get_field('equity_offered')) {?><h6>Equity offered - <?php the_field('equity_offered'); ?></h6><?php } ?>
                        <?php if (get_field('investment_contact')) {?><h6>Investment contact email - <?php the_field('investment_contact'); ?></h6><?php } ?>
						
						<div class="grid_12 omega"><?php the_content(); ?></div>
                        <?php if (get_field('company_profile')) {?>
                        <div class="grid_12 omega">
                        	<h6>Company Profile</h6>
                        	<?php the_field('company_profile'); ?>
                        </div>
						<?php } ?>
                        <?php if (get_field('attach_pdf')) {?><h6 class="pdf-attach"><a href="<?php the_field('attach_pdf'); ?>">Click here to download the PDF</a></h6><?php } ?>
						
						
					</div>
					<div class="grid_10 push_1">
						
						<?php if (get_field('investment_disclaimer')) {?><h6>Disclaimer</h6><p><?php the_field('investment_disclaimer'); } ?></p>
					</div>
			</div>
			</div>
<?php get_footer(); ?>