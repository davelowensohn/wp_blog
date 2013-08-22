<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: none; ) repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: none; border: none; }
<?php } ?>

</style>

<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,600,200italic" rel="stylesheet" type="text/css">

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<div id="page">
<div class="tab"></div>


<div id="header">
	<div id="headerimg">
	

	<!-- Header Top Starts -->
		<div id="header-top">
		<!-- Logo Starts -->
			<div id="logo">
				<h1>
						<a href="http://lata.handwovenrecords.com">
						<span>LATA</span>
					</a>
				</h1>
			</div>
		<!-- Logo Ends -->
			<div id="flickrholdr">
				<a href="http://lata.handwovenindustries.com"><img src="<?php bloginfo('template_directory'); ?>/images/scoreblogtitle-titillium.png" /></a>
			</div>
		</div>
	<!-- Header Top Ends -->


	
<!--
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
-->		
	</div>
</div>

	<!-- Menu Starts -->
		<div id="menublog">
		<!-- Menu Items Starts -->
			<ul>
				<li><a href="http://lata.handwovenrecords.com">Home</a></li>
				<li><a href="http://lata.handwovenrecords.com/pages/membership">Services</a></li>
				<li><a href="http://lata.handwovenrecords.com/pages/tournaments">Tournaments</a></li>
				<li><a href="http://lata.handwovenrecords.com/events">Calendar</a></li>
				<li><a href="http://lata.handwovenrecords.com/pages/faq">FAQ</a></li>
				<li><a href="http://lata.handwovenrecords.com/contact">Contact Us</a></li>
			</ul>
		<!-- Menu Items Ends -->
		</div>
	<!-- Menu Ends -->
<!--	
<div id="containerblog" class="clearfix">
-->