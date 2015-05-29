<?php get_header(); ?>

<!-- Start Text -->
	<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop 1 ?>
    <article id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); //include the title, but don't hyperlink it ?></h2> 
    <p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>.</small></p>
    <?php the_post_thumbnail('large') ?>
    <?php the_content('') ?>
    </article>
    <?php endwhile; endif; //end loop 1 ?>   
    <small>single.php</small> 
    </div> 
<!-- End Text -->
    
<?php get_sidebar(); ?>
    
<?php get_footer(); ?>