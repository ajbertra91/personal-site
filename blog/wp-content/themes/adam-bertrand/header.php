<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage adam-bertrand
 * @since Twenty Ten 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<meta name="description" content="Adam Bertrand's Blog about design lessons learned">
<meta name="author" content="Adam Bertrand">

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=980px">

<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png">


<!-- CSS: implied media="all" -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=2">

<!-- Uncomment if you are specifically targeting less enabled mobile browsers
<link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script>window.jQuery || document.write("<script src='/js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>
<script src="/js/libs/date.js"></script>

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="/js/libs/modernizr-1.7.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.currentYear').html(new Date().toString('yyyy'));
	});
</script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<a class="logo" href="http://www.adam-bertrand.com"><img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/AB-logo.png" alt="Adam Bertrand" /></a>
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

			</div><!-- #branding -->

			<div id="access" role="navigation">
			  
			</div><!-- #access -->
		</div><!-- #masthead -->
		<nav class="small-blog" role="navigation">
		<ul>
			<li><a class="about" href="http://www.adam-bertrand.com/about.html" title="About">about</a></li>
			<li><a class="portfolio" href="http://www.adam-bertrand.com/portfolio.html" title="Portfolio">portfolio</a></li>
			<li><a class="blog" href="http://www.adam-bertrand.com/blog/" title="Blog">blog</a></li>
			<li><a class="contact" href="http://www.adam-bertrand.com/contact.html" title="Contact">contact</a></li>
		</ul>
	</nav><!-- #nav -->
	</div><!-- #header -->

	<div id="main" class="clearfix" role="main">
