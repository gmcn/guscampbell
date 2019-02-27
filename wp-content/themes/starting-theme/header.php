<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135032279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135032279-1');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="text/plain" rel="author" href="/humans.txt" />
<link type="text/plain" rel="robots" href="/robots.txt" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
<?php $description = get_bloginfo( 'description', 'display' ); ?>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#131e3d",
      "text": "#ffffff"
    },
    "button": {
      "background": "#ffffff",
      "text": "#131e3d"
    }
  },
  "theme": "classic",
  "position": "bottom-right",
  "content": {
    "href": "/privacy-policy/"
  }
})});
</script>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid" id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="fixed">
			<div class="row">

				<div class="col-md-3 col-lg-4 branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gus-campbell_logo.jpg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>" >
					</a>
				</div>

				<div class="col-md-6 col-lg-5">
					<nav class="navbar navbar-default">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>

		          </div>
		            <?php wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id' => 'navbar',
									'container_id' => 'navbar',
									'container_class' => 'navbar-collapse collapse',
									'menu_class' => 'navbar-collapse',
									'items_wrap' => '<ul id="" class="nav navbar-nav">%3$s</ul>' ) );
									?>
		        </div><!--/.container-fluid -->
		      </nav><!-- #site-navigation -->
				</div>

				<div class="col-md-3 tel hidden-xs hidden-sm">
					tel: <span><a href="tel:+442838334801">(028) 3833 4801</a></span>
					<a class="openBtn" onclick="openSearch()"><i class="glyphicon glyphicon-search"></i></a>
				</div>

			</div>
		</div><!-- /.fixed -->

		<div id="myOverlay" class="overlay">
		  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
		  <div class="overlay-content">
		    <form action="/" method="get">
					<div class="container">
						<input type="text" value="<?php the_search_query(); ?>" placeholder="Search.." name="s">
			      <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>

		    </form>
		  </div>
		</div>

	</header><!-- #masthead -->
