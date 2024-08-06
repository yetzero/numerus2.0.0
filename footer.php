<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numerus2.0.0
 */

?> 
<footer id="footer" class="main-footer d-flex flex-column justify-content-between"> 
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<div class="title-section">
					<h4 class="title" style="">Colegios<br>más<br><span id="element-footer"></span></h4>
				</div>
			</div>	
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row wrapp-footer">	
					
				
				<div class="col-sm-12 col-md-3">
					<?php// dynamic_sidebar( 'widget-left' ); ?>
					<div class="box-footer">
						<h5 class="box-title">Contacto</h5>
						<ul class="box-list">
							<li>Mesa central +56 2 6465 5770</li>
							<li>Ventas +56 9 5465 5828</li>
							<li>contacto&commat;numerus&period;cl</li>
							<li>Avda. Las Condes 9460,<br>oficina 1305, Las Condes.</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<?php //dynamic_sidebar( 'widget-left-center' ); ?>
				 <div class="box-footer"><h5 class="box-title">Software</h5>
					<ul class="box-list">
						<li><a href="<?php echo get_page_link( get_page_by_path( 'software-de-contabilidad-para-colegios' ) ); ?>">Contabilidad</a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'software-de-remuneraciones-para-colegios' ) ); ?>">Remuneraciones</a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'consultoria' ) ); ?>">Asesoría especializada</a></li> 
					</ul></div> 
					
				</div>
				<div class="col-sm-12 col-md-3">
					<?php //dynamic_sidebar( 'widget-center-right' ); ?>
					 <div class="box-footer"><h5 class="box-title">Compañía</h5>
					<ul class="box-list">
						<li><a href="<?php echo get_page_link( get_page_by_path( 'nosotros' ) ); ?>">Nosotros</a></li>
						<li><a href="#" title="Contacto" data-bs-toggle="modal" data-bs-target="#contactModal" aria-label="Close">Contacto</a></li>						 
						<!--  <li><a href="#">Blog</a></li>  -->
					</ul></div> 
					
				</div>
				<div class="col-sm-12 col-md-3">
					<?php //dynamic_sidebar( 'widget-right' ); ?>
					 <div class="box-footer">
						<h5 class="box-title">Siguenos en</h5>
						<ul class="redes">
							<li><a href="https://www.facebook.com/numerussoftware/" class="bx bxl-facebook icono-redes"></a></li>
							<li><a href="https://www.instagram.com/numerus.cl?utm_medium=copy_link" class="bx bxl-instagram icono-redes"></a></li>
							<li><a href="https://www.youtube.com/channel/UC-Rtng9Tkj1cOOAWpOWiJ4A" class="bx bxl-youtube icono-redes"></a></li>
							<li><a href="https://www.linkedin.com/company/numerus-software" class="bx bxl-linkedin icono-redes"></a></li>
						</ul>
				</div>
			</div>
			</div>
		</div>
	</div>	
</footer>
<?php get_template_part('template-parts/content', 'modal_contact'); ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
