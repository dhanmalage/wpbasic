<?php
/*
Theme Name: WP Basic Theme
Theme URI: http://whenalive.com/
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: Basic theme for wordpress theme development startup.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: wpbasic

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Dhananjaya Maha Malage" />
	<meta name="contact" content="dmmdust@gmail.com" />
	<meta name="copyright" content="Copyright (c)2014-<?php echo date('Y'); ?> Dhananjaya Maha Malage. All Rights Reserved." />

	<?php wp_head(); ?>

</head>
<body>
<!-- Pre Loader -->
<!--
<div class="se-pre-con" id="preLoaderWrapper"></div>
-->

<header>
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</div>
					<?php
					wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					);
					?>
				</div>
			</nav>
		</div> <!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 end -->
	</div> <!-- .row-fluid end -->
</header>