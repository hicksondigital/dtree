<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dunktree
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		</div><!-- .site-info -->
		<div class="footer-menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'menu_id'        => 'footer-menu',
		) );
		?>
		</div><!-- .footer-menu -->
		<div class="social-links">
			<ul class="social-icons">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container'       => '',
							'container_class' => '',
							'items_wrap'      => '%3$s',
							'menu_id'         => '',
							'menu_class'      => '',
							'depth'           => 1,
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'fallback_cb'     => '',
						)
					);
				?>
			</ul>
		</div><!-- .social-links -->
		<div class="copyright">&copy; Dunktree. All Rights Reserved.</div><!-- .copyright -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
