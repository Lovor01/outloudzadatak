<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OutLoud_Zadatak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'outloud-zadatak' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="black-ribbon">
				<div class="inner-ribbon box">
					<?php
					the_custom_logo();
					?>
					<div class="call-group">
						<div class="call-element">
							<span>Whatsapp:</span>
							<div class="border-around">
								<a href="https://wa.me/123456789">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/whatsapp.png" alt="Whatsapp logo">
									+123456789
								</a>
							</div>
						</div>
						<div class="call-element">
							<span>Viber:</span>	
							<div class="border-around">
								<a href="viber://pa?chatURI=#">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/viber.png" alt="Viber logo">
									+123456789
								</a>
							</div>
						</div>
					</div>
					<div class="social-group">
						<img class="social" src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/facebook.png" alt="Facebook logo">
						<img class="social" src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/instagram.png" alt="Instagram logo">
					</div>
					<a class="a-button" href="#">
						Contact us
					</a>
				</div><!-- inner ribbon-->
			</div><!-- black ribbon -->
		<div class="big-image">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Assets/cover.jpg" alt="">
			<div class="emphasized-div header-img-div-pos">
				<h1>
					Lorem Ipsum Dolor Sit
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pretium tincidunt viverra. Nulla non dignissim tellus. Ut pulvinar dui nec nisi varius commodo. Vestibulum molestie felis id.
				</p>
				<a class="a-button" href="#">Contact Us</a>
			</div>
		</div>
 		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
