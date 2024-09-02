<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package numerus2.0.0
 */

get_header(); ?>
<div id="main-page" <?php post_class('main-page'); ?>>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<!--=======Intro page =======-->
		<?php $page_slug = get_post_field('post_name', get_post()); $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
		<section id="<?php echo esc_attr($page_slug); ?>" <?php post_class('hero-page-consultoria d-flex align-items-md-center'); ?>>
			<article class="wrapp-hero-consultoria">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="inner-hero-consultoria"> 					
								<div id="typed-strings"><p>Metodología más<br>un equipo experto,<br>igual resultados<br>excelentes</p></div>
								<h1 class="title-hero"><span class="element-page"></span></h1>
							</div>
						</div>
						<!-- <div class="co-12">
							<span class="badge text-bg-primary">page-consultoria.php</span>
						</div> -->
						<div class="wrapp-btn-hero">
							<a href="mailto:asesorias@numerus.cl" data-bs-toggle="modal" data-bs-target="#contactModal" aria-label="Close" alt="Solicita una asesoría aquí" class="btn btn-border numerus-white wx-25" title="Solicita una asesoría aquí">Solicita una asesoría aquí</a>
						</div>
						<div class="col-12 position-relative">
							<div class="inner-hero-consultoria-brand">
								<img class="logo-consultoria" src="<?php echo get_template_directory_uri(); ?>/assets/images/numerus-consultoria.svg" alt="">
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<!-- End Intro page -->

	<!--=======Main section=======-->
	<main id="site-main-page" <?php post_class('site-main-page bg--light p-0'); ?>>
		<section id="template-page" <?php post_class('wrapp-template-page p-0'); ?>>
		<?php the_content(); ?>
		<?php if ( get_edit_post_link() ) : ?>
			<div class="container">
				<div class="row">
					<div class="col-12 edit-post">
						<div class="wrapp-btn btn-right">													
							<?php edit_post_link( __( 'Editar post', 'Numerus' ),null, null, null, 'btn btn-full numerus-primary' ); ?>
						</div> 
					</div>
				</div>
			</div>
		<?php endif; ?>
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
		</section>
	</main><!-- #main -->
</div>
<?php 
get_footer();
