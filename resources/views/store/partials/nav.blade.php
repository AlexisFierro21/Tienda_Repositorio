<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{route('home')}}">PDF Express</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" aria-expanded="true">
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" size="100">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-default">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-2x"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Iniciar Sesion</a></li>
            <!--<li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
       <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart fa-2x"></i><span class="badge">{{$cantidad}}</span></a></li>
        <li><a href="#" class="tex-navbar">¿Eres empresa?</a></li>
       <li><a href="#" class="btn btn-default tex-navbar">Bajar Programa</a></li>
      </ul>
    </div>
  </div>
</nav>