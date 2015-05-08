
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name') ?>;</title>

<!-- Start Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flaticon.css" type="text/css" >
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/media.css" type="text/css"  >

<meta name='robots' content='noindex,follow' />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/SlickNav-master/slicknav.css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<!-- End Styles -->

<!--Remy Sharp Shiv -->
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->

<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body <?php body_class(); ?>>
 
<div id="header">
	<div id="header-inner">
        <div id="header-buttons">
            <div id="header-button-social">
                <a href="https://www.facebook.com/waterfordfoundation" class="flaticon-facebook51"></a>
                <a href="https://twitter.com/waterfordfdn" class="flaticon-twitter44"></a>
            </div> <!--end social media buttons-->
            <div id="header-button-donate">
                <a href="">Donate</a>
            </div> <!--end donate button-->
        </div> <!--end header buttons-->
        <div id="logo-tag">
            <div id="logo">
                <a class="logo" href="http://www.rheansouders.com/wordpress_sp15/"><h1>The Waterford Foundation</h1></a>
            </div> <!--end logo-->
            <div class="tagline">
                <a class="logo" href="http://www.rheansouders.com/wordpress_sp15/"><h3 id="tagline">Saving the Best to Last</h3></a>
            </div>  <!--end tagline-->
        </div> <!--end logo-tag-->
    </div> <!--end header-inner-->
</div> <!--end header-->

<!-- Start Old Navigation 
<div id="nav">
	<ul id="menu">
    	<li class="small"><a href="home.php" >Home</a></li>
        <li class="large"><a href="foundation.php" >The Foundation</a></li>
        <li class="medium"><a href="village.php" >The Village</a></li>
        <li class="small-two-lines-on"><a href="fair.php" >The Fair</a></li>
        <li class="medium"><a href="visit.php" >Visit Any Time</a></li>
        <li class="large"><a href="second-street-school.php" >The Second Street School</a></li>
        <li class="medium"><a href="venues.php" >Venue Rentals</a></li>
        <li class="small"><a href="shop.php" >Shop</a></li>
        <li class="right-end"><a href="contact.php" >Contact</a></li>
    </ul>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="SlickNav-master/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});
</script>
</div> <!--end nav-->
<!-- End Old Navigation -->

<!-- Start Nav -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav', 'items_wrap' => 'ul id="menu" class="%2$s">%3$s</ul>', ) ); ?>
<!-- End Nav -->

<div id="middle">
	<!-- Start Text -->
	<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start loop ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); //include the title, and hyperlink it ?></a></h2> 
    <?php the_content('') ?>
    <?php endwhile; endif; //end loop ?>    
    </div> 
    <!-- End Text -->
    
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
        <h2 class="sidebar">The Waterford Fair</h2>
        	<ul>
            <li><h4><a href="fair-2015.php">2015 Details</a></h4></li>
            <li><h4><a href="fair-tickets.php">Buy Tickets</a></h4></li>
            <li><h4><a href="fair-demonstrators.php">Info for Demonstrators</a></h4></li>
            </ul>
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
    
</div> <!--end middle-->
<!-- End Content -->

<div id="footer">
	<div id="footer-content">
    	<div id="footer-left">
        <p>The mission of the Waterford Foundation, Inc., is to preserve the historic buildings and the open spaces of the National Historic Landmark of Waterford, Virginia, and through education to increase the public's knowledge of life and work in an early American rural community.</p>
        </div> <!--end footer-left-->
        <div id="footer-right">
        <p>© The Waterford Foundation, Inc., a 501(c)(3) nonprofit organization. All Rights Reserved. The Waterford Foundation Inc., is duly registered with the Virginia Division of Consumer Protection.  A financial statement is available upon written request from the Office of Consumer Affairs.</p>
        </div> <!--end footer-right-->
    </div> <!--end footer content-->
    <div id="credit">
    	<p class="credit">Web design by <a href="http://www.rheansouders.com/">Rhean Souders</a></p>
        <p class="credit">Icons made by <a href="http://www.flaticon.com/authors/linh-pham" title="Linh Pham">Linh Pham</a>, <a href="http://www.flaticon.com/authors/alessio-atzeni" title="Alessio Atzeni">Alessio Atzeni</a> and <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> are licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>.</p></div>
    
</div> <!--end footer-->

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>
