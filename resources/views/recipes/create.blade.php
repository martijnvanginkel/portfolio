@extends('main')

@section('content')


  <div id="container">
  	<form id="form_new_recipe" method="POST" action=" {{ route('recipes.store') }} ">
  		@if (count($errors) > 0)
  			    <div class="alert alert-danger">
  			        <ul>
  			            @foreach ($errors->all() as $error)
  			                <li>{{ $error }}</li>
  			            @endforeach
  			        </ul>
  			    </div>
  		@endif
      <h1>Recepten toevoegen</h1>
      <label for="">Afbeelding</label>
      <textarea type="file" name="image" accept="image/*">
  		<label name="title">Titel</label>
  		<textarea type="text" name="titel" id="titel">
  		<label name="ingredienten" for="">Ingrediënten:</label>
  		<textarea type="text" name="ingredienten" id="ingredienten" value="">
  		<label name="bereidingswijze">Bereidingswijze:</label>
  		<textarea type="text" name="bereidingswijze" id="bereidingswijze">
  		<label name="voedingswaarde" for="">Voedingswaarde:</label>
  		<textarea name="voedingswaarde" id="voedingswaarde">
  		<label name="allergieen" for="">Allergieën:</label>
  		<input type="checkbox" name="allergy_1" value="">
  		<input type="checkbox" name="allergy_2" value="">
  		<input type="checkbox" name="allergy_3" value="">
  		<input type="checkbox" name="allergy_4" value="">
  		<input type="checkbox" name="allergy_5" value="">
  		<input type="checkbox" name="allergy_6" value="">
  		<label name="dieet" for="">Dieet:</label>

  		<input type="checkbox" name="vegan" value="">
  		<input type="checkbox" name="vegetarian" value="">
  		<input type="submit" value="Voeg recept toe">

  		<input type="hidden" name="_token" value="{{ Session::token() }}">
  	</form>
  </div>
@endsection
