<?php
/**
 * The main template file
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

get_header('nosotros');
?>
<main id="main-category" <?php post_class('site-main-category'); ?> >
	<?php $category_blogs = get_cat_ID( 'newsroom' ); $blogs_link = get_category_link( $category_blogs );	?>
		<!--@START: Hero -->
		<section id="<?php $category = get_the_category(); echo strtolower($category[0]->cat_name); ?>" <?php post_class('hero-category d-flex align-items-end'); ?>>
			<div class="wrapp-hero">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="inner-hero"> 				
								<div id="typed-strings-category"><p>Newsroom</p></div>
								<h1 class="title-hero"><span id="element-category"></span></h1>
								<!-- <span class="badge text-bg-primary">category.php</span> --> 
							</div>							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--@END: Hero -->



		<!--@START: Post Category -->
		<section id="post-category" class="wrapp-post-category --light">	

				<div class="container">
					<div class="row justify-content-center">

					 
						<div class="col-sm-12 col-lg-10 ">
							<div class="featured-news">
								<div class="row">
									<?php $my_query = new WP_Query('category_name=featured-news&posts_per_page=1');
										if ( $my_query->have_posts() ) : 
												while ( $my_query -> have_posts() ) : $my_query -> the_post(); ?>
												
												
												<!-- thumbnail -->
												<div class="col-sm-12 col-md-6">
													<div class="wrapp-thubmnail">
													<?php if( !empty(get_the_post_thumbnail())) :?>
														<?php the_post_thumbnail('thumb_category', array('class' => 'img-fluid thumbnail-post-numerus','alt' => get_the_title(), 'title'=> get_the_title() ));?> 
													<?php else:?>
														<img class="img-fluid thumbnail-post-numerus" src="https://fakeimg.pl/600x600/2933F2/ffffff?text=Numerus.cl&font=bebas" alt="<?php the_title_attribute(); ?>" title="ir a: <?php the_title(); ?>"/>
													<?php endif; ?>
													</div>
												</div><!--./col-sm-12 col-md-6-->

												<!-- data post -->
												<div class="col-sm-12 col-md-6 d-flex align-items-center">

													<div class="wrapp-featured-post">
														<span class="date-featured-post"><?php echo strtolower(get_the_date('F j, Y')); ?></span>
														<?php the_title( sprintf( '<h2 class="title-feature-news h2"><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h2>' ); ?>
														<div class="wrapp-sumary-post">
														<?php if ( is_category() || is_archive() ) {
																the_excerpt();
															} else {
																the_content();
															} ?>
														</div>
														<a href="<?php the_permalink(); ?>" title="ir a <?php the_title_attribute(); ?>" class="keep-reading">Seguir leyendo</a>
													</div>

												</div><!--./col-sm-12 col-md-6-->
										<?php endwhile;?>
										<?php wp_reset_postdata(); ?>	
										<?php else : ?>
											<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
										<?php endif; ?>              
								
									</div><!--./row-->
								</div><!--./featured-news-->
						</div><!--./col-sm-12 col-lg-10-->
					
						<div class="col-sm-12 col-lg-10 mt-5 ">
							<div id="wrapp-grid" class="row grid">
								<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } elseif ( get_query_var('page') ) { $paged = get_query_var('page'); } else { $paged = 1; }
								$custom_query_args = array(
										'category_name' => 'newsroom',
										//'post_type' => 'post', //--> array( 'post', 'page', 'movie', 'book' )
										//'post_type' => 'post', 
										'category__not_in' => array(7),
										'posts_per_page' => 1000,  //-->
										'paged' => $paged, //-->
										'post_status' => 'publish', //-->
										'ignore_sticky_posts' => true,
										'order' => 'DESC',
										'orderby' => 'date'
								);
								$custom_query = new WP_Query( $custom_query_args );
								if ( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

								<!--@START: Entry post -->
								<div class="col-sm-12 col-lg-4 mb-4 grid-item">



									<div class="card card-newsroom">
										<div class="card-header card-header-newsroom"> 
											<div class="wrapp-thubmnail">
												<?php if( !empty(get_the_post_thumbnail())) :?>
													<?php the_post_thumbnail('thumb-category', array('class' => 'img-fluid thumbnail-card-newsroom','alt' => get_the_title(), 'title'=> get_the_title() ));?> 
												<?php else:?>
													<img class="img-fluid thumbnail-card-newsroom" src="https://fakeimg.pl/600x600/2933F2/ffffff?text=Numerus.cl&font=bebas" alt="<?php the_title_attribute(); ?>" title="ir a: <?php the_title(); ?>"/>
												<?php endif; ?> 
											</div>
										</div>
										<div class="card-body card-body-newsroom">
											<div class="byline">
												<span class="wrapp-date"><?php echo strtolower(get_the_date('F j, Y')); ?></span>
											</div>
											<?php the_title(sprintf( '<h2 class="title"><a class="blog-title" href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h2>');?>

											<div class="sumary">
														<?php if ( is_category() || is_archive() ) {
																the_excerpt();
															} else {
																the_content();
															} ?>
														</div>

											<div class="wrapp-keep-reading">
												<a href="<?php the_permalink(); ?>" class="keep-reading" alt="ir a:<?php the_title_attribute(); ?>" title="ir a:<?php the_title_attribute(); ?>">Seguir leyendo</a>
											</div>

											
											 
										</div>
									</div>


								</div>
								<!--@END: entry post -->
								<?php endwhile; wp_reset_postdata(); ?>
								<!--@START: message article does not exist -->
								<?php else : ?>
								<div class="row">
									<div class="col-12 p-5">
										<div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
											<strong>Oops!</strong>  Lo sentimos ya no hay mas contenido.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
									</div>
								</div>				
								<?php endif; ?>
								<!--@END: message article does not exist -->
								
							</div><!--./grid-->
						</div><!--./col-sm-12 col-lg-10 -->
					 
						<div class="col-12 calltoaction">
							<div class="wrapp-calltoaction py-5">
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-end">
										<h3 class="m-0">Haz tu colegio más eficiente</h3>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center">
										<div class="wrapp-btn btn-left">
											<a href="/" class="btn btn-full numerus-tertiary wx-50">Entérate como</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				
					</div><!--./row-->
				</div><!--./container -->
				<!-- @END: Post Category -->
			</section>
	</main><!-- #main -->

<?php
get_footer();