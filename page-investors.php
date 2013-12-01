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
	<div class="container clearfix content investors ">
    	<?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?> 
		<div class=" grid_4 omega one clearfix">
            <h5><?php the_title(); ?></h5>
            <p><?php the_content(); ?></p>
		</div>
        <?php endwhile; ?>
        <?php } else { ?>
        	<div class=" grid_4 omega one clearfix">
            	<p>Sorry, no content found</p>
            </div>
        <?php }; ?>
		<div class=" grid_4 omega two clearfix">
			<h5><?php the_field('col_two_title'); ?></h5>
			<p><?php the_field('col_two_content'); ?></p>
			<p></p>
		</div>
		<div class=" grid_4 omega three clearfix">
			<?php if(get_field('sidebar_images')): $rcount = 1; ?>
				<?php while(has_sub_field('sidebar_images')): ?>
					<?php 
						$attachment_id = get_sub_field('sidebar_image');
						$size = "board-members";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
					?>
                	<img src="<?php echo $image[0]; ?>">
            	<?php $rcount++; endwhile;?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>