<!-- SERIE CUENTOS DE TERROR PARA FRANCO -->
<hr class="col-8">

<div id="libros-section-title" class="jumbotron p-1 jumbotron-fluid ls-3 text-center">
	<small class="bg-dark h3 p-1 text-light rounded">Serie</small>
	<span class="h2 text-warning">
	   <i class="cinzel">Cuentos de Terror para Franco</i>
	</span>
</div>

<hr class="col-2">

<section id="libros-list" class="card-columns p-1">
	<!-- I -->
		@include('partials/libros/terror-franco/terror-I')
	<!-- V -->
		@include('partials/libros/terror-franco/terror-V')
	<!-- II -->
		@include('partials/libros/terror-franco/terror-II')
	<!-- VI -->
		@include('partials/libros/terror-franco/terror-VI')
	<!-- III -->
		@include('partials/libros/terror-franco/terror-III')
	<!-- VII -->
		@include('partials/libros/terror-franco/terror-VII')
	<!-- IV -->
		@include('partials/libros/terror-franco/terror-IV')
	<!-- VIII -->
		@include('partials/libros/terror-franco/terror-VIII')
</section>

<!-- SERIE: CUANDO ERA CHICO -->
<hr class="col-8">

	<div id="libros-section-title" class="jumbotron p-1 jumbotron-fluid ls-3 text-center">
		<small class="bg-dark h3 p-1 text-light rounded">Serie</small>
		<span class="h2 text-warning">
		   <i class="cinzel">Cuando era chico</i>
		</span>
	</div>

		<hr class="col-2">

			<section id="libros-list" class="card-columns p-1">
				<!-- I -->
					@include('partials/libros/cuando-chico/cuando-chico-I')
				<!-- II -->
					@include('partials/libros/cuando-chico/cuando-chico-II')
			</section>

<!-- NOVELAS: GÉNERO FANTÁSTICO Y DE CIENCIA FICCIÓN -->
<hr class="col-8">

	<div id="libros-section-title" class="jumbotron p-1 jumbotron-fluid ls-3 text-center">
		<small class="bg-dark h3 p-1 text-light rounded">Novela</small>
		<span class="h2 text-warning">
		   <i class="cinzel">Género Fantástico y de Ciencia Ficción</i>
		</span>
	</div>

		<hr class="col-2">

			<section id="libros-list" class="card-columns p-1">
				<!-- MENSAJES DEL MAS ALLÁ -->
					@include('partials/libros/mensajes-alla')
				<!-- LOBISÓN -->
					@include('partials/libros/lobison')
				<!-- CRISPÍN SOTO -->
					@include('partials/libros/crispin')
				<!-- CRIATURAS CELESTES -->
					@include('partials/libros/criaturas-celestes')
			</section>

<!-- NOVELAS: GÉNERO NEGRO -->
<hr class="col-8">

	<div id="libros-section-title" class="jumbotron p-1 jumbotron-fluid ls-3 text-center">
		<small class="bg-dark h3 p-1 text-light rounded">Novela</small>
		<span class="h2 text-warning">
		   <i class="cinzel">Género Negro</i>
		</span>
	</div>

		<hr class="col-2">

			<section id="libros-list" class="card-columns p-1">
				<!-- LA CACERÍA -->
				@include('partials/libros/caceria')
				<!-- LOS OJOS DE MARIEL -->
				@include('partials/libros/mariel')
			</section>

<!-- OTROS: ANTOLOGÍA -->
<hr class="col-8">

	<div id="libros-section-title" class="jumbotron p-1 jumbotron-fluid ls-3 text-center">
		<small class="bg-dark h3 p-1 text-light rounded">Otros</small>
		<span class="h2 text-warning">
		   <i class="cinzel">Antología</i>
		</span>
	</div>

		<hr class="col-2">

			<section id="libros-list" class="card-columns p-1">
				<!-- FANTASMA DE LA PANADERÍA -->
				@include('partials/libros/fantasma-panaderia')
			</section>
