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
                        <h3 class="text-white text-center">Crea Tu Propuesta</h3>
                      </div>
                    </div>
                  </div>
                  <form class="m-3" action="{{ route('propuestas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">
                      <select class="form-select mb-2" id="floatingSelect" aria-label="Floating label select example" name="estudiante_rut">
                        <option selected>Selecciona...</option>
                        @foreach($estudiantes as $estudiante)
                        <option value="{{$estudiante->rut}}">{{$estudiante->nombre}} {{$estudiante->apellido}}</option>
                        @endforeach
                      </select>
                      <div class="mb-2">
                        <label for="formFile" class="form-label">Sube el archivo PDF con la propuesta</label>
                        <input class="form-control" type="file" id="formFile" name="documento">
                      </div>
                      <label for="floatingSelect">Busca tu nombre y apellido</label>
                      <button type="submit" class="btn btn-doug rounded-4 border border-2 border-doug-light mt-2"><i class="fa-solid fa-file-arrow-up"></i> Subir Propuesta</button>
                    </div>
                  </form>



                </div>
              </div>
          </div>
      </div>
      
  </body>
    </html>
@endsection