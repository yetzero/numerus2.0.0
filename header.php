<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numerus2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="main-header" class="header-site fixed-top">
		<!-- <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation"> -->
			<!-- navbar navbar-expand-lg shadow | d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start -->
		<nav class="navbar navbar-expand-md" role="navigation">
			<div class="container">
				<?php if( has_custom_logo() ): 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					$custom_logo_url = $custom_logo_data[0];
					?>
					<a class="navbar-brand custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<img class="custom-logo-img" src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> - <?php bloginfo('description'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> - <?php bloginfo('description'); ?>"></a>
					<?php else: ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
					<?php endif; ?>
					<!-- Brand and toggle get grouped for better mobile display -->
				<button id="toggler-menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#active-menu" aria-controls="active-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'numerus' ); ?>">
						<!-- <span class="icon-menu-2"></span> -->
						<!-- <span class="navbar-toggler-icon" style=""></span> -->
						<div class="hamburger-toggle">
							<div class="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
				</button> 
					<?php
						wp_nav_menu( array(
								'theme_location'    => 'primary',
								'depth'             => 4,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse custom-navbar',
								'container_id'      => 'active-menu',
								'menu_class'        => '',
								'items_wrap'        => '<ul id="%1$s" class="navbar-nav custom-navbar-nav ms-auto mb-2 mb-lg-0 text-sm %2$s">%3$s
								<li class="menu-item nav-item">
									<a class="nav-link"
									data-bs-toggle="modal" data-bs-target="#contactModal" href="#">Contáctanos</a>
								</li>
								</ul><ul class="navbar-nav custom-navbar-second ms-2">
								<li class="nav-item"><a href="https://numerus.cl/inicio-sesion/" class="btn btn-border numerus-white wx-100 px-5"><i class="bi bi-person-circle"></i> login</a></li></ul>',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(), 
						) );
						?>
			</div>
		</nav>
	</header><!-- #masthead -->
	<!-- mas boton cambio de dark:
							<ul id="%1$s" class="navbar-nav custom-navbar-nav ms-auto mb-2 mb-lg-0 text-sm %2$s">%3$s</ul><ul class="navbar-nav custom-navbar-second ms-2"><li class="nav-item"><a class="nav-link" href="#" tabindex="-1" data-bs-toggle-theme="true" aria-disabled="true"><i class="bi bi-circle-half"></i></a></li><li class="nav-item"><a href="#" class="btn btn-getstarted numerus-white"><i class="bi bi-person-circle"></i> login</a></li></ul>
-->
