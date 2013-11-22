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
                	<?php if(get_field('partners')): $rcount = 1; ?>
					<?php while(has_sub_field('partners')): ?>
					<div class="col partner-item-<?php echo $rcount; ?>">
						<?php 
						$attachment_id = get_sub_field('partner_image');
						$size = "board-members";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						?>
                        <?php if (get_sub_field('partner_image')){?>
						<img src="<?php echo $image[0]; ?>" />
                        <?php } else {?>
                        	<img src="<?php bloginfo( 'template_directory' ); ?>/img/no_image.jpg" alt="<?php bloginfo( 'name' ); ?> Placeholder" height="316" title="<?php bloginfo( 'name' ); ?> Placeholder" />
                        <?php } ?>
						<h4><?php the_sub_field('partner_title'); ?></h4>
						<h6><a href="http://<?php the_sub_field('partner_link'); ?>"><?php the_sub_field('partner_link'); ?></a></h6>
						<?php the_sub_field('partner_content'); ?>
					</div>
                    <?php $rcount++; endwhile;?>
					<?php endif; ?>
				</div>
			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>