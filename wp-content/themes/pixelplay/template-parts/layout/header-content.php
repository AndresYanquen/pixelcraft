<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			$pixelplay_description = get_bloginfo( 'description', 'display' );
			if ( $pixelplay_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $pixelplay_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="main-navbar"class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
		
    <a class="navbar-brand" href="#">Store's name</a>
		<?php the_custom_logo();

			?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php
				wp_nav_menu(
						array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'items_wrap'     => '<ul>%3$s</ul>',
								'container'      => false, // Remove the default container div
						)
				);
				?>
    </div>
  </div>
</nav>

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pixelplay' ); ?></button> -->
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
		<!-- </nav> -->
		<!-- #site-navigation -->
	</header><!-- #masthead -->