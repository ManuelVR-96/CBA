@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">              
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
                            @foreach ($programas as $item)
                            <tr>
                                <th>{{ $item->nombre}}</th>
                                <td>{{ $item->encargado}}</td>
                                <td>{{ $item->descripcion}}</td>
                                <td>{{ $item->agenda}}</td>
                                <td>                                    
                                    <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>

                                    <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>                             
                            </tr>
                            @endforeach
                        </tbody>                        
                    </table>                                                        
                </div>                
            </div>        
        </div>
    </div>
@endsection