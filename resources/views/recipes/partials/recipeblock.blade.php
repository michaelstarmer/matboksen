      <div class="col-sm-6 col-md-4">
        <a href="{{ route('recipes.show', ['recipe' => $recipe->title]) }}">
            <div class="thumbnail">
              <img src="{{ route('recipe.image', ['filename' => $recipe->title . '.jpg']) }}" alt="...">
              <div class="caption">
                <h3>{{ $recipe->title }}</h3>
                <p>{{ $recipe->description }}</p>
              </div>
            </div>
        </a>
      </div>