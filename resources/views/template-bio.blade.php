{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container-fluid">
  	<div class="row belle">
  		<div id="bio-header" class="col-sm-12 text-center bg-dark p-3">
  			<img height="170" class="rounded-circle" src="https://scontent.fcnq2-1.fna.fbcdn.net/v/t1.0-9/10550996_10204396826944089_6888955505019437684_n.jpg?_nc_cat=0&oh=e3142185dc8e498d523fcecc3a2365d3&oe=5C3646AA" alt="">
  			<h2 class="cinzel pt-3">Biografía</h2>
  			<span class="barlow ls-5">
  				<h1 class="m-0 pt-2 pb-1 display-4 text-white">Hugo Daniel Mitoire</h1>
  			</span>
  		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<span>	
				<p>					
					El autor soporta estoicamente la sumatoria del paso del tiempo, dos separaciones,  tres hijos y periódicos ataques de insomnio y claustrofobia. Casi nada.
				</p>
				<p>
					Vio la luz en Margarita Belén, Chaco, un Febrero carnestolendo. Su existencia como lactante se desarrolló en Cancha Larga. Vivió hasta que empezó a ser joven, en la polvorienta Aldea de La Leonesa. Tal vez fue esta su etapa más fructífera, ya que se desempeño en múltiples profesiones y oficios, y experimentó cosas que contribuyeron a estigmatizar su alma. Cuando apenas contaba cuatro años, tuvo un episodio de fiebre muy alta que le duró toda una noche, algunos familiares y vecinos vaticinaron que quedaría medio tonto. A los 6 años fue operado de peritonitis apendicular y casi murió. Siendo un párvulo aún de 7 años, intentó ejercer como lustrabotas, profesión que le fue impedida por su padre. A los ocho años (durante sus más felices vacaciones de verano) se desempeñó como ordeñador de vacas en el campo  de su primo Sergio, en el paraje Cancha Larga, complementando esa función como asistente de aquel en el reparto del lácteo líquido, tarea que llevaban a cabo en sulky. Escuchaba a los Rolling Stones. En la panadería de su abuelo aprendió con éste, la magia de hacer el pan. Cumplió temporariamente funciones como, canillita, vendedor de tomates y pimientos, repartidor de soda y ayudante de su padre como agricultor en las plantaciones de tabaco, ejerció el arte de cosechero de algodón, y circunstancialmente se desempeñó como carpidor. Fue conminado a concurrir a catequesis y a tomar la comunión, hechos a los que se resistió tenazmente, hasta que su abuelita materna lo amenazó con no hacerle más los ricos budines de pan, amenaza esta que logró disuadirlo. Con excelentes notas obtuvo el título de Dactilógrafo Profesional, en la célebre Academia de Dactilografía “Tejerina Hnas”. Entrando ya en la adolescencia, asumió tareas y funciones más complejas.
				</p>
			</span>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<picture class="row text-center">
				<span class="col-12">
					<small class="d-block text-muted">[ el autor con sus hermanas ]</small>
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/Los-3.jpg" alt="">	
				</span>
				<span class="col-12">
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/Bandera.jpg" alt="">
					<small class="d-block text-muted">[ llevando la bandera nacional ]</small>
				</span>
			</picture>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<picture class="row text-center">
				<span class="col-12">
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/Empezando-la-secundaria.jpg" alt="">
					<small class="d-block text-muted">[ luciendo elegante en su juventud ]</small>
				</span>
			</picture>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<span>
				<p>
					Fue  tractorista, y supo manejar el arado mancera y la rastra de dientes. Tuvo buen desempeño en la doma de ovejas y terneros. Era un experimentado arriero. Creía en la luz mala, los fantasmas y aparecidos.
				</p>
				<p>					
					Intentó incursionar en la música y el canto, y fue un fracaso. Para superar este trance se hizo  dis-jockey. Aficionado al metegol y el ajedrez, no logró brillar en el deporte. Siguiendo los pasos de su tío Aldo y su primo, acompañó a estos en un curso nocturno de motores diesel y a explosión, donde adquirió el conocimiento necesario para desentrañar los misterios de la carburación, la chispa y el cigüeñal. Sus pasatiempos preferidos por ese entonces: andar en su bicicleta y pescar. Solía filosofar con otros espíritus vagabundos sentados en algún murito de alguna esquina. Le gustaba imaginar. Disfrutó de abuelos, padres, tíos, padrinos, primos, hermanos, y compañeros de la escuela. Tuvo amigos, y conoció el amor y la melancolía  una noche de Carnaval. Tenía un amigo del alma, su primo Sergio. 
				</p>
				<p>
					Era feliz.
				</p>
			</span>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<span>
				<p>
					Con mucho pesar y tristeza debió abandonar esta existencia a los dieciocho años, para marchar  a Corrientes donde estudió y se graduó a los veinticuatro, de Medico Cirujano. Padeció el Servicio Militar y otros amores. Se especializó en Cirugía General y en Medicina del Trabajo. Escribió algunos artículos sobre cirugía digestiva y videolaparoscópica. Colaboró en trabajos científicos en el área de genética y biología molecular. Fue Cirujano de Urgencia.
				</p>
				<p>
					Ejerció la docencia universitaria durante dieciséis años, en las Cátedras de Bioquímica y Cirugía, en la Facultad de Medicina de la Universidad Nacional del Nordeste, alcanzando el cargo de Profesor Adjunto.
				</p>
				<p>
					Conoció la tragedia con la muerte de su primo.
				</p>
				<p>
					A los 36 años, se radicó en Oberá, Misiones, donde vive actualmente y sigue escuchando a los Rolling Stones.
				</p>
			</span>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<picture class="row text-center">
				<span class="col-12">
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/DSC01884.jpg" alt="">
				</span>
				<span class="m-auto col-12">
					<small class="d-block text-muted">[ fotos con sus hermanos ]</small>
				</span>
				<span class="col-12">
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/Con-hermanas-y-hermanito.jpg" alt="">
				</span>
			</picture>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<picture class="row text-center">
				<span class="col-12">
					<img class="img-fluid img-thumbnail" style="max-height: 370px;" src="http://hugomitoire.com/wp-content/uploads/2018/08/Terminando-la-secundaria.jpg" alt="">
					<small class="d-block text-muted">
						[ finalizando la secundaria ]
					</small>
				</span>
			</picture>
		</div>
		<div id="bio-section" class="col-sm-12 col-lg-6">
			<span>
				<p>
					A la fecha y contando desde abandonó el vientre materno, ha padecido veintiocho mudanzas, lo que en la escala de la condición humana equivalen a nueve incendios.
				</p>
				<p>
					Seguramente cuando complete otros dieciocho años en esta ciudad y en virtud de una inescrutable directiva, la abandonará con rumbo incierto.
				</p>
				<p>
					Luego de veintidós años dedicados a la medicina y la cirugía, en 2004, abandonó la profesión y la especialidad como se abandona a una novia a quien no se desea más, deslumbrado y obsesionado tal vez, por dos amantes que conoció una en la infancia y otra más tarde: la lectura y la escritura.
				</p>
				<p>
					En 2010 también abandonó la docencia universitaria para dedicarse únicamente y de una vez por todas a la literatura. Ha escrito veintidos libros e insiste y patalea con que los Rolling Stones vuelvan por quinta vez a la Argentina.
				</p>
				<p>
					Y así la va llevando.
				</p>	
			</span>
		</div>
  	</div>
  </div>
    @include('partials.content-page')
  @endwhile
@endsection
