<?php 

/** colores de status de post - Soporte de thumbnails y carpetas tambn deshabilita barra de admin wordpress */
require_once( 'library/basicos.php' );

/** Menus y Widgets y breadcums*/
require_once( 'library/generales.php' );

/** libreria de estilos y scripts */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Ajustes Home Page',
		'menu_slug' 	=> 'home_page',
		'icon_url'		=> 'dashicons-admin-home',
		'position' => 3
	));
}
require_once( 'library/assets.php' );

/** modificador del editor de texto WYSIWYG */
require_once( 'library/wysiwyg.php' );

/** Pagina de opciones ACF */
//require_once( 'library/acf-options.php' );

/** Pagina de opciones ACF */
require_once( 'library/utilities.php' );


?>