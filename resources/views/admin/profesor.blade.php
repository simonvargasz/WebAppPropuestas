@extends('layout/layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
      <div class="container bg-body mt-3 rounded-3 vh-auto shadow p-0">
          <div class="row">
              <div class="col-12">
                <div class="card bg-dark border-2 m-2 rounded-4" data-bs-theme="dark">
                  <div class="card-header border-2 rounded-4 shadow-sm m-0">
                    <div class="row p-0 m-0">
                      <div class="col-4 p-0 m-0">
                        <h5 class="p-0 m-0">
                          <a href="{{ url()->previous() }}" class="btn border border-2 border-info bg-dark rounded-5 shadow-sm m-0 p-0 ps-2 pe-2"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                        </h5>
                      </div>
                      <div class="col-4 p-0 m-0">
                        <h3 class="text-white text-center">Modificacion de profesor: {{$profesor->nombre}} {{$profesor->apellido}}</h3>
                      </div>
                    </div>
                  </div>
                  <form class="m-3" action="{{ route('admin.updateProfesor',['rut' => $profesor->rut]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating">
                        <input class="form-control" id="name" placeholder="John" value="{{$profesor->nombre}}" name="nombre">
                        <label for="name">Nombre</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input class="form-control" id="lastname" placeholder="Doe" value="{{$profesor->apellido}}" name="apellido">
                        <label for="lastname">Apellido</label>
                    </div>
                    <button type="submit" class="btn btn-doug rounded-4 border border-2 border-doug-light mt-3"><i class="fa-solid fa-square-arrow-up-right"></i> Modificar</button>

                  </form>
                </div>
              </div>
          </div>
      </div>
      
  </body>
    </html>
@endsection