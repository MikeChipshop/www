<?php get_header(); ?>
<div class="container" >
<div  class="clearfix no_image" id="banner" style="background-color: #8BBAC7">
</div>
</div>

<!-- MAIN CONTENT AREA --> 
<div class="grid_12 omega">
    <div class="container clearfix content"> 
        <h5>News</h5>
        <?php if ( have_posts() ) {  ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="news_content grid_6 omega">
                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <span class="date"><?php echo get_the_date(); ?></span>
                        <p>
                            <?php 
                                $content = get_the_content();
                                $trimmed_content = wp_trim_words( $content, 28,'' );
                                echo $trimmed_content; 
                            ?>
                        </p>
                        <span class="read_more"><a href="<?php the_permalink(); ?>">Read More</a></span>
                    </div>
                    <div class="news_image grid_6 omega">
                        <a href="<?php the_field('link_source') ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
										<?php 
                            if ( has_post_thumbnail() ) the_post_thumbnail('featured-thumb');
                            else {
                        ?>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/no_image.jpg" width="149px" height="138px" alt="<?php bloginfo( 'name' ); ?> Placeholder" title="<?php bloginfo( 'name' ); ?> Placeholder" />
                        <?php }	?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
        <?php }; ?>
    </div>
</div>
<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>