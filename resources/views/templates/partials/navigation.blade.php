  @if (Auth::check())  
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">MatBoksen</a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Navigasjon</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
        </div>

        <div class="collapse navbar-collapse" id="main-navigation">
           <ul class="nav navbar-nav">
              <li><a href="{{ route('recipe.new') }}">Legg til</a></li>
              <li><a href="{{ route('shoplist.index') }}">Hanwedleliste</a></li>
              <li role="separator" class="divider"></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">{{ Auth::user()->getNameOrUsername() }}</a></li>
            <li><a href="#">Oppdater profil</a></li>
            <li><a href="{{ route('auth.signout') }}">Logg ut</a></li>
          </ul>


              <form class="navbar-form navbar-left" role="search" action="">
                  <div class="form-group">
                      <input type="text" name="query" class="form-control" placeholder="Finn oppskrifter">
                  </div>
                  <button type="submit" class="btn btn-default">Søk</button>
              </form>

          </div>
      </div>
  </nav>
  @endif