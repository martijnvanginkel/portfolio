@extends('main')

@section('content')
<section id="container_recept_fav">
	<img id="image_recipe" src="{{ asset('img/' . $recipe->image) }}" alt="" height="250px" width="900px"/>
	<a href=" {{ route('recipes.index', $recipe->id) }} ">
		<button class="button back">
			<img src={{asset('img/icons/back.png')}} alt="Terug">
		</button>
	</a>
	<h1>{{ $recipe->titel }}</h1>
	<ul id="ingredients">
		<h3>Ingrediënten</h3>
		<!-- vanuit PHP -->
		<li>{{ $recipe->ingredienten }}</li>
	</ul>
	<div id="steps">
		<h3>Bereidingswijze</h3>
		<!-- vanuit PHP -->
		<p>{{ $recipe->bereidingswijze }}</p>
	</div>
	<div id="nutritional_values">
		<h3>Voedingswaarden</h3>
		<!-- vanuit PHP -->
		<p>{{ $recipe->voedingswaarde }}</p>
	</div>
</section>

@endsection
