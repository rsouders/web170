<?php get_header(); ?>

<!-- Start Text -->
	<div id="spotlight">
        	<img class="banner" src="<?php bloginfo('template_directory')?>/images/bales-banner.jpg" alt="Photograph of hay bales in a field, near Waterford, Virginia" /> <!--to be replaced with slider-->
    	</div> <!--end spotlight-->
        <div id="content">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop 1 ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); //include the title, and hyperlink it ?></a></h2> 
        <?php the_content('') ?>
        <?php endwhile; endif; //end loop 1 ?>   
        <h2>Latest from our blog:</h2>
        <ul>
        <?php rewind_posts() //stop action of loop 1; prevent something like infinite loop ?>
        <?php query_posts('showposts=4') // use loop 2 to display four most recent blog posts ?>
        <?php while ( have_posts() ) : the_post(); //start loop 2 ?>
        <li>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); //include the title, and hyperlink it ?></a></h3>
        <?php the_excerpt() //also display the excerpt for each post ?>
        </li> 
        <?php endwhile; //end loop 2 ?>        
        </ul>
        <small>front-page.php</small> 
    </div> 
<!-- End Text -->
    
<?php get_sidebar(); ?>
    
<?php get_footer(); ?>