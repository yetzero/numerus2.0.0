<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package numerus2.0.0
 */

get_header();
?>
<main id="main-page" <?php post_class('site-main-page bg--dark'); ?>>
	<div id="template-page" <?php post_class('wrapp-template-page template-404'); ?>>
		<section class="error-404 not-found">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content-area">
							<div id="content" class="site-content-404 p-4" role="main">
								<header class="page-header text-center">
									<h1>404</h1>
									<h2 class="page-title"><?php _e( 'Algo salió mal', 'Numerus' ); ?></h2>
								</header>
								<div class="page-not-found text-center">
									<div class="row">
										
										<div class="col-12">
											<h2 class="mensaje-error"><?php _e( 'Oops! Lo sentimos este contenido ya no exite', 'Numerus' ); ?></h2>
											<p class="sumary-error"><?php _e( '¿Tal vez intenta volver al inicio?', 'Numerus' ); ?></p>
										</div>
										<div class="col-12 p-3 mt-3">
											<div class="wx-50 mx-auto">
												<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-full numerus-tertiary" >Volver al inicio</a>
											</div>
										</div>
									</div><!-- .page-content -->
								</div><!-- .page-wrapper -->
							</div><!-- #content -->
						</div><!-- #primary -->
					</div>
				</div>
			</div>
		</section>
	</div> 
</main><!-- #main -->

<?php
get_footer();
