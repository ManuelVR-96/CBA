@extends('layouts.app')

@section('content')
    @auth
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div>
                    <a href="{{ route('miembros.index') }}" class="btn btn-primary btn-sm">Agregar nueva Valoración</a>
                </div><br>
                <form method="POST" action="{{route('lista_valoraciones')}}">
                @csrf
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <form class="form-inline my-2 my-lg-0">
                    <a class="navbar-brand">{{ __('Buscar por') }}</a>                                    
                        <select name="tipo_busqueda" class="form-control @error('tipo_busqueda') is-invalid @enderror" value="{{ old('tipo_busqueda') }}" name="tipo_busqueda" type="text">>
                            <option value=" ">--Seleccione--</option>                                   
                            <option value="Nombre paciente">Nombre paciente</option>
                            <option value="Especialidad">Especialidad</option>
                            <option value="Encargado">Encargado</option>  
                        </select>          
                        <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </form>
                </nav>    
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Encargado</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Acción</th>                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($valoraciones as $item)
                            @if($item->miembro_->estado == "Activo")
                            <tr>
                                <td><a href = "{{route('valoraciones.show', $item)}}">{{$item->id}}</a></td>
                                <td><a href = "{{route('miembros.show', $item->miembro_)}}">{{$item->miembro_->nombres}}</a></td>
                                <td><a href = "{{route('usuarios.show', $item->encargado_)}}">{{$item->encargado_->nombres}}</a></td>
                                <td>{{ $item->especialidad_->Nombre}}</td>
                                <td>{{ $item->descripción}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td><a href="{{route('valoraciones.edit', $item)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    {{$valoraciones->links()}}
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection
