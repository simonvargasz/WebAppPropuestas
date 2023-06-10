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
    <div class="container bg-body mt-3 rounded-3 vh-auto p-0">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card w-100 m-2 border-2 rounded-4 shadow-sm" data-bs-theme="dark">
                    <div class="card-header border-2 rounded-0 shadow-sm m-0">
                      <div class="row p-0 m-0">
                        <div class="col-6 p-0 m-0">
                          <h5 class="p-0 m-0">
                            <a href="{{ url()->previous() }}" class="btn border border-2 border-info bg-dark rounded-5 shadow-sm m-0 p-0 ps-2 pe-2"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                          </h5>
                        </div>
                        <div class="col-6 text-end p-0 m-0">
                          <h5 class="p-0 m-0">
                            @if($propuestas->estado == 0)
                              <span class="badge border border-2 border-waiting-light rounded-pill shadow-sm m-0"><i class="fa-solid fa-clock text-waiting-light"></i> En espera</span>
                            @elseif($propuestas->estado == 1)
                              <span class="badge border border-2 border-warning rounded-pill shadow-sm m-0"><i class="fa-solid fa-circle-exclamation text-warning"></i> Modificar propuesta</span>
                            @elseif($propuestas->estado == 2)
                              <span class="badge border border-2 border-danger rounded-pill shadow-sm m-0" ><i class="fa-solid fa-circle-xmark text-danger"></i> Rechazada</span>
                            @elseif($propuestas->estado == 3)
                              <span class="badge border border-2 border-success rounded-pill shadow-sm m-0"><i class="fa-solid fa-circle-check text-success"></i> Aprobada</span>
                            @endif
                          </h5>
                        </div>
                      </div>
                      <h5>
                      </h5>

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Autor: {{$propuestas->estudiante->nombre}} {{$propuestas->estudiante->apellido}}</h5>
                      <p class="card-text">Rut: {{$propuestas->estudiante->rut}}</p>
                      <a href="{{$propuestas->documento}}" class="btn btn-doug border-doug-light border-2 border-doug shadow-sm rounded-4"><i class="fa-solid fa-file-arrow-down"></i> PDF</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="border border-white border-2 shadow-sm rounded-5 m-2">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="card w-100 m-2 rounded-4 shadow-sm border-2" data-bs-theme="dark">
                    <div class="card-header rounded-0 border-2 shadow-sm text-start">
                      <h5>
                        Seccion de comentarios
                      </h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group">
                        @foreach ($profesorPropuestas as $num=>$profesorPropuesta)
                          <li class="list-group-item d-flex justify-content-between align-items-start border-2 border-dark-light rounded-5 mb-3 bg-dark shadow-sm">
                            <div class="container">
                              <div class="row">
                                <div class="col-10">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold"><i class="fa-solid fa-circle-user fa-sm text-info"></i> {{ $profesorPropuesta->profesor->nombre }} {{ $profesorPropuesta->profesor->apellido }}:</div>
                                      <div class="row">
                                      <div class="col-12">
                                        <p class="m-0 p-0 fs-5">{{ $profesorPropuesta->comentario }}</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="text-end">{{$profesorPropuesta->fecha}}</p>
                                </div>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>


@endsection