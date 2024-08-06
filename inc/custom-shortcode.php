<?php
function button($atts, $content = null) {
// Obtenemos los atributos del shortcode
    $atts = shortcode_atts(array(
        'href' => '#',
        'class' => '',
        'texto' => 'Enlace',
    ), $atts);

// Construimos el enlace usando los atributos
    $enlace = '<a href="' . esc_url($atts['href']) . '" class="btn btn-border '. esc_attr($atts['class']) .'">' . esc_html($atts['texto']) . '<i class="bi bi-arrow-right icono"></i></a>';

    return $enlace;
/* 
<a href="#" class="btn btn-link elev-primary">Como funciona ? <i class="bi bi-arrow-right icono"></i></a>

*/

}
add_shortcode('button-page', 'button'); 


function button_link($atts) {
    // Obtenemos los atributos del shortcode
    $atts = shortcode_atts(array(
        'href' => '#',
        'class' => '',
        'texto' => 'Enlace',
    ), $atts);

    // Construimos el enlace usando los atributos
    $enlace = '<a href="' . esc_url($atts['href']) . '" class="btn btn-full numerus-'. esc_attr($atts['class']) .'">' . esc_html($atts['texto']) . '<i class="bi bi-arrow-right icono"></i></a>';

    return $enlace;
		/* 
		<a href="#" class="btn btn-link elev-primary">Como funciona ? <i class="bi bi-arrow-right icono"></i></a>
		*/
}
add_shortcode('custom-button', 'button_link'); 
