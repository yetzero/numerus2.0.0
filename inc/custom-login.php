<?php
/**
 * Colunga Theme Customizer
 *
 * @package Colunga
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Login $wp_customize Theme Customizer object.
 */

 function WP_Customize_Login() { ?>
    <style type="text/css">
				body.login {
					width: 100%;
					background: #fff url('<?php echo get_stylesheet_directory_uri();?>/assets/images/INICIO-over.jpg') center center no-repeat !important;
					background-position: bottom center;
					background-size: cover !important;
					z-index: 0;
					position: relative;
					height: auto;

				}
				#login {
					position: relative;
					z-index: 100;
				}

        .login h1 a {
            width: auto !important; 
						background: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/logo-white.png') center center no-repeat !important;
            background-size: contain !important;
						min-height: 100px !important;
        }

				.login form {
					border-radius: 8px;
				}

				.login #login #nav,
				.login #login #backtoblog {
					text-align: center;
				}

				.login #login #nav a,
				.login #login #backtoblog a {
					color: #fff;
				}

				.language-switcher {
					position: relative;
					z-index: 100;
				}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'WP_Customize_Login' );