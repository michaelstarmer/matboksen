@extends('templates.default')

@section('content')

    <div class="row">

      @if (!$recipes->count())
        <p>Ingen oppskrifter er lagt inn.</p>
      @else
        <div class="recipe-wrapper">
            @foreach ($recipes as $recipe)
              @include('recipes/partials/recipeblock')
            @endforeach
        </div>
      @endif
    </div>
@stop