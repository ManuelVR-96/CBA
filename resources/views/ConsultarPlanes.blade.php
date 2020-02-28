@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div><a href="/estrategico/create" class="btn btn-primary btn-sm">Agregar nuevo plan estratégico</a></div><br>
                @csrf  

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Agregado por</th>
                            <th scope="col">Agregado el</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($planes as $item)
                            <tr>
                                
                                <td><a href = "{{route('estrategico.edit', $item)}}">{{ $item->titulo}}</a></td>
                                <td><a href = "{{route('usuarios.show', $item->creador_)}}">{{$item->creador_-> nombres}} {{$item->creador_-> apellidos}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="{{route('estrategico.edit', $item->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$planes->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
