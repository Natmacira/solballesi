<?php

/**
 * The template for displaying the blog.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sol_Ballesi
 */

get_header();
?>


<main>
	<section class="section-title">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/sol-14.png'); ?>" alt="Una foto de torso de Sol, se la ve sonriente con los brazos cruzados. Viste una camisa cuadriculada en tonos anaranjados y un pantalón negro.">
			<figcaption>
				<h1>Sol Ballesi</h1>
				<p>Psicóloga hispanohablante
					en Berlín
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-about-work">
		<h2>Cómo trabajo</h2>
		<p>En mi consulta un aspecto clave es que las personas se sientan cómodas y seguras desde el primer momento porque conozco de
			primera mano los nervios y ansiedades que conlleva iniciar terapia.
			<br>
			En los primeros encuentros me parece importante establecer los objetivos terapéuticos que serán la brújula que guíe el proceso.
			<br>
			Vamos a utilizar ,además de la palabra, diferentes recursos como por ejemplo libros, textos, películas, ilustraciones, guías, etc
			<br>
			Las sesiones pueden realizarse virtual o presencialmente en Berlín.
		</p>
	</section>
	<section class="section-therapy-individual">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/sol-14.png'); ?>" alt="Una imagen tomada desde arriba, donde se ve las piernas de Sol, en una posición de estar sentada en el piso. A su alrededor se ven unos libros y lápices esparcidos por el suelo.">
			<figcaption>
				<h3>Terapia individual</h3>
				<p>En las sesiones individuales , se revisan pensamientos, emociones y patrones de comportamiento que te generan inquietud o angustia.
					<br>
					Conversaremos acerca de ti,de tus miedos e inseguridades y construiremos juntxs herramientas que te sean útiles para afrontarlos.
					<br>
					Las consultas duran 50 minutos y la frecuencia puede ser semanal o quincenal.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-therapy-couples">
		<figure>
			<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/sol-151.png'); ?>" alt="Una imagen tomada de frente, donde se la ve a Sol sentada en un almohadon en el suelo, con las piernas cruzadas escribiendo en un cuaderno.">
			<figcaption>
				<h3>Terapia de pareja</h3>
				<p>En las sesiones de pareja, trabajaremos en conjunto para mejorar la comunicación y resolver conflictos que provocan malestar cotidiano
					y perturban el desarrollo del vínculo y de cada integrante.
					<br>
					Exploramos temas como: expectativas, roles, intimidad, malentendidos, discusiones etc.
					<br>
					El objetivo es mejorar la calidad de la relación y fomentar un ambiente de apoyo mutuo y satisfacción emocional.
					<br>
					Las consultas duran 60 minutos y la frecuencia puede ser semanal o quincenal.
				</p>
			</figcaption>
		</figure>
	</section>
	<section class="section-fees">
		<span>Tarifas</span>
		<p>Sesiones Individuales 85€</p>
		<p>Sesiones de pareja 100€</p>
		<p>El seguro médico estatal (gesetzliche Krankenkasse) no cubre la terapia,
			sin embargo ofrezco algunas plazas a tarifas reducidas para estudiantes o personas con ingresos variables.</p>
	</section>

</main>

<?php

get_sidebar();
get_footer();
