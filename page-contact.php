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
            <p>Mon to Fri - 0900 to 1700</p>
            <p>Saturday - CLOSED</p>
            <p>Sunday - CLOSED</p>
            <p class="pushup_two">Tel. 01603 510087</p>
            <p>Email: <span>hello@newangliacapital.co.uk</span></p>
            <p>Twitter: <a href="#">@newangliainvestment</a></p>
            <div  class="grid_5">
				<?php echo do_shortcode("[contact-form-7 id='139' title='Contact form 1']");?>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>		