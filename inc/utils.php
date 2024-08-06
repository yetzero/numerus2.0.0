<?php

/**

 * Utilies para category y pages single

 * @package comunidadmujer

 */


 
 /**
 * Functions para mostrar las categorías con hashtag,
 * @package Numerus
 * COMO APLICAR EN EL THEME:
 * <?php mostrar_categorias_con_hashtag(); ?>
 */
function mostrar_categorias_con_hashtag() {
    // Obtener las categorías del post actual
    $categorias = get_the_category();

    if (!empty($categorias)) {
        $categoria_nombres = array();

        // Obtener los nombres de las categorías en minúsculas con "#" añadido
        foreach ($categorias as $categoria) {
            $categoria_nombre = strtolower($categoria->name); // Convertir a minúsculas
            $categoria_nombre_con_hashtag = '#' . $categoria_nombre; // Añadir "#" al principio
            $categoria_nombres[] = $categoria_nombre_con_hashtag;
        }

        // Mostrar los nombres de las categorías separados por comas
        echo implode(', ', $categoria_nombres);
    } else {
        echo 'Sin categoría';
    }
}

/**
 * Functions para mostrar las categorías con hashtag,
 * @package Numerus
 * COMO APLICAR EN EL THEME:
 * <?php mostrar_dos_categorias_con_hashtag(); ?>
 */

 function mostrar_dos_categorias_con_hashtag() {
    // Obtener las categorías del post actual
    $categorias = get_the_category();

    if (!empty($categorias)) {
        $categoria_nombres = array();

        // Limitar a un máximo de dos categorías
        $num_categorias = min(2, count($categorias));

        for ($i = 0; $i < $num_categorias; $i++) {
            $categoria_nombre = strtolower($categorias[$i]->name); // Convertir a minúsculas
            $categoria_nombre_con_hashtag = '#' . $categoria_nombre; // Añadir "#" al principio
            $categoria_nombres[] = $categoria_nombre_con_hashtag;
        }

        // Mostrar los nombres de las categorías separados por comas
        echo implode(', ', $categoria_nombres);
    } else {
        echo 'Sin categoría';
    }
}

/**
 * Functions para mostrar las categorías con enlaces:,
 * @package Numerus
 * COMO APLICAR EN EL THEME:
 * <?php mostrar_categorias_con_enlaces(); ?>
 */

function mostrar_categorias_con_enlaces() {
    // Obtener las categorías del post actual
    $categorias = get_the_category();

    if (!empty($categorias)) {
        $categoria_html = array();

        // Recorrer cada categoría
        foreach ($categorias as $categoria) {
            $categoria_nombre = strtolower($categoria->name); // Convertir a minúsculas
            $categoria_enlace = get_category_link($categoria->term_id); // Obtener el enlace de la categoría
            $categoria_nombre_con_hashtag = '#' . $categoria_nombre; // Añadir "#" al principio

            // Crear el enlace HTML
            $categoria_html[] = '<a href="' . esc_url($categoria_enlace) . '">' . esc_html($categoria_nombre_con_hashtag) . '</a>';
        }

        // Mostrar los enlaces HTML de las categorías separados por comas
        echo implode(', ', $categoria_html);
    } else {
        echo 'Sin categoría';
    }
}
 