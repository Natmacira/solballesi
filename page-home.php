<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sol_Ballesi
 */

get_header();
global $succes;

?>


<main>
	<section class="section-title">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-14.jpg'); ?>" alt="Una foto de torso de Sol, se la ve sonriente con los brazos cruzados. Viste una camisa cuadriculada en tonos anaranjados y un pantalón negro.">
			<figcaption>
				<h1>Sol Ballesi</h1>
				<p>Psicóloga hispanohablante
					en Berlín
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-about-work" id="ancla-about-work">
		<h2>Cómo trabajo</h2>
		<div class="inner-continaer-paragraphs">
			<p>En mi consulta un aspecto clave es que las personas se sientan cómodas y seguras desde el primer momento porque comprendo los nervios y ansiedades que conlleva iniciar terapia.
			</p>
			<p>
				En los primeros encuentros me parece importante establecer los objetivos terapéuticos que serán la brújula que guíe el proceso. </p>
			<p>
				Vamos a utilizar, además de la palabra, diferentes recursos como por ejemplo, técnicas psicoterapéuticas, textos, películas, ilustraciones, guías, etc. </p>
			<p>
				Las sesiones pueden realizarse virtual o presencialmente en Berlín. </p>
		</div>
	</section>
	<section class="section-therapy-individual">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-15.jpg'); ?>" alt="Una imagen tomada desde arriba, donde se ve las piernas de Sol, en una posición de estar sentada en el piso. A su alrededor se ven unos libros y lápices esparcidos por el suelo.">
			<figcaption>
				<h3>Terapia individual</h3>
				<div>
					<p>
						En las sesiones individuales se revisan pensamientos, emociones y patrones de comportamiento que te generan inquietud o angustia. </p>
					<p>
						Conversaremos acerca de ti, <br class="only-desktop-br"> de tus miedos e inseguridades <br class="only-desktop-br"> y construiremos herramientas que te sean útiles para afrontarlos. </p>
					<p>
						Las consultas duran 50 minutos y la frecuencia puede ser semanal o quincenal.
					</p>
				</div>
			</figcaption>
		</figure>
	</section>
	<section class="section-therapy-couples">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-151.jpg'); ?>" alt="Una imagen tomada de frente, donde se la ve a Sol sentada en un almohadon en el suelo, con las piernas cruzadas escribiendo en un cuaderno.">
			<figcaption>
				<h3>Terapia de pareja</h3>
				<div>
					<p>En las sesiones de pareja, trabajaremos en conjunto para mejorar la comunicación, resolver conflictos que provocan malestar cotidiano,
						perturban el desarrollo del vínculo y de cada integrante.
					</p>
					<p>
						Exploramos temas como: expectativas, roles, intimidad, malentendidos, discusiones etc.
					</p>
					<p>
						El objetivo es mejorar la calidad de la relación, fomentar un ambiente de apoyo mutuo y satisfacción emocional.
					</p>
					<p>
						Las consultas duran 60 minutos y la frecuencia puede ser semanal o quincenal.
					</p>
				</div>
			</figcaption>
		</figure>
	</section>
	<section class="section-fees">
		<div>
			<?php the_content(); ?>
		</div>
		<p>El seguro médico estatal (gesetzliche Krankenkasse) no cubre la terapia, sin embargo ofrezco algunas plazas a tarifas reducidas para estudiantes o personas con ingresos variables.</p>
	</section>
	<section class="section-about-me" id="sobre-mi-ancla">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-18.jpg'); ?>" alt="Una imagen tomada de costado, donde se la ve a Sol sentada en un almohadon en el suelo, con las piernas cruzadas escribiendo en un cuaderno.">
			<figcaption>
				<h4>SOBRE MI</h4>
				<span>Hola soy Sol, psicóloga y amante de la lectura.</span>
				<p>
					Comprometida con la salud mental, llevo más de 8 años brindando psicoterapia y más de 2 participando y organizando círculos de lectura. </p>
				<p>
					Al finalizar mi posgrado en Vínculos orientado al trabajo con parejas y familias, dediqué mis primeros años de carrera a la atención de niñxs y sus familias.
				</p>
				<p>
					Luego me formé en distintas áreas como primeros auxilios psicológicos y especialmente en Género y Diversidades, temática que me apasiona y en la que sigo profundizando.
				</p>
				<p>
					También influyó en mi práctica profesional haber emigrado a Alemania y atravesar el duelo migratorio, por lo que hoy me dedico a acompañar los complejos cambios que la migración conlleva.
				</p>
				<p>
					Al mismo tiempo coordinar espacios grupales y de lectura se volvió una valiosa herramienta de autocuidado y conocimiento interpersonal que me enriquece personal y profesionalmente.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-contact contact-section" id="contacto">
		<figure>
			<figcaption>
				<h5>Escríbeme!</h5>
			</figcaption>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-12.jpg'); ?>" alt="Una imagen tomada con un ángulo lateral alto, donde se ve un recorte de Sol sentada en una mesa con la computadora portátil, escribiendo.">
		</figure>
		<div>

			<p id="form-intro-text">
				Me encantaría acompañarte. <br>
				Completa el formulario indicando el motivo de tu consulta.
			</p>
			<?php
			echo do_shortcode('[custom_simple_form]');

			?>
		</div>
	</section>

	<section class="home-blog">
		<?php

		$all_posts_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 3
		));

		if ($all_posts_query->have_posts()) {
		?>
			<h4>Blog</h4>
			<article class="post-container-blog">
				<?php
				while ($all_posts_query->have_posts()) {
					$all_posts_query->the_post();
				?>
					<div class="post-item">
						<?php
						if (has_post_thumbnail()) {
						?>

							<a class="link-img-container" href="<?php the_permalink(); ?>">
								<?php

								the_post_thumbnail('large');
								?>

							</a>
						<?php
						}
						?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
				<?php
				}
				?>

			</article>
		<?php

			wp_reset_postdata();
		}
		?>

		<a href="https://www.solballesi.com//blog" class="ver-mas">Ver más ></a>
	</section>
</main>

<?php

get_sidebar();
get_footer();
