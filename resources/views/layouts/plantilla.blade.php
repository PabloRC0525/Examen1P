<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js'])
        <title>@yield('titulo')</title>

        
    </head>
    <body >
        <div class="row">
            <div class="col-4">
              <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                  <a class="nav-link" href="/">Inicio</a>
                  <a class="nav-link" href="/vista1">Vista 1</a>
                  <a class="nav-link" href="/vista2">Vista 2</a>
                  <a class="nav-link" href="/vista3">Vista 3</a>
                  
                </nav>
              </nav>
            </div>
            <div class="col-8">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                <div id="/">
                  <h4>Inicio</h4>
                  <p>@yield('contenido')</p>
                </div>
                <div id="/vista1">
                  <h4>Vista 1</h4>
                  <p>@yield('contenidos')</p>
                </div>
                <div id="/vista2">
                  <h4>Vista 2</h4>
                  <p>@yield('contenidoss')</p>
                </div>
                <div id="/vista3">
                    <h4>Vista 3</h4>
                    <p>@yield('contenidosss')</p>
                  </div>
                
              </div>
            </div>
          </div>
    
    </body>
</html>
