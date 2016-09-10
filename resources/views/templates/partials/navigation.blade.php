  @if (Auth::check())  
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="{{ route('home') }}">Oppskrifter</a>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="{{ route('recipe.new') }}">Legg til</a></li>
                  <li><a href="#">Handleliste</a></li>
              </ul>
              <form class="navbar-form navbar-left" role="search" action="">
                  <div class="form-group">
                      <input type="text" name="query" class="form-control" placeholder="Finn oppskrifter">
                  </div>
                  <button type="submit" class="btn btn-default">Søk</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">{{ Auth::user()->getNameOrUsername() }}</a></li>
                      <li><a href="#">Oppdater profil</a></li>
                      <li><a href="{{ route('auth.signout') }}">Logg ut</a></li>
              </ul>
          </div>
      </div>
  </nav>
  @endif