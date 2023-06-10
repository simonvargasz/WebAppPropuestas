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
              <div class="card bg-dark m-2 border-2 rounded-4" data-bs-theme="dark">
                <div class="card-header border-2 rounded-4 shadow-sm m-0">
                  <div class="row p-0 m-0">
                    <div class="col-4 p-0 m-0">
                      <h5 class="p-0 m-0">
                        <a href="{{ url()->previous() }}" class="btn border border-2 border-info bg-dark rounded-5 shadow-sm m-0 p-0 ps-2 pe-2"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                      </h5>
                    </div>
                    <div class="col-4 p-0 m-0">
                      <h3 class="text-white text-center">Foro de Propuestas</h3>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group rounded-3 pt-2 m-4" data-bs-theme="dark">

                  @foreach($propuestas as $num=>$propuesta)
                    <li class="list-group-item d-flex border-2 shadow-sm justify-content-between rounded-4 mb-3 align-items-start">
                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6 ">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold text-white">Propuesta de {{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}</div>
                              <span class="d-none d-md-block d-lg-block">Creada: {{date('d/m/Y', strtotime($propuesta->fecha))}} </span>
                            </div>
                          </div>
                          <div class="col-12 col-md-4 col-lg-4 p-0 pb-3 mt-2 mt-lg-0 d-flex">
                              <div class="d-grid gap-2 col-12 d-md-flex justify-content-md-center justify-content-lg-center"><a href="{{ route('revision.show',['id' => $propuesta->id,'fecha' => $propuesta->fecha]) }}" class="btn btn-secondary border border-2 border-info rounded-5 shadow-sm" tabindex="-1" role="button" aria-disabled="true"><i class="fa-solid fa-magnifying-glass"></i> Revisar</a></div>
                          </div>
                          <div class="col-2 justify-content-end d-flex flex-wrap d-none d-lg-block d-md-block text-end p-0 border-start border-2 ps-2">
                            @if($propuesta->estado == 0)
                              <span class="badge border border-2 bg-dark border-warning rounded-pill shadow-sm h-50"><i class="fa-solid fa-exclamation-circle text-warning"></i> Revisar</span>
                            @elseif($propuesta->estado > 0)
                              <span class="badge border bg-dark border-2 border-ready rounded-pill shadow-sm mb-2"><i class="fa-solid fa-circle-check text-ready"></i> Revisada</span>
                              @if($propuesta->estado== 1)
                                <span class="badge border bg-dark border-2  rounded-pill shadow-sm m-0"><i class="fa-solid fa-circle-exclamation text-warning"></i> Modificar</span>
                              @elseif($propuesta->estado== 2)
                                <span class="badge border bg-dark border-2 rounded-pill shadow-sm m-0" ><i class="fa-solid fa-circle-xmark text-danger"></i> Rechazada</span>
                              @elseif($propuesta->estado== 3)
                                <span class="badge border bg-dark border-2 rounded-pill shadow-sm m-0"><i class="fa-solid fa-circle-check text-success"></i> Aprobada</span>
                              @endif
                            @endif

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