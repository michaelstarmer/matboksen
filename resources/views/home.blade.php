@extends('templates.default')

@section('content')

    <div class="row">

      @if (!$recipes->count())
        <p>Ingen oppskrifter er lagt inn.</p>
      @else
        @foreach ($recipes as $recipe)
          @include('recipes/partials/recipeblock')
        @endforeach
      @endif
    </div>
@stop