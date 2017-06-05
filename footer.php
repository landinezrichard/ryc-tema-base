<?php

/**
 * Archivo de pie de página(footer)
 *
 * Este archivo maneja el html del footer
 *
 * @author Ricardo Landínez Ospino 
 * @package ryc-tema-base
 * @since 1.0
 * 
 */

	$ryc_copyright = get_theme_mod('ryc_copyright');

	$ryc_logo = get_theme_mod('ryc_logo');

	if( !$ryc_logo ){
		$ryc_logo = IMAGES.'/logo.svg';
	}
?>

	<footer id="main-footer">
		
		<nav id="menu-footer" class="menu-container">
			
			<div class="container">				
				<?php wp_nav_menu(array(
					'location' => 'menu-principal',
					'container_class' => 'menu'
				)); ?>
			</div>
			
		</nav><!-- /#menu-footer -->
		
		
		<p class="copyright text-center">
				<img src="<?php echo $ryc_logo; ?>" alt="<?php bloginfo('name'); ?>" /><br />
				<?php 
					if( $ryc_copyright ) {
						echo $ryc_copyright;
					}else{ 
				?>

					&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>

				<?php } ?>
		</p>
		
		<p class="designer text-center"><?php _e('Diseño web por', 'ryc'); ?> <a href="http://franciscoamk" target="_blank">@FranciscoAMK</a></p>
		
	</footer>

	<?php wp_footer(); ?>
	
</body>
</html>