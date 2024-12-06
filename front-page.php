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

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>

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