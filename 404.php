<?php get_header(); ?>
<div class="container" >
<div  class="clearfix no_image" id="banner" style="background-color: #8BBAC7">
</div>
</div>

<!-- MAIN CONTENT AREA --> 
<div class="grid_12 omega">
    <div class="container clearfix content"> 
        <h5>Sorry, page not found</h5>
                <div id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="news_content grid_6 omega">
                        <p>Unfortunately the page you were looking for can not be found. Please use the navigation links above to browse the site.</p>
                    </div>
                    <div class="news_image grid_6 omega">
                    </div>
                </div>
    </div>
</div>
<!-- FOOTER STARTS HERE -->
<?php get_footer(); ?>