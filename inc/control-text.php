<?php

/**

 * Control de textos en excerpt y content

 * @package comunidadmujer

 */



/*

* excerpt

**/

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).' ...';
	} else {
	$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
/*
* content
**/
function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
	array_pop($content);
	$content = implode(" ",$content).' &#91;...&#93;';
	} else {
	$content = implode(" ",$content);
	} 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

/***************** COMO USARLO

<?php echo excerpt('10'); ?>



<?php echo content('25'); ?>



/********************************/

