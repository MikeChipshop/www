<?php get_header(); ?>
<div class="container" >
<div  class="clearfix no_image" id="banner" style="background-color: #8BBAC7">
</div>
</div>

<!-- MAIN CONTENT AREA --> 
<div class="grid_12 omega">
    <div class="container clearfix content"> 
        <h5><?php the_title(); ?></h5>
        <?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="news_content grid_6 omega">
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="news_image grid_6 omega">
                        <?php if ( has_post_thumbnail() ) the_post_thumbnail('featured-thumb'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
        <?php }; ?>
    </div>
</div>
<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>