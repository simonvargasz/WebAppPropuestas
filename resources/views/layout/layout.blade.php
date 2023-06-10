<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>
    <script src="https://kit.fontawesome.com/79ebf5f069.js" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

  </head>
  <body class="body bg-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 p-0">


            {{--Small Nav--}}
            <nav class="navbar d-lg-none" data-bs-theme="dark" style="
            background: linear-gradient(90deg, rgba(31,64,94,1) 0%, rgba(76,34,91,1) 100%);">
              <div class="container-fluid">
                <a class="navbar-brand rounded-3 me-2" href="{{route('home.index')}}">
                  <i class="fa-solid fa-house"></i>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                      <a class="nav-link @if(Route::current()->getName()=='propuestas.forum') active @endif"href="{{route('propuestas.forum')}}"><i class="fa-regular fa-comment"></i> Propuestas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('propuestas.create') }}"><i class="fa-regular fa-square-plus"></i> Crear</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Gestion
                      </a>
                      <ul class="dropdown-menu" data-bs-theme="dark">
                        <li><a class="dropdown-item" href="{{route('admin.index')}}">Administrador</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('profesor.forum') }}">Profesor</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>






            {{--Large Nav--}}
            <nav class="navbar navbar-expand-lg rounded-3 mt-4 p-0 " data-bs-theme="dark">
              <div class="container-fluid p-0">
                <div class="container-fluid w-auto d-none d-lg-block bg-primary me-2 rounded-3 shadow-sm p-2">
                  <div class="row">
                    <div class="col-12 d-flex align justify-content-center p-0 pe-3 ps-3">
                      <a class="nav-item rounded-3 shadow-sm text-center @if(Route::current()->getName()=='home.index') text-white @endif " href="{{route('home.index')}}">
                        <i class="fa-solid fa-house fa-lg @if(Route::current()->getName()=='home.index') fa-beat @endif"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="collapse navbar-collapse p-0">
                  <div class="col-10">
                    <div class="container-fluid rounded-3 shadow-sm" style="background: rgb(31,64,94);
                    background: linear-gradient(90deg, rgba(31,64,94,1) 0%, #4c225b 100%);">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link @if(Route::current()->getName()=='profesor.forum' or Route::current()->getName()=='revision.show') active @endif" href="{{route('profesor.forum')}}"><i class="fa-regular fa-comments @if(Route::current()->getName()=='revision.show' or Route::current()->getName()=='profesor.forum') fa-beat @endif" href="{{route('propuestas.forum')}} "></i> Foro de Propuestas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link @if(Route::current()->getName()=='propuestas.create') active @endif" href="{{ route('propuestas.create') }}"><i class="fa-regular fa-square-plus @if(Route::current()->getName()=='propuestas.create') fa-beat @endif" href="{{ route('propuestas.create') }} "></i> Crear</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                    <div class="col-2">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown text-center rounded-3 ms-2 w-100 shadow-sm dropend" style="background: rgb(76, 34, 91);">
                          <a class="nav-link dropdown-toggle @if(Route::current()->getName()=='admin.profesores' or Route::current()->getName()=='admin.estudiantes' or Route::current()->getName()=='admin.forum' ) active @endif " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear @if(Route::current()->getName()=='admin.estudiantes' or Route::current()->getName()=='admin.profesores' or Route::current()->getName()=='admin.forum' ) fa-spin @endif "></i> Admin
                          </a>
                          <ul class="dropdown-menu shadow-sm rounded-3 ms-2 border-0" data-bs-theme="dark">
                            <li><h3><a class="dropdown-header fs-5 d">Administrador</a></h3></li>
                            <li><a class="dropdown-item" href="{{route('admin.profesores')}}">Gestionar profesores</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.estudiantes') }}">Gestionar alumnos</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.forum') }}">Editar estado de propuestas</a></li>
                          </ul>
                          
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </nav>
          </div>
        </div>

        {{-- Content --}}
        <div class="row">
          <div class="col-lg-8 offset-lg-2 p-0">
        
        
              @yield('content')
        
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>