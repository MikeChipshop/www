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
		<h5>Meet the Team</h5>
		<div id="team" class="group">
			<?php if(get_field('team_members')): $rcount = 1; ?>
			<?php while(has_sub_field('team_members')): ?>
			<div class="col col-<?php echo $rcount; ?>">
				<?php 
					$attachment_id = get_sub_field('team_member_photo');
					$size = "board-members";
					$image = wp_get_attachment_image_src( $attachment_id, $size );
				?>
                <img src="<?php echo $image[0]; ?>" />
				<h4><?php the_sub_field('team_member_name'); ?></h4>
				<h6><?php the_sub_field('team_member_job_title'); ?></h6>
				<h6><?php the_sub_field('team_member_email'); ?></h6>
				<h6><?php the_sub_field('team_member_phone'); ?></h6>
				<p><?php the_sub_field('team_member_biog'); ?></p>
			</div>
			<?php $rcount++; endwhile;?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>