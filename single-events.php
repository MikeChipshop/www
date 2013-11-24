<?php get_header(); ?>
<div class="container" >
<div  class="clearfix no_image" id="banner" style="background-color: #8BBAC7">
</div>
</div>
<div class="grid_12 omega">
<div class="container clearfix content single_event "> 
<div class=" grid_4 omega ">
<h6><?php the_title(); ?></h6>
<h6>Time - <?php the_field('event_time');?></h6>
<h6>Venue - <?php the_field('event_location');?></h6>
<h6><span class="date">Date - <?php the_field('event_date');?></span></h6>
			<p><?php the_content()?></p>
		</div>
		<div class=" grid_8 omega">
			<?php if(get_field('image')): $rcount = 1; ?>
				<?php while(has_sub_field('image')): ?>
					<?php 
						$attachment_id = get_sub_field('image_item');
						$size = "board-members";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
					?>
                	<img src="<?php echo $image[0]; ?>" class="single-news-image-<?php echo $rcount; ?>" />
            	<?php $rcount++; endwhile;?>
			<?php endif; ?>
		</div>
		<div class="grid_2 omega">
			<a href="/events">Back</a>	
		</div>
	</div>
</div>
<?php get_footer(); ?>