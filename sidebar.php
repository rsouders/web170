    <!-- Start Sidebar -->
    <div id="sidebar">
    	<h2 class="sidebar">Search this Site</h2>
        	<form>
            <div id="search">
            	<div id="textinput">
                	<input type="text" name="searchstring" maxlength="200" />
                </div>
                <div id="submit">
	                <input type="submit" value="Search" />
                </div>
            </div>
            </form>
            
        <!-- Start Sidebar Dynamic Sub-Nav --> 
        
        <div id="sub-navigation" class="widget">   

        <h2 class="sidebar">
		<?php echo get_the_title($post->post_parent); //get the title of the gateway page ?>
        </h2> 
        	<ul class="sub-navigation-items">
			<?php 
            
			if ($post->post_parent)  { //if the page we're displaying has a parent
				wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => __(''))); //list the sub-pages but not the title
				
			} else { //if the page we're displaying does NOT have a parent
				wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => __(''))); //list the sub-pages but not the title
			}
			?>
            </ul> <!-- Can't figure out why UL displays, but LIs don't appear to be generated, let alone displayed -->

		</div> <!-- End div id sub-nav -->
        <!-- End Sidebar Dynamic Sub-Nav -->     
         
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