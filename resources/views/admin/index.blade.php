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
        <div class="container-fluid bg-body mt-3 rounded-3 vh-auto p-4">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                    <div class="card text-bg-dark border-2 border-secondary" style="width: 22rem;">
                        <img src="{{asset('images/student.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">Gestion de estudiantes</h5>
                          <hr class="border-white">
                          <a href="{{route('admin.estudiantes')}}" class="btn btn-secondary w-100">Entrar</a>
                        </div>
                      </div>


                </div>
                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                    <div class="card text-bg-dark border-secondary border-2" style="width: 22rem;">
                        <img src="{{asset('images/teacher.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body rounded-2 m-0 border-2">
                            <h5 class="card-title text-center">Gestion de profesores</h5>
                            <hr class="border-white">
                            <a href="{{route('admin.profesores')}}" class="btn btn-secondary w-100">Entrar</a>
                        </div>
                      </div>

                </div>
            </div>
        </div>
        
    </body>
    </html>
    
@endsection