<?php get_header(); ?>
<div class="container" >
    <div  class="clearfix no_image" id="banner" style="background-color: #8BBAC7"></div>
</div>
<div class="grid_12 omega">
	<div class="container clearfix content single_event "> 
    	<?php if ( have_posts() ) {  ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class=" grid_4 omega ">
                    <h6><?php the_title(); ?></h6>
                    <h6><span class="date"><?php echo get_the_date('jS F Y'); ?></span></h6>
                    <h6><span class="date"><?php echo get_the_date('H:i'); ?></span></h6>
                    <p><?php the_content()?></p>
                </div>
        	<?php endwhile; ?>
		<?php }; ?>
		<div class=" grid_8 omega">
			<img src="img/no_image.jpg">
            <img src="img/no_image.jpg">
            <img src="img/no_image.jpg">
            <img src="img/no_image.jpg">
		</div>
		<div class="grid_2 omega">
			<a href="news/">Back</a>	
		</div>
	</div>
</div>
<?php get_footer(); ?>