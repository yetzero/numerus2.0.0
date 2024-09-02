<?php
/**
 * Template Name: Page Software de Remuneraciones
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
	<section id="<?php echo esc_attr($page_slug); ?>" <?php post_class('hero-page remuneraciones d-flex align-items-end'); ?> style="background-image: url(<?php echo $thumb_url[0]; ?>);">
		<article class="wrapp-hero wx-100 mb-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-hero"> 			
							<div id="typed-strings"><p>simples</p></div>
							<h1 class="titleheading">
								<span class="paragraph">Remuneraciones más</span>
								<span class="element-page"></span>
							</h1> 
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	<!-- End Intro page -->

	<!--=======Main section=======-->
	<main id="site-main-page" <?php post_class('site-main-page bg--light'); ?>>
		<section id="template-page" <?php post_class('wrapp-template-page'); ?>>
			
		<?php get_template_part('template-parts/content', 'boxes-remuneraciones'); ?>
		<?php get_template_part('template-parts/content', 'carousel'); ?>
		<?php get_template_part('template-parts/content', 'continuous-update-rem'); ?>
		<?php get_template_part('template-parts/content', 'calltoform'); ?>
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
