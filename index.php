<?php get_header(); ?>

<!-- Start Text -->
	<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop 1 ?>
    <article class="post-excerpt"> <!-- Contains each item; prevents Great Collapse -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); //include the title, and hyperlink it ?></a></h2> 
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>.</small>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail') //add featured image thumbnail, and permalink it ?></a>
    <?php the_excerpt('') ?>
    <p class="read-more"><a href="<?php the_permalink() ?>">Read more...</a></p>
    </article>
    <?php endwhile; endif; //end loop 1 ?>   
    <small>index.php</small> 
    </div> 
<!-- End Text -->
    
<?php get_sidebar(); ?>
    
<?php get_footer(); ?>