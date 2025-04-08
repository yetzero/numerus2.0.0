<?php
/**
 * The template for displaying the footer (dark version)
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package numerus2.0.0
 */

?> 
<footer id="footer" class="main-footer main-footer-dark d-flex flex-column justify-content-between" style="background-color: #000000; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-footer-dark.svg?v=1'); background-size: cover; background-position: center; background-repeat: no-repeat;"> 
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<div class="title-section">
					<h4 class="title" style="color: #ffffff;">Colegios<br>más<br><span id="element-footer"></span></h4>
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
			<div class="footer__colophon" style="display:flex; justify-content: flex-end; margin-bottom: 4rem;">
				<a href="https://www.idyd.cl" title="Id&D" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/idyd.cl.png" style="width:170px; filter: invert(100%);" >
				</a>
			</div>
		</div>
	</div>	
</footer>

<a class="cta-db" data-bs-toggle="modal" data-bs-target="#contactModal">
	<i class="bi bi-envelope"></i> Contáctanos
</a>
<?php get_template_part('template-parts/content', 'modal_contact'); ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- <div id="preloader"></div> -->
</div><!-- #page -->

<?php wp_footer(); ?>

<style>
	/* Dark theme styles */
	.main-footer-dark {
		color: #ffffff;
	}
	
	/* More specific selectors to override theme defaults */
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .box-title {
		color: #ffffff;
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .box-list {
		color: #ffffff;
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .box-list li {
		color: #ffffff;
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .box-list a {
		color: #ffffff;
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .box-list a:hover {
		color: rgb(41, 51, 242);
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .redes a {
		color: #ffffff;
	}
	
	#footer.main-footer.main-footer-dark .footer-bottom .wrapp-footer .box-footer .redes a:hover {
		color: rgb(41, 51, 242);
	}
	
	/* Keep original styling but ensure it doesn't override our specific rules */
	.main-footer-dark .box-title {
		color: #ffffff;
	}
	
	.main-footer-dark .box-list {
		color: #ffffff;
	}
	
	.main-footer-dark .box-list a {
		color: #ffffff;
	}
	
	.main-footer-dark .box-list a:hover {
		color: rgb(41, 51, 242);
	}
	
	.main-footer-dark .redes a {
		color: #ffffff;
	}
	
	.main-footer-dark .redes a:hover {
		color: rgb(41, 51, 242);
	}
	
	.cta-db {
		position: fixed;
		bottom: 4rem;
		right: 2rem;
		display: block;
		color: white;
		padding: .6rem 1rem;
		font-size: 1rem;
		font-weight: 300;
		border-radius: 2rem;
		border: none;
		background: rgb(41, 51, 242);
		text-decoration: none;
		transform: translateX(0); /* Set to final position */
		opacity: 0; /* Initially hidden */
		animation: slideIn 0.5s ease-out 1s forwards; /* Slide-in animation with a delay */
		z-index: 10;
		transition: transform 0.2s ease; /* Transition for hover effect */
	}
	
	.cta-db:hover {
		background: black;
	}
	
	/* Define keyframes for sliding in */
	@keyframes slideIn {
		from {
			transform: translateX(100%); /* Start off-screen */
			opacity: 0; /* Start invisible */
		}
		to {
			transform: translateX(0); /* Move into view */
			opacity: 1; /* Become visible */
		}
	}
	
	.wpcf7 form.sent .wpcf7-response-output {
	  background-color: rgb(41,51,242);
	  border-color: rgb(41,51,242);
  }

</style>
</body>
</html>
