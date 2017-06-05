<?php
/**
 * Archivo de cabecera
 *
 * Este archivo maneja el html del head y el header
 *
 * @author Ricardo Landínez Ospino
 * @package ryc-tema-base
 * @since 1.0
 *  
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php
		//Carga el script para comentarios
		if( is_singular() && get_option('thread_comments') ){
			wp_enqueue_script('comment-reply'); 
		}
	?>

	<?php wp_head(); ?>

	<?php
		// Carga el logo desde el customizer
		$ryc_logo = get_theme_mod('ryc_logo');

		if( !$ryc_logo ){
			// Carga un logo por defecto
			$ryc_logo = IMAGES.'/logo.svg';
		}
	?>
	
</head>
<body <?php body_class(); ?> >
	
	
	<header id="main-header" class="cf">
		
		<div class="container">
		
			<a class="logo" href="<?php echo home_url(); ?>">
				<img src="<?php echo $ryc_logo; ?>" alt="<?php bloginfo('name'); ?>" />
			</a><!-- /.logo -->
			
			<div class="navicon">
				<i class="fa fa-navicon"></i> <?php _e('Ver Menú', 'ryc'); ?>
			</div>
			
			<nav id="menu-principal" class="menu-container">
			
				<?php wp_nav_menu(array(
					'location' => 'menu-principal',
					'container_class' => 'menu'
				)); ?>
				
			</nav><!-- /#menu-principal -->
		
		</div><!-- /.container -->
		
	</header><!-- /#main-header -->