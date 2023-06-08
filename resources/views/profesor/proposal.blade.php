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
                    <div class="card-header border-2 rounded-4 shadow-sm m-0">
                      <div class="row p-0 m-0">
                        <div class="col-6 p-0 m-0">
                          <h5 class="p-0 m-0">
                            <a href="{{ route('profesor.forum') }}" class="btn border border-2 border-info bg-dark rounded-5 shadow-sm m-0 p-0 ps-2 pe-2"><i class="fa-solid fa-arrow-left"></i> Volver</a>
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
                      <form action="{{route('admin.updatePropuesta',['id' => $propuestas->id])}}" method="POST" class="mt-3">
                        @csrf
                        @method('PUT')
                        <h5>Estado</h5>
                        <hr class="border border-2 rounded-5 border-white">
                        <div class="container border border-2 bg-dark rounded-4 p-1 shadow-sm">
                          <div class="row">
                            <div class="col-2 p-0 ps-3">
                              <div class="form-check form-switch rounded-4 m-0 me-3">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="3" id="flexRadioDefault1" @if($propuestas->estado == 3) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Aprobada
                                </label>
                              </div>
                            </div>
                            <div class="col-2 p-0">
                              <div class="form-check form-switch m-0 me-3">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="2" id="flexRadioDefault1" @if($propuestas->estado == 2) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Rechazada
                                </label>
                              </div>
                            </div>
                            <div class="col-3 p-0">
                              <div class="form-check form-switch m-0">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="1" id="flexRadioDefault1" @if($propuestas->estado == 1) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Necesita Modificaciones
                                </label>
                              </div>
                            </div>
                            <div class="col-5 d-flex justify-content-end p-0 pe-3">
                              <button type="submit" class="btn btn border border-2 border-info rounded-pill p-0 m-0 pe-1 ps-1"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
                            </div>
                          </div>
                        </div>

                      </form>
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
                    <div class="card-header rounded-4 border-2 shadow-sm text-start">
                      <h5>
                        Seccion de comentarios
                      </h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group mb-3">
                        @foreach ($profesorPropuestas as $profesorPropuesta)
                          <li class="list-group-item d-flex justify-content-between align-items-start border-2 border-dark-light rounded-5 mb-3 bg-dark shadow-sm">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold"><i class="fa-solid fa-circle-user fa-sm text-info"></i> {{ $profesorPropuesta->profesor->nombre }} {{ $profesorPropuesta->profesor->apellido }}:</div>
                              <div class="row">
                                <div class="col-12">
                                  <p class="m-0 p-0 fs-5">{{ $profesorPropuesta->comentario }}</p>
                                </div>
                              </div>
                            </div>
                            <form class="text" action="{{ route('profesorPropuesta.destroy', [$profesorPropuesta->comentario]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn rounded-pill"><i class="fa-regular fa-circle-xmark fa-lg text-danger"></i></button>
                            </form>
                          </li>
                        @endforeach
                      </ul>
                      <h5 class="card-title">Crear comentario</h5>
                      <hr class=" border border-white border-2 rounded-5">
                      <form class=" p-0" action="{{ route('revision.create') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="hidden" name="propuesta_id" value="{{ $propuestas->id }}">
                            <label class="input-group-text shadow-sm rounded-start-4 border-2" for="sector1">Nombre Profesor</label>
                            <select class="form-select shadow-sm rounded-end-4 border-2" id="selector1" name="profesor_rut">
                              <option selected>Escoje...</option>
                            @foreach ($listProfesores as $profesor)
                              <option value="{{ $profesor->rut }}">{{ $profesor->nombre }} {{ $profesor->apellido }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control border-2 rounded-4 shadow-sm" placeholder="Leave a comment here" name="comentario" id="textArea1"></textarea>
                            <label for="textaArea1">Comentarios</label>
                        </div>
                        <hr class=" border border-white border-2 rounded-5">
                        <div class="col-12 d-flex justify-content-start">
                            <button type="submit" class="btn btn-doug rounded-4 border border-2 border-doug-light shadow-sm"><i class="fa-solid fa-paper-plane"></i> Comentar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>


@endsection