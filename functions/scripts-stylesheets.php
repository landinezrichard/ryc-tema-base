<?php
/**
 * Scripts stylesheets
 *
 * Este archivo sirve para cargar los archivos 
 * CSS y Javascript necesarios para el 
 * funcionamiento del tema
 *
 * @author	Ricardo Landínez Ospino
 * @package	ryc-tema-base
 * @since	1.0.0
 *
 */

	function ryc_load_styles() {
		wp_register_style( 
			'theme-style',
			get_stylesheet_uri(),
			'',
			'1.0.0',
			'all'
		);

		wp_enqueue_style( 'theme-style' );
	}

	add_action('wp_enqueue_scripts', 'ryc_load_styles');

?>