@extends('main')

@section('content')


	<div id="diet-screen" class="panel-body">

		<form id="forms" method="POST" action=" {{ route('diets.store') }} " enctype="multipart/form-data">

  		@if (count($errors) > 0)
  			    <div class="alert alert-danger">
  			        <ul>
  			            @foreach ($errors->all() as $error)
  			                <li>{{ $error }}</li>
  			            @endforeach
  			        </ul>
  			    </div>
  		@endif

      <h1>Dieet toevoegen</h1>
  

    <textarea placeholder="Typ hier de naam van het dieet" rows="1" type="text" name="titel" id="diet"></textarea>


  	
 		<button id="add-diet-button" type="submit" class="btn btn-primary">
                                    Voeg toe
                                </button>

  		<input type="hidden" name="_token" value="{{ Session::token() }}">


  	<a href="{{ route('users.index') }}">Terug</a>


		<h1 id="head">Toegevoegde diëten</h1>

			<table class="table table-bordered" >
				<tr>
					<th>#</th>
					<th>Dieet</th>
				</tr>

			@foreach ($diets as $diet)
				<tr>
					<td>{{ $diet->id }}</td>
					<td>{{ $diet->titel }}</td>
					<td><a href="{{ route('diets.edit', $diet->id) }}">Wijzig</a></td>
				</tr>
			@endforeach
	</table>


  	</form>
	</div>
@endsection