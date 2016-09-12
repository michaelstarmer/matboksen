@extends('templates.default')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="{{ route('recipe.image', ['filename' => $recipe->title . '.jpg']) }}">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="description-box">
          <div class="title-border"></div>
          <h2 class="cursive-heading">{{ $recipe->title }}</h2 class="cursive-heading">
          <div class="title-border"></div>
          <p>{{ $recipe->description }}</p>
        </div>
      </div>
    </div>

    <div class="row" id="bottom">
      <div class="col-lg-5">
        <div class="ingredients-box">
          <div class="ingredients-content">
          <div class="title-border"></div>
          <h2 class="cursive-heading">Ingredienser</h2 class="cursive-heading">
          <div class="title-border"></div>
            <ul>
            @foreach ($ingrForRecipe as $ingr)
                <li>{{ $ingr->ingredient }}</li>
            @endforeach
            </ul>
            <div class="title-border"></div>
            <form action="{{ url('recipe/' .$recipe->id) }}" method="post">
                <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Lag handleliste</button>
                {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="process-box">
          <div class="title-border"></div>
          <h2 class="cursive-heading">Fremgangsmåte</h2 class="cursive-heading">
          <div class="title-border"></div>
          @foreach ($stepsForRecipe as $step)
            <p>{{ $step->process }}</p>
          @endforeach
        </div>
      </div>
    </div>
  </div>

{{--   <tr>
    <td class="table-text">
        <div>{{ $recipe->name }}</div>
    </td>


    <td>
        <form action="{{ url('recipe/'.$recipe->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Slett
            </button>
        </form>
    </td>
</tr> --}}

@stop