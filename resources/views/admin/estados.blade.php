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
                        <a href="{{ route('admin.index') }}" class="btn border border-2 border-info bg-dark rounded-5 shadow-sm m-0 p-0 ps-2 pe-2"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                      </h5>
                    </div>
                    <div class="col-4 p-0 m-0">
                      <h3 class="text-white text-center">Actualizar Estados</h3>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group rounded-3 pt-2 m-4" data-bs-theme="dark">
                  @foreach($propuestas as $propuesta)
                    <li class="list-group-item border-0 shadow-sm p-0 rounded-4 mb-3 align-items-start">
                      <form action="{{route('admin.updatePropuesta',['id' => $propuesta->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container border border-2 rounded-4 p-1 shadow-sm">
                          <div class="row">
                            <div class="col-12">
                                <h6 class="ms-1 text-white mt-1">ID: {{$propuesta->id}} | Estudiante: {{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}</h6>    
                            </div>

                            <div class="col-2 p-0 ps-3">
                              <div class="form-check form-switch rounded-4 m-0 me-3">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="3" id="flexRadioDefault1" @if($propuesta->estado == 3) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Aprobada
                                </label>
                              </div>
                            </div>
                            <div class="col-2 p-0">
                              <div class="form-check form-switch m-0 me-3">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="2" id="flexRadioDefault1" @if($propuesta->estado == 2) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Rechazada
                                </label>
                              </div>
                            </div>
                            <div class="col-3 p-0">
                              <div class="form-check form-switch m-0">
                                <input class="form-check-input" type="radio" role="switch" name="estado" value="1" id="flexRadioDefault1" @if($propuesta->estado == 1) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Necesita Modificaciones
                                </label>
                              </div>
                            </div>
                            <div class="col-5 d-flex justify-content-end p-0 pe-3">
                              <button type="submit" class="btn btn border border-2 border-info rounded-pill p-0 m-0 pe-1 ps-1 mb-1"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
                            </div>
                          </div>
                        </div>
                      </form>

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