@extends('main')

@section('content')

	<header>
		<a href="/home"><img id="logo" src={{asset('img/Sjef_logo.png')}} alt="De Sjef Logo"></a>
		<h1>Welkom op je profiel, <em>{{ $user->name }}</em>! </h1>
		<a href=" {{ route('users.edit', $user->id) }} ">Hier kan je je instellingen wijzigen</a>

	</header>

    <table class="table table-bordered">

    <h1>Dit zijn jouw dieeten:</h1>

      @foreach ($user->diets as $diet)
        <tr>
          <td>{{ $diet->titel }}</td>
          <td>

    <form method="POST" action="{{ route('destroy-diet', $diet->id) }}">
      <input type="submit" value="Delete">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
     {{ method_field('DELETE') }}
    </form>﻿ 

          </td>
        </tr>
      @endforeach
  </table>

    <form id="form_new_recipe" method="POST" action=" {{ route('users.store') }} " enctype="multipart/form-data">

      @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
      @endif

    <label name="diets" for="diets">Dieeten:</label>
    <select class="form-control" name="diet_id">

      @foreach($diets as $diet)
     
          <option value="{{ $diet->id }}"> {{ $diet->titel }} </option>
          
      @endforeach

   </select>

      {{-- <input type="hidden" name="diet_id" value="{{ $diet->id }}"> --}}
      <input type="submit" value="Voeg dieet toe">

      <input type="hidden" name="_token" value="{{ Session::token() }}">

    </form>



  <section id="favorieten">
    <h1>Favorieten</h1>
    <div class="slide-favorieten">


    @foreach($user->recipes as $recipe)
      <div>
        <a href="{{ route('favorites', $recipe->id) }}"><img src="{{ asset('img/' . $recipe->image) }}"></a>
      </div>
    @endforeach

    </div>
  </section>
  <section id="geschiedenis">
    <h1>Geschiedenis</h1>
    <div class="slide-favorieten">
      <div>
        <a href="{{ route('history') }}"><img src="http://placehold.it/400x200"></a>
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
      <div>
        <img src="http://placehold.it/400x200">
      </div>
    </div>
  </section>

@endsection
