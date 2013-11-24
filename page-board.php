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
				<h5>Meet the Board</h5>
				<div id="team" class="group">
                	<?php if(get_field('board_members')): $rcount = 1; ?>
        				<?php while(has_sub_field('board_members')): ?>
							<div class="col col-<?php echo $rcount; ?>">
								<?php $attachment_id = get_sub_field('board_member_photo');
									$size = "board-members";
									$image = wp_get_attachment_image_src( $attachment_id, $size );
								?>
                                <?php if (get_sub_field('board_member_photo')){?>
									<img src="<?php echo $image[0]; ?>" />
                                <?php } else {?>
                        			<img src="<?php bloginfo( 'template_directory' ); ?>/img/no-image-large.jpg" alt="<?php bloginfo( 'name' ); ?> Placeholder" height="316" title="<?php bloginfo( 'name' ); ?> Placeholder" />
                        		<?php } ?>
								<h4><?php the_sub_field('board_member_name'); ?></h4>
								<p><?php the_sub_field('board_member_biog'); ?></p>
							</div>
                      	<?php
        					$rcount++;
        					endwhile;
        				?>
        			<?php endif; ?>
				</div>
			</div>
			</div>

			<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>