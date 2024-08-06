<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Editorial_Laurel
 */
if ( is_search() ) :
	get_header( 'nosotros' );
else :
	get_header();
endif;
?>
<main id="main-search" <?php post_class('site-main-search --light'); ?>>

		<!--@START: Hero -->
		<section id="hero-search" <?php post_class('hero-search d-flex align-items-center'); ?>>
			<div class="wrapp-hero">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="inner-hero"> 				
									<p class="title-hero">Termino de busqueda:</p>
									<h2 class="subtitle-hero"><?php echo get_search_query(); ?></h2>								
							</div>							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--@END: Hero -->
		<!-- search result -->
		<section id="post-search" class="wrapp-post-search">
		<div class="container">
			<div class="row">
				<div class="col-12 text-left py-4">
					<h6 class="title-search">Resultados:</h6>
				</div><!--./col-12 -->
				<div class="col-lg-10 mx-auto">
					
						<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } elseif ( get_query_var('page') ) { $paged = get_query_var('page'); } else { $paged = 1; }
						$custom_query_args = array(
								//'category_name' => 'noticias',
								//'post_type' => 'post', //--> array( 'post', 'page', 'movie', 'book' )
								'post_type' => array( 'post'), 
								'category__not_in' => array(4,23,13),
								'posts_per_page' => 5,  //-->
								'paged' => $paged, //-->
								//'post_status' => 'publish', //-->
								'ignore_sticky_posts' => true, //-->
								'order' => 'DESC', //--> 'DESC' | 'ASC'
								'orderby' => 'date' //--> modified | title | name | ID | rand
						);
						$custom_query = new WP_Query( $custom_query_args );
						if ( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

						<div class="d-flex wrapp-post">
							<div class="flex-shrink-0">
								<figure class="post-thumbnail-search">
								<?php if( !empty(get_the_post_thumbnail())) :?>
									<?php the_post_thumbnail('thumb-search', array('class' => 'img-fluid attachment-thumbnail','alt' => get_the_title(), 'title'=> get_the_title() ));?> 
								</figure> 
						<?php else:?>
							<img class="thumb-media-search" src="https://fakeimg.pl/80x80/2933F2/ffffff?text=numerus&font=bebas" alt="<?php the_title_attribute(); ?>" title="ir a: <?php the_title(); ?>"/>
						<?php endif; ?> 
							</div>
							<div class="flex-grow-1 ms-3">							
								<div class="media-body-search">
								<span class="byline-media-search"><?php echo strtolower(get_the_date('j F , Y')); ?></span>
								<?php the_title(sprintf( '<h3 class="title-media-search"><a class="blog-title" href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h3>');?>							
								<span class="text-media-search">
									<?php
									if(get_post_type() === 'quote' && get_post_type() === 'img'){
										 echo content('40'); 
									}	else{
									 	echo excerpt('40'); 
									}
									?>
								</span>
								<div class="wrapp-btn btn-right">
								<a href="<?php the_permalink();?>" class="btn read-more" title="ir a <?php the_title_attribute(); ?>">leer más..</a>
								</div>
							</div>
							</div>
						</div>

						 

						


						
						<!--End entry post -->
							<?php endwhile; wp_reset_postdata(); ?>
								<?php else : ?>
								<div class="row">
								<div class="col-12 p-5">
									<div class="alert alert-warning alert-dismissible fade show my-3 text-center" role="alert">
										<h3><strong>Oops!</strong>  Lo sentimos este contenido ya no exite</h3>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										<p>Intenta usar el buscador</p>
										<div class="search-box-404 mt-4 wx-80 mx-auto">
										<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
											<input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Buscar …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />											
											<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
										</form>
									</div>
									</div>
								</div>
								
							</div>				
							<?php endif; ?>
						
					
				</div>
					<!--@START:Pagination -->
						<div class="row">
							<div class="col-12">
								<div id="wrapper-pagination" class="light text-center py-2 mt-3">
									<?php get_template_part('inc/custom', 'wp-bootstrap5.0-pagination'); ?>							 
								</div>
							</div> 
						</div> 
					<!--@END:End pagination --> 

			</div>
		</div>
	</section>
<!-- /search result -->
</section>
<?php
get_footer();