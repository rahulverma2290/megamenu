<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="mainav" class="fl_right" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	 <?php
            wp_nav_menu( array(
                'menu'              => '',
                'theme_location'    => '',
                'depth'             => 4,
                /* 'container'         => 'div', */
                'container_class'   => 'collapse navbar-collapse', /*yadi ul ke uppar div ho to ye option use hota he */
                'container_id'      => 'bs-example-navbar-collapse-1', /*yadi ul ke uppar div ho to ye option use hota he */
                //'menu_class'        => 'clear', /* ye option ul ki class ke liye hota he. */
				'container'       => 'ul',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				//'before' => '123',
				//'after' => '456',
                'menu_class'      => 'clear nav1 navbar-nav1 main-nav1',
                //'fallback_cb'       => 'Primary_Walker_Nav_Menu::fallback',
                'walker'            => new Primary_Walker_Nav_Menu())
            );
        ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
