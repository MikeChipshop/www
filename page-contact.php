<?php get_header(); ?>
<div class="container" >
	<div  class="clearfix no_image" id="banner"></div>
</div>
<div class="grid_12 omega">
    <div class="container clearfix content contact"> 
    	<div class="grid_10 push_2">
            <h5>Contact Us</h5>
            <?php if ( have_posts() ) {  ?>
				<?php while ( have_posts() ) : the_post(); ?>
            		<h6><?php the_content()?></h6>
            	<?php endwhile; ?>
			<?php }; ?>
            <h6>Head Office:</h6>
            <address>
                <?php the_field('head_office_address');?>
            </address>
            <h6>Office Opening Times:</h6>
            <p><?php the_field('opening_times');?></p>
            <p class="pushup_two">Tel: <?php the_field('telephone','option');?></p>
            <p>Email: <span><?php the_field('email','option');?></span></p>
            <p>Twitter: <a href="<?php the_field('twitter_link','option');?>">@<?php the_field('twitter_handle','option');?></a></p>
            <div  class="grid_5">
				<?php echo do_shortcode("[contact-form-7 id='139' title='Contact form 1']");?>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>		