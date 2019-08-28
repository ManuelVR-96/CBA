@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div><a href="/programas/create" class="btn btn-primary btn-sm">Agregar nuevo programa</a></div><br>
                <form method="POST" action="{{route('lista_programas')}}">
                @csrf        
                <div class="input-group mb-3">
                
                  <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">                  
                </div>

                <div class="table-responsive">                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Encargado</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Agenda</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td><a href = "{{route('programas.show', $item)}}">{{ $item->nombre}}</a></td>
                                <td>{{ $item->encargado}}</td>
                                <td>{{ $item->descripcion}}</td>
                                <td>{{ $item->agenda}}</td>
                                <td>                                    
                                    <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                </td>                             
                            </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                    {{$users->links()}}                                                        
                </div>                
            </div>        
        </div>
    </div>
@endsection