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
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-14.svg'); ?>" alt="Una foto de torso de Sol, se la ve sonriente con los brazos cruzados. Viste una camisa cuadriculada en tonos anaranjados y un pantalón negro.">
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
		<p>En mi consulta un aspecto clave es que las personas se sientan cómodas y seguras desde el primer momento porque conozco de
			primera mano los nervios y ansiedades que conlleva iniciar terapia.
		</p>
		<p>
			En los primeros encuentros me parece importante establecer los objetivos terapéuticos que serán la brújula que guíe el proceso.
		</p>
		<p>
			Vamos a utilizar ,además de la palabra, diferentes recursos como por ejemplo libros, textos, películas, ilustraciones, guías, etc
		</p>
		<p>
			Las sesiones pueden realizarse virtual o presencialmente en Berlín.
		</p>
	</section>
	<section class="section-therapy-individual">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-15.svg'); ?>" alt="Una imagen tomada desde arriba, donde se ve las piernas de Sol, en una posición de estar sentada en el piso. A su alrededor se ven unos libros y lápices esparcidos por el suelo.">
			<figcaption>
				<h3>Terapia individual</h3>
				<p>En las sesiones individuales, se revisan pensamientos, emociones y patrones de comportamiento que te generan inquietud o angustia.
				</p>
				<p>
					Conversaremos acerca de ti, de tus miedos e inseguridades y construiremos juntxs herramientas que te sean útiles para afrontarlos.
				</p>
				<p>
					Las consultas duran 50 minutos y la frecuencia puede ser semanal o quincenal.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-therapy-couples">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-151.svg'); ?>" alt="Una imagen tomada de frente, donde se la ve a Sol sentada en un almohadon en el suelo, con las piernas cruzadas escribiendo en un cuaderno.">
			<figcaption>
				<h3>Terapia de pareja</h3>
				<p>En las sesiones de pareja, trabajaremos en conjunto para mejorar la comunicación y resolver conflictos que provocan malestar cotidiano
					y perturban el desarrollo del vínculo y de cada integrante.
				</p>
				<p>
					Exploramos temas como: expectativas, roles, intimidad, malentendidos, discusiones etc.
				</p>
				<p>
					El objetivo es mejorar la calidad de la relación y fomentar un ambiente de apoyo mutuo y satisfacción emocional.
				</p>
				<p>
					Las consultas duran 60 minutos y la frecuencia puede ser semanal o quincenal.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-fees">
		<span>Tarifas</span>
		<p class="fee-box">Sesiones Individuales 85€</p>
		<p class="fee-box">Sesiones de pareja 100€</p>
		<p>El seguro médico estatal (gesetzliche Krankenkasse) no cubre la terapia,
			sin embargo ofrezco algunas plazas a tarifas reducidas para estudiantes o personas con ingresos variables.</p>
	</section>
	<section class="section-about-me" id="sobre-mi-ancla">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-18.svg'); ?>" alt="Una imagen tomada de costado, donde se la ve a Sol sentada en un almohadon en el suelo, con las piernas cruzadas escribiendo en un cuaderno.">
			<figcaption>
				<h4>SOBRE MI</h4>
				<span>Hola Soy Sol, psicóloga y amante de la lectura.</span>
				<p>
					Comprometida con la salud mental, llevo más de 8 años brindando psicoterapia y más de 2 participando y organizando círculos de lectura.
				</p>
				<p>
					Me formé en el área de género y diversidades, la atención de parejas y familias y en primeros auxilios psicológicos.
					También tiene influencia en mi haber emigrado a Alemania.
				</p>
				<p>
					Gracias a este recorrido, continúo ejerciendo como psicoterapeuta individual y de pareja y enriqueciendo el proceso terapéutico
					con el análisis de textos junto a mis consultantes.
				</p>
				<p>
					Al mismo tiempo coordinar espacios grupales y de lectura se volvió una valiosa herramienta de autocuidado y conocimiento interpersonal.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-contact contact-section" id="contacto">
		<figure>
			<figcaption>
				<h5>Escríbeme!</h5>
			</figcaption>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/Sol-12.svg'); ?>" alt="Una imagen tomada con un ángulo lateral alto, donde se ve un recorte de Sol sentada en una mesa con la computadora portátil, escribiendo.">
			<p>
				Me encantaría acompañarte.
				Completa el formulario indicando el motivo de tu consulta.
			</p>
		</figure>


		<?php
		echo do_shortcode('[custom_simple_form]');

		?>
	</section>

	<section class="home-blog">
	<h2>Blog</h2>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	</section>
</main>

<?php

get_sidebar();
get_footer();
