<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Numerus
 */

get_header('nosotros');
?>

<main id="main-single" <?php post_class('site-main-single light'); ?>>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	

<?php $category_blogs = get_cat_ID( 'newsroom' ); $blogs_link = get_category_link( $category_blogs );	?>
	<!--@START: Hero -->
	<section id="<?php $category = get_the_category(); echo strtolower($category[0]->cat_name); ?>" <?php post_class('hero-single'); ?>>


		<article class="wrapp-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<article class="message-header-single">
							<div class="row">
									<div class="col-sm-12 col-md-6">
										<?php the_title(sprintf( '<h2 class="title-hero">', esc_attr( esc_url( get_permalink() ) ) ), '</h2>');?>								 
									</div><!--./col-12-->							
								</div><!--./row--> 
						</article><!--./message-header-single-->
					</div><!--./col-sm-12 col-md-6 col-lg-6-->
					<div class="col-md-12">
						<figure class="post-thumbnail">				
							<?php if( !empty(get_the_post_thumbnail())) :?>						
								<?php the_post_thumbnail('full', array('class' => 'img-fluid attachment-thumbnail-single','alt' => get_the_title(), 'title'=> get_the_title() ));?>
							<?php else:?>
								<img class="img-fluid attachment-thumbnail-single --lorem" src="https://fakeimg.pl/1024x1024/2933F2/ffffff?text=numerus&font=bebas" alt="<?php the_title_attribute(); ?>" title="ir a: <?php the_title(); ?>"/>
							<?php endif; ?>
						</figure>
					</div><!--./col-sm-12 col-md-6 col-lg-6-->
				</div><!--./row-->
			</div><!--./container-->
		</article>
	</section><!--./wrapp-header-single-->
	<!--@END: Hero -->
	
	<section id="template-single" <?php post_class('wrapp-template-single'); ?>>
		<article class="entry-post-single">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-9 offset-md-3">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' );?>>
							<div class="sumary">
									<?php the_content(); ?>
							</div>
						</article>
					</div>
					<div class="col-sm-12 col-md-9 offset-md-3">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
								<a href="/blog/" class="btn btn-border numerus-primary" title="Volver">Volver</a>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
								<?php if ( get_edit_post_link() ) : ?>
								<div class="wrapp-btn btn-right">													
									<?php edit_post_link( __( 'Editar post', 'Numerus' ), '<p>', '</p>', null, 'btn btn-full numerus-primary' ); ?>
								</div><!-- .entry-footer -->
								<?php endif; ?>
							</div>
						</div>
					</div>

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


				</div>
			</div>
		</article>
	</section><!--./wrapp-template-single-->

	<?php endwhile; wp_reset_postdata(); ?> 	
	<?php else : ?>   
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="alert alert-warning p-3 my-4">   
						<h3>En actualización...</h3>
						<p><?php esc_html_e( 'Oops! Lo sentimos este contenido pronto lo verás.' ); ?></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-btn mt-4" title="volver" alt="volver al inicio">Regresa al inicio</a>
					</div><!-- mensaje de error -->
				</div> 
				<div class="col-12 p-3 mt-3">
					<div class="wx-50 mx-auto">
						<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-full numerus-tertiary" >Volver al inicio</a>
					</div>
				</div>
			</div>
		</div>						
	<?php endif; ?>
</main><!-- #main -->
<?php
get_footer();
