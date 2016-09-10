@extends('templates.default')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <img src="http://placehold.it/250x250">
      </div>
      <div class="col-lg-8">
        <div class="description-box">
          <div class="title-border"></div>
          <h2 class="cursive-heading">{{ $recipe->title }}</h2 class="cursive-heading">
          <div class="title-border"></div>
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
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="process-box">
          <div class="title-border"></div>
          <h2 class="cursive-heading">Fremgangsmåte</h2 class="cursive-heading">
          <div class="title-border"></div>
        </div>
      </div>
    </div>
  </div>

  <tr>
    <!-- Task Name -->
    <td class="table-text">
        <div>{{ $recipe->name }}</div>
    </td>

    <!-- Delete Button -->
    <td>
        <form action="{{ url('recipe/'.$recipe->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
    </td>
</tr>

@stop