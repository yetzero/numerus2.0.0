<!--==========================
	Team Section
============================-->
<section id="nosotros" class="wrapper-nosotros">

	<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="section-title">
					<div id="typed-strings-banner"> 
						<p>Nosotros</p>
					</div>	
					<h2 class="title"><span id="element-banner"></span></h2> 
				</div>
			</div>
			<div class="col-12">
				<div id="team" class="owl-carousel owl-theme wrapp-team"><!-- 'orderby' => 'meta_value_num','orderby' => 'date', modified | title | name | ID | rand  -->
					<?php $args = array( 'category_name' => 'team','posts_per_page' => -1,'meta_key' => 'carousel_position','orderby' =>'meta_value','order'=> 'ASC'); $custom_team = new WP_query($args); while ($custom_team -> have_posts() ) : $custom_team -> the_post(); ?>
					
					<div class="item" >
						<div class="member">
							<?php $thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src( $thumb_id, 'full'); ?>
						<?php if(has_post_thumbnail() ): ?>
							<img src="<?php echo $thumb_url['0'];?>" class="img-fluid custom-thumb" alt="">
						<?php else : ?>
								<img src="https://fakeimg.pl/306x380/2933F2/ffffff?text=numerus&font=bebas" class="img-fluid custom-thumb" alt="">									
						<?php endif; ?>
							
							<div class="member-date">
								<div class="wrapp-date">
									<h4><?php the_title(); ?></h4>
									<h3><?php echo esc_html( get_field('cargo')); ?></h3>
								</div>
							</div>
							<div class="member-info"> 
								<div class="member-info-content">	
									<p><?php echo esc_html( get_field('resumen')); ?></p>	
									<div class="wrapp-date">							
										<h4><?php the_title(); ?></h4>
										<h3><?php echo esc_html( get_field('cargo')); ?></h3>
									</div>								 
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			
			</div>
		
		</div><!--./row-->
	</div><!--./container-->
</section><!-- #team -->