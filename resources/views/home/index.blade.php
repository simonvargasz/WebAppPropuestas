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
                        <ul class="list-group m-2" data-bs-theme="dark">
                            @foreach ($propuestas as $num=>$propuesta)
                            <li class="list-group-item bg-light shadow-sm border-2 rounded-4 mb-2 mt-2">
                                <div class="row">
                                    <div class="col-4">
                                        {{$num+1}} | {{date('d/m/Y', strtotime($propuesta->fecha))}} | Creada por {{$propuesta->estudiante->nombre}} {{$propuesta->estudiante->apellido}}
                                    </div>
                                    <div class="col-8 d-flex justify-content-end">
                                            @if($num == 0)
                                            <p class="m-0 text-white border border-1 rounded-4 pe-2 ps-2 border-warning fw-bold shadow-sm">
                                                Ultima propuesta 
                                            </p>
                                            @endif   


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