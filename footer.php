<?php

/**
 * The footer template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sol_Ballesi
 */

?>
</main>
<footer id="footer" class="site-footer">
	<section class="sol-info-footer">
		<h6>Sol Ballesi</h6>
		<p>Psicóloga hispanohablante
			en Berlín
		</p>
		<?php
		sol_ballesi_print_menu('footer');
		?>
	</section>
	<section class="alt-info-footer">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/ALT.svg'); ?>" alt="Logo de Alternativa Laboral Trans">
			<figcaption>
				<p>
					<a href="https://altcooperativa.com/">
						Powered by ALT
					</a>
				</p>
			</figcaption>
		</figure>
	</section>
</footer>
<?php wp_footer(); ?>
</body>

</html>