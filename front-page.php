<?php
/**
 * The font-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package numerus2.0.0
 */

get_header();
?>
<?php the_content(); ?>


<main id="" class="">
	<!-- ======= About Us ======= -->
	
	<section id="about" class="content-about">
		<div class="container d-flex align-items-center">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="section-title">
						<h2 class="title">Software especializado en contabilidad y remuneraciones para colegios que impulsa la gestión financiera y de personas de tu institución.</h2>
						<p class="sumary">Te brindamos el apoyo profesional que necesitas para optimizar la administración de tus recursos y el talento humano de tu colegio. Con Numerus, podrás tomar decisiones informadas, ahorrar tiempo y garantizar el cumplimiento normativo.</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="wrapp-picture" style="background-image: url('https://numerus.cl/wp-content/uploads/2024/06/bg-n.png');" ><img class="numerus-perforated" src="https://numerus.cl/wp-content/themes/numerus2.0.0/assets/images/perforado.svg" alt="Software especializado en Contabilidad y Remuneraciones para Colegios">
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- ======= End About Us  ======= -->

	<!-- ======= Software ======= -->
	<?php get_template_part('template-parts/content', 'software'); ?>
	<!-- ======= End Software ======= -->

	<!-- ======= Call Demo ======= -->
	<?php get_template_part('template-parts/content', 'call-demo'); ?>
	<!-- ======= End Call Demo ======= -->
	
	<!-- ======= Second block area (calendario) ======= -->
	<section class="custom-block-area">
			<?php
			// Get content from another page, temporary while we convert the rest of the template to blocks.
			$target_page = new WP_Query(array(
				//'page_id' => 33217,
				'page_id' => 33456,
				'post_type' => 'page'
			));
	
			if ($target_page->have_posts()) :
				while ($target_page->have_posts()) : $target_page->the_post();
					// Output content with block rendering
					the_content();
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No se encontró contenido</p>';
			endif;
			?>
	</section>

	<!-- ======= Colegios ======= -->
	<?php get_template_part('template-parts/content', 'colegios'); ?>
	<!-- ======= End Colegios ======= -->

	<!-- ======= Consultoria ======= -->
	<?php get_template_part('template-parts/content', 'consultoria'); ?>
	<!-- ======= End Consultoria ======= -->

</main>
<link rel="stylesheet" href="https://numerus.cl/wp-content/uploads/cwicly/css/cc-post-33217.css?ver=1737476680">

<?php 

get_footer();