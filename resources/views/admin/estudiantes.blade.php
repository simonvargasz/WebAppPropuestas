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
                      <h3 class="text-white text-center">Lista De Estudiantes</h3>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group rounded-3 pt-2 m-4" data-bs-theme="dark">
                  @foreach($estudiantes as $estudiante)
                    <li class="list-group-item d-flex border-2 shadow-sm pe-0 justify-content-between rounded-4 mb-3 align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold text-white">{{$estudiante->nombre}} {{$estudiante->apellido}}</div>
                        <span>E-mail: {{$estudiante->email}} | Rut: {{$estudiante->rut}} </span>
                      </div>
                      <div class="col-2 d-flex justify-content-center border-start border-2 pb-2">
                        <a href="{{route('admin.verEstudiante',['rut' => $estudiante->rut])}}" class="btn btn-secondary border border-2 border-info rounded-5 shadow-sm" tabindex="-1" role="button" aria-disabled="true">Modificar <i class="fa-solid fa-arrow-right"></i></a>
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
