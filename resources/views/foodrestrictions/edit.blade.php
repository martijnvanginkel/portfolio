@extends('main')

@section('content')

<div id="container">
<form id="forms" method="POST" action="{{ route('foodrestrictions.update', $foodrestriction->id) }}">
      
          <h1 id="head">Dieet of allergie wijzigen</h1>

    <label name="title">Titel:</label>
    

    <textarea placeholder="Typ hier de titel van dit gerecht" type="text" id="titel" name="titel" rows="1" style="resize:none;">{{ $foodrestriction->title }}</textarea>

  <button id="save-button" type="submit">Opslaan</button>
  
    
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    {{ method_field('PUT') }}


<form method="POST" action="{{ route('foodrestrictions.destroy', $foodrestriction->id) }}">
    <input type="submit" value="Delete">
    <input type="hidden" name="_token" value="{{ Session::token() }}">
   {{ method_field('DELETE') }}

   <a href=" {{ route('foodrestrictions.index') }} ">Terug</a>
</form>﻿
</form>﻿

</div>





@endsection