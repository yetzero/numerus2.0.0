
<section id="carousel-clientes" class="wrapp-clientes d-flex align-items-center">
	<div class="container">
		<div class="row inner-carousel">
			<div class="col-12">
				<div id="clientes" class="owl-carousel owl-theme">
					<?php $args = array( 'category_name' => 'clientes','posts_per_page' => -1,'orderby' =>'meta_value','order'=> 'ASC'); $custom_team = new WP_query($args); while ($custom_team -> have_posts() ) : $custom_team -> the_post(); ?>
					<div class="item">
						<!-- <img class="img-client" src="<?php //echo get_template_directory_uri(); ?>/assets/images/clients/mineduc.svg" alt="" srcset=""> -->
							<?php if( !empty(get_the_post_thumbnail())) :?>
								<?php the_post_thumbnail('thumb-clients', array('class' => 'img-fluid img-client','alt' => get_the_title(), 'title'=> get_the_title() ));?> 
							<?php else:?>
								<img class="img-fluid thumbnail-post-numerus" src="https://fakeimg.pl/600x600/2933F2/ffffff?text=Numerus.cl&font=bebas" alt="<?php the_title_attribute(); ?>" title="ir a: <?php the_title(); ?>"/>
							<?php endif; ?>
					</div>
					<?php endwhile; wp_reset_query(); ?>
				</div><!--#/clientes-->
			</div>
		</div><!--./row-->
	</div><!--./container-->
</section>