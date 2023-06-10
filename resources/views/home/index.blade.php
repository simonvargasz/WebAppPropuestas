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
        <div class="container bg-body mt-3 rounded-3 vh-auto">
            <div class="row justify-content-center">
                <div class="col-6 m-5 d-flex justify-content-center">
                    <a href="{{route('propuestas.create')}}" class="btn btn-doug border border-2 border-doug-light btn-lg w-100 h-100 shadow-sm fw-bold rounded-4">
                        <p class="m-0"><i class="fa-solid fa-plus"></i></p>
                        <p class="m-0">Crear propuesta</p>

                    </a>
                </div>
                <div class="row">
                    <div class="col-12 vh-auto rounded bg-dark shadow-sm mb-3 p-0">
                        <h3 class="text-white text-center mt-3">Propuestas recientes</h3>
                        <hr class="border-white border border-2 rounded-5 w-50 offset-3 shadow-sm">
                        <ul class="list-group list-group rounded-3 pt-2 m-4" data-bs-theme="dark">
                            @foreach($propuestas as $num=>$propuesta)
                              <li class="list-group-item d-flex border-2 shadow-sm justify-content-between rounded-4 mb-3 align-items-start">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="ms-2 me-auto">
                                              <div class="fw-bold text-white">Propuesta de {{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}</div>
                                              <span class="d-none d-md-block d-lg-block">Creada: {{date('d/m/Y', strtotime($propuesta->fecha))}} </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 p-0 mt-2 mt-lg-0 d-flex">
                                            <div class="d-grid gap-2 col-12 d-md-flex justify-content-md-end justify-content-lg-center"><a href="{{ route('propuestas.show',['id' => $propuesta->id,'fecha' => $propuesta->fecha]) }}" class="btn btn-secondary border border-2 border-info rounded-5 shadow-sm pb-2" tabindex="-1" role="button" aria-disabled="true">Ver propuesta <i class="fa-solid fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="col-lg-2 ps-2 border-start border-2 d-none d-lg-block">
                                            <div class="text-end">
                                              @if($propuesta->estado == 0)
                                                <span class="badge border border-2 border-waiting-light rounded-pill shadow-sm"><i class="fa-solid fa-clock text-waiting-light"></i> Esperando</span>
                                              @elseif($propuesta->estado == 1)
                                              <span class="badge border border-2 border-warning rounded-pill shadow-sm"><i class="fa-solid fa-circle-exclamation text-warning"></i> Modificar</span>
                                              @elseif($propuesta->estado == 2)
                                                <span class="badge border border-2 border-danger rounded-pill shadow-sm" ><i class="fa-solid fa-circle-xmark text-danger"></i> Rechazada</span>
                                              @elseif($propuesta->estado == 3)
                                              <span class="badge border border-2 border-success rounded-pill shadow-sm"><i class="fa-solid fa-circle-check text-success"></i> Aprobada</span>
                                              @endif
                                            </div>
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
        
    </body>
    </html>
    
@endsection