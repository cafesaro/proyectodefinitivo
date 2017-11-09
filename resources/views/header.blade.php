       <header class="navbar navbar-dark bg-dark" class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="20" id="cabeza">
      <div class="container d-flex justify-content-between" >
        <!--callapse-->
<!-- Authentication Links -->
                      
        <button type="button" data-toggle="collapse" data-target="#demo" class="boton1">Sobre nosotros</button>
          @guest
                            <button><a href="{{ route('login') }}">Inicia sesion</a></button>
                            <button><a href="{{ route('register') }}">Registrate</a></button>
                        @else
                            <div class="dropdown pull-right">
                                <button class="dropdown-toggle" role="button" data-toggle="dropdown"  aria-expanded="false" class="aa">
                                    {{ Auth::user()->name }} <span class="caret"></span></button>
                                

                                <div class="dropdown-menu" role="menu">
                                    <div>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            cierra sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endguest  
          </a>
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
          </form>
         
          <span class="navbar-toggler-icon"></span>
    <div id="demo" class="collapse" > 
      <div class="container" >
          <div class="col-sm-8 py-4">
            <h4 class="text-white" > Sobre nosotros</h4>
            <p class="text-muted">Somos una empresa que busca representar arte en franelas, pinturas con acuarelas, creyón o pintura al frío. Franelas más que todo femeninas que transmitan un mensaje al mundo</p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <!--Redes sociales -->  
              <li><a href="" class="text-white">Siguenos en Twitter</a></li>
              <li><a href="https: www.facebook.com/maflovedesign/" class="text-white">Like en Facebook</a></li>
              <li><a href="https: www.instagram.com/maflove.design/" class="text-white">Siguenos en Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
            
      </div>
    </header>

        