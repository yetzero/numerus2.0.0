<?php
/**
 * Template Name: Pages inicio sesion app
 * Template Post Type: post, page, event
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package colunga
 */

get_header('sesion'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php $page_slug = get_post_field('post_name', get_post()); $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
<main id="main-sesion" class="site-main" style="background-image: url(<?php echo $thumb_url[0]; ?>);">

 	<section class="access-login">
		<div class="container text-center">
			<div class="row gx-5 justify-content-center">
				<div class="col-12 py-3 text-center">
					<h2 class="title-header">Bienvenido</h2>
				</div>
				<div class="col-sm-12 col-md-4">
					 <div class="card card-custom rounded-5">
						<div class="card-body d-flex flex-column justify-content-center"> 
							<h4 class="card-title card-title-custom">Contabilidad</h4>	
							<div class="wrapp-btn btn-center">						 
								<a href="https://contabilidad.numerus.cl/" alt="Ingresar" title="Software de Contabilidad" class="btn btn-full numerus-tertiary wx-70">Ingresar</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					 <div class="card card-custom rounded-5">
						<div class="card-body d-flex flex-column justify-content-center"> 
							<h4 class="card-title card-title-custom">Remuneraciones</h4>	
							<div class="wrapp-btn btn-center">						
								<a href="https://remuneraciones.numerus.cl/securearea.php" alt="Ingresar" title="Software de Remuneraciones" class="btn btn-full numerus-tertiary wx-70" type="submit">Ingresar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->
<?php endwhile; wp_reset_postdata(); ?> 	
<?php else :	?>
	<div class="row">
		<div class="col-12 text-center">
			<div class="alert alert-warning mt-5 w-100" role="alert">   
				<h2 class="alert-heading">404</h2>
				<p>Algo salió mal</p>
				<p>Oops! Lo sentimos este contenido ya no exite</p>
				<hr>
				<a href="<?php echo get_home_url(); ?>" class="btn btn-primary">Volver al sitio!</a>
			</div><!-- mensaje de error -->
		</div>
	</div>
<?php endif; ?>	
<?php get_footer('sesion');