<?php get_header(); ?>

<!-- Start Text -->
	<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop 1 ?>
    <h2><?php the_title(); //include the title, but don't hyperlink it ?></h2> 
    <p><i>Byline will go here eventually</i></p>
    <?php the_content('') ?>
    <?php endwhile; endif; //end loop 1 ?>   
    <small>single.php</small> 
    </div> 
<!-- End Text -->
    
<?php get_sidebar(); ?>
    
<?php get_footer(); ?>