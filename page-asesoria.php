<?php
/**
 * Template Name: Page asesoria
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
	<!--=======Intro page =======-->
	<?php $page_slug = get_post_field('post_name', get_post()); $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
	<section id="<?php echo esc_attr($page_slug); ?>" <?php post_class('hero-page-consultoria d-flex align-items-md-center'); ?>>
		<article class="wrapp-hero-consultoria">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-hero-consultoria"> 					
							<div id="typed-strings"> 
									<p>Metodología más<br>un equipo experto,<br>igual resultados<br>excelentes</p>
							</div>
							<h2 class="title-hero"><span id="element-page"></span></h2>							
						</div>
					</div>
					<div class="wrapp-btn-hero">
						<a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" aria-label="Close" alt="Solicita una asesoría aquí" class="btn btn-border numerus-white wx-25" title="Solicita una asesoría aquí">Solicita una asesoría aquí</a>
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
			
		<?php get_template_part('template-parts/content', 'detail-consultoria'); ?>
			
		<?php get_template_part('template-parts/content', 'boxes-consultoria'); ?>
			

		<?php //get_template_part('template-parts/content', 'more-control'); ?>

		<?php //get_template_part('template-parts/content', 'calltoform'); ?>
		<!-- ======= Content Page ======= -->
			<!-- <section id="border-1" class="entry-post-page bg-primary">
				<div class="container">
					<div class="row">

				
						
						<div id="border-2" class="col-12">
							<article id="post-<?php //the_ID(); ?>" <?php //post_class( 'entry' );?>>
								<div class="sumary">
										<?php //the_content(); ?>
								</div>
							</article>
						</div> 


						<?php //if ( get_edit_post_link() ) : ?>
							<div class="col-12 edit-post">
								<div class="wrapp-btn btn-right">													
									<?php //edit_post_link( __( 'Editar post', 'Numerus' ), '<p>', '</p>', null, 'btn btn-full numerus-primary' ); ?>
								</div> 
							</div>
						<?php //endif; ?>
					</div>
				</div>
			</section> -->
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
			
		</section>
	</main><!-- #main -->
	<?php endif; ?>	
</div>
<?php 
get_footer();
