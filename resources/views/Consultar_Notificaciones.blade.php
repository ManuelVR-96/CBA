@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div><a>Solicitudes para revisión de {{auth()->user()->especialidad_->Nombre}} recibidas</a></div><br>
                <form method="POST">
                @csrf
                 

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Acción</th>
                            <th scope="col">Fecha de solicitud</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notificaciones as $item)
                            <tr>
                                <td><a href = "{{route('notificacion.show', $item->id)}}">Ver más</a></td>
                                <td><a href = "{{route('notificacion.show', $item->id)}}">{{$item->created_at}}</a></td>
                                <td><a href = "{{route('miembros.show', $item->miembro_->id)}}">{{$item->miembro_->nombres}}</a></td>
                                <td><a href = "{{route('miembros.show', $item->miembro_->id)}}">{{$item->miembro_->apellidos}}</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$notificaciones->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
