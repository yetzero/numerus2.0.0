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

<!-- ======= Hero Section ======= -->
<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <?php $page_slug = get_post_field('post_name', get_post()); $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
<section id="hero" <?php post_class('hero d-flex align-items-end'); ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	<article class="wrapp-hero wx-100 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="inner-hero"> 
					<?php the_content(); ?>
					<!-- <p class="title-hero" class="text-light">Colegios más</p> -->
					<h1 class="titleheading">
						<span class="paragraph" class="text-light">Colegios más</span>
						<span id="element" class="element"></span></h1> 
					</div>
				</div>
			</div>
			</div>
			<!-- <div class="wrapp-btn-hero"> 
				<a href="#about" class="btn-hero scrollto "><i class="bi bi-arrow-down-circle"></i></a>
			</div> -->
		</div>
	</article>
</section><!-- End Hero -->
<?php endwhile; else : ?>
	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
<!-- ======= End Hero Section ======= -->

<main id="" class="">
	<!-- ======= About Us ======= -->
	<?php get_template_part('template-parts/content', 'about'); ?>
	<!-- ======= End About Us  ======= -->

	<!-- ======= Software ======= -->
	<?php get_template_part('template-parts/content', 'software'); ?>
	<!-- ======= End Software ======= -->

	<!-- ======= Call Demo ======= -->
	<?php get_template_part('template-parts/content', 'call-demo'); ?>
	<!-- ======= End Call Demo ======= -->

	<!-- ======= Colegios ======= -->
	<?php get_template_part('template-parts/content', 'colegios'); ?>
	<!-- ======= End Colegios ======= -->

	<!-- ======= Consultoria ======= -->
	<?php get_template_part('template-parts/content', 'consultoria'); ?>
	<!-- ======= End Consultoria ======= -->

</main>
<?php 
get_footer();