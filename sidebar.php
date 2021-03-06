    <!-- Start Sidebar -->
    <div id="sidebar">

    	<h2 class="sidebar">Search this Site</h2>
        <?php get_search_form(); ?>
            
        <!-- Start Sidebar Dynamic Sub-Nav --> 
        
        <div id="sub-navigation" class="widget">   
		<?php if (is_page()) : //if we're on a "page" ?>
        <h2 class="sidebar">
		<?php echo get_the_title($post->post_parent); //get the title of the gateway page ?>
        </h2> 
        	<ul class="sub-navigation-items">
            
            
            <?php /*wp_list_pages();*/ ?>
            
				<?php 
                if ($post->post_parent)  { //if the page we're displaying has a parent
                    wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => __(''))); //list the sub-pages but not the title
                    
                } else { //if the page we're displaying does NOT have a parent
                    wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => __(''))); //list the sub-pages but not the title
                }
                ?>
            </ul> 
            
		<?php endif; //end "pages" conditional ?>
        <?php if (!(is_page())) : //if we're on something other than a page ?>
        <h2 class="sidebar">Blog</h2>
        <ul class="sub-navigation-items">
		<?php wp_list_categories(array('title_li' => __(''))); //show the categories without a title ?>
        </ul>
        <?php endif; //end not-page conditional ?> <!-- This part works. Why doesn't the is_page conditional?? -->
		</div> <!-- End div id sub-nav -->
        <!-- End Sidebar Dynamic Sub-Nav -->     
        
        <!-- Start quote -->
			<?php if (get_post_meta($post->ID, 'pullquote', true)) : //if there is a quote on this page... ?>
            	<blockquote><?php echo get_post_meta($post->ID, 'pullquote', true) ?></blockquote>
            <?php endif; ?>
    	<!-- End quote -->
    
    <!-- Start Dynamic Sidebar -->
        <?php dynamic_sidebar(1); //call widgets chosen through dashboard ?>
    <!-- End Dynamic Sidebar -->
         
        <h2 class="sidebar">Upcoming Events</h2> <!--To be replaced with dynamic content-->
        	<h4><a href="">Event One</a></h4>
            <p class="sidebar-detail">Date and Time Details</p>
            <p class="sidebar-detail">Might need two lines</p>
            <hr />
        	<h4><a href="">Event Two</a></h4>
            <p class="sidebar-detail">Date and Time Details</p>
            <p class="sidebar-detail">Might need two lines</p>
            <hr />    
            <h4><a href="">Event Three</a></h4>
            <p class="sidebar-detail">Date and Time Details</p>
            <p class="sidebar-detail">Might need two lines</p>
            <hr />
            <h4><a href="">Event Four</a></h4>
            <p class="sidebar-detail">Date and Time Details</p>
            <p class="sidebar-detail">Might need two lines</p>
            <hr /> 
            <h4 class="center"><a href="" >View All Upcoming Events</a></h4>
            <h4 class="center"><a href="" >Subscribe to Events via Email</a></h4>
         <h2 class="sidebar">Recent Tweets</h2>
         	<p class="sidebar-detail"><a href="" class="flaticon-twitter44"></a>Aliquam sem nibh, tincidunt quis porttitor ac, lacinia et ante.</p>
            <p class="sidebar-source">Date/Time of tweet</p>
            <p class="sidebar-detail"><a href="" class="flaticon-twitter44"></a>Aliquam sem nibh, tincidunt quis porttitor ac, lacinia et ante.</p>
            <p class="sidebar-source">Date/Time of tweet</p>
            <p class="sidebar-detail"><a href="" class="flaticon-twitter44"></a>Aliquam sem nibh, tincidunt quis porttitor ac, lacinia et ante.</p>
            <p class="sidebar-source">Date/Time of tweet</p>
            <hr />
            <h4 class="center">
            	<div class="sidebar-button-social">
                	<a href="" class="flaticon-twitter44"></a>
                </div> <!--end sidebar social-->
                <a href="">Follow us on Twitter</a>
            </h4>
            <h4 class="center">
            	<div class="sidebar-button-social">
                	<a href="" class="flaticon-facebook51"></a>
                </div> <!--end sidebar social-->
                <a href="">Like us on Facebook</a>
            </h4>
    </div> 
    <!--end sidebar-->