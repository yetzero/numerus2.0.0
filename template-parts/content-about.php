<?php $my_query = new WP_Query(array( 'pagename' => 'quienes-somos' )); if ( $my_query->have_posts() ) : while ($my_query -> have_posts() ) : $my_query -> the_post(); ?> 
	<?php the_content(); ?>		 
	<?php if ( get_edit_post_link() ) : ?>
		<div id="button-edit" class="container">	
			<div class="row">
				<div class="col-sm-12 col-md-12 py-3">
					<div class="wrapp-btn btn-right">													
						<?php edit_post_link( __( 'Editar post', 'Numerus' ), null, null, null, 'btn btn-full numerus-primary' ); ?>
					</div><!-- .entry-footer -->
				</div>
			</div>	
		</div> 		 
	<?php endif; ?>
	<!-- end boton edit -->
	<?php endwhile;  wp_reset_postdata(); ?>
	<?php else : ?>
	<div id="alert-oops" class="container">	
			<div class="row">
				<div class="row">
					<div class="col-sm-12 col-md-12 p-5">
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Oops!</strong> Lo sentimos este contenido ya no exite.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					</div><!--./col-12 p-5-->			
				</div><!--./row-->
		</div>	
	</div>	
	<?php endif; ?>