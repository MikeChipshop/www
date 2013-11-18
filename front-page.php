<?php get_header(); ?>
<!-- MAIN BANNER AREA -->

<div class="container" >
<div  class="clearfix" id="banner" style="background-color: #8BBAC7">
<div id="banner-info" class="grid_6 omega">
<h1><?php the_field('banner_title'); ?></h1>
<p><?php the_field('banner_blurb'); ?></p>
</div>
<div class="grid_6 none">
<?php if ( have_posts() ) {  ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php 
if ( has_post_thumbnail() ) the_post_thumbnail('full-size');
?>   
<?php endwhile; ?>
<?php }; ?>

</div>
</div>
</div>

<!-- MAIN CONTENT AREA --> 

<div class="grid_12 omega">
    <div class="container clearfix content"> 
        <?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h5><?php the_title(); ?></h5>
                <div id="post-<?php the_ID(); ?>" <?php post_class('grid_4 one clearfix'); ?>>
                    <?php the_content()?>
                </div>
            <?php endwhile; ?>
        <?php }; ?>
		<div class=" grid_4 two clearfix">
        	<?php the_field('secondary_content'); ?>
      	</div>
        <div class=" grid_4 omega three clearfix">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/test.jpg">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/test.jpg">
        </div>
	</div>
</div>

<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>