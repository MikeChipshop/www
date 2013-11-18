<footer>
<!-- FIRST FOOTER AREA STARTS HERE -->
<div class="grid_12 omega">
<div class="container clearfix" style="background: #4D4D4E;">
<div class=" grid_4 omega one clearfix">	
<div class="newsfeed clearfix">
<h5>Latest Opportunities</h5>
<?php $latopp_query = new WP_Query( "post_type=investments&posts_per_page=3" );
if ( $latopp_query->have_posts() ) {
while ( $latopp_query->have_posts() ) { 
$latopp_query->the_post(); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<h6><a href="<?php the_field('link_source') ?>"><?php the_title(); ?></a></h6>
</header>
<p>
<?php 
	$content = get_the_content();
	$trimmed_content = wp_trim_words( $content, 15 );
	echo $trimmed_content; 
?>
</p>
</article>
<?php
	}} wp_reset_postdata();
?>
</div>
</div>
<div class=" grid_4 omega two clearfix">
<div class="newsfeed clearfix">
<h5>News Feed</h5>
<?php $newpost_query = new WP_Query( "post_type=post&posts_per_page=3" );
if ( $newpost_query->have_posts() ) {
while ( $newpost_query->have_posts() ) { 
$newpost_query->the_post(); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<h6><a href="<?php the_field('link_source') ?>"><?php the_title(); ?></a></h6>
</header>
<p>
<?php 
	$content = get_the_content();
	$trimmed_content = wp_trim_words( $content, 15 );
	echo $trimmed_content; 
?>
</p>
</article>
<?php
	}} wp_reset_postdata();
?>
</div>
</div>
<div class=" grid_4 omega three clearfix">
<div class="subscribe clearfix">
<h5>Stay upto date</h5>
<form>
<input type="email" class="email" value="Enter your email address">
<input type="submit" class="btn" value="Submit">
</form>

</div>
</div>
</div>
</div>

<!-- SECOND FOOTER AREA STARTS HERE -->
<div class="grid_12 omega clearfix">
<div class="container clearfix" style="background: white;">
<div class="grid_6 footernav">
<nav>
    <ul>
    	<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
    </ul>
</nav>
<span><?php the_field('telephone','option'); ?></span>
</div>
<div class="grid_6 social_container omega">
<div class="social">
<a href="http://<?php the_field('facebook_link','option'); ?>" class="facebook">facebook</a>
<a href="http://<?php the_field('linkedin_link','option'); ?>" class="linkedin">linkedin</a>
<a href="http://<?php the_field('twitter_link','option'); ?>" class="twitter">twitter</a>
</div>
</div>	
</div>	
</div>	
</footer>
<?php wp_footer(); ?>
</body>
<!-- Test GIT -->
</html>