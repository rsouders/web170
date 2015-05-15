
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
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav',/* 'items_wrap' => '<ul id="menu" class="%2$s">%3$s</ul>',*/ ) ); ?>
<!-- End Nav -->

<div id="middle">