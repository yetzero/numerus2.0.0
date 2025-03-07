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

<?php endif; ?>